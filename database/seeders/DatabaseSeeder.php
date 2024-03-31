<?php

namespace Database\Seeders;

use App\Models\Characteristic;
use App\Models\Content;
use App\Models\RecycleLocation;
use App\Models\Trash;
use App\Models\Transaction;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Characteristic::create([
            'jenis' => 'organik',
            'jenis_wadah' => 'polybag',
            'warna' => 'hitam',
            'kondisi' => 'tahan dan awet',
            'tips_daur_ulang' => 'memisahkan polybag dengan tanaman'
        ]);

        Trash::create([
            'nama' => 'polybag',
            'jenis' => 'organik',
            'deskripsi' => 'Lorem ipsum dolor sit amet',
            'gambar' => 'polybag.jpg'
        ]);

        Transaction::create([
            'trash_id' => 1,
            'kuantitas' => 40,
            'penjual' => 'Udin',
            'pembeli' => 'Rusydi'
        ]);

        RecycleLocation::create([
            'lokasi' => 'TPA km.10',
            'deskripsi' => 'depan batu 10',
            'link_gmap' => 'https://maps.app.goo.gl/ZXVGQKVSJKvvz1K39'
        ]);

        Content::create([
            'judul' => 'Cara memilah sampah yang benar',
            'konten' => 'Lorem ipsum dolor sit amet.',
            'gambar' => 'kontenex.jpg'
        ]);
    }
}
