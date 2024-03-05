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
                    <form action="{{route('tata-usaha.simpan-data.staff.kedalam-database')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="nip" class="form-control" value="{{old('nip')}}" placeholder="Nip..."
                                        required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Name..." required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="alamat" class="form-control" value="{{old('alamat')}}" placeholder="Alamat..."
                                        required>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="E-mail" required>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        placeholder="****" required>
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="tempat_lahir" class="form-control" value="{{old('tempat_lahir')}}"
                                        placeholder="Tempat lahir..." required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="date" name="tgl_lahir" class="form-control" value="{{old('tgl_lahir')}}"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="agama" id="" class="form-control">
                                        <option value="">**Pilih Agama**</option>
                                        <option value="islam">ISLAM</option>
                                        <option value="hindu">HINDU</option>
                                        <option value="budha">BUDHA</option>
                                        <option value="kristen">KRISTEN</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="jenis_kelamin" id="" class="form-control">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="laki-laki">Laki - Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" value="{{old('phone')}}" placeholder="+62.."
                                        required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="bidang" class="form-control" value="{{old('bidang')}}" placeholder="bidang.."
                                        required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="file" name="avatar" class="form-control" value="" required>
                                    <span class="text-danger">
                                        Format file : JPG.PNG.
                                    </span>
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