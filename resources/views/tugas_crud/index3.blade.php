@extends('template')

@section('content')
	<h3>Data Sofa</h3>

	    <a href="/sofa/tambah"class="btn btn-primary"> + Tambah Sofa Baru</a>

        <p>Cari Data Sofa :</p>
        <form action="/sofa/cari" method="GET">
            <input type="text" class="form-control" name="cari"placeholder="Cari Sofa ..">
            <input type="submit" class="btn btn-info"value="CARI">
        </form>
	    <br/>

	<table class="table table-striped">
		<tr>
			<th>merk</th>
			<th>harga</th>
			<th>ketersediaan</th>
			<th>berat</th>
            <th>opsi</th>
		</tr>

		@foreach($sofa as $s)
		<tr>
            <td>{{ $s->merksofa }}</td>
            <td>Rp {{ number_format($s->hargasofa, 0, ',', '.') }}</td>
            <td>{{ $s->tersedia ? 'Ya' : 'Tidak' }}</td>
            <td>{{ $s->berat }} kg</td>
			<td>
				<a href="/sofa/edit/{{ $s->id }}" class="btn btn-success">Edit</a>
                <a href="/sofa/hapus/{{ $s->id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

{{ $sofa->links() }}


@endsection
