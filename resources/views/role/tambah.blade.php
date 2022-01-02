@extends('template')

@section('container')
 
	<a href="/role" class="btn btn-default"> Kembali</a>
		
	<br/>
	<br/>

	<form action="/user/store" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">Nama User</label>
			<input type="text" class="form-control" id="name" name="name" required>
		</div>

        <div class="form-group">
			<label for="name">Email</label>
			<input type="email" class="form-control" id="email" name="email" required>
		</div>

		<div class="form-group">
			<label for="name">KTP</label>
			<input type="file" class="form-control" id="ktp" name="ktp" required>
		</div>

        <div class="form-group">
			<label for="name">Password</label>
			<input type="text" class="form-control" name="password" required>
		</div>

		
		<div class="form-group">
			<label for="id_kelurahan">Role</label>
			<select class="form-control" name="role" required>
				@if(auth( )->user( )->role == 'admin')
                <option value="admin">Admin</option>
                <option value="kader">Kader</option>
				@endif
				@if(auth( )->user( )->role == 'kader')
                <option value="ortu">Ortu</option>
				@endif
			</select>
		</div>	   
		<div class="col-md-12" style="text-align: right;">
			<input type="submit" class="btn btn-success" value="Simpan Data">
		</div>
	</form>
 
@endsection
