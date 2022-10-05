<?php

use App\Models\Sepatu;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "sepatus" => [
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
        ]
    ]);
});
