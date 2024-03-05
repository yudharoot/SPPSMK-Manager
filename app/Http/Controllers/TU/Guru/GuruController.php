<?php

namespace App\Http\Controllers\TU\Guru;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuruController extends Controller
{
    public function index()
    {
        /**
         * ambil data guru
         */
        $guru = Guru::all();

        /**
         * tampilkan kedalam view
         */
        return view('tatausaha.guru.index', compact('guru'));

    }
    public function create()
    {
        /**
         * tampilkan form tambah guru
         */
        return view('tatausaha.guru.create');
    }
    public function store(Request $request)

    {
        //dd($request->all());
        /**
         * validasi data
         */
        $this->validate($request,[
            'nip'                 => 'required',
            'alamat'              => 'required',
            'phone'               => 'required',
            'tempat_lahir'        => 'required',
            'tgl_lahir'           => 'required',
            'agama'               => 'required',
            'jenis_kelamin'       => 'required',
            'bidang'              => 'required',
            'avatar'              => 'required|mimes:jpeg,png|max:10000',
        ]);
        /**
         * buat user baru
         */
        $users = User::create([
            'name'          =>  $request->input('name'),
            //'akses'         =>  $request->input('akses'),
            'email'         =>  $request->input('email'),
            'password'      =>  bcrypt($request->get('password')),
        ]);

        if ($request->hasFile('avatar')) {

            $upload_file = $request->file('avatar');

            $filename   = $upload_file->getClientOriginalName();

            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'avatar/';

            $upload_file->move($destinationPath, $filename);
        }

        /**
         * buat data Guru
         */
        $guru = Guru::create([
            'user_id'       => $users->id,
            'nip'           => $request->input('nip'),
            'phone'         => $request->input('phone'),
            'alamat'        => $request->input('alamat'),
            'tempat_lahir'  => $request->input('tempat_lahir'),
            'tgl_lahir'     => $request->input('tgl_lahir'),
            'agama'         => $request->input('agama'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'bidang'        => $request->input('bidang'),
            'avatar'        => $filename,

        ]);

        return redirect()->back()->with('flash', 'data guru berhasil ditabahkan');
    }
    public function edit($id)
    {
        /**
         * tampilkan data guru berdasarkan id
         */
        $guru = Guru::with('user')->find($id);

        return view('tatausaha.guru.edit', compact('guru'));
    }
    public function update(Request $request, $id)
    {
        $guru = Guru::find($id);


        User::where('id', $guru->user->id)->update(array(
            'name'      => $request->input('name'),
           // 'akses'     => $request->input('akses'),
            'password'  => bcrypt($request->input('email')),
        ));

        Guru::where('id', $id)->update(array(
            'nip'           => $request->input('nip'),
            'alamat'        => $request->input('alamat'),
            'phone'         => $request->input('phone'),
            'tempat_lahir'  => $request->input('tempat_lahir'),
            'tgl_lahir'     => $request->input('tgl_lahir'),
            'agama'         => $request->input('agama'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'bidang'        => $request->input('bidang'),

        ));

        return redirect()->back()->with('flash', 'berhasil update data staff');
    }
    public function show($id)
    {
        $staff = Guru::with('user')->find($id);

        return view('tatausaha.guru.show', compact('staff'));
    }
    public function destroy($id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return redirect()->back()->with('error', 'User tidak ditemukan');
        }
    
        if($user->delete())
        {
            $guru = Guru::where('user_id', $id)->first();
    
            if ($guru) {
                $guru->delete();
            } else {
                return redirect()->back()->with('error', 'Data guru tidak ditemukan');
            }
        } else {
            return redirect()->back()->with('error', 'Gagal menghapus data user');
        }
    
        return redirect()->back()->with('flash', 'Data guru berhasil dihapus');
    }
    
}
