@extends('layouts/main')

@section('container')
    <h1>Informasi</h1>
    <article class="my-4">
        <img src="img/{{ $image1 }}" alt="{{ $image1 }}">
        @foreach ($posts as $post)
        <article class="my-3">
            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>{{ $post->excerpt }}</p>
        </article>
    </article>
    @endforeach
    
@endsection

