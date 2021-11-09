@extends('template')

@section('container')
 
	<a href="/balita" class="btn btn-default"> Kembali</a>
		
	<br/>
	<br/>

	<form action="/balita/store" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nama_balita">Nama Balita</label>
			<input type="text" class="form-control" id="nama_balita" name="nama_balita" placeholder="Nama Balita">
		</div>
		<div class="form-group">
			<label for="nik_ortu">NIK Ortu</label>
			<input type="number" class="form-control" id="nik_ortu" name="nik_ortu" placeholder="NIK Ortu">
		</div>
		<div class="form-group">
			<label for="nama_ortu">Nama Ortu</label>
			<input type="text" class="form-control" id="nama_ortu" name="nama_ortu" placeholder="Nama Ortu">
		</div>
		<div class="form-group">
			<label for="tgllahir_balita">Tanggal Lahir Balita</label>
			<input type="date" class="form-control" id="tgllahir_balita" name="tgllahir_balita" placeholder="Tanggal Lahir Balita">
		</div>
		<div class="form-group">
			<label for="jk_balita">Jenis Kelamin Balita</label><br>
			<input type="radio" id="jk_balita_l" name="jk_balita" value="L"> Laki-Laki<br>
			<input type="radio" id="jk_balita_p" name="jk_balita" value="P"> Perempuan
		</div>
		<div class="form-group">
			<label for="status">Status</label><br>
			<input type="radio" id="status_1" name="status" value="1"> Gizi Baik<br>
			<input type="radio" id="status_2" name="status" value="2"> Gizi Cukup<br>
			<input type="radio" id="status_3" name="status" value="3"> Gizi Kurang<br>
			<input type="radio" id="status_4" name="status" value="4"> Gizi Buruk
		</div>
		<div class="form-group">
			<label for="id_posyandu">Posyandu</label>
			<select class="form-control" id="id_posyandu" name="id_posyandu">
				@if($posyandu->count())
					@foreach($posyandu as $v)
						<option value="{{ $v->id }}">{{ $v->nama_posyandu }}</option>
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