<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakultasController extends Controller
{
    // Data fakultas
    private $fakultasData = [
        ['kode' => 'FRI', 'nama_fakultas' => 'Fakultas Rekayasa Industri'],
        ['kode' => 'FTE', 'nama_fakultas' => 'Fakultas Teknik Elektro'],
        ['kode' => 'FIF', 'nama_fakultas' => 'Fakultas Informatika'],
        ['kode' => 'FEB', 'nama_fakultas' => 'Fakultas Ekonomi dan Bisnis'],
        ['kode' => 'FIK', 'nama_fakultas' => 'Fakultas Industri Kreatif'],
        ['kode' => 'FIT', 'nama_fakultas' => 'Fakultas Ilmu Terapan']
    ];

    // Tampilan web
    public function index()
    {
        return view('fakultas.index', [
            'fakultasData' => $this->fakultasData
        ]);
    }

    // API endpoint
    public function apiIndex()
    {
        return response()->json($this->fakultasData);
    }
}