@extends('template')

@section('content')
	<h3>Data Karyawan</h3>

	<a href="/karyawan" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Kode Pegawai
            </div>
            <div class="col-8">
                <input type="text" name="kodepegawai" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Nama Lengkap
            </div>
            <div class="col-8">
                <input type="text" name="namalengkap" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Divisi
            </div>
            <div class="col-8">
                <input type="text" name="divisi" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Departemen
            </div>
            <div class="col-8">
                <input type="text" name="departemen" required="required" class="form-control">
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
