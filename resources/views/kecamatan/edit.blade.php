@extends('template')

@section('container')
 
	<a href="/kecamatan" class="btn btn-default"> Kembali</a>
		
	<br/>
	<br/>

	<form action="/kecamatan/update/{{ $kecamatan->id }}" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nama_kecamatan">Nama Kecamatan</label>
			<input type="text" class="form-control" id="nama_kecamatan" name="nama_kecamatan" placeholder="Nama Kecamatan" value="{{ $kecamatan->nama_kecamatan }}">
		</div>
		<div class="col-md-12" style="text-align: right;">
			<input type="submit" class="btn btn-success" value="Simpan Data">
		</div>
	</form>
 
@endsection

@section('script')
    
@endsection