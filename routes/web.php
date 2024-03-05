<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'tata-usaha'], function(){
    route::group(['prefix' => 'cek-data'], function(){
        //siswa
        route::get('siswa',  [App\Http\Controllers\TU\Siswa\SiswaController::class, 'index'])->name('tata-usaha.cek-data.siswa');
        //Kelas
        route::get('kelas', [App\Http\Controllers\TU\Kelas\KelasController::class, 'index'])->name('tata-usaha.cek-data.kelas');
        //Staff/Guru
        route::get('staff', [App\Http\Controllers\TU\Guru\GuruController::class, 'index'])->name('tata-usaha.cek-data.staff');
        //Master.spp
        route::get('spp', [App\Http\Controllers\TU\Spp\MasterSppController::class, 'index'])->name('tata-usaha.cek-data.spp');
        //spp
        route::get('spp/siswa', [App\Http\Controllers\TU\Spp\SppController::class, 'index'])->name('tata-usaha.cek-data.spp.siswa');
        route::get('details/spp/siswa/{wsiswas}', [App\Http\Controllers\TU\Spp\SppController::class, 'show'])->name('tata-usaha.cek-data.details.spp.siswa');
        
    });

    route::group(['prefix' => 'tampilkan-form'], function(){
        //siswa
        route::get('tambah/siswa', [App\Http\Controllers\TU\Siswa\SiswaController::class, 'create'])->name('tata-usaha.tampilkan-form.tambah.siswa');
        route::get('edit/siswa/{siswa}', [App\Http\Controllers\TU\Siswa\SiswaController::class, 'edit'])->name('tata-usaha.tampilkan-form.edit.siswa');
        //Kelas
        route::get('tambah/kelas', [App\Http\Controllers\TU\Kelas\KelasController::class, 'create'])->name('tata-usaha.tampilkan-form.tambah.kelas');
        route::get('edit/kelas/{kelas}', [App\Http\Controllers\TU\Kelas\KelasController::class, 'edit'])->name('tata-usaha.tampilkan-form.edit.kelas');
        //Staff/Guru
        route::get('tambah/staff', [App\Http\Controllers\TU\Guru\GuruController::class, 'create'])->name('tata-usaha.tampilkan-form.tambah.staff');
        route::get('edit/staff/{guru}', [App\Http\Controllers\TU\Guru\GuruController::class, 'edit'])->name('tata-usaha.tampilkan-form.edit.staff');
        //Master.Spp
        route::get('tambah/list/spp',[App\Http\Controllers\TU\Spp\MasterSppController::class, 'create'])->name('tata-usaha.tampilkan-form.tambah.list.spp');
        route::get('edit/spp/{spp}', [App\Http\Controllers\TU\Spp\MasterSppController::class, 'edit'])->name('tata-usaha.tampilkan-form.edit.spp');
        route::get('bayaran/spp/{spp}', [App\Http\Controllers\TU\Spp\MasterSppController::class, 'edit'])->name('tata-usaha.tampilkan-form.bayaran.spp');
        //Spp
        route::get('spp/{categorie}', [App\Http\Controllers\TU\Spp\SppController::class, 'edit'])->name('tata-usaha.tampilkan-form.spp');

    });
       
    route::group(['prefix' => 'simpan-data'], function(){
        //siswa
        route::post('siswa/kedalam-database', [App\Http\Controllers\TU\Siswa\SiswaController::class, 'store'])->name('tata-usaha.simpan-data.siswa.kedalam-database');
        route::put('update/siswa/{siswa}', [App\Http\Controllers\TU\Siswa\SiswaController::class, 'update'])->name('tata-usaha.simpan-data.update.siswa');
        route::get('cek-detail/siswa/show/{siswa}', [App\Http\Controllers\TU\Siswa\SiswaController::class, 'show'])->name('tatausaha.cek-data.siswa.show');
        //Kelas                                                                                                                                                  
        route::post('kelas/kedalam-database',  [App\Http\Controllers\TU\Kelas\KelasController::class, 'store'])->name('tata-usaha.simpan-data.kelas.kedalam-database');
        route::put('update/kelas/{kelas}',  [App\Http\Controllers\TU\Kelas\KelasController::class, 'update'])->name('tata-usaha.simpan-data.update.kelas');
        route::delete('hapus/data-kelas/{kelas}', [App\Http\Controllers\TU\Kelas\KelasController::class, 'destroy'])->name('tata-usaha.hapus.data-kelas');
        //Staff/Guru
        route::post('staff/kedalam-database', [App\Http\Controllers\TU\Guru\GuruController::class, 'store'])->name('tata-usaha.simpan-data.staff.kedalam-database');
        route::put('update/staff/{guru}', [App\Http\Controllers\TU\Guru\GuruController::class, 'update'])->name('tata-usaha.simpan-data.update.staff');
        route::get('cek-detail/staff/{guru}', [App\Http\Controllers\TU\Guru\GuruController::class, 'show'])->name('tata-usaha.cek-detail.staff');
       //spp
        route::post('list/spp',  [App\Http\Controllers\TU\Spp\MasterSppController::class, 'store'])->name('tata-usaha.simpan-data.list.spp');
        route::get('cek-detail/spp/{spp}', [App\Http\Controllers\TU\Spp\SppController::class, 'show'])->name('tata-usaha.cek-detail.spp');
        route::patch('spp/siswa/{categorie}', [App\Http\Controllers\TU\Spp\SppController::class, 'update'])->name('tata-usaha.simpan-data.spp.siswa');
        route::get('spp/siswa', [App\Http\Controllers\TU\Spp\SppController::class, 'show'])->name('tata-usaha.spp.siswa');
       //master.spp
        route::patch('update/spp/{categorie}',  [App\Http\Controllers\TU\Spp\MasterSppController::class, 'update'])->name('tata-usaha.simpan-data.update.spp');
        
       


    });
    //kelas
    route::delete('hapus/data-kelas/{kelas}', [App\Http\Controllers\TU\Kelas\KelasController::class, 'destroy'])->name('tata-usaha.hapus.data-kelas');
    //staff/guru
    route::delete('hapus/data-staff/{user}', [App\Http\Controllers\TU\Guru\GuruController::class, 'destroy'])->name('tata-usaha.hapus.data-staff');
    //Master.Spp
    route::delete('hapus/data-spp/{spp}', [App\Http\Controllers\TU\Spp\MasterSppController::class, 'destroy'])->name('tata-usaha.hapus.data-spp');
    //Report.pertanggal
    route::get('cari-report/pertanggal',    [App\Http\Controllers\TU\Report\ReportController::class, 'periode'])->name('tata-usaha.cari-report.pertanggal');
 
});


route::get('cari-report/pertanggal',  [App\Http\Controllers\TU\Report\ReportController::class, 'periode'])->name('tata-usaha.cari-report.pertanggal');

