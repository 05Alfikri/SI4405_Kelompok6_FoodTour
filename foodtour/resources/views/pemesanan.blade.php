@extends('layouts.layouts')

@section('content')

<div>
    <p style="position: absolute; width: 100px; height: 29px; left: 48.5%; top: 150px;"> Pemesanan </p>

    <div class="container" style="position: absolute; width: 47px; height: 47px; left: 50%; top: 194px; background: #4C7972; border-radius: 50%;"></div>
    <p style="position: absolute; height: 47px; left: 51.5%; top: 205px; color: white;">1</p>
</div>

<div class="container py-5" style="margin-top: 20%;">
    <div class="row">
        <div class="col-lg-6">
            <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/rsfit621414gsm/events/2022/12/08/f55dce74-9b74-43f3-a888-450b4549acf6-1670493871235-e1a71c3bc50803e11fe9e9627fc2cd88.jpg" class="img-fluid">
        </div>
        <div class="col-lg-6">
            <form method="POST" action="{{ url('pemesanan') }}" enctype="multipart/form-data">
                @auth
                @csrf
                <input type="hidden" name="id">
                <label for="date" class="fw-bold">Tanggal pemesanan</label>
                <input type="date" id="mobil" class="form-control mb-3" name="mobil">
                <label for="pemilik" value="{{ auth()->user()->name }}" class="fw-bold">Nama pemesan</label>
                <input type="text" id="pemilik" class="form-control mb-3" name="pemilik">
                <label for="number" class="fw-bold">Nomor ponsel</label>
                <input type="text" id="merk" class="form-control mb-3" name="merk">
                <label for="email" class="fw-bold">Email</label>
                <input type="email" id="date" class="form-control mb-3" name="email">
                <label for="number" class="fw-bold">Jumlah tiket</label>
                <input type="text" id="merk" class="form-control mb-3" name="merk">
                <label for="number" class="fw-bold">Total</label>
                <input type="number" id="total" class="form-control mb-3" name="foto" value="50.000">
        </div>

        <table style="padding: 20px;">
            <tr>
                <td> <input type="radio" name="syariah" style="width: 15px; height: 15px; margin-right:10px;"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Bank_Syariah_Indonesia.svg/2560px-Bank_Syariah_Indonesia.svg.png" width="150px" alt=""></td>
                <td> <input type="radio" name="mandiri" style="width: 15px; height: 15px; margin-right:10px;"><img src="https://logos-download.com/wp-content/uploads/2016/06/Mandiri_logo.png" width="150px" alt=""></td>
                <td> <input type="radio" name="bca" style="width: 15px; height: 15px; margin-right:10px;"><img src="http://infobanking.files.wordpress.com/2009/12/logo-bank-bca1.jpg" width="150px" alt=""></td>
                <td> <input type="radio" name="bni" style="width: 15px; height: 15px; margin-right:10px;"><img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/1200px-BNI_logo.svg.png" width="150px" alt=""></td>
            </tr>

            <tr>
                <td> <br><input type="radio" name="bni" style="width: 15px; height: 15px; margin-right:10px;"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Logo_dana_blue.svg/2560px-Logo_dana_blue.svg.png" width="150px" alt=""></td>
                <td> <br><input type="radio" name="bni" style="width: 15px; height: 15px; margin-right:10px;"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Gopay_logo.svg/2560px-Gopay_logo.svg.png" width="150px" height="50px" alt=""></td>
                <td> <br><input type="radio" name="bni" style="width: 15px; height: 15px; margin-right:10px;"><img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/1081027ebaed20dc6155d99946411a8721f1de6224d0b646a5c767072dfb1afb.png" width="150px" height="100px" alt=""></td>
            </tr>
        </table>
        <button type="submit" class="btn btn-success px-6">Lanjutkan Pembayaran</button>
        @endauth
        </form>


        @endsection