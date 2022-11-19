<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\SuperAdmin;
use App\Models\Tutorial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class HomeController extends Controller
{
    public function index()
    {
        $post = SuperAdmin::first();

        return view('home.index', compact('post'));
    }

    public function super_admin()
    {
        if (Auth::check()) {

            $post = SuperAdmin::first();
            $admin = User::where('role', 'admin')->get();
            $tutorial = Tutorial::all();

            // dd($tutorial);

            if (Auth::user()->role != 'super_admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }
            return view('home.super-admin', compact('post', 'admin', 'tutorial'));
        } else {
            return redirect('/login');
        }
    }

    public function admin()
    {
        $jumlah_notif = Products::where('status_barang', 'pending')->count();
        // dd($jumlah_notif);
        if (Auth::check()) {
            if (Auth::user()->role != 'admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }
            return view('home.admin', compact('jumlah_notif'));
        } else {
            return redirect('/login');
        }
    }

    public function supplier()
    {
        $data = [
            'organik' => 0,
            'anorganik' => 0,
            'b3' => 0,
            'organik_pending' => 0,
            'anorganik_pending' => 0,
            'b3_pending' => 0,
            'koin' => Auth::user()->point,
        ];

        if (Auth::check()) {
            $data = $this->get_products($data);
            if (Auth::user()->role != 'supplier') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }
            return view('home.supplier', $data);
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

    public function get_products($data)
    {
        $organik = Products::where('user_id', Auth::user()->id)->where('nama_barang', 'Sampah Organik')->where('status_barang', 'valid')->get();
        $anorganik = Products::where('user_id', Auth::user()->id)->where('nama_barang', 'Sampah Anorganik')->where('status_barang', 'valid')->get();
        $b3 = Products::where('user_id', Auth::user()->id)->where('nama_barang', 'Sampah B3')->where('status_barang', 'valid')->get();
        $organik_pending = Products::where('user_id', Auth::user()->id)->where('nama_barang', 'Sampah Organik')->where('status_barang', 'pending')->get();
        $anorganik_pending = Products::where('user_id', Auth::user()->id)->where('nama_barang', 'Sampah Anorganik')->where('status_barang', 'pending')->get();
        $b3_pending = Products::where('user_id', Auth::user()->id)->where('nama_barang', 'Sampah B3')->where('status_barang', 'pending')->get();

        foreach ($organik as $key => $value) {
            $data['organik'] += $value->jumlah_barang;
        }

        foreach ($anorganik as $key => $value) {
            $data['anorganik'] += $value->jumlah_barang;
        }

        foreach ($b3 as $key => $value) {
            $data['b3'] += $value->jumlah_barang;
        }

        foreach ($organik_pending as $key => $value) {
            $data['organik_pending'] += $value->jumlah_barang;
        }

        foreach ($anorganik_pending as $key => $value) {
            $data['anorganik_pending'] += $value->jumlah_barang;
        }

        foreach ($b3_pending as $key => $value) {
            $data['b3_pending'] += $value->jumlah_barang;
        }

        // $data['koin'] = ($data['organik'] + $data['anorganik'] + $data['b3']) * 1000;

        return $data;
    }

    public function notification()
    {
        if (Auth::check()) {
            if (Auth::user()->role != 'admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }
            return view('notifikasi.index');
        } else {
            return redirect('/login');
        }
    }
}
