<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('admin'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'resepsionis',
            'email' => 'resepsionis@email.com',
            'password' => Hash::make('resepsionis'),
            'role' => 'resepsionis'
        ]);



        // DB::table('phone_manies')->insert([
        //     'user_id' => 1,
        //     'phone_number' => '1234567890',
        // ]);
        // DB::table('phone_manies')->insert([
        //     'user_id' => 1,
        //     'phone_number' => '1029384756',
        // ]);


        // DB::table('phone_manies')->insert([
        //     'user_id' => 2,
        //     'phone_number' => '0987654321',
        // ]);
        // DB::table('phone_manies')->insert([
        //     'user_id' => 2,
        //     'phone_number' => '6574839201',
        // ]);
    }
}
