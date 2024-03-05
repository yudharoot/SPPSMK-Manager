<?php

namespace App\Http\Controllers\TU\Kelas;
use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KelasController extends Controller
{
    public function index()
    {
       /**
        * ambil semua data kelas
        */
       $ambilDataKelas = Kelas::all();
        /**
         * tampung kedalam view
         */
       return view('tatausaha.kelas.index', compact('ambilDataKelas'));
    }
    public function create()
    {
        return view('tatausaha.kelas.create');
    }
    public function store(Request $request)
    {
        /**
         * cek data
         */
         $this->validate($request,[
            'nama_kelas'    => 'required|min:2|max:20',
            'grade'         => 'required|min:1|max:2',
        ]);
        /**
         * buat data kelas baru
         */
        $kelas = Kelas::create([
            'nama_kelas'    => $request->input('nama_kelas'),
            'grade'         => $request->input('grade'),
        ]);
         /**
          * kembali ke form tambah kelas
          */
        return redirect()->back()->with('flash','Data kelas disimpan');
    }
    public function edit($id)
    {
        /**
         * cari kelas dengan parameter id
         */
        $temukanKelas = Kelas::find($id);
        /**
         * tampung data kedalam form-edit
         */
        return view('tatausaha.kelas.edit', compact('temukanKelas'));
    }
    public function update(Request $request, $id)
    {
        /**
         * temukan kelas dengan parameter id
         */
        $kelas = Kelas::find($id);
        /**
         * update kelas
         */
        $kelas->update($request->all());
        /**
         * kembali ke form edit kelas
         */
        return redirect()->back()->with('flash', 'Data kelas di perbaharui terimakasih');
    }
    public function destroy($id)
    {
        $kelas = Kelas::destroy($id);

        return redirect()->back()->with('flash', 'Kelas berhasil dihapus terimakasih');
    }
}