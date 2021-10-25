@extends('template')

@section('container')
 
	<a href="/posyandu" class="btn btn-default"> Kembali</a>
		
	<br/>
	<br/>

	@foreach($kecamatan as $v)
		<form action="/posyandu/update/{{ $v->id }}" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $v->id }}">
			<div class="form-group">
				<label for="nama_posyandu">Nama Posyandu</label>
				<input type="text" class="form-control" id="nama_posyandu" name="nama_posyandu" placeholder="Nama Posyandu" value="{{ $v->nama_posyandu }}">
			</div>
			<div class="col-md-12" style="text-align: right;">
				<input type="submit" class="btn btn-success" value="Simpan Data">
			</div>
		</form>
	@endforeach
 
@endsection

@section('script')
    
@endsection