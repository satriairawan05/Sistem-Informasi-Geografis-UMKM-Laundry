<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaksi::create([
            'nama' => 'Maya Putri',
            'berat' => 1,
            'nama_toko' => 'Alby Laundry',
            'token' => Str::random(6),
            'toko_id' => 1,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Juan de montreal',
            'berat' => 2,
            'nama_toko' => 'Putri Laundry',
            'token' => Str::random(6),
            'toko_id' => 2,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);


    }
}
