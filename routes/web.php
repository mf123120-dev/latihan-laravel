<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/fakultas');
});

Route::get('/fakultas', function () {
    $fakultasData = [
        ['kode' => 'FRI', 'nama_fakultas' => 'Fakultas Rekayasa Industri'],
        ['kode' => 'FTE', 'nama_fakultas' => 'Fakultas Teknik Elektro'],
        ['kode' => 'FIF', 'nama_fakultas' => 'Fakultas Informatika'],
        ['kode' => 'FEB', 'nama_fakultas' => 'Fakultas Ekonomi dan Bisnis'],
        ['kode' => 'FIK', 'nama_fakultas' => 'Fakultas Industri Kreatif'],
        ['kode' => 'FIT', 'nama_fakultas' => 'Fakultas Ilmu Terapan']
    ];
    
    return view('fakultas.index', compact('fakultasData'));
});