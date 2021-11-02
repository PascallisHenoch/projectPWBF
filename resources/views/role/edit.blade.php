@extends('template')

@section('container')
 
	<a href="/role" class="btn btn-default"> Kembali</a>
		
	<br/>
	<br/>

	<form action="/role/update/{{ $role->id }}" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nama_role">Nama Role</label>
			<input type="text" class="form-control" id="nama_role" name="nama_role" placeholder="Nama Role" value="{{ $role->nama_role }}">
		</div>
		<div class="col-md-12" style="text-align: right;">
			<input type="submit" class="btn btn-success" value="Simpan Data">
		</div>
	</form>
 
@endsection

@section('script')
    
@endsection