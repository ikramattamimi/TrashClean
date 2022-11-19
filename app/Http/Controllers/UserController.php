<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use App\Models\RewardHistory;
use App\Models\User;
use App\Models\SuperAdmin;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validation = Validator::make($request->all(), [
            'nama' => 'required|min:3|max:50',
            'no_telepon' => 'required|max:13',
            'alamat' => 'max:100',
            'username' => ['required', 'min:8', 'max:100', 'unique:users,username'],
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            // 'password_confirmation' => 'min:6'
        ]);

        $validated = $validation->validated();

        // dd($validated);

        $query = DB::table('users')->insert([
            'id'            => Uuid::uuid4(),
            'nama'          => $validated['nama'],
            'role'          => 'supplier',
            'no_telepon'    => $validated['no_telepon'],
            'alamat'        => $validated['alamat'],
            'foto'          => 'man.jpg',
            'username'      => $validated['username'],
            'point'          => '0',
            'password'      =>  Hash::make($validated['password']),
        ]);

        if ($query) {
            $request->session()->flash('success', 'Registrasi Berhasil! Silahkan Login');
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('home.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $validated = $this->validate($request, [
            'nama' => 'required|max:255',
            'no_telepon' => 'required|max:255',
            'alamat' => 'required|max:255',
            'foto' => 'sometimes',
        ]);

        if (isset($validated['foto'])) {
            $name = $validated['foto']->getClientOriginalName();
            $validated['foto']->storeAs('uploads/profil', $name, 'public');
            $validated['foto'] = $name;
            $input = $validated;
        } else {
            $input = $request->only('nama', 'no_telepon', 'alamat');
        }

        $user->update($input);

        return redirect('/supplier/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function reward()
    {
        $rewards = Reward::all();
        $koin = Auth::user()->point;
        $history_rewards = RewardHistory::where('user_id', Auth::user()->id)->get();

        // dd($history_rewards);
        return view('supplier.reward', compact('koin', 'rewards', 'history_rewards'));
    }

    public function pilih_reward($id)
    {
        $reward = Reward::find($id);
        $koin = Auth::user()->point;
        return view('supplier.pilih-reward', compact('koin', 'reward'));
    }

    public function pilih_reward_history($id)
    {
        $reward = RewardHistory::find($id);
        $koin = Auth::user()->point;
        return view('supplier.pilih-reward-history', compact('koin', 'reward'));
    }

    public function tukar_reward(Request $request, $id)
    {
        // dd($request);
        $reward = Reward::find($request->reward_id);

        if ($reward->kategori == 'ewallet') {
            $validation = $this->validate($request, [
                'jumlah' => 'numeric|min:1000'
            ]);
        } else {
            $validation = $this->validate($request, [
                'jumlah' => 'numeric|min:1'
            ]);
        }


        if ($reward->kategori != 'ewallet') {
            $reward->update([
                'jumlah' => $reward->jumlah - $request->jumlah,
            ]);
        }

        Auth::user()->update([
            'point' => Auth::user()->point - $request->jumlah_tc,
        ]);

        if ($reward->kategori != 'ewallet') {
            $query = RewardHistory::create([
                'jumlah' => $request->jumlah,
                'status' => 'pending',
                'reward_id' => $request->reward_id,
                'user_id' => Auth::user()->id,
            ]);
        } else {
            $query = RewardHistory::create([
                'jumlah' => $request->jumlah,
                'status' => 'pending',
                'no_ewallet' => $request->no_telepon,
                'reward_id' => $request->reward_id,
                'user_id' => Auth::user()->id,
            ]);

        }

        // dd($request);


        if ($query) {
            return redirect('/supplier/reward');
        } else {
            return redirect()->back();
        }
    }
}
