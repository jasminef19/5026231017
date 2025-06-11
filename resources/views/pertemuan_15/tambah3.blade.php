@extends('template')

@section('content')
	<h3>Data Keranjang Belanja</h3>

	<a href="/keranjang" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjang/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Kode Barang
            </div>
            <div class="col-8">
                <input type="text" name="kodebarang" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Jumlah Pembelian
            </div>
            <div class="col-8">
                <input type="text" name="jumlahpembelian" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Harga per Item
            </div>
            <div class="col-8">
                <input type="text" name="hargaperitem" required="required" class="form-control">
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
