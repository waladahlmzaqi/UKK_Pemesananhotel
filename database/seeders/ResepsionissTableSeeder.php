<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ResepsionissTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resepsioniss')->insert([
            'name' => 'resepsionis',
            'email' => 'resepsionis@email.com',
            'password' => Hash::make('resepsionis'),
        ]);
    }
}
