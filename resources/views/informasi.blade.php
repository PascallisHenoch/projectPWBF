
@extends('layouts/main')

@section('container')
    <h1>Informasi</h1>
    <img src="img/{{ $image1 }}" alt="{{ $image1 }}">
    @foreach ($posts as $post)
    <article class="mb-5">
        <a href="/posts/{{ $post["slug"] }}"><h2>{{ $post["title"] }}</a>
        </h2>
        <h5>By: {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>
    @endforeach
    
@endsection

