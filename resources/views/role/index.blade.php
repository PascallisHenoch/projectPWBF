@extends('template')

@section('container')
	<a href="/user/create" class="btn btn-sm btn-primary mb-4">Tambah</a>
    <table id="example1" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th style="width: 1%;">No</th>
				<th>Nama</th>
				<th>Role</th>
				<th>Email</th>
				<th>KTP</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $index => $user)
			<tr>
				<td class="text-wrap text-center">{{ $index + 1 }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->role }}</td>
				<td>{{ $user->email }}</td>
				<td><img src="uploads/{{ $user->ktp }}"  width="100px" height="100px"></td>
				<td>
					<a href="/role/edit/{{ $user->id }}" class="btn btn-primary btn-sm">Edit</a>
					<a href="/role/delete/{{ $user->id }}" onclick="return confirm('Apakah anda yakin untuk menghapus data')"class="btn btn-danger btn-sm">Hapus</a>
				</td>
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