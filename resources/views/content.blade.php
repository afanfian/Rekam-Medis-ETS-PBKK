@extends('layouts.main')

@section('title', 'Article')

@section('container')
{{-- Font Poppins --}}
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <article class="mb-5" style="padding-top: 5%; font-family: Poppins;">
        <h1>{{ $article->title }} </h1>
        <h5>By. {{  $article->user->name }} in <a href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a></h5>
        <hr>
        <h4>By: {{  $article->author }}</h4>
        <p style="text-align:justify">{{  $article->body }}</p>
    </article>
@endsection