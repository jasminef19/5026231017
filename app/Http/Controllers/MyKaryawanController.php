<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyKaryawanController extends Controller
{
    //
    public function index()
	{
    	// mengambil data dari table pegawai
		$mykaryawan = DB::table('mykaryawan')->get();


    	// mengirim data pegawai ke view index
		return view('EAS.indexeas',['mykaryawan' => $mykaryawan]);

	}

    public function edit($kodepegawai)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mykaryawan = DB::table('mykaryawan')->where('kodepegawai',$kodepegawai)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('EAS.editeas',['mykaryawan' => $mykaryawan]);

	}

    public function update(Request $request)
	{
		// update data pegawai
		DB::table('mykaryawan')->where('kodepegawai',$request->kodepegawai)->update([
			'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/eas');
	}

    public function view($kodepegawai)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mykaryawan = DB::table('mykaryawan')->where('kodepegawai',$kodepegawai)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('EAS.vieweas',['mykaryawan' => $mykaryawan]);

	}
}
