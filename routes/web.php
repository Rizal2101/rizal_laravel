<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
     return view('index');
});

Route::get('/about', function () {
    // return view('welcome');
    return view('about');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/profile', function () {
    $nama = 'Rizal Amri Khoirul Hakim';
    return view('profile')->with('nama', $nama);
});