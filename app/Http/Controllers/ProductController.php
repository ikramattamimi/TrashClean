<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class ProductController extends Controller
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
        if ($request->organik != 0) {
            DB::table('products')->insert([
                'id' => Uuid::uuid4(),
                'nama_barang' => 'Sampah Organik',
                'jumlah_barang' => $request->organik,
                'status_barang' => 'pending',
                'user_id' => Auth::user()->id,
            ]);
        }
        if ($request->anorganik != 0) {
            DB::table('products')->insert([
                'id' => Uuid::uuid4(),
                'nama_barang' => 'Sampah Anorganik',
                'jumlah_barang' => $request->anorganik,
                'status_barang' => 'pending',
                'user_id' => Auth::user()->id,
            ]);
        }
        if ($request->B3 != 0) {
            DB::table('products')->insert([
                'id' => Uuid::uuid4(),
                'nama_barang' => 'Sampah B3',
                'jumlah_barang' => $request->B3,
                'status_barang' => 'pending',
                'user_id' => Auth::user()->id,
            ]);
        }

        return redirect(Auth::user()->role . '/dashboard');
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
    public function edit($id)
    {
        //
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
        DB::select("update products set status_barang = 'valid' where user_id = '$request->user_id' and status_barang = 'pending' ");
        return redirect('/admin/dashboard');
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
}
