{{-- Memanggil sebuah file template --}}
@extends('layouts.main')

@section('title', 'Article')

@section('container')
    {{-- Css --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- Font Poppins --}}
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <div class="header">
        <h1 style="padding-top: 5%; font-family: Poppins;">Halaman Artikel Berita</h1>
        {{-- <h3>Lumajang, Indonesia | {{ $name }} | {{ $email }}</h3> --}}
        <hr/>
        @foreach($articles as $article)
            <article class="mb-5 border-bottom pb-4">
                <h3>
                    <a href="/article/{{ $article->slug }}" class="text-decoration-none">
                    {{ $article->title }}
                    </a>                    
                </h3>
                <h5>By. <a href="/authors/{{ $article->user->username }}" class="text-decoration-none">{{ $article->user->name }}</a> in <a href="/categories/{{ $article->category->slug }}" class="text-decoration-none">{{ $article->category->name }}</a></h5>
                <p style="font-size: 20px">{{ $article->excerpt }}</p>
                <a href="/article/{{ $article->slug }}" class="text-decoration-none">Read More...</a>         
            </article>
        @endforeach
    </div>
@endsection