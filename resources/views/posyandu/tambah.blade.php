@extends('template')

@section('container')
 
	<a href="/posyandu" class="btn btn-default"> Kembali</a>
		
	<br/>
	<br/>

	<form action="/posyandu/store" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nama_posyandu">Nama Posyandu</label>
			<input type="text" class="form-control" id="nama_posyandu" name="nama_posyandu" placeholder="Nama Posyandu">
		</div>
		<div class="col-md-12" style="text-align: right;">
			<input type="submit" class="btn btn-success" value="Simpan Data">
		</div>
	</form>
 
@endsection

@section('script')
    
@endsection