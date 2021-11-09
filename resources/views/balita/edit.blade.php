@extends('template')

@section('container')
 
	<a href="/balita" class="btn btn-default"> Kembali</a>
		
	<br/>
	<br/>

	<form action="/balita/update/{{ $balita->id }}" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nama_balita">Nama Balita</label>
			<input type="text" class="form-control" id="nama_balita" name="nama_balita" placeholder="Nama Balita" value="{{ $balita->nama_balita }}">
		</div>
		<div class="form-group">
			<label for="nik_ortu">NIK Ortu</label>
			<input type="number" class="form-control" id="nik_ortu" name="nik_ortu" placeholder="NIK Ortu" value="{{ $balita->nik_ortu }}">
		</div>
		<div class="form-group">
			<label for="nama_ortu">Nama Ortu</label>
			<input type="text" class="form-control" id="nama_ortu" name="nama_ortu" placeholder="Nama Ortu" value="{{ $balita->nama_ortu }}">
		</div>
		<div class="form-group">
			<label for="tgllahir_balita">Tanggal Lahir Balita</label>
			<input type="date" class="form-control" id="tgllahir_balita" name="tgllahir_balita" placeholder="Tanggal Lahir Balita" value="{{ $balita->tgllahir_balita }}">
		</div>
		<div class="form-group">
			<label for="jk_balita">Jenis Kelamin Balita</label><br>
			<input type="radio" id="jk_balita_l" name="jk_balita" value="L" {{ $balita->jk_balita == 'L' ? 'checked="checked"' : '' }}> Laki-Laki<br>
			<input type="radio" id="jk_balita_p" name="jk_balita" value="P" {{ $balita->jk_balita == 'P' ? 'checked="checked"' : '' }}> Perempuan
		</div>
		<div class="form-group">
			<label for="status">Status</label><br>
			<input type="radio" id="status_1" name="status" value="1" {{ $balita->status == '1' ? 'checked="checked"' : '' }}> Gizi Baik<br>
			<input type="radio" id="status_2" name="status" value="2" {{ $balita->status == '2' ? 'checked="checked"' : '' }}> Gizi Cukup<br>
			<input type="radio" id="status_3" name="status" value="3" {{ $balita->status == '3' ? 'checked="checked"' : '' }}> Gizi Kurang<br>
			<input type="radio" id="status_4" name="status" value="4" {{ $balita->status == '4' ? 'checked="checked"' : '' }}> Gizi Buruk
		</div>
		<div class="form-group">
			<label for="id_posyandu">Posyandu</label>
			<select class="form-control" id="id_posyandu" name="id_posyandu">
				@if($posyandu->count())
					@foreach($posyandu as $v)
						<option value="{{ $v->id }}" {{ $balita->id_posyandu == $v->id ? 'selected="selected"' : '' }}>{{ $v->nama_posyandu }}</option>
					@endforeach
				@endif
			</select>
		</div>
		<div class="col-md-12" style="text-align: right;">
			<input type="submit" class="btn btn-success" value="Simpan Data">
		</div>
	</form>
 
@endsection

@section('script')
    
@endsection