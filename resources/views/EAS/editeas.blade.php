@extends('template')

@section('content')
	<h3>Edit MyKaryawan</h3>

	<a href="/eas" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	@foreach($mykaryawan as $mk)
	<form action="/eas/update" method="post">
        {{ csrf_field() }}

        {{-- Input untuk ID (PENTING untuk update) --}}
        <input type="hidden" name="kodepegawai" value="{{ $mk->kodepegawai }}">

        <div class="row">
            <div class="col-3">
                Kode Pegawai
            </div>
            <div class="col-8">
                <input type="text" name="kodepegawai" required="required" class="form-control" value="{{ $mk->kodepegawai }}">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Nama Lengkap
            </div>
            <div class="col-8">
                <input type="text" name="namalengkap" required="required" class="form-control" value="{{ $mk->namalengkap }}">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Divisi
            </div>
            <div class="col-8">
                <input type="text" name="divisi" required="required" class="form-control" value="{{ $mk->divisi }}">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Departemen
            </div>
            <div class="col-8">
                <input type="text" name="departemen" required="required" class="form-control" value="{{ $mk->departemen }}">
            </div>
        </div>
        <input type="submit" value="Simpan Perubahan" class="btn btn-success">
    </form>
	@endforeach

@endsection
