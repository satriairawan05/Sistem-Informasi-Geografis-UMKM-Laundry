<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Layanan::create([
            'nama_toko' => 'Alby Laundry',
            'jenis' => 'Paket Ekspress'
        ]);

        Layanan::create([
            'nama_toko' => 'Putri Laundry',
            'jenis' => 'Paket Reguler'
        ]);
    }
}
