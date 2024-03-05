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
                <form action="{{route('tata-usaha.simpan-data.update.siswa', $siswa->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="nis" class="form-control" value="{{$siswa->nis}}"
                                    placeholder="Nis..." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="{{$siswa->user->name}}"
                                    placeholder="Nama..." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" value="{{$siswa->user->email}}"
                                    placeholder="Email..." required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="alamat" class="form-control" value="{{$siswa->alamat}}"
                                    placeholder="Alamat..." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="tempat_lahir" class="form-control"
                                    value="{{$siswa->tempat_lahir}}" placeholder="Tempat lahir..." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="date" name="tgl_lahir" class="form-control" value="{{$siswa->tgl_lahir}}"
                                    placeholder="Nis..." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="agama" id="" class="form-control">
                                    <option value="">Pilih Agama</option>
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="HINDU">HINDU</option>
                                    <option value="BUDHA">BUDHA</option>
                                    <option value="KRISTEN">KRISTEN</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="jenis_kelamin" id="" class="form-control">
                                    <option value="">**Pilih Jenis Kelamin**</option>
                                    <option value="Laki-Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="status" class="form-control" value="{{$siswa->status}}"
                                    placeholder="Kandung.." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" value="{{$siswa->phone}}"
                                    placeholder="+62.." required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <select name="kelas_id" class="form-control" id="">
                                <option value="">***Pilih Kelas***</option>
                                @foreach ($kelas as $select)
                                <option value="{{$select->id}}">
                                    {{$select->nama_kelas}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <hr>
                    <h6 class="text-muted">
                        Data orang tua.
                    </h6>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="nama_orangtua" class="form-control" value="{{$siswa->wsiswa->nama_orangtua}}"
                                    placeholder="Nama..." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="alamat_orangtua" class="form-control" value="{{$siswa->wsiswa->alamat_orangtua}}"
                                    placeholder="alamat.." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="jenis_kelamin_orangtua" id="" class="form-control">
                                    <option value="">**Pilih Jenis Kelamin**</option>
                                    <option value="Laki-Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="pekerjaan_orangtua" class="form-control"
                                    value="{{$siswa->wsiswa->pekerjaan_orangtua}}" placeholder="pekerjaan.." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="no_telp" class="form-control"
                                    value="{{$siswa->wsiswa->no_telp}}" placeholder="+62.." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="tempat_lahir_orangtua" class="form-control"
                                    value="{{$siswa->wsiswa->tempat_lahir_orangtua}}" placeholder="tempat lahir.." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="date" name="tgl_lahir_orangtua" class="form-control"
                                    value="{{$siswa->wsiswa->tgl_lahir_orangtua}}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="agama_orangtua" id="" class="form-control">
                                    <option value="">**Pilih Agama**</option>
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="HINDU">HINDU</option>
                                    <option value="BUDHA">BUDHA</option>
                                    <option value="KRISTEN">KRISTEN</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="user_id" value="{{$siswa->user->id}}" id="">
                    <input type="hidden" name="wsiswa_id" value="{{$siswa->wsiswa->id}}" id="">
                    <div class="mt-3 mb-3 d-flex align-item-center">
                        <button type="submit" class="btn btn-outline-info">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20"
                                class="mr-2">
                                <path fill-rule="evenodd" fill="#1b4b72"
                                    d="M4.16 4.16l1.42 1.42A6.99 6.99 0 0 0 10 18a7 7 0 0 0 4.42-12.42l1.42-1.42a9 9 0 1 1-11.69 0zM9 0h2v8H9V0z" />
                            </svg>
                            Simpan data siswa
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection 