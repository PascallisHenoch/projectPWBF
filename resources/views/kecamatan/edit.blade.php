@extends('template')

@section('container')
 
	<a href="/kecamatan" class="btn btn-default"> Kembali</a>
		
	<br/>
	<br/>

	@foreach($kecamatan as $v)
		<form action="/kecamatan/update/{{ $v->id }}" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $v->id }}">
			<div class="form-group">
				<label for="nama_kecamatan">Nama Kecamatan</label>
				<input type="text" class="form-control" id="nama_kecamatan" name="nama_kecamatan" placeholder="Nama Kecamatan" value="{{ $v->nama_kecamatan }}">
			</div>
			<div class="col-md-12" style="text-align: right;">
				<input type="submit" class="btn btn-success" value="Simpan Data">
			</div>
		</form>
	@endforeach
 
@endsection

@section('script')
    
@endsection