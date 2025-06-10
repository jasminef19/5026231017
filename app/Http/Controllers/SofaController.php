<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SofaController extends Controller
{
    //
    public function index()
	{
    	// mengambil data dari table pegawai
		$sofa = DB::table('sofa')->paginate(10);


    	// mengirim data pegawai ke view index
		return view('tugas_crud.index3',['sofa' => $sofa]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tugas_crud.tambah2');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('sofa')->insert([
			'merksofa' => $request->merksofa,
            'hargasofa' => $request->hargasofa,
            'tersedia' => $request->tersedia == '1' ? 1 : 0,
            'berat' => $request->berat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sofa');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$sofa = DB::table('sofa')->where('id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('tugas_crud.edit2',['sofa' => $sofa]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('sofa')->where('id',$request->id)->update([
			'merksofa' => $request->merksofa,
            'hargasofa' => $request->hargasofa,
            'tersedia' => $request->tersedia == '1' ? 1 : 0,
            'berat' => $request->berat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sofa');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('sofa')->where('id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/sofa');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table sofa sesuai pencarian data
		$sofa = DB::table('sofa')
		->where('merksofa', 'like', "%" . $cari . "%")
		->paginate();

        // mengirim data pegawai ke view index
		return view('tugas_crud.index3',['sofa' => $sofa, 'cari' => $cari]);

	}
}
