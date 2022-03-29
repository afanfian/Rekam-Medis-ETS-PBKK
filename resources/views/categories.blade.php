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
        <h3 class="mb-5">Catgories Article</h3>
        <hr>
        @foreach($categories as $category)
           <ul>
               <li>
                   <h3><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h3>
               </li>
           </ul>
           
        @endforeach
@endsection