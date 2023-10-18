<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert-mahasiswa-1', function () {
    $mahasiswa = new Mahasiswa;
    $mahasiswa->nim = '19003036';
    $mahasiswa->nama = 'Sari Citra Lestari';
    $mahasiswa->tanggal_lahir = '2001-12-31';
    $mahasiswa->ipk = 3.62;
    $mahasiswa->save();
    return "Penambahan mahasiswa berhasil";
});
