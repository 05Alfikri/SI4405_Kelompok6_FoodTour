@extends('layouts.layouts')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>edit makanan</title>
</head>

<body style="font-family: 'League Spartan', sans-serif;">

    <div>
        <strong>
            <p style="position: absolute; width: 500px; height: 29px; left: 40%; mt-5; top: 200px; font-size: 30px;"> Edit Pesanan Makanan </p>
        </strong>

        <div class="container py-5" style="margin-top: 20%;">
            <div class="row">
                <div class="col-lg-6">
                    <img src="https://rasabunda.com/wp-content/uploads/2021/03/Batagor-Bandung.jpg" width="80%" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <form method="post" action="" enctype="multipart/form-data">
                        <input type="hidden" name="id">
                        <label for="text" class="fw-bold">Nama Pemesan</label>
                        <input type="text" id="mobil" class="form-control mb-3" name="nama">
                        <label for="pemilik" class="fw-bold">Nomor WA</label>
                        <input type="number" id="pemilik" class="form-control mb-3" name="pemilik">
                        <label for="number" class="fw-bold">Alamat</label>
                        <input type="text" id="merk" class="form-control mb-3" name="merk">
                        <label class="input fw-bold" for="inputGroupSelect01">Pilih tempat wisata</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option value="1">Karedok</option>
                            <option value="2">Batagor</option>
                            <option value="3">Colenak</option>
                        </select><br>
                        <label for="number" class="fw-bold">Jumlah</label>
                        <input type="number" id="merk" class="form-control mb-3" name="merk">
                        <label for="number" class="fw-bold">Total</label>
                        <input type="number" id="total" class="number" name="foto" value="50.000">
                        <div class="mb-3"><br>
                            <button type="submit" class="btn btn-success px-6">Update</button>
                    </form>
                </div>
            </div>

</body>

</html>
@include('layouts.footer')
@endsection