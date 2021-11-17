@extends('template')

@section('container')
 
	<a href="/history_posyandu" class="btn btn-default"> Kembali</a>
		
	<br/>
	<br/>

	<form action="/history_posyandu/store" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="id_history_posyandu">Nama Balita</label>
			<select class="form-control" id="id_history_posyandu" name="id_history_posyandu">
				@if($balita->count())
					@foreach($balita as $v)
						<option value="{{ $v->id }}">{{ $v->nama_balita }}</option>
					@endforeach
				@endif
			</select>
		</div>
		<div class="form-group">
			<label for="tgl_posyandu">Tanggal Posyandu</label>
			<input type="date" class="form-control" id="tgl_posyandu" name="tgl_posyandu" placeholder="Tanggal Posyandu">
		</div>
		<div class="form-group">
			<label for="berat_badan_balita">Berat Badan</label>
			<input type="number" class="form-control" id="berat_badan_balita" name="berat_badan_balita" placeholder="Berat Badan">
		</div>
		<div class="form-group">
			<label for="tinggi_badan_balita">Tinggi Badan</label>
			<input type="number" class="form-control" id="tinggi_badan_balita" name="tinggi_badan_balita" placeholder="Tinggi Badan">
		</div>
		<div class="col-md-12" style="text-align: right;">
			<input type="submit" class="btn btn-success" value="Simpan Data">
		</div>
	</form>
 
@endsection

@section('script')
    
@endsection