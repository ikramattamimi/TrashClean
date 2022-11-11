<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        } else {
            # code...
            // $data['user'] = User::all();
            // dd($data['user']);
            return view('login.index');
        }
    }

    //=================================================================
    //CUSTOM
    //=================================================================

    // Authenticacion
    public function auth(Request $request)
    {
        // dd($request->all());
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];
        if (Auth::attempt($data)) {
            if (Auth::user()->role == 'admin') {
                return redirect('/admin/dashboard');
            }
            if (Auth::user()->role == 'supplier') {
                return redirect('/supplier/dashboard');
            }
            if (Auth::user()->role == 'buyer') {
                return redirect('/buyer/dashboard');
            }
        } else {
            $request->session()->flash('eror', 'Username atau Password Salah!');
            return redirect('/login');
        }
    }

    //Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    //Register
    public function register(){
        return view('login.register');
    }
}
