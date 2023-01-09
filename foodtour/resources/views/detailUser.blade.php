@extends('layouts.layouts')

@section('content')

<body>
    
    <div class="container;" style="margin-top: 150px; margin-left: 150px; margin-right: 150px;">
        <div class="judul-kategori" style="background-color: #E2E2E2 ; padding-left: 10px; padding-right: 20px; padding-bottom: 30px; border-radius: 10px;">
            <form class="form-inline; fw-bold" action="#" style="padding-top: 30px; padding-left: 25%;">
                <div class="row">
                    <label class="col-sm-auto" for="email"> Nama pemesan : </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="nama" value="Anisa Wahyu">
                    </div>
                </div><br>

                <div class="row">
                    <label class="col-sm-auto" for="email"> Nomor HP : </label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="hp" value="09876543321">
                    </div>
                </div><br>

                <div class="row">
                    <label class="col-sm-auto" for="email"> Email : </label>
                    <div class="col-sm-4">
                        <input type="email" class="form-control" id="email" value="anisawhy@gmail.com">
                    </div>
                </div><br>

                <div class="row">
                    <label class="col-sm-auto" for="email"> Jumlah tiket : </label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="jumlah" value="2">
                    </div>
                </div><br>

                <div class="row">
                    <label class="col-sm-auto" for="email"> Total : </label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="total" value="50.000">
                    </div>
                </div>
            </form>   <br>
            
            <center><a href=""><button type="button" class="btn btn-success btn-lg;">OK</button></a></center>

        </div>
    </div>

</body>

@endsection