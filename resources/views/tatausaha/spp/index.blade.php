@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{route('tata-usaha.tampilkan-form.tambah.list.spp')}}" class="btn btn-outline-info">Tambah Data List SPP</a>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-muted">Kelas</th>
                                <th class="text-muted">PSB</th>
                                <th class="text-muted">PTS GANJIL</th>
                                <th class="text-muted">PTS GENAP</th>
                                <th class="text-muted">SPAS</th>
                                <th class="text-muted">PAT</th>
                                <th class="text-muted">RAPORT</th>
                                <th class="text-muted">Daftra Ulang</th>
                                <th class="text-muted">Biaya / Semester</th>
                                <th class="text-muted">UN</th>
                                <th class="text-muted">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($spp as $sppcollection)
                                <tr>
                                    <td class="text-muted">
                                        <a href="{{route('tata-usaha.tampilkan-form.edit.spp',$sppcollection->id)}}" class="btn btn-outline-info btn-sm">
                                            {{$sppcollection->kelas->nama_kelas}}</td>
                                        </a>
                                    <td class="text-muted">{{$sppcollection->psb}}</td>
                                    <td class="text-muted">{{$sppcollection->pts_ganjil}}</td>
                                    <td class="text-muted">{{$sppcollection->pts_genap}}</td>
                                    <td class="text-muted">{{$sppcollection->spas}}</td>
                                    <td class="text-muted">{{$sppcollection->pat}}</td>
                                    <td class="text-muted">{{$sppcollection->raport}}</td>
                                    <td class="text-muted">{{$sppcollection->daftar_ulang}}</td>
                                    <td class="text-muted">{{$sppcollection->biaya_semester}}</td>
                                    <td class="text-muted">{{$sppcollection->un}}</td>
                                    <td>
                                        <form action="{{route('tata-usaha.hapus.data-spp', $sppcollection->id)}}" method="post">
                                        <a href="{{route('tata-usaha.tampilkan-form.spp',$sppcollection->id)}}"
                                                class="btn btn-outline-primary btn-sm">inputspp</a>
                                        @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                            
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12" class="text-center">Maaf belum ada list spp yang di masukan</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection