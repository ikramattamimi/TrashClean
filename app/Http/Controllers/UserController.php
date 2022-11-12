<?php

namespace App\Http\Controllers;

use App\Models\SuperAdmin;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
            'username' => 'required|min:8|max:100',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        $validated = $validation->validated();

        dd($validated);
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
        // dd($request);

        /**
         * Validate request/input
         **/
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
            # code...
        }

        /**
         * storing the input fields name & email in variable $input
         * type array
         **/
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

    public function update_konten(Request $request, SuperAdmin $post)
    {
        $post = SuperAdmin::first();
        dd($post);
        $this->validate($request, [
            'judul_halaman_awal'        => 'required',
            'konten_halaman_awal'       => 'required',
            'judul_tentang'             => 'required',
            'konten_tentang'            => 'required',
            'katalog_bahan_organik'     => 'sometimes',
            'katalog_bahan_anorganik'   => 'sometimes',
            'katalog_bahan_b3'          => 'sometimes',
            'judul_berita'              => 'sometimes',
            'foto_berita'               => 'sometimes',
            'keterangan_berita'         => 'sometimes',
        ]);

        $post->update([
            'judul_halaman_awal'     => $request->judul_halaman_awal,
            'konten_halaman_awal'   => $request->konten_halaman_awal,
            'judul_tentang'   => $request->judul_tentang,
            'konten_tentang'   => $request->konten_tentang,
            'katalog_bahan_organik'   => $request->katalog_bahan_organik,
            'katalog_bahan_anorganik'   => $request->katalog_bahan_anorganik,
            'katalog_bahan_b3'   => $request->katalog_bahan_b3,
            'judul_berita'   => $request->judul_berita,
            'foto_berita'   => $request->foto_berita,
            'keterangan_berita'   => $request->keterangan_berita,
        ]);
        dd($post);
    }
}
