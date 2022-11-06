<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function admin()
    {
        if (Auth::check()) {
            if (Auth::user()->role != 'admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }
            return view('home.admin');
        } else {
            return redirect('/login');
        }
    }

    public function supplier()
    {
        if (Auth::check()) {
            if (Auth::user()->role != 'supplier') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }
            return view('home.supplier');
        } else {
            return redirect('/login');
        }
    }

    public function buyer()
    {
        if (Auth::check()) {
            if (Auth::user()->role != 'buyer') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }
            return view('home.buyer');
        } else {
            return redirect('/login');
        }
    }
}
