@extends('layouts.cetak')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <P>
                    <b>
                        <h3>DAFTAR ADMINISTRASI
                            <br>
                            SEMESTER..........
                            <br>
                            SMK AL_BAHRI
                        </h3>
                    </b></P>
            </div>

            @if (request('tgl_awal'))
            <small>dari tanggal {{ request('tgl_awal') }} sampai tanggal {{ request('tgl_akhir') }}</small>
            @endif

            <u>
                <h4>Laporan Pengajuan Ansuransi</h4>
            </u>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-muted text-sm"><small>Nama</small></th>
                        <th class="text-muted text-sm"><small>Kelas</small></th>
                        <th class="text-muted text-sm"><small>biaya_semester</small></th>
                        <th class="text-muted text-sm"><small>BULAN</small></th>
                        <th class="text-muted text-sm"><small>PSB</small></th>
                        <th class="text-muted text-sm"><small>PTS GENAP</small></th>
                        <th class="text-muted text-sm"><small>PTS GANJIL</small></th>
                        <th class="text-muted text-sm"><small>SPAS</small></th>
                        <th class="text-muted text-sm"><small>PAT</small></th>
                        <th class="text-muted text-sm"><small>RAPORT</small></th>
                        <th class="text-muted text-sm"><small>UN</small></th>
                        <th class="text-muted text-sm"><small>DAFTAR ULANG</small></th>
                        <th class="text-muted text-sm"><small>Dibayar</small></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pembayaran as $report)
                        <tr>
                            <td class="text-muted">{{$report->wsiswa->first()->siswas->first()->user->name}}</td>
                           
                            <td class="text-muted">{{$report->wsiswa->first()->siswas->first()->kelas->grade}}{{$report->wsiswa->first()->siswas->first()->kelas->nama_kelas}}</td>
                            @if (is_null($report->biaya_semester))
                                <td><span class="badge badge-danger">BL</span></td>
                                @else
                                <td><span class="badge badge-info">Lunas</span></td>
                            @endif
                            <td class="text-muted">{{$report->bulan}}</td>
                            @if (is_null($report->psb))
                            <td><span class="badge badge-danger">BL</span></td>
                            @else
                            <td><span class="badge badge-info">Lunas</span></td>
                            @endif
                            @if (is_null($report->pts_genap))
                            <td><span class="badge badge-danger">BL</span></td>
                            @else
                            <td><span class="badge badge-info">Lunas</span></td>
                            @endif
                            @if (is_null($report->pts_ganjil))
                            <td><span class="badge badge-danger">BL</span></td>
                            @else
                            <td><span class="badge badge-info">Lunas</span></td>
                            @endif
                            @if (is_null($report->spas))
                            <td><span class="badge badge-danger">BL</span></td>
                            @else
                            <td><span class="badge badge-info">Lunas</span></td>
                            @endif
                            @if (is_null($report->pat))
                            <td><span class="badge badge-danger">BL</span></td>
                            @else
                            <td><span class="badge badge-info">Lunas</span></td>
                            @endif
                            @if (is_null($report->raport))
                            <td><span class="badge badge-danger">BL</span></td>
                            @else
                            <td><span class="badge badge-info">Lunas</span></td>
                            @endif
                            @if (is_null($report->un))
                            <td><span class="badge badge-danger">BL</span></td>
                            @else
                            <td><span class="badge badge-info">Lunas</span></td>
                            @endif
                            @if (is_null($report->daftar_ulang))
                            <td><span class="badge badge-danger">BL</span></td>
                            @else
                            <td><span class="badge badge-info">Lunas</span></td>
                            @endif
                            <td class="text-muted">Rp.{{number_format($report->total_bayar, 2)}}</td>
                        </tr>
                    @empty

                    @endforelse
                    <tr>
                        @if ($pembayaran->count('total_bayar') > 1)
                        <td colspan="13" class="text-right">Total Rp. {{number_format($pembayaran->sum('total_bayar'), 2)}}</td>
                        @else
                        @foreach ($pembayaran as $report)

                        <td colspan="13" class="text-right text-muted">Total Rp. Rp.{{number_format($report->total_bayar, 2)}}</td>
                        @endforeach
                        @endif
                    </tr>
                </tbody>

            </table>

        </div>
    </div>

@endsection