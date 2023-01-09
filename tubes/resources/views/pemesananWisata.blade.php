@extends('layouts.layouts')

@section('content')

<div>
    <p style="position: absolute; width: 100px; height: 29px; left: 48.5%; top: 90px;"> Pemesanan </p>

    <div class="container" style="position: absolute; width: 47px; height: 47px; left: 50%; top: 140px; background: #4C7972; border-radius: 50%;"></div>
    <p style="position: absolute; height: 47px; left: 51.4%; top: 153px; color: white;">1</p>
</div>

<div class="container py-5" style="margin-top: 9%;">
    <div class="row">
        <div class="col-lg-6">
            <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/rsfit621414gsm/events/2022/12/08/f55dce74-9b74-43f3-a888-450b4549acf6-1670493871235-e1a71c3bc50803e11fe9e9627fc2cd88.jpg" class="img-fluid">
        </div>
        <div class="col-lg-6">
            <form method="POST" action="{{ url('pemesananWisata') }}" enctype="multipart/form-data">
                @auth
                @csrf

                <input type="text" value="{{ auth()->user()->id }}" style="display: none;" name="id_user">
                <label class="input-group-text" for="wisata">Menu</label>
                <select class="form-select" id="wisata" name="wisata">
                    <option selected>Pilih wisata yang ingin kamu kunjungi</option>
                    <option value="Park & Zoo Lembang">Park & Zoo Lembang</option>
                    <option value="Taman Hutan Raya">Taman Hutan Raya</option>
                    <option value="Dago Dreampark">Dago Dreampark</option>
                    <option value="The Great Asia Africa Lembang">The Great Asia Africa Lembang</option>
                    <option value="Jendela Alam">Jendela Alam</option>
                    <option value="Grafika Cikole">Grafika Cikole</option>
                </select>
                <br>

                <label for="purchase_date" class="fw-bold">Tanggal pemesanan</label>
                <input type="date" id="tanngal" class="form-control mb-3" name="purchase_date">

                <label for="name" class="fw-bold">Nama pemesan</label>
                <input type="name" id="name" class="form-control mb-3" name="name" value="{{ auth()->user()->name }}" readonly>

                <label for="no_hp" class="fw-bold">Nomor ponsel</label>
                <input type="number" id="no_hp" class="form-control mb-3" name="no_hp">

                <label for="email" class="fw-bold">Email</label>
                <input type="email" id="date" class="form-control mb-3" name="email">

                <label for="jumlah" class="fw-bold">Jumlah tiket</label>
                <input type="number" id="jumlah" class="form-control mb-3" name="jumlah">

                <label class="input-group-text" for="metode_pembayaran">Pembayaran</label>
                <select class="form-select" id="metode_pembayaran" name="metode_pembayaran">
                    <option selected>Pilih metode pembayaran</option>
                    <option value="Bank Syariah Indonesia">Bank Syariah Indonesia</option>
                    <option value="Bank Mandiri">Bank Mandiri</option>
                    <option value="Bank BCA">Bank BCA</option>
                    <option value="Bank BRI">Bank BRI</option>
                    <option value="Bank BNI">Bank BNI</option>
                    <option value="DANA">DANA</option>
                    <option value="OVO">OVO</option>
                    <option value="GOPAY">GOPAY</option>
                    <option value="ShopeePay">ShopeePay</option>
                </select><br>
                
        </div>

        <button type="submit" class="btn btn-success px-6">Lanjutkan Pembayaran</button>
        @endauth
        </form>
    </div>
</div>

@include('layouts.footer')
@endsection