@extends('layouts/main')

@section('container')
    <h1>About</h1>

    <article class="my-5">
        <img src="img/{{ $paskal1 }}" alt="{{ $paskal1 }}" width="150" class="img-thumbnail rounded-circle">
        <h4>{{ $nama1 }}</h4>
        <p>{{ $nim1 }}</p>
        <img src="img/{{ $dhiba1 }}" alt="{{ $dhiba1 }}" width="150" class="img-thumbnail rounded-circle">
        <h4>{{ $nama2 }}</h4>
        <p>{{ $nim2 }}</p>
    </article>
    
@endsection
    
