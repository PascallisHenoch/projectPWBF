@extends('template')

@section('container')
 
	<a href="/kelurahan" class="btn btn-default"> Kembali</a>
		
	<br/>
	<br/>

	@foreach($kelurahan as $v)
		<form action="/kelurahan/update/{{ $v->id }}" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $v->id }}">
			<div class="form-group">
				<label for="id_kelurahan">Nama Kecamatan</label>
				<select class="form-control" id="id_kelurahan" name="id_kelurahan">
					@if($kecamatan->count())
						@foreach($kecamatan as $v2)
							<option value="{{ $v2->id }}" {{ $v->id_kelurahan == $v2->id ? 'selected="selected"' : '' }}>{{ $v2->nama_kecamatan }}</option>
						@endforeach
					@endif
				</select>
			</div>
			<div class="form-group">
				<label for="nama_kelurahan">Nama Kelurahan</label>
				<input type="text" class="form-control" id="nama_kelurahan" name="nama_kelurahan" placeholder="Nama Kelurahan" value="{{ $v->nama_kelurahan }}">
			</div>
			<div class="col-md-12" style="text-align: right;">
				<input type="submit" class="btn btn-success" value="Simpan Data">
			</div>
		</form>
	@endforeach
 
@endsection

@section('script')
    
@endsection