@extends('template')

@section('container')
 
	<a href="/balita/create" class="btn btn-success"> + Tambah Balita Baru</a>
	
	<br/>
	<br/>
 
    <table id="example1" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th style="width: 1%;">No</th>
				<th>Nama Balita</th>
				<th>NIK Ortu</th>
				<th>Nama Ortu</th>
				<th>Tanggal Lahir Balita</th>
				<th>Jenis Kelamin Balita</th>
				<th>Status</th>
				<th>Posyandu</th>
				<th style="width: 1%;">Edit</th>
				<th style="width: 1%;">Hapus</th>
			</tr>
		</thead>
		<tbody>
			@foreach($balita as $k => $v)
			<tr>
				<td class="text-wrap text-center">{{ $k + 1 }}</td>
				<td>{{ $v->nama_balita }}</td>
				<td>{{ $v->nik_ortu }}</td>
				<td>{{ $v->nama_ortu }}</td>
				<td>{{ $v->tgllahir_balita }}</td>
				<td>{{ $v->jk_balita == "L" ? "Laki-Laki" : "Perempuan" }}</td>
				<td>{{ $v->status == 1 ? "Gizi Baik" : ($v->status == 2 ? "Gizi Cukup" : ($v->status == 3 ? "Gizi Kurang" : "Gizi Buruk")) }}</td>
				<td>{{ $v->posyandu->nama_posyandu }}</td>
				<td class="text-wrap"><a href="/balita/edit/{{ $v->id }}" class="btn btn-primary">Edit</a></td>
				<td class="text-wrap"><a href="/balita/destroy/{{ $v->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a></td>
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