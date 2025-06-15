<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageCounterController extends Controller
{
    //
    public function index()
    {
        // Tambahkan nilai jumlah +1 terlebih dulu
        DB::table('pagecounter')->where('id', 1)->increment('jumlah');

        // Ambil nilai setelah di-update
        $jumlah = DB::table('pagecounter')->where('id', 1)->value('jumlah');

        return view('latihan3.index6', ['jumlah' => $jumlah]);
    }
}
