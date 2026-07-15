<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServisController extends Controller
{
    public function index()
    {
        // Mengambil data untuk ditampilkan di dropdown dan tabel
        $servis = DB::table('servis')->get();
        $pelanggan = DB::table('pelanggan')->get();
        $kendaraan = DB::table('kendaraan')->get();
        
        return view('servis.index', compact('servis', 'pelanggan', 'kendaraan'));
    }

    public function store(Request $request)
    {
        DB::table('servis')->insert([
            'pelanggan_id' => $request->pelanggan_id,
            'kendaraan_id' => $request->kendaraan_id,
            'keluhan'      => $request->keluhan,
            'status'       => 'Antrean', // Status awal
            'created_at'   => now(),
        ]);

        return redirect('/servis');
    }
}