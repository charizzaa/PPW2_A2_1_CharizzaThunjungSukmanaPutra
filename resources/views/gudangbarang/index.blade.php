@extends('master')
@section('body')
	<div class="container">
		<div class="d-flex flex-row justify-content-between mb-3">
			<h3>
				<b>Data Gudang Barang</b>
			</h3>
		</div>
	<table border="1px" class="table table-bordered">
		<thead class="table-dark text-center">
			<tr>
			<th>id</th>
			<th>Nama Barang</th>
			<th>Harga Barang</th>
			<th>Jumlah Stok</th>
			<th>ID Supplier</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($tabel_barang as $barang)
		<tr>
				<td class="text-center">{{ $barang->id }}</td>
				<td>{{ $barang->nama_barang }}</td>
                <td>{{ "Rp ". number_format($barang->harga, 2, ',', '.') }}</td>
				<td>{{ $barang->stok }}</td>
				<td>{{ $barang->id_supplier }}</td>
				<td>
					<div class="d-flex flex-row justify-content-center">
						<button class="btn btn-success me-1">
							<a href="{{ route('gudangbarang.show',$barang->id) }}" class="btn_link">Detail</a>
						</button>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
@endsection