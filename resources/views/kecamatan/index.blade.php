@extends('template')

@section('container')
 
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>
 
	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
    <table id="example1" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			@foreach($kecamatan as $p)
			<tr>
				<td>{{ $p->nama_kecamatan }}</td>
				<td>
					<a href="/kecamatan/edit/{{ $p->id }}">Edit</a>
					|
					<a href="/kecamatan/hapus/{{ $p->id }}">Hapus</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
@endsection

@section('script')
    
@endsection