<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();     //for cleaning earlier data to avoid duplicate entries
        DB::table('users')->insert([
            // 'id'            => '02b8ca90-5d89-11ed-9b6a-0242ac120001',
            'nama'          => 'admin',
            'role'          => 'admin',
            'no_telepon'    => '081322868886',
            'alamat'        => 'Anywhere ST. 12345',
            'username'      => 'admin',
            'password'      => Hash::make('admin'),
        ]);

        DB::table('users')->insert([
            // 'id'            => '02b8ca90-5d89-11ed-9b6a-0242ac120002',
            'nama'          => 'Bang Agil',
            'role'          => 'buyer',
            'no_telepon'    => '081322868886',
            'alamat'        => 'Anywhere ST. 12345',
            'username'      => 'buyer',
            'password'      =>  Hash::make('trashclean.id'),
        ]);

        DB::table('users')->insert([
            // 'id'            => '02b8ca90-5d89-11ed-9b6a-0242ac120003',
            'nama'          => 'Bang Agil',
            'role'          => 'supplier',
            'no_telepon'    => '081322868886',
            'alamat'        => 'Anywhere ST. 12345',
            'username'      => 'supplier',
            'password'      =>  Hash::make('trashclean.id'),
        ]);
    }
}
