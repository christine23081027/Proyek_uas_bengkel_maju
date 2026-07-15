<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = DB::table('kendaraan')->get();
        return view('kendaraan.index', compact('kendaraan'));
    }

    public function store(Request $request)
    {
        DB::table('kendaraan')->insert([
            'pelanggan_id' => $request->pelanggan_id,
            'merk'         => $request->merk,
            'plat_nomor'   => $request->plat_nomor,
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        return redirect('/kendaraan');
    }
}