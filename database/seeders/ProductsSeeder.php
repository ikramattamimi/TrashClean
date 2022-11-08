<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            'id' => '02b8ca90-5d89-11ed-9b6a-0242ac120jls',
            'nama_barang' => 'Sampah Organik',
            'jumlah_barang' => '3',
            'status_barang' => 'valid',
            'user_id' => '02b8ca90-5d89-11ed-9b6a-0242ac120003',
        ]);

        DB::table('products')->insert([
            'id' => '02b8ca90-5d89-11ed-9b6a-0242ac120jlq',
            'nama_barang' => 'Sampah Organik',
            'jumlah_barang' => '2',
            'status_barang' => 'valid',
            'user_id' => '02b8ca90-5d89-11ed-9b6a-0242ac120003',
        ]);

        DB::table('products')->insert([
            'id' => '02b8ca90-5d89-11ed-9b6a-0242ac120jlw',
            'nama_barang' => 'Sampah Anorganik',
            'jumlah_barang' => '5',
            'status_barang' => 'valid',
            'user_id' => '02b8ca90-5d89-11ed-9b6a-0242ac120003',
        ]);

        DB::table('products')->insert([
            'id' => '02b8ca90-5d89-11ed-9b6a-0242ac120jle',
            'nama_barang' => 'Sampah B3',
            'jumlah_barang' => '1',
            'status_barang' => 'valid',
            'user_id' => '02b8ca90-5d89-11ed-9b6a-0242ac120003',
        ]);

        DB::table('products')->insert([
            'id' => '02b8ca90-5d89-11ed-9b6a-0242ac120jlr',
            'nama_barang' => 'Sampah B3',
            'jumlah_barang' => '2',
            'status_barang' => 'valid',
            'user_id' => '02b8ca90-5d89-11ed-9b6a-0242ac120003',
        ]);

    }
}
