<?php

namespace App\Http\Controllers\TU\Spp;

use Barryvdh\DomPDF\Facade\Pdf;
use Carbon;
use App\Models\Siswa;
use App\Models\Categorie;
use App\Models\Pembayaran;
use App\Models\Wsiswa;
use Illuminate\Http\Request;
// use Nexmo\Laravel\Facade\Nexmo;
use App\Http\Controllers\Controller;

class SppController extends Controller
{

    public function index()
    {
        
        //$sppSiswas = Siswa::with('wsiswa','user');

        $sppSiswas = Pembayaran::all();
        return view('tatausaha.spp.siswa.index', compact('sppSiswas'));
    }
    public function show($id)
    {

        //$detailSpp = Siswa::with('wsiswa','user')->find($id);

        $detailSpp = Pembayaran::find($id);

       
       return view('tatausaha.spp.siswa.show', compact('detailSpp'));
    }
    public function edit($id)
    {
        $data = [
            'categorie'     => Categorie::find($id),
            'siswa'         => Siswa::with('kelas', 'wsiswa')->get(),
        ];

        return view('tatausaha.spp.siswa.edit', $data);
    }
    public function update(Request $request, $id)
    {
       // dd($request->all());
        $this->validate($request,[
            'wsiswa_id'             => 'required',
            'bulan'                 => 'required',
            'total_bayar'           => 'required',
            'tahun_ajaran'          => 'required',
        ]);


        $spp = Pembayaran::create([
            'wsiswa_id'                 => $request->input('wsiswa_id'),
            'categorie_id'              => $id,
            'bulan'                     => $request->input('bulan'),
            'biaya_semester'            => $request->input('biaya_semester'),
            'psb'                       => $request->input('psb'),
            'pts_genap'                 => $request->input('pts_genap'),
            'pts_ganjil'                => $request->input('pts_ganjil'),
            'spas'                      => $request->input('spas'),
            'pat'                       => $request->input('pat'),
            'raport'                    => $request->input('raport'),
            'daftar_ulang'              => $request->input('daftar_ulang'),
            'un'                        => $request->input('un'),
            'total_bayar'               => $request->input('total_bayar'),
            'tahun_ajaran'              => $request->input('tahun_ajaran'),
            'tgl_bayar'                 => $request->input('tgl_bayar'),
        ]);

        if ($spp->save()) {

            $payment = Wsiswa::with('pembayarans')->where('id', $request->get('wsiswa_id'))->get();
            foreach ($payment as $bayar) {

                // Nexmo::message()->send([
                //     'to'   => '+62'. $bayar->no_telp,
                //     'from' => 'SMP ASSALAM',
                //     'text' => '
                //         Assallamuallaikum.wr.wb kami dari SMP ASSALAM
                //         ingin memberitahukan bahwa anda telah melakukan
                //         pembayara dengan rincian sebagai berikut.
                //         '. 'PSB' . $spp->psb
                //          . 'PTS Ganjil' . $spp->pts_ganjil
                //          . 'PTS Genap' . $spp->pts_genap
                //          . 'SPAS' . $spp->spas
                //          . 'PAT' . $spp->pat
                //          . 'raport' . $spp->raport
                //          . 'Daftar Ulang' . $spp->daftar_ulang
                //          . 'SPP' . $spp->bulan .$spp->biaya_semester
                //          . 'Total Yang diharus Dibayar' . $request->get('dibayar')
                //          . 'Total Yang Dibayar' . $spp->total_bayar
                //          . 'Sisa pembayaran anda '. ($request->get('harus_dibayar') - $spp->total_bayar)

                // ]);
            }
        }


        return redirect()->back()->with('flash', 'spp berhasil di input');
    }
}