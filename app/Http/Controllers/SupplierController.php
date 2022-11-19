<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use App\Models\RewardHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
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
        //
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
        /**
         * fetching the user model
         */
        $user = Auth::user();
        // dd($user);

        /**
         * Validate request/input
         **/
        $this->validate($request, [
            'nama' => 'required|max:255',
            'no_telepon' => 'required|max:255',
            'alamat' => 'required|max:255',
        ]);

        /**
         * storing the input fields name & email in variable $input
         * type array
         **/
        $input = $request->only('nama', 'no_telepon', 'alamat');
        // dd($input);


        /**
         * Accessing the update method and passing in $input array of data
         **/
        $user->update($input);

        /**
         * after everything is done return them pack to /profile/ uri
         **/
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


    // ======================================================================================================================
    // REWARD
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
    // END OF REWARD
    // ======================================================================================================================
}
