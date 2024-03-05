<?php

namespace App\Http\Controllers\TU\Report;
use PDF;    
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function periode(Request $request)
    {
        if ($request->has('tgl_awal')) {
            $pembayaran = Pembayaran::with('categorie','wsiswa')
                                     ->whereBetween('tgl_bayar', [request('tgl_awal'), request('tgl_akhir')])
                                     ->get();
        }
        $pdf = PDF::loadView('tatausaha.spp.siswa.report', compact('pembayaran'))->setPaper('legal', 'landscape');


        return $pdf->stream('laporan_pengajuan.pdf');
    }
}
