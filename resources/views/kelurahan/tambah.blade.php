@extends('template')

@section('container')
 
	<a href="/kelurahan" class="btn btn-default"> Kembali</a>
		
	<br/>
	<br/>

	<form action="/kelurahan/store" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="id_kelurahan">Nama Kecamatan</label>
			<select class="form-control" id="id_kelurahan" name="id_kelurahan">
				@if($kecamatan->count())
					@foreach($kecamatan as $v)
						<option value="{{ $v->id }}">{{ $v->nama_kecamatan }}</option>
					@endforeach
				@endif
			</select>
		</div>
		<div class="form-group">
			<label for="nama_kelurahan">Nama Kelurahan</label>
			<input type="text" class="form-control" id="nama_kelurahan" name="nama_kelurahan" placeholder="Nama Kelurahan"required>
		</div>
		<div class="col-md-12" style="text-align: right;">
			<input type="submit" class="btn btn-success" value="Simpan Data">
		</div>
	</form>
 
@endsection

@section('script')
    
@endsection