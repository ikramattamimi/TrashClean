<?php

namespace App\Http\Controllers;

use App\Models\SuperAdmin;
use App\Models\Tutorial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;

class SuperAdminController extends Controller
{
    public function update_konten(Request $request, SuperAdmin $post)
    {
        $post = SuperAdmin::first();
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
        // dd($post);
        return redirect()->back();
    }

    public function store_admin(Request $request)
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
            'role'          => 'admin',
            'no_telepon'    => $validated['no_telepon'],
            'alamat'        => $validated['alamat'],
            'foto'          => 'man.jpg',
            'username'      => $validated['username'],
            'point'          => '0',
            'password'      =>  Hash::make($validated['password']),
        ]);

        if ($query) {
            $request->session()->flash('success', 'Admin berhasil ditambahkan!');
            return redirect()->back();
        }
    }

    //tutorial
    public function store_tutorial(Request $request)
    {
        // dd($request);
        $validation = Validator::make($request->all(), [
            'judul' => 'required|min:3|max:100',
            'konten' => 'required',
            'kategori' => 'required',
            'gambar' => 'sometimes',
        ]);

        $validated = $validation->validated();

        if (isset($validated['gambar'])) {
            $name = $validated['gambar']->getClientOriginalName();
            $validated['gambar']->storeAs('uploads/tutorial', $name, 'public');
            $validated['gambar'] = $name;
            $input = $validated;
        }

        // dd($validated);

        $query = DB::table('tutorial')->insert([
            'judul'     => $validated['judul'],
            'konten'    => $validated['konten'],
            'kategori'    => $validated['kategori'],
            'gambar'    => $validated['gambar'],
        ]);

        if ($query) {
            $request->session()->flash('success', 'Tutorial berhasil ditambahkan!');
            return redirect()->back();
        }
    }

    public function data_landing_page()
    {
        if (Auth::check()) {

            $post = SuperAdmin::first();

            if (Auth::user()->role != 'super_admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }
            return view('super-admin.landing-page.edit', compact('post'));
        } else {
            return redirect('/login');
        }
    }

    public function data_admin()
    {
        if (Auth::check()) {

            $admin = User::where('role', 'admin')->get();

            if (Auth::user()->role != 'super_admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }
            return view('super-admin.admin.index', compact('admin'));
        } else {
            return redirect('/login');
        }
    }

    public function edit_admin($id)
    {
        // dd($id);
        if (Auth::check()) {

            $admin = User::where('id', $id)->first();
            // dd($admin[0]->judul);

            if (Auth::user()->role != 'super_admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }
            return view('super-admin.admin.edit', compact('admin'));
        } else {
            return redirect('/login');
        }
    }

    public function update_admin(Request $request)
    {
        $user = User::find($request->id);
        
        // dd($request);

        $validated = $this->validate($request, [
            'nama' => 'required|min:3|max:50',
            'no_telepon' => 'required|max:13',
            'alamat' => 'max:100',
            'username' => ['required','min:4','max:100'],
            'password' => 'min:4|required_with:password_confirmation|same:password_confirmation',
        ]);


        $user->update($validated);

        $request->session()->flash('success', 'Update Admin Berhasil!');

        return redirect()->back();
    }

    public function data_tutorial()
    {
        if (Auth::check()) {

            $tutorial = Tutorial::all();

            if (Auth::user()->role != 'super_admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }
            return view('super-admin.tutorial.index', compact('tutorial'));
        } else {
            return redirect('/login');
        }
    }


    public function edit_tutorial($id)
    {
        // dd($id);
        if (Auth::check()) {

            $tutorial = Tutorial::where('id', $id)->first();

            // dd($tutorial[0]->judul);

            if (Auth::user()->role != 'super_admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }
            return view('super-admin.tutorial.edit', compact('tutorial'));
        } else {
            return redirect('/login');
        }
    }

    public function update_tutorial(Request $request)
    {
        $tutorial = Tutorial::find($request->id);

        $validated = $this->validate($request, [
            'judul' => 'required|min:3|max:100',
            'konten' => 'required',
            'kategori' => 'required',
            'gambar' => 'sometimes',
        ]);


        if (isset($validated['gambar'])) {
            $name = $validated['gambar']->getClientOriginalName();
            $validated['gambar']->storeAs('uploads/tutorial', $name, 'public');
            $validated['gambar'] = $name;
            $input = $validated;

        }

        // dd($validated);
        $query = $tutorial->update($validated);

        // dd($query);
        if ($query) {
            $request->session()->flash('success', 'Tutorial berhasil diedit!');
        }
        else{
            $request->session()->flash('error', 'Terdapat kesalahan pada query!');

        }
        return redirect()->back();
    }
}
