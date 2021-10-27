@extends('template')

@section('container')
 
	<a href="/posyandu" class="btn btn-default"> Kembali</a>
		
	<br/>
	<br/>

	<form action="/posyandu/update/{{ $posyandu->id }}" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $posyandu->id }}">
		<div class="form-group">
			<label for="nama_posyandu">Nama Posyandu</label>
			<input type="text" class="form-control" id="nama_posyandu" name="nama_posyandu" placeholder="Nama Posyandu" value="{{ $posyandu->nama_posyandu }}" required>
		</div>
		<div class="form-group">
			<label for="id_kecamatan">Nama Kecamatan</label>
			<select class="form-control" id="id_kecamatan" name="id_kecamatan" required>
				<option value="">--</option>
				@if($kecamatan->count())
					@foreach($kecamatan as $v)
						<option value="{{ $v->id }}" {{ $posyandu->kelurahan->id_kelurahan == $v->id ? 'selected="selected"' : '' }}>{{ $v->nama_kecamatan }}</option>
					@endforeach
				@endif
			</select>
		</div>
		<div class="form-group">
			<label for="id_kelurahan">Nama Kelurahan</label>
			<select class="form-control" id="id_kelurahan" name="id_kelurahan" required>
				<option value="">--</option>
				@if($kelurahan->count())
					@foreach($kelurahan as $v)
						<option value="{{ $v->id }}" class="{{ $v->id_kelurahan }}" {{ $posyandu->id_kelurahan == $v->id ? 'selected="selected"' : '' }}>{{ $v->nama_kelurahan }}</option>
					@endforeach
				@endif
			</select>
		</div>
		<div class="form-group">
			<label for="alamat_posyandu">Alamat Posyandu</label>
			<textarea class="form-control" id="alamat_posyandu" name="alamat_posyandu" placeholder="Alamat Posyandu" required>{{ $posyandu->alamat_posyandu }}</textarea>
		</div>
		<div class="col-md-12" style="text-align: right;">
			<input type="submit" class="btn btn-success" value="Simpan Data">
		</div>
	</form>
 
@endsection

@section('script')
	<script language="JavaScript" type="text/javascript">
		$("#id_kelurahan").chained("#id_kecamatan");
  	</script>
@endsection