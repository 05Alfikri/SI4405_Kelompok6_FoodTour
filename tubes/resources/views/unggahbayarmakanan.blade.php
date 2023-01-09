<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>bukti pembayaran</title>
    @extends('layouts.layouts')

    @section('content')
</head>

<body>

    <div>
        <p style="position: absolute; width: 100px; height: 29px; left: 48.5%; top: 150px;"> Pemesanan </p>

        <div class="container" style="position: absolute; width: 47px; height: 47px; left: 50%; top: 194px; background: #4C7972; border-radius: 50%;"></div>
        <p style="position: absolute; height: 47px; left: 51.5%; top: 205px; color: white;">3</p>
    </div>

    <div style="background-color: white; border-radius: 20px; padding: 15px; margin-top: 25%; margin-bottom: 5%;" class="container border">
        <h1 class="text-center"></h1>
        <br>
        <div class="mb-3">
            <form class="form-inline" action="{{url('/pembayaran-makanan', $data['id'])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <label class="col-sm-auto" for="email"> Nama pemesan : </label>
                    <input type="text" class="form-control" id="nama" name="name" value="{{$data['name']}}">
                </div><br>

                <div class="row">
                    <label class="col-sm-auto" for="email"> Nomor HP : </label>
                    <input type="number" class="form-control" id="hp" name="no_hp" value="{{$data['no_hp']}}">
                </div><br>

                <div class="row">
                    <label class="col-sm-auto" for="email"> Jumlah Makanan : </label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{$data['jumlah']}}">
                </div><br>

                <div class="row">
                    <label class="col-sm-auto" for="email"> Total : </label>
                    <input type="number" class="form-control" id="total" name="total" value="{{$data['total']}}">
                </div><br>

                <label for="foto" class="fw-bold">Unggah bukti pembayaran</label>
                <input type="file" id="foto" class="form-control mb-3" name="foto">

                <button type="submit" class="btn btn-success px-5">Unggah</button>
            </form>
        </div>

</body>
@endsection

</html>

@include('layouts.footer')