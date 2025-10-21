<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return 'Halo Laravel';
});

Route::get('/about', function () {
    // return view('welcome');
    return 'Ini adalah halaman <b>about</b>';
});

Route::get('/mahasiswa', function () {
    return 'Ini adalah halaman <b>mahasiswa </b>';
});

Route::get('/profile', function () {
    $nama = 'Rizal Amri Khoirul Hakim';
    return 'Ini adalah halaman <b>profile</b>, nama saya adalah ' . $nama;
});