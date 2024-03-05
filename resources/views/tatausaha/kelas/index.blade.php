@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <!-- <div class="alert alert-primary" role="alert">
            <div class="d-flex justify-content-between">
                <div class="d-flex align-item-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" widht="20" height="20">
                        <path
                            d="M8 20H3V10H0L10 0l10 10h-3v10h-5v-6H8v6z"
                            fill="#fff" />
                    </svg>
                    <h6 class="ml-2">Data Kelas</h6>
                </div>
                <div class="">
                    <form action="" method="get">
                        <div class="d-flex align-item-center">
                            <div class="form-group mr-3">
                                <input type="date" name="" id="" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <input type="date" name="" id="" class="form-control" placeholder="">
                            </div>
                            <div class="ml-3">
                                <button type="submit" class="btn btn-outline-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20">
                                        <path
                                            d="M4 16H0V6h20v10h-4v4H4v-4zm2-4v6h8v-6H6zM4 0h12v5H4V0zM2 8v2h2V8H2zm4 0v2h2V8H6z"
                                            fill="#1b4b72" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> -->
        </div>
    </div>
    <div class="col-md-12">
        <div class="card border-0">
            <div class="card-body">
                <div class="mt-3 mb-3">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('tata-usaha.tampilkan-form.tambah.kelas')}}" class="btn btn-outline-primary">

                            Tambah Data Kelas
                        </a>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Kelas</th>
                            <th>Grade</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($ambilDataKelas as $dataKelas)
                        <tr class="text-muted">
                            <td>{{$dataKelas->nama_kelas}}</td>
                            <td>{{$dataKelas->grade}}</td>
                            <td>
                            
                                <form action="{{route('tata-usaha.hapus.data-kelas', $dataKelas->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('tata-usaha.tampilkan-form.edit.kelas', $dataKelas->id)}}"
                                        class="btn btn-outline-info btn-sm">Edit Data</a>

                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        Delete
                                    </button>
                                </form> 
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">Data Kelas belum tersedia</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection