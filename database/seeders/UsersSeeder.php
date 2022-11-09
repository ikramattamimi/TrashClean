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
            'id'            => '02b8ca90-5d89-11ed-9b6a-0242ac120001',
            'nama'          => 'Dindin Suradin',
            'role'          => 'admin',
            'no_telepon'    => '08234743409',
            'alamat'        => 'Kec. Jejeruk',
            'jenis_kelamin' => 'L',
            'foto'          => 'man.jpg',
            'username'      => 'admin',
            'password'      => Hash::make('admin'),
        ]);

        DB::table('users')->insert([
            'id'            => '02b8ca90-5d89-11ed-9b6a-0242ac120002',
            'nama'          => 'Hillah Agil M W',
            'role'          => 'buyer',
            'no_telepon'    => '08234123474',
            'alamat'        => 'Kec. Cimaung',
            'jenis_kelamin' => 'L',
            'foto'          => 'man.jpg',
            'username'      => 'buyer',
            'password'      =>  Hash::make('trashclean.id'),
        ]);

        DB::table('users')->insert([
            'id'            => '02b8ca90-5d89-11ed-9b6a-0242ac120003',
            'nama'          => 'Anton Supriyanto',
            'role'          => 'supplier',
            'no_telepon'    => '082347123497',
            'alamat'        => 'Kec. Jejeruk',
            'jenis_kelamin' => 'L',
            'foto'          => 'man.jpg',
            'username'      => 'supplier',
            'point'          => '13000',
            'password'      =>  Hash::make('trashclean.id'),
        ]);

        DB::table('users')->insert([
            'id'            => '02b8ca90-5d89-11ed-9b6a-0242ac120004',
            'nama'          => 'Nita Nuryanti',
            'role'          => 'supplier',
            'no_telepon'    => '08234693456',
            'alamat'        => 'Kec. Jejeruk',
            'jenis_kelamin' => 'P',
            'foto'          => 'woman.jpg',
            'username'      => 'supplier2',
            'password'      =>  Hash::make('trashclean.id'),
        ]);
    }
}
