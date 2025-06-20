<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link ;
use App\Http\Controllers\Pegawai2Controller ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\SofaController;
use App\Http\Controllers\keranjangbelanjaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PageCounterController;
use App\Http\Controllers\MyKaryawanController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Link::class, 'helloworld'] );

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('latihan2', function () {
	return view('latihan2');
});

Route::get('soallatihan1', function () {
	return view('soallatihan1');
});

Route::get('template1', function () {
	return view('template1');
});

Route::get('index', function () {
	return view('index');
});

Route::get('dosen', [Link::class, 'index'] );

//Route::get('/pegawai/{nama}', [Pegawai2Controller::class, 'index'] );

Route::get('/formulir', [PegawaiController::class, 'formulir'] );
Route::post('/formulir/proses', [PegawaiController::class, 'proses'] );

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud pegawai
Route::get('/pegawai', [PegawaiController::class, 'index'] );
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah'] );
Route::post('/pegawai/store', [PegawaiController::class, 'store'] );
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'] );
Route::post('/pegawai/update', [PegawaiController::class, 'update'] );
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus'] );
Route::get('/pegawai/cari', [PegawaiController::class, 'cari'] );

//crud sofa
Route::get('/sofa', [SofaController::class, 'index'] );
Route::get('/sofa/tambah', [SofaController::class, 'tambah'] );
Route::post('/sofa/store', [SofaController::class, 'store'] );
Route::get('/sofa/edit/{id}', [SofaController::class, 'edit'] );
Route::post('/sofa/update', [SofaController::class, 'update'] );
Route::get('/sofa/hapus/{id}', [SofaController::class, 'hapus'] );
Route::get('/sofa/cari', [SofaController::class, 'cari'] );

//crud keranjang belanja
Route::get('/keranjang', [keranjangbelanjaController::class, 'index'] );
Route::get('/keranjang/tambah', [keranjangbelanjaController::class, 'tambah'] );
Route::post('/keranjang/store', [keranjangbelanjaController::class, 'store'] );
Route::get('/keranjang/hapus/{id}', [keranjangbelanjaController::class, 'hapus'] );

//crud karyawan
Route::get('/karyawan', [KaryawanController::class, 'index'] );
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah'] );
Route::post('/karyawan/store', [KaryawanController::class, 'store'] );
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus'] );

//crud counter
Route::get('/counter', [PageCounterController::class, 'index']);

//crud mykaryawan
Route::get('/eas', [MyKaryawanController::class, 'index'] );
Route::get('/eas/edit/{kodepegawai}', [MyKaryawanController::class, 'edit'] );
Route::post('/eas/update', [MyKaryawanController::class, 'update'] );
Route::get('/eas/view/{kodepegawai}', [MyKaryawanController::class, 'view'] );
