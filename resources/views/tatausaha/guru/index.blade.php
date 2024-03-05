@extends('layouts.app')


@section('content')
<div class="col-md-12">
    <div class="alert alert-primary" role="alert">
        <div class="d-flex justify-content-between">
            <div class="d-flex align-item-center">
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20" widht="20" height="20">
                <path
                            d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"
                            fill="#fff" />
                <h6 class="ml-2">Data Staff</h6>
            </div>
        </div>
    </div>
    <div class="card border-0 shadow">
        <div class="card-body">
            <div class="mt-3 mb-3">
                <div class="d-flex justify-content-end">
                    <a href="{{route('tata-usaha.tampilkan-form.tambah.staff')}}" class="btn btn-outline-primary">

                        Tambah data Staff
                    </a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>E-mail</th>
                        <th>phone</th>
                        <th>Akses</th>
                        <th>Bidang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($guru as $getDataGuru)
                        <tr>
                            <td>{{$getDataGuru->nip}}</td>
                            <td>{{$getDataGuru->user->name}}</td>
                            <td>{{$getDataGuru->user->email}}</td>
                            <td>{{$getDataGuru->phone}}</td>
                            <td>{{$getDataGuru->user->akses}}</td>
                            <td>{{$getDataGuru->bidang}}</td>
                            <td>
                                <form action="{{route('tata-usaha.hapus.data-staff', $getDataGuru->user->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('tata-usaha.tampilkan-form.edit.staff', $getDataGuru->id)}}" class="btn btn-outline-info btn-sm">
                                        Edit Data
                                    </a>
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Hapus data</button>
                                    <a href="{{route('tata-usaha.cek-detail.staff', $getDataGuru->id)}}" class="btn btn-outline-primary btn-sm">Show</a>
                                </form>
                            </td>
                        </tr>
                    @empty

                    <tr>
                        <td class="text-muted text-center" colspan="10">
                            <h5>maaf data guru belum tersedia.</h5>
                        </td>
                    </tr>

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection