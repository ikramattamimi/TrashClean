<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
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
        if (Auth::check()) {

            $user = DB::select('select * from users');

            foreach ($user as $key => $value) {
                $notification[$key] =
                    DB::select("select * from products where user_id = '$value->id' and (status_barang = 'menunggu diantarkan' or status_barang = 'menunggu dijemput')");
            }

            foreach ($user as $key => $value) {
                $notification_history[$key] =
                    DB::select("select * from products where user_id = '$value->id' and status_barang = 'valid'");
            }

            if (Auth::user()->role != 'admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }
            return view('notifikasi.index', compact('notification', 'notification_history', 'user'));
        } else {
            return redirect('/login');
        }
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
                'status_barang' => $request->status,
                'trashcoin_didapat' => '0',
                'trashcoin_sekarang' => Auth::user()->point,
                'user_id' => Auth::user()->id,
            ]);
        }
        if ($request->anorganik != 0) {
            DB::table('products')->insert([
                'id' => Uuid::uuid4(),
                'nama_barang' => 'Sampah Anorganik',
                'jumlah_barang' => $request->anorganik,
                'status_barang' => $request->status,
                'trashcoin_didapat' => '0',
                'trashcoin_sekarang' => Auth::user()->point,
                'user_id' => Auth::user()->id,
            ]);
        }
        if ($request->B3 != 0) {
            DB::table('products')->insert([
                'id' => Uuid::uuid4(),
                'nama_barang' => 'Sampah B3',
                'jumlah_barang' => $request->B3,
                'status_barang' => $request->status,
                'trashcoin_didapat' => '0',
                'trashcoin_sekarang' => Auth::user()->point,
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
        if (Auth::check()) {

            $user = User::find($id);
            $products_history = DB::select("select * from products where user_id = '$user->id' and status_barang = 'valid' order by created_at");

            if (Auth::user()->role != 'admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }

            return view('notifikasi.show-history', compact('products_history', 'user'));
        } else {
            return redirect('/login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check()) {

            $user = User::find($id);
            $products = DB::select("select * from products where user_id = '$user->id' and (status_barang = 'menunggu diantar' or status_barang = 'menunggu dijemput')");

            if (Auth::user()->role != 'admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }

            return view('notifikasi.show', compact('products', 'user'));
        } else {
            return redirect('/login');
        }
    }

    public function update(Request $request)
    {
        $validated = $this->validate($request, [
            'Sampah_Organik' => 'required_with:organik|nullable',
            'organik' => 'required_with:Sampah_Organik|nullable',
            'Sampah_Anorganik' => 'required_with:anorganik|nullable',
            'anorganik' => 'required_with:Sampah_Anorganik|nullable',
            'Sampah_B3' => 'required_with:B3|nullable',
            'B3' => 'required_with:Sampah_B3|nullable',
            'trashcoin' => 'required',
            'user_id' => 'required',
        ]);

        $products = Products::where('user_id', $validated['user_id'])->whereIn('status_barang', ['menunggu diantar','menunggu dijemput'])->get();
        $user = User::find($validated['user_id']);

        $user->update(['point' => $user->point + $validated['trashcoin']]);

        foreach ($products as $key => $product) {
            if ($product->nama_barang == 'Sampah Organik') {
                if (isset($validated['Sampah_Organik'])) {
                    $product->update([
                        'jumlah_barang' => $validated['organik'],
                        'status_barang' => $validated['Sampah_Organik'],
                        'trashcoin_didapat' => $validated['trashcoin'],
                        'trashcoin_sekarang' => $user->point,
                    ]);
                } else {
                    $product->update([
                        'status_barang' => 'not valid',
                    ]);
                }
                // dd($product);
            } else if ($product->nama_barang == 'Sampah Anorganik') {
                if (isset($validated['Sampah_Anorganik'])) {
                    $product->update([
                        'jumlah_barang' => $validated['anorganik'],
                        'status_barang' => $validated['Sampah_Anorganik'],
                        'trashcoin_didapat' => $validated['trashcoin'],
                        'trashcoin_sekarang' => $user->point,
                    ]);
                } else {
                    $product->update([
                        'status_barang' => 'not valid',
                    ]);
                }
                // dd($product);

            } else if ($product->nama_barang == 'Sampah B3') {
                if (isset($validated['Sampah_B3'])) {
                    $product->update([
                        'jumlah_barang' => $validated['B3'],
                        'status_barang' => $validated['Sampah_B3'],
                        'trashcoin_didapat' => $validated['trashcoin'],
                        'trashcoin_sekarang' => $user->point,
                    ]);
                } else {
                    $product->update([
                        'status_barang' => $validated['not valid']
                    ]);
                }
                // dd($product);

            }
        }


        $request->session()->flash('success', 'Request berhasil diupdate!');
        return redirect('/admin/notification/');
        // dd($products);
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
