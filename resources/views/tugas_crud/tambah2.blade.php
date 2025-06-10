@extends('template')

@section('content')
	<h3>Data Sofa</h3>

	<a href="/sofa" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/sofa/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                merk
            </div>
            <div class="col-8">
                <input type="text" name="merksofa" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                harga
            </div>
            <div class="col-8">
                <input type="number" name="hargasofa" required="required" class="form-control">
            </div>
        </div>
		<div class="row">
            <div class="col-3">
                ketersediaan
            </div>
            <div class="col-8">
                <select name="tersedia" class="form-control" required>
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak Tersedia</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                berat(kg)
            </div>
            <div class="col-8">
               <input type="number" step="0.1" name="berat" required class="form-control">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
