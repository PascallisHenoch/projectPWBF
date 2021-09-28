@extends('layouts/main')

@section('container')
    <h1>About</h1>

    <img src="img/{{ $paskal1 }}" alt="{{ $paskal1 }}" width="150" class="img-thumbnail rounded-circle">
    <h3>{{ $nama1 }}</h3>
    <p>{{ $nim1 }}</p>
    <img src="img/{{ $dhiba1 }}" alt="{{ $dhiba1 }}" width="150" class="img-thumbnail rounded-circle">
    <h3>{{ $nama2 }}</h3>
    <p>{{ $nim2 }}</p>
    
@endsection
    
