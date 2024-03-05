@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card border-0 shadow">
            <div class="card-body">
                <h5 class="text-muted ml-2">Data Siswa</h5>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>E-mail</th>
                            <th>Kelas</th>
                            <th>Phone</th>
                            <th>Alamat</th>
                            <th>T.T.L</th>
                            <th>Agama</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><h6>{{$siswa->nis}}</h6></td>
                            <td><h6>{{$siswa->user->name}}</h6></td>
                            <td><h6>{{$siswa->user->email}}</h6></td>
                            <td><h6>{{$siswa->kelas->nama_kelas}}</h6></td>
                            <td><h6>{{$siswa->phone}}</h6></td>
                            <td><h6>{{$siswa->alamat}}</h6></td>
                            <td><h6>{{$siswa->tempat_lahir}}, {{$siswa->tgl_lahir}}</h6></td>
                            <td><h6>{{$siswa->agama}}</h6></td>
                            <td><h6>{{$siswa->status}}</h6></td>
                        </tr>
                    </tbody>
                </table>
                <h5 class="text-muted ml-2 pt-2 mb-2">
                    Detail orang tua siswa
                </h5>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Pekerjaan</th>
                            <th>Alamat</th>
                            <th>Phone</th>
                            <th>T.T.L</th>
                            <th>Agama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><h6>{{$siswa->wsiswa->nama_orangtua}}</h6></td>
                            <td><h6>{{$siswa->wsiswa->jenis_kelamin_orangtua}}</h6></td>
                            <td><h6>{{$siswa->wsiswa->pekerjaan_orangtua}}</h6></td>
                            <td><h6>{{$siswa->wsiswa->alamat_orangtua}}</h6></td>
                            <td><h6>{{$siswa->wsiswa->no_telp}}</h6></td>
                            <td><h6>{{$siswa->wsiswa->alamat_orangtua}} , {{$siswa->wsiswa->tgl_lahir_orangtua}}</h6></td>
                            <td><h6>{{$siswa->wsiswa->agama_orangtua}}</h6></td>

                           
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection