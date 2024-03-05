<?php

namespace App\Http\Controllers\TU\Spp;

use App\Models\Kelas;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasterSppController extends Controller
{
    public function index()
    {
        $spp = Categorie::all();
        return view('tatausaha.spp.index', compact('spp'));
    }
    public function create()
    {
        $kelas = Kelas::all();

        return view('tatausaha.spp.create', compact('kelas'));
    }

    public function store(Request $request)
    {
    
     
        $this->validate($request,[
            'kelas_id'              => 'required',
            'tahun_ajaran'          => 'required',
            'keterangan'            => 'required',
            'biaya_semester'        => 'required',
        ]);



        $lisSpp = Categorie::create(
            [
                'kelas_id'              => $request->input('kelas_id'),
                'tahun_ajaran'          => $request->input('tahun_ajaran'),
                'keterangan'            => $request->input('keterangan'),
                'psb'                   => $request->input('psb'),
                'pts_ganjil'            => $request->input('pts_ganjil'),
                'pts_genap'             => $request->input('pts_genap'),
                'spas'                  => $request->input('spas'),
                'pat'                   => $request->input('pat'),
                'raport'                => $request->input('raport'),
                'daftar_ulang'          => $request->input('daftar_ulang'),
                'un'                    => $request->input('un'),
                'biaya_semester'        => $request->input('biaya_semester'),
            ]
            );

            return redirect()->back()->with('flash', 'berhasil menambahkan data list spp');
    }
    public function edit($id)
    {
        $data = [
            'categorie'   => Categorie::find($id),
            'kelas'       => Kelas::all(),
        ];

        return view('tatausaha.spp.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $spp = Categorie::with('kelas')->find($id);

        $spp->update($request->all());

        return redirect()->back()->with('flash', 'list spp berhasil diperbarui');

    }
    public function destroy($id)
    {
        $spp = Categorie::find($id);

        $spp->destroy($id);

        return redirect()->back()->with('flash', 'List berhasil dihapus terimakasih');
    }
}
