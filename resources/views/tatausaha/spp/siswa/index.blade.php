@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="py-3 mb-3">
                    <div class="alert alert-primary" role="alert">
            <div class="d-flex justify-content-between">
                <div class="d-flex align-item-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" widht="20" height="20">
                        <path
                            d="M8 20H3V10H0L10 0l10 10h-3v10h-5v-6H8v6z"
                            fill="#fff" />
                    </svg>
                    <h6 class="ml-2">Show Spp</h6>
                </div>
                <div class="">
                    <form action="{{route('tata-usaha.cari-report.pertanggal')}}" method="get">
                        <div class="d-flex align-item-center">
                            <div class="form-group mr-3">
                                <input type="date" name="tgl_awal" id="" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <input type="date" name="tgl_akhir" id="" class="form-control" placeholder="">
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
            </div>
        </div>
                    </div>

                    <div class="py-2">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Dibayarkan</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($sppSiswas as $sppSiswa)
                                    <tr>
                                    
                                        <td>{{$sppSiswa->wsiswa->user->name}}</td>
                                        <td>{{$sppSiswa->wsiswa->first()->siswas->first()->kelas->grade}}{{$sppSiswa->wsiswa->first()->siswas->first()->kelas->nama_kelas}}</td>
                                        <td>Rp.{{number_format($sppSiswa->total_bayar, 2)}}</td>
                                        <td>{{$sppSiswa->tgl_bayar}}</td>
                                        <td>
                                            <form action="" method="post">
                                                <a href="{{route('tata-usaha.cek-data.details.spp.siswa', $sppSiswa->id)}}" class="btn btn-outline-info btn-sm">Details</a>
                                            </form>
                                        </td>
                                    </tr>


                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection