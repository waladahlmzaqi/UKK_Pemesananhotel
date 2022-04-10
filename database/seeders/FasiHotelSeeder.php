<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FasiHotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fasihotels')->insert([
            'nama_fasilitas' => 'Fitness Center',
            'keterangan' => 'Berada di lantai 1 dengan luas 50m persegi',
            'image' => 'fitnesscenter.jpg',
        ]);
        DB::table('fasihotels')->insert([
            'nama_fasilitas' => 'Restaurant',
            'keterangan' => 'Berada di lantai 2 dengan luas 50m persegi',
            'image' => 'restaurant.jpg',
        ]);
        DB::table('fasihotels')->insert([
            'nama_fasilitas' => 'Salon',
            'keterangan' => 'Berada di lantai 3 dengan luas 50m persegi',
            'image' => 'salon.jpg',
        ]);
        DB::table('fasihotels')->insert([
            'nama_fasilitas' => 'Sauna',
            'keterangan' => 'Berada di lantai 4 dengan luas 50m persegi',
            'image' => 'sauna.jpg',
        ]);
        DB::table('fasihotels')->insert([
            'nama_fasilitas' => 'Spa',
            'keterangan' => 'Berada di lantai 5 dengan luas 50m persegi',
            'image' => 'spa.jpg',
        ]);
        DB::table('fasihotels')->insert([
            'nama_fasilitas' => 'Kolam Renang',
            'keterangan' => 'Berada di lantai 6 dengan luas 50m persegi',
            'image' => 'swimmingpool.jpg',
        ]);
    }
}
