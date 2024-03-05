@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="mt-3 mb-3 d-flex align-item-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20">
                        <path fill="#dee2e6"
                            d="M0 6l10-6 10 6v2H0V6zm0 12h20v2H0v-2zm2-2h16v2H2v-2zm0-8h4v8H2V8zm6 0h4v8H8V8zm6 0h4v8h-4V8z" />
                    </svg>
                    <h6 class="text-muted ml-3">
                        Silahkan Lengkapi data kelas dibawan ini.
                    </h6>
                </div>
                <form action="{{route('tata-usaha.simpan-data.update.kelas', $temukanKelas->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nama_kelas" class="form-control" value="{{$temukanKelas->nama_kelas}}"
                                        placeholder="Nama kelas..." required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="grade" class="form-control" value="{{$temukanKelas->grade}}" placeholder="grade..."
                                        required>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="mt-3 mb-3 d-flex align-item-center">
                                    <button type="submit" class="btn btn-outline-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20"
                                            class="mr-2">
                                            <path fill-rule="evenodd" fill="#1b4b72"
                                                d="M4.16 4.16l1.42 1.42A6.99 6.99 0 0 0 10 18a7 7 0 0 0 4.42-12.42l1.42-1.42a9 9 0 1 1-11.69 0zM9 0h2v8H9V0z" />
                                        </svg>
                                        Simpan data kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection