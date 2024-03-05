@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="text-center text-muted">Form Edit List SPP</h5>
                    <div class="py-3">
                        <form action="{{route('tata-usaha.simpan-data.update.spp', $categorie->id)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="kelas" class="text-muted">Nama Kelas</label>
                                        <select name="kela_id" id="kelas" class="form-control">
                                            @foreach ($kelas as $collection)
                                            <option value="{{ $collection->id }}">
                                                {{ $collection->nama_kelas }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="psb" class="text-muted">PSB</label>
                                        <input type="number" name="psb" class="form-control" value="{{old('psb', $categorie->psb)}}" placeholder="Rp...."
                                            id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pts_ganjil" class="text-muted">PTS Ganjil</label>
                                        <input type="number" name="pts_ganjil" class="form-control" value="{{old('pts_ganjil', $categorie->pts_ganjil)}}"
                                            placeholder="Rp...." id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pts_genap" class="text-muted">PTS Genap</label>
                                        <input type="number" name="pts_genap" class="form-control" value="{{old('pts_genap', $categorie->pts_genap)}}"
                                            placeholder="Rp...." id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="spas" class="text-muted">SPAS</label>
                                        <input type="number" name="spas" class="form-control" value="{{old('spas', $categorie->spas)}}" placeholder="Rp...."
                                            id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pat" class="text-muted">PAT</label>
                                        <input type="number" name="pat" class="form-control" value="{{old('pat', $categorie->pat)}}" placeholder="Rp...."
                                            id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="raport" class="text-muted">Raport</label>
                                        <input type="number" name="raport" class="form-control" value="{{old('raport', $categorie->raport)}}"
                                            placeholder="Rp...." id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="daftar_ulang" class="text-muted">Daftar Ulang</label>
                                        <input type="number" name="daftar_ulang" class="form-control" value="{{old('daftar_ulang', $categorie->daftar_ulang)}}"
                                            placeholder="Rp...." id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="biaya_semester" class="text-muted">Biaya Semester</label>
                                        <input type="number" name="biaya_semester" class="form-control" value="{{old('biaya_semester', $categorie->biaya_semester)}}" placeholder="Rp...."
                                            id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="un" class="text-muted">UN</label>
                                        <input type="number" name="un" class="form-control" value="{{old('un', $categorie->un)}}" placeholder="Rp...."
                                            id="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-outline-info">
                                        Simpan list spp
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection