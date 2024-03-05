@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="alert alert-primary" role="alert">
            <div class="d-flex justify-content-between">
                <div class="d-flex align-item-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" widht="20" height="20">
                        <path
                            d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"
                            fill="#fff" />
                    </svg>
                    <h6 class="ml-2">Data Siswa</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card border-0">
            <div class="card-body">
                <div class="mt-3 mb-3">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('tata-usaha.tampilkan-form.tambah.siswa')}}" class="btn btn-outline-primary">

                            Tambah data siswa
                        </a>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Alamat</th>
                            <th>T.T.L</th>
                            <th>Agama</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ambilDataSiswa as $siswa)

                        <tr class="text-muted">
                            <td>
                                <a href="{{route('tatausaha.cek-data.siswa.show', $siswa->id)}}" class="btn btn-outline-info btn-sm">
                                    {{$siswa->nis}}
                                </a>
                            </td>
                            <td>{{$siswa->user->name}}</td>
                            <td>{{$siswa->kelas->nama_kelas ?? '-'}} {{$siswa->kelas->grade ?? '-'}}</td>
                            <td>{{$siswa->alamat}}</td>
                            <td>{{$siswa->tempat_lahir}},{{$siswa->tgl_lahir}}</td>
                            <td>{{$siswa->agama}}</td>
                            <td>{{$siswa->jenis_kelamin}}</td>
                            <td>
                                <a href="{{route('tata-usaha.tampilkan-form.edit.siswa', $siswa->id)}}" class="btn btn-outline-info btn-sm">Edit
                                    Data</a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection