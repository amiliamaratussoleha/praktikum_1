<?php

use Illuminate\Support\Facades\Route;

Route::get('/amel', function () {
    return view('welcome');
});

Route::get('/luqman_ganteng', function () {
    return view('malang');
});

Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('/keluarga', function () {
    return view('keluarga');
});

Route::get('/sekolah', function () {
    return view('sekolah');
});

Route::get('/prestasi', function () {
    return view('prestasi');
});