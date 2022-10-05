<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sepatu;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $sepatu = [
            [
                'id' => '1',
                'nama_sepatu' => 'Air Yordan',
                'merk' => 'Adinda',
                'ukuran' => '42',
                'warna' => 'hitam',
                'jumlah' => '26',
            ],

            [
                'id' => '2',
                'nama_sepatu' => 'Air Tempur',
                'merk' => 'Batako',
                'ukuran' => '43',
                'warna' => 'putih',
                'jumlah' => '30',
            ],
        ];
        foreach($sepatu as $sepatu){
            Sepatu::create([
                'id' => $sepatu["id"],
                'nama_sepatu' => $sepatu["nama_sepatu"],
                'merk' => $sepatu["merk"],
                'ukuran' => $sepatu["ukuran"],
                'warna' => $sepatu["warna"],
                'jumlah' => $sepatu["jumlah"],
            ]);
        }
    }
}
