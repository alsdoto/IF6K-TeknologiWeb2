<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::with('hobi', 'wali', 'dosen')->get();
        return view('mahasiswa.index', compact('mahasiswas'));
    }
}
