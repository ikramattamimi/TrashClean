<?php

namespace App\Http\Controllers;

use App\Models\SuperAdmin;
use App\Models\Tutorial;
use App\Models\Berita;
use App\Models\Katalog;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function tentang()
    {
        $post = SuperAdmin::first();

        return view('tentang.index', compact('post'));
    }

    public function katalog()
    {
        $katalog = Katalog::all();
        return view('katalog.index', compact('katalog'));
    }

    public function kontak()
    {
        $post = SuperAdmin::first();

        return view('kontak.index', compact('post'));
    }

    public function berita()
    {
        $berita = Berita::get();

        return view('berita.index', compact('berita'));
    }

    public function tutorial()
    {
        $tutorial = Tutorial::get();

        return view('tutorial.index', compact('tutorial'));
    }

    public function tutorial_detail($id)
    {
        $tutorial = Tutorial::where('id', '=', $id)->first();

        // dd($tutorial);

        return view('tutorial.detail', compact('tutorial'));
    }
}
