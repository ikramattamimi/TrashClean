<?php

namespace App\Http\Controllers;

use App\Models\SuperAdmin;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function tentang(){
        $post = SuperAdmin::first();

        return view('tentang.index', compact('post'));
    }
    public function katalog(){
        $post = SuperAdmin::first();

        return view('katalog.index', compact('post'));
    }
    public function kontak(){
        $post = SuperAdmin::first();

        return view('kontak.index', compact('post'));
    }
    public function tutorial(){
        $post = SuperAdmin::first();

        return view('tutorial.index', compact('post'));
    }
}
