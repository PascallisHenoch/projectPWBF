@extends('layouts/main')

@section('container')
    <h1>Informasi</h1>
    <article class="my-4">
        <img src="img/{{ $image1 }}" alt="{{ $image1 }}">
        @foreach ($posts as $post)
        <article class="my-3">
            <a href="/posts/{{ $post["slug"] }}"><h2>{{ $post["title"] }}</a>
            <h5>By: {{ $post["author"] }}</h5>
            <p>{{ $post["body"] }}</p>
        </article>
    </article>
    @endforeach
    
@endsection

