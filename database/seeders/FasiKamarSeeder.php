<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FasiKamarSeeder extends Seeder
{

    public function run()
    {
        //kamar id 1----------------------------------
        DB::table('fasi_kamars')->insert([
            'kamar_id' => 1,
            'nama_fasilitas' => 'TV 40 Inch',
        ]);
        DB::table('fasi_kamars')->insert([
            'kamar_id' => 1,
            'nama_fasilitas' => 'Bath Tup',
        ]);
        DB::table('fasi_kamars')->insert([
            'kamar_id' => 1,
            'nama_fasilitas' => 'Coffee Maker',
        ]);

        //kamar id 2---------------------------------
        DB::table('fasi_kamars')->insert([
            'kamar_id' => 2,
            'nama_fasilitas' => 'TV 50 Inch',
        ]);
        DB::table('fasi_kamars')->insert([
            'kamar_id' => 2,
            'nama_fasilitas' => 'Air Conditioner',
        ]);
        DB::table('fasi_kamars')->insert([
            'kamar_id' => 2,
            'nama_fasilitas' => 'Bath Tup',
        ]);
    }
}
