<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel pelanggan
        $pelanggan = DB::table('pelanggan')->get();
        return view('pelanggan.index', compact('pelanggan'));
    }

    public function store(Request $request)
    {
        // Menyimpan data ke database
        DB::table('pelanggan')->insert([
            'nama'    => $request->nama,
            'telepon' => $request->telepon,
            'alamat'  => $request->alamat,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Mengembalikan ke halaman awal setelah simpan
        return redirect('/pelanggan');
    }
}