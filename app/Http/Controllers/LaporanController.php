<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index()
    {
        // Mengambil data untuk laporan
        $servis = DB::table('servis')
            ->join('pelanggans', 'servis.pelanggan_id', '=', 'pelanggans.id')
            ->select('servis.*', 'pelanggans.nama')
            ->get();
            
        $totalPendapatan = $servis->sum('total_biaya');

        return view('laporan.index', compact('servis', 'totalPendapatan'));
    }
}