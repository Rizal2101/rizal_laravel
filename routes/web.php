<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    // return view('welcome');
     return view('index');
});

Route::get('product', function () {
        return view('product');
});

// Route::get('/about', function () {
//     // return view('welcome');
//     return view('about');
// });

// // Route::get('/mahasiswa', function () {
// //     return view('mahasiswa');
// // });
// Route::resource('mahasiswa', MahasiswaController::class);

// Route::get('/profile', function () {
//     $nama = 'Rizal Amri Khoirul Hakim';
//     return view('profile')->with('nama', $nama);
// });