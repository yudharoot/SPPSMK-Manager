@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="mt-3 mb-3 d-flex align-item-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20">
                            <path fill="#dee2e6"
                                d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z" />
                        </svg>
                        <h6 class="text-muted ml-3">
                            Silahkan Lengkapi data diri dibawah ini.
                        </h6>
                    </div>
                    <form action="{{route('tata-usaha.simpan-data.update.staff', $guru->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" value="{{$guru->user->name}}" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" value="{{$guru->user->email}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="nip" class="form-control" value="{{$guru->nip}}" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" value="{{$guru->phone}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="alamat" class="form-control" value="{{$guru->alamat}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="tempat_lahir" class="form-control" value="{{$guru->tempat_lahir}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="tgl_lahir" class="form-control" value="{{$guru->tgl_lahir}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="agama" class="form-control" value="{{$guru->agama}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="jenis_kelamin" class="form-control" value="{{$guru->jenis_kelamin}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="bidang" class="form-control" value="{{$guru->bidang}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="akses" id="" class="form-control">
                                        <option value="">Select Jabatan</option>
                                        <option value="guru">Guru</option>
                                        <option value="admin">Admin</option>
                                        <option value="tata usaha">TU</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 mb-3 d-flex align-item-center">
                            <button type="submit" class="btn btn-outline-info">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20"
                                    class="mr-2">
                                    <path fill-rule="evenodd" fill="#1b4b72"
                                        d="M4.16 4.16l1.42 1.42A6.99 6.99 0 0 0 10 18a7 7 0 0 0 4.42-12.42l1.42-1.42a9 9 0 1 1-11.69 0zM9 0h2v8H9V0z" />
                                </svg>
                                Simpan data guru
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection