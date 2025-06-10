@extends('template')

@section('content')
	<h3>Edit Sofa</h3>

	<a href="/sofa" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	@foreach($sofa as $s)
	<form action="/sofa/update" method="post">
        {{ csrf_field() }}

        {{-- Input untuk ID (PENTING untuk update) --}}
        <input type="hidden" name="id" value="{{ $s->id }}">

        <div class="row">
            <div class="col-3">
                merk
            </div>
            <div class="col-8">
                <input type="text" name="merksofa" required="required" class="form-control" value="{{ $s->merksofa }}">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                harga
            </div>
            <div class="col-8">
                <input type="number" name="hargasofa" required="required" class="form-control" value="{{ $s->hargasofa }}">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                ketersediaan
            </div>
            <div class="col-8">
                <select name="tersedia" class="form-control" required>
                    <option value="1" {{ $s->tersedia == 1 ? 'selected' : '' }}>Tersedia</option>
                    <option value="0" {{ $s->tersedia == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                berat(kg)
            </div>
            <div class="col-8">
                <input type="number" step="0.1" name="berat" required class="form-control" value="{{ $s->berat }}">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
	@endforeach

@endsection
