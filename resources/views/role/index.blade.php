@extends('template')

@section('container')
 
    <table id="example1" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th style="width: 1%;">No</th>
				<th>Nama Role</th>
				<th style="width: 1%;">Edit</th>
			</tr>
		</thead>
		<tbody>
			@foreach($role as $k => $v)
			<tr>
				<td class="text-wrap text-center">{{ $k + 1 }}</td>
				<td>{{ $v->nama_role }}</td>
				<td class="text-wrap"><a href="/role/edit/{{ $v->id }}" class="btn btn-primary">Edit</a></td>
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