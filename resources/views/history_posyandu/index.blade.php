@extends('template')

@section('container')
 
	<a href="/history_posyandu/create" class="btn btn-success"> + Tambah History Posyandu Baru</a>
	
	<br/>
	<br/>
 
    <table id="example1" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th style="width: 1%;">No</th>
				<th>Nama Balita</th>
				<th>Tanggal Posyandu</th>
				<th>Berat Badan</th>
				<th>Tinggi Badan</th>
				<th style="width: 1%;">Edit</th>
				<th style="width: 1%;">Hapus</th>
			</tr>
		</thead>
		<tbody>
			@foreach($history_posyandu as $k => $v)
			<tr>
				<td class="text-wrap text-center">{{ $k + 1 }}</td>
				<td>{{ $v->balita->nama_balita }}</td>
				<td>{{ date("d-m-Y", strtotime($v->tgl_posyandu)) }}</td>
				<td>{{ $v->berat_badan_balita }}</td>
				<td>{{ $v->tinggi_badan_balita }}</td>
				<td class="text-wrap"><a href="/history_posyandu/edit/{{ $v->id }}" class="btn btn-primary">Edit</a></td>
				<td class="text-wrap"><a href="/history_posyandu/destroy/{{ $v->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a></td>
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