@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card border-0 shadow">
            <div class="card-header border-0">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('avatar/'. $staff->avatar)}}" alt="" srcset="">

                </div>
                <div class="text-center">
                    <h4 class="text-success font-weight-bold">{{$staff->user->name}}</h4>
                    <div class="d-flex ailgn-item-center justify-content-center ">
                        <h6 class="text-primary font-weight-bold">{{$staff->user->email}} &#x2027;</h6>
                        <h6 class="text-info font-weight-bold ml-1">{{$staff->user->akses}}</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="font-weight-bold text-success">informasi pribadi:</h5>
                <div class="d-flex">
                    <div class="mr-auto">
                        <h6 class="text-dark">NIP                   :</h6>
                        <h6 class="text-dark">Alamat                    :</h6>
                        <h6 class="text-dark">Phone                 :</h6>
                        <h6 class="text-dark">T.T.L                 :</h6>
                        <h6 class="text-dark">Agama                 :</h6>
                        <h6 class="text-dark">Jenis Kelamin                 :</h6>
                        <h6 class="text-dark">Jurusan                   :</h6>
                    </div>
                    <div>
                        <h6 class="text-info">{{$staff->nip}}</h6>
                        <h6 class="text-info">{{$staff->alamat}}</h6>
                        <h6 class="text-info">{{$staff->phone}}</h6>
                        <h6 class="text-info">{{$staff->tempat_lahir}}, {{$staff->tgl_lahir}}</h6>
                        <h6 class="text-info">{{$staff->agama}}</h6>
                        <h6 class="text-info">{{$staff->jenis_kelamin}}</h6>
                        <h6 class="text-info">{{$staff->bidang}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection