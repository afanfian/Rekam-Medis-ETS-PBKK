@extends('layouts.main')

@section('title', 'Formulir Rekam Medis')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Rekam Medis</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    {{-- Font Style --}}
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    {{-- CSS --}}
    <link rel="stylesheet" href="/css/style.css">
</head>
<body style="font-family: Poppins; color:white; background-color: white; padding-top:50px; ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center" style="font-weight: bold">Formulir Rekam Medis</h3>
                            <br/>
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            <br/>
                             <!-- form hasil -->
                            <form action="/hasil" method="post" enctype="multipart/form-data" style="font-size: 1.2em">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="namapasien">Nama Pasien</label>
                                    <input class="form-control" type="text" name="namapasien" value="{{ old('namapasien') }}">
                                </div>
                                <div class="form-group">
                                    <label for="namadosen">Nama Dokter</label>
                                    <input class="form-control" type="text" name="namadosen" value="{{ old('namadosen') }}">
                                </div>
                                <div class="form-group">
                                    <label for="usia">Usia</label>
                                    <input class="form-control" type="text" name="usia" value="{{ old('usia') }}">
                                </div>
                                <div class="form-group">
                                    <label for="jeniskelamin">Jenis Kelamin (L/P)</label>
                                    <input class="form-control" type="text" name="jeniskelamin" value="{{ old('jeniskelamin') }}">
                                </div>
                                <div class="form-group">
                                    <label for="kondisikesehatan">Kondisi Kesehatan</label>
                                    <input class="form-control" type="text" name="kondisikesehatan" value="{{ old('kondisikesehatan') }}">
                                </div>
                                <div class="form-group">
                                    <label for="suhutubuh">Suhu Tubuh (C)</label>
                                    <input class="form-control" type="text" name="suhutubuh" value="{{ old('suhutubuh') }}">
                                </div>
                                <div class="form-group">
                                    <label for="foto">Resep Obat</label>
                                    <input type="file" class="form-control-file" id="resepobat" name="resepobat" accept="image/png, image/jpg, image/jpeg">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1" >Tolong diteliti dan dicentang!</label>
                                </div>
                                <div class="form-group" style="text-align: center;">
                                    <input class="btn btn-primary" type="submit" value="Kirim" style="">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>