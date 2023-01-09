<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>invoice</title>
</head>
@extends('layouts.layouts')

@section('content')

<body>
    <br>
    <br>
    <h2 class="text-center">Detail Tiket</h2>

    <div class="container;" style="margin-top: 50px; margin-left: 150px; margin-right: 150px;">
        <div class="judul-kategori" style="background-color: #E2E2E2 ; padding-left: 10px; padding-right: 20px; padding-bottom: 30px; border-radius: 10px;">
            <form action="{{url('update-status',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Pemesan :</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama" value="{{$data['name']}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Nomor HP :</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputPassword3" value="{{$data['no_hp']}}">
                    </div>
                      
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Email :</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" value="{{$data['email']}}">
                    </div>
                      
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Jumlah Tiket :</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="jumlah" value="{{$data['jumlah']}}">
                    </div>
                      
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Total :</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="total" value="{{$data['total']}}">
                    </div>
                      
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Bukti :</label>
                    <div class="col-sm-6">
                        <a href="{{asset('food/'.$pembayaran->foto)}}" class="glightbox"><img src="{{asset('food/'.$pembayaran->foto)}}" class="menu-img img-fluid" alt="" width="400cm"></a>
                    </div>
                      
                </div>

                <label class="input-group-text" for="inputGroupSelect01">Status</label>
                <select class="form-select" id="inputGroupSelect01" name="status">
                    <option value="1">Diproses</option>
                    <option value="Lunas">Lunas</option>
                    <option value="Ditolak">Ditolak</option>
                </select>
                <center><button type="submit" class="btn btn-primary">Update</button>
            </form> <br>

        </div>
    </div>

</body>

@endsection

</html>
@include('layouts.footer')