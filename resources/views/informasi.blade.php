@extends('template')

@section('container')
    <h1>Informasi</h1>
    <article class="my-4">
        <img src="img/{{ $image1 }}" alt="{{ $image1 }}">
        @foreach ($posts as $post)

        <article class="mb-5 border-buttom pb-3">
            <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>


            <p>By. Kelompok4</p>
            <p>{{ $post->excerpt }}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More..</a>
        </article>
    </article>
    @endforeach
    
@endsection

