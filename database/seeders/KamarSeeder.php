<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kamars')->insert([
            'tp_kamar' => 'Superior',
            'image' => 'superior.jpg',
            'jml_kamar' => 30,
        ]);
        DB::table('kamars')->insert([
            'tp_kamar' => 'Deluxe',
            'image' => 'deluxe.jpg',
            'jml_kamar' => 30,
        ]);

        // DB::table('postkamars')->insert([
        //     'tp_kamar' => 'Superior',
        //     'image' => 'etc',
        //     'jml_kamar' => 30,
        // ]);
        // DB::table('postkamars')->insert([
        //     'tp_kamar' => 'Deluxe',
        //     'image' => 'etc',
        //     'jml_kamar' => 30,
        // ]);
    }
}
