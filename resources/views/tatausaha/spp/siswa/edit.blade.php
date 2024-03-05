@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card border-0 shadow">
            <div class="card-body">
                <h6 class="text-muted">Input Spp Siswa</h6>
                <form action="{{route('tata-usaha.simpan-data.spp.siswa', $categorie->id)}}" method="post" >
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name" class="text-muted">Nama Siswa *</label>
                                <select name="wsiswa_id" id="" class="form-control">
                                    <option value="">Pilih Nama Siswa</option>
                                    @foreach ($siswa as $siswaCollection    )
                                        <option value="{{$siswaCollection->wsiswa->id}}">{{$siswaCollection->user->name}} - {{$siswaCollection->kelas->nama_kelas}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name" class="text-muted">Bulan *</label>
                                <select name="bulan" id="" class="form-control">
                                    <option value="">Pilih Bulan</option>
                                    <option value="januari">januari</option>
                                    <option value="februari">februari</option>
                                    <option value="maret">maret</option>
                                    <option value="april">april</option>
                                    <option value="mei">mei</option>
                                    <option value="juni">juni</option>
                                    <option value="juli">juli</option>
                                    <option value="agustus">agustus</option>
                                    <option value="september">september</option>
                                    <option value="october">october</option>
                                    <option value="november">november</option>
                                    <option value="december">december</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tahun_ajaran" class="text-muted">Tahun Ajaran</label>
                                <input type="text" name="tahun_ajaran" class="form-control" value="{{old('tahun_ajaran', $categorie->tahun_ajaran)}}"
                                    placeholder="tahun ajaran" id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="psb" class="text-muted">PSB</label>
                                <input type="number" name="psb" class="form-control" value="{{old('psb', $categorie->psb)}}" placeholder="Rp...." id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pts_ganjil" class="text-muted">PTS Ganjil</label>
                                <input type="number" name="pts_ganjil" class="form-control" value="{{old('pts_ganjil', $categorie->pts_ganjil)}}" placeholder="Rp...."
                                    id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pts_genap" class="text-muted">PTS Genap</label>
                                <input type="number" name="pts_genap" class="form-control" value="{{old('pts_genap', $categorie->pts_genap)}}" placeholder="Rp...."
                                    id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="spas" class="text-muted">SPAS</label>
                                <input type="number" name="spas" class="form-control" value="{{old('spas', $categorie->spas)}}" placeholder="Rp...." id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pat" class="text-muted">PAT</label>
                                <input type="number" name="pat" class="form-control" value="{{old('pat', $categorie->pat)}}" placeholder="Rp...." id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="raport" class="text-muted">Raport</label>
                                <input type="number" name="raport" class="form-control" value="{{old('raport', $categorie->raport)}}" placeholder="Rp...." id="">
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
                                <label for="un" class="text-muted">UN</label>
                                <input type="number" name="un" class="form-control" value="{{old('un', $categorie->un)}}" placeholder="Rp...." id="">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="biaya_semester" class="text-muted">Biaya Persemester</label>
                                <input type="number" name="biaya_semester" class="form-control" value="{{old('biaya_semester', $categorie->biaya_semester)}}"
                                    placeholder="Rp...." id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="biaya_semester" class="text-muted">Tanggal Bayar</label>
                                <input type="date" name="tgl_bayar" class="form-control"
                                    value="{{old('tgl_bayar')}}"id="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            @if ($categorie->nama_kelas == 'IX')

                                <div class="form-group">
                                    <label for="total">Yang Harus Dibayar</label>
                                    <input type="text" name="dibayar" class="form-control" value="{{number_format($categorie->bulan + $categorie->biaya_semester + $categorie->psb + $categorie->pts_ganjil + $categorie->pts_genap + $categorie->spas + $categorie->pat + $categorie->rapot + $categorie->daftar_ulang + $categorie->un , 2)}}" id="">
                                </div>
                            @else
                                <div class="form-group">
                                    <label for="total">Yang Harus Dibayar</label>
                                    <input type="text" name="dibayar" class="form-control"
                                        value="Rp. {{number_format($categorie->bulan + $categorie->biaya_semester + $categorie->psb + $categorie->pts_ganjil + $categorie->pts_genap + $categorie->spas + $categorie->pat + $categorie->raport + $categorie->daftar_ulang , 2)}}"
                                        id="">
                                        <input type="hidden" name="harus_dibayar" class="form-control"
                                            value="{{$categorie->bulan + $categorie->biaya_semester + $categorie->psb + $categorie->pts_ganjil + $categorie->pts_genap + $categorie->spas + $categorie->pat + $categorie->raport + $categorie->daftar_ulang}}"
                                            id="">
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="total">Total Bayar</label>
                                <input type="text" name="total_bayar" class="form-control" value="{{old('total_bayar')}}" id="">
                            </div>

                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-outline-info">Tambah spp siswa</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection