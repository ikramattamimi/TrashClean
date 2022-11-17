<?php

namespace App\Http\Controllers;

use App\Models\SuperAdmin;
use Illuminate\Http\Request;

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

    public function tambah_admin()
    {
        return view('home.super-admin.tambah-admin');
    }
}
