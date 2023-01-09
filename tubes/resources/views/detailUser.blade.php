@extends('layouts.layouts')

@section('content')

<body>
    <br>
    <br>
    <h2 class="text-center">Detail Tiket</h2>

    <div class="container;" style="margin-top: 50px; margin-left: 150px; margin-right: 150px;">
        <div class="judul-kategori" style="background-color: #E2E2E2 ; padding-left: 10px; padding-right: 20px; padding-bottom: 30px; border-radius: 10px;">
            <form style="padding-top:20px; padding-left:300px;">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Pemesan :</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama" name="name" value="{{$data['name']}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Nomor HP :</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="hp" name="no_hp" value="{{$data['no_hp']}}">
                    </div>
                      
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Email :</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" name="email" value="{{$data['email']}}">
                    </div>
                      
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Jumlah Tiket :</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{$data['jumlah']}}">
                    </div>
                      
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Total :</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="total" name="total" value="{{$data['total']}}">
                    </div>
                      
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Status :</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="total" name="total" value="{{$data['status']}}">
                    </div>
                      
                </div>
            </form> <br>

            <center><a href="{{URL::previous()}}"><button type="button" class="btn btn-success btn-lg;">OK</button></a></center>

        </div>
    </div>

</body>
<br>
@include('layouts.footer')
@endsection