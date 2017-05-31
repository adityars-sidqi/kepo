<?php

namespace App\Http\Controllers\Site\Organisasi;

use App\Models\Transaksi;
use App\Models\Konfirmasi;
use App\Models\Seminar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LaporanPesertaController extends Controller
{
    public function index()
    {
        $seminars = DB::select('SELECT seminars.id_seminar, seminars.judul, SUM(detail_transaksis.jumlah_tiket) AS jumlah_tiket
        FROM konfirmasis JOIN transaksis ON konfirmasis.id_transaksi = transaksis.id_transaksi
        JOIN detail_transaksis ON transaksis.id_transaksi = detail_transaksis.id_transaksi
        JOIN seminars ON seminars.id_seminar = detail_transaksis.id_seminar
        WHERE seminars.id_organisasi = 1 AND konfirmasis.status = 1
        GROUP BY seminars.judul, seminars.id_seminar');


        return view('dashboardorganisasi.laporan', ['seminars' => $seminars]);
    }
}
