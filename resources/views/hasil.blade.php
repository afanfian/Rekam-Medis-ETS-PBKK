<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Keterangan Mahasiswa Aktif ITS</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    {{-- Font Style --}}
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    {{-- CSS --}}
    <link rel="stylesheet" href="/css/style.css">
</head>
    <body style="font-family: Poppins; color:white; background-color: white ">
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <p style="text-align: center"><img src="/img/lambang-its.png" alt="Logo ITS" width="100px"></p>
                            <h3 style="text-align: center; margin-bottom: 10%; font-weight: bold;">Formulir Rekam Medis</h3>
                            <table class="table table-bordered table-striped" style="font-size: 1.2em">
                                <tr>
                                    <td style="width:150px">Nama Pasien</td>
                                    <td>{{ $data->namapasien }}</td>
                                </tr>
                                <tr>
                                    <td style="width:150px">Nama Dosen</td>
                                    <td>{{ $data->namadosen }}</td>
                                </tr>
                                <tr>
                                    <td style="width:150px">Usia</td>
                                    <td>{{ $data->usia }}</td>
                                </tr>
                                <tr>
                                    <td style="width:200px">Jenis Kelamin (L/P)</td>
                                    <td>{{ $data->jeniskelamin}}</td>
                                </tr>
                                <tr>
                                    <td style="width:200px">Kondisi Kesehatan</td>
                                    <td>{{ $data->kondisikesehatan}}</td>
                                </tr>
                                <tr>
                                    <td style="width:200px">Suhu Tubuh (C)</td>
                                    <td>{{ $data->suhutubuh}}</td>
                                </tr>
                                <tr>
                                    <td style="width:150px">Resep Obat</td>
                                    <td><img src="{{ $data->resepobat }}" alt="" width="200px"></td>
                                </tr>
                            </table>
                            <p style="text-align: center"><a href="/main" class="btn btn-primary" style="text-align: center" >Kembali</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@include('sweetalert::alert')
</html> 