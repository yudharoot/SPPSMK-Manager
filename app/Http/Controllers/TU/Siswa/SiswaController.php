<?php

namespace App\Http\Controllers\TU\Siswa;


use App\Models\User;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Wsiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    public function index()
    {
        /**
         * ambil data siswa dan kelas
         */
        $ambilDataSiswa = Siswa::with('kelas')->get();
        /**
         * tampung kedalam view
         */
        return view('tatausaha.siswa.index', compact('ambilDataSiswa'));
    }
    public function create()
    {
       //$roles = Role::whereNotIn('name', ['TU','Wali Murid'])->get();
       /**
        * ambil data kelas
        */
        $kelas = Kelas::all();
        /**
         * tampung kedalam form tambah siswa
         */
       return view('tatausaha.siswa.create' , compact('kelas'));
    }
    public function store(Request $request)
    {
     //dd($request->all());
        /**
         * validasi data
         */

        $this->validate($request,[
            'name'                   => 'required',
            'nama_orangtua'          => 'required',
            'email'                  => 'required',
            'password'               => 'required',
            'nis'                    => 'required',
            'phone'                  => 'required',
            'alamat'                 => 'required',
            'alamat_orangtua'        => 'required',
            'tempat_lahir'           => 'required',
            'tempat_lahir_orangtua'  => 'required',
            'tgl_lahir'              => 'required',
            'tgl_lahir_orangtua'     => 'required',
            'agama'                  => 'required',
            'agama_orangtua'         => 'required',
            'jenis_kelamin'          => 'required',
            'jenis_kelamin_orangtua' => 'required',
            'status'                 => 'required',
            'no_telp'                => 'required',
            'pekerjaan_orangtua'     => 'required',

        ]);

        /**
         * buat akun siswa
         */
        ;
        if($users = User::create([
            'name'                   =>  $request->input('name'),
            'email'                  =>  $request->input('email'),
            
            'password'               =>  bcrypt($request->get('password')),
            'email_verified_at'      =>  now(),

        ]))
        // {
        //     $request->except('roles');
        //     $users->syncRoles($request->get('roles'));
        //     flash()->success('Pengguna berhasil ditambahkan');
        // }else{
        //     flash()->error('Tidak dapat menambahkan pengguna');
        // }

        /**
         * simpan data wali siswa
         */
        $perwalian = Wsiswa::create([
            'user_id'                => $users->id,
            'nama_orangtua'          => $request->input('nama_orangtua'),
            'alamat_orangtua'        => $request->input('alamat_orangtua'),
            'jenis_kelamin_orangtua' => $request->input('jenis_kelamin_orangtua'),
            'pekerjaan_orangtua'     => $request->input('pekerjaan_orangtua'),
            'no_telp'                => $request->input('no_telp'),
            'tempat_lahir_orangtua'  => $request->input('tempat_lahir_orangtua'),
            'tgl_lahir_orangtua'     => $request->input('tgl_lahir_orangtua'),
            'agama_orangtua'         => $request->input('agama_orangtua'),
        ]);
        /**
         * simpan data siswa
         *
         */
        $siswa = Siswa::create([
            'user_id'       => $users->id,
            'wsiswa_id'     => $perwalian->id,
            'kelas_id'       => $request->input('kelas_id'),
            'nis'           => $request->input('nis'),
            'phone'         => $request->input('phone'),
            'alamat'        => $request->input('alamat'),
            'tempat_lahir'  => $request->input('tempat_lahir'),
            'tgl_lahir'     => $request->input('tgl_lahir'),
            'agama'         => $request->input('agama'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'status'        => $request->input('status'),

        ]);
        return redirect()->back()->with('flash', 'data siswa berhasil ditabahkan');
    }
    public function edit($id)
    {
        /**
         * temukan data kelas
         */
        $kelas = Kelas::all();
        /**
         * temukan data siswa
         */
        $siswa = Siswa::find($id);

        /**
         * tampung data kedalam view
         */
        return view('tatausaha.siswa.edit', compact(['siswa', 'kelas']));
    }
    public function show($id)
    {
        /**
         * temukan data siswa
         */
        $siswa = Siswa::with('user','kelas','wsiswa')->find($id);
    

        return view('tatausaha.siswa.show', compact('siswa'));
    }
    public function update(Request $request, $id)
    {
    
        $siswa = Siswa::find($id);
        $siswa->user_id = $request->user_id;
        $siswa->wsiswa_id     = $request->wsiswa_id;
        $siswa->kelas_id       = $request->kelas_id;
        $siswa->nis          = $request->nis;
        $siswa->phone         = $request->phone;
        $siswa->alamat        = $request->alamat;
        $siswa->tempat_lahir  = $request->tempat_lahir;
        $siswa->tgl_lahir     = $request->tgl_lahir;
        $siswa->agama         = $request->agama;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->status       = $request->status;

        $siswa->save();
        $wsiswa = Wsiswa::where('id', $request->get('wsiswa_id'))->first();

        $wsiswa->nama_orangtua          = $request->nama_orangtua;
        $wsiswa->alamat_orangtua        = $request->alamat_orangtua;
        $wsiswa->jenis_kelamin_orangtua = $request->jenis_kelamin_orangtua;
        $wsiswa->pekerjaan_orangtua     = $request->pekerjaan_orangtua;
        $wsiswa->no_telp                = $request->no_telp;
        $wsiswa->tempat_lahir_orangtua  = $request->tempat_lahir_orangtua;
        $wsiswa->tgl_lahir_orangtua     = $request->tgl_lahir_orangtua;
        $wsiswa->agama_orangtua         = $request->agama_orangtua;

        $wsiswa->save();

        $user = User::where('id', $request->get('user_id'))->first();
        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect()->back()->with('flash', 'data siswa berhasil di perbaharui terimakasih');

    }
}
