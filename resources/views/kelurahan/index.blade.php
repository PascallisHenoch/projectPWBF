@extends('template')

@section('container')
 
	<a href="/kelurahan/create" class="btn btn-success"> + Tambah Kelurahan Baru</a>
	
	<br/>
	<br/>
 
    <table id="example1" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th style="width: 1%;">No</th>
				<th>Nama Kecamatan</th>
				<th>Nama Kelurahan</th>
				<th style="width: 1%;">Edit</th>
				<th style="width: 1%;">Hapus</th>
			</tr>
		</thead>
		<tbody>
			@foreach($kelurahan as $k => $v)
			<tr>
				<td class="text-wrap text-center">{{ $k + 1 }}</td>
				<td>{{ $v->kecamatan->nama_kecamatan }}</td>
				<td>{{ $v->nama_kelurahan }}</td>
				<td class="text-wrap"><a href="/kelurahan/edit/{{ $v->id }}" class="btn btn-primary">Edit</a></td>
				<td class="text-wrap"><a href="/kelurahan/destroy/{{ $v->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
@endsection

@section('script')
	<script>
		$(function () {
			$('#example1').DataTable();
		});
  </script>
@endsection