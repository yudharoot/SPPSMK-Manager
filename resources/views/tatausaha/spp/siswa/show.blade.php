@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <h5>Nama Siswa : {{$detailSpp->wsiswa->user->name}}, {{$detailSpp->wsiswa->first()->siswas->first()->kelas->nama_kelas}} - {{$detailSpp->wsiswa->first()->siswas->first()->kelas->grade}}</h5>

                    <h6>
                        Rincian bayaran
                    </h6>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>SPP</th>
                                <th>BULAN</th>
                                <th>PSB</th>
                                <th>PTS GENAP</th>
                                <th>PTS GANJIL</th>
                                <th>SPAS</th>
                                <th>PAT</th>
                                <th>RAPORT</th>
                                <th>UN</th>
                                <th>DAFTAR ULANG</th>
                                <th>Dibayar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @if(is_null($detailSpp->biaya_semester))
                                    <td><span class="badge badge-danger">Belum Lunas</span></td>
                                @else
                                   <td><span class="badge badge-primary">Lunas</span></td>
                                @endif
                                <td>{{$detailSpp->bulan}}</td>
                                @if (is_null($detailSpp->psb))
                                    <td><span class="badge badge-danger">Belum Lunas</span></td>
                                @else
                                <td><span class="badge badge-primary">Lunas</span></td>
                                @endif
                                @if (is_null($detailSpp->pts_ganjil))
                                <td><span class="badge badge-danger">Belum Lunas</span></td>
                                @else
                                <td><span class="badge badge-primary">Lunas</span></td>
                                @endif
                                @if (is_null($detailSpp->pts_genap))
                                <td><span class="badge badge-danger">Belum Lunas</span></td>
                                @else
                                <td><span class="badge badge-primary">Lunas</span></td>
                                @endif
                                @if (is_null($detailSpp->spas))
                                <td><span class="badge badge-danger">Belum Lunas</span></td>
                                @else
                                <td><span class="badge badge-primary">Lunas</span></td>
                                @endif
                                @if (is_null($detailSpp->pat))
                                <td><span class="badge badge-danger">Belum Lunas</span></td>
                                @else
                                <td><span class="badge badge-primary">Lunas</span></td>
                                @endif
                                @if (is_null($detailSpp->raport))
                                <td><span class="badge badge-danger">Belum Lunas</span></td>
                                @else
                                <td><span class="badge badge-primary">Lunas</span></td>
                                @endif
                                @if (is_null($detailSpp->un))
                                <td><span class="badge badge-danger">Belum Lunas</span></td>
                                @else
                                <td><span class="badge badge-primary">Lunas</span></td>

                                @endif
                                @if (is_null($detailSpp->daftar_ulang))
                                <td><span class="badge badge-danger">Belum Lunas</span></td>
                                @else
                                <td><span class="badge badge-primary">Lunas</span></td>
                                @endif
                                <td>Rp.{{number_format($detailSpp->total_bayar, 2)}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection