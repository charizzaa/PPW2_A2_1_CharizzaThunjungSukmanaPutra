@extends('master')
@section('body')
	<div class="container w-50 card p-4 d-flex align-items-center">
		<h4 style="font-weight: bold">Detail Barang</h4>
		<table class="table table-bordered">
			<tr>
				<td>Nama Barang</td>
				<td>{{ $tabel_barang->nama_barang }}</td>
			</tr>
			<tr>
				<td>Harga Barang</td>
				<td>{{ $tabel_barang->harga }}</td>
			</tr>
			<tr>
				<td>Jumlah Stok</td>
				<td>{{ $tabel_barang->stok }}</td>
			</tr>
			<tr>
				<td>ID Supplier</td>
				<td>{{ $tabel_barang->id_supplier }}</td>
			</tr>
		</table>
		<button type="button" class="btn btn-outline-danger"><a href="/gudangbarang" style="text-decoration: none; color:red;">Batal</a></button>
	</div>
@endsection