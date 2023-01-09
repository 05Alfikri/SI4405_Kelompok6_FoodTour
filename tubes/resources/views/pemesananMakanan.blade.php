@extends('layouts.layouts')

@section('content')

<body style="font-family: 'League Spartan', sans-serif;">

    <div>
        <strong>
            <p style="position: absolute; width: 500px; height: 29px; left: 40%; top: 100px; font-size: 30px;"> Edit Pesanan Makanan </p>
        </strong>

        <div class="container py-5" style="margin-top: 10%;">
            <div class="row">
                <div class="col-lg-6">
                    <img src="https://rasabunda.com/wp-content/uploads/2021/03/Batagor-Bandung.jpg" width="80%" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <form method="POST" action="{{ url('pemesananMakanan') }}" enctype="multipart/form-data">
                        @auth
                        @csrf

                        <input type="text" value="{{ auth()->user()->id }}" style="display: none;" name="id_user">
                        <label for="text" class="fw-bold">Nama Pemesan</label>
                        <input type="text" id="name" class="form-control mb-3" name="name" value="{{ auth()->user()->name }}">
                        <label for="no_hp" class="fw-bold">Nomor WA</label>
                        <input type="text" id="no_hp" class="form-control mb-3" name="no_hp" value="{{ auth()->user()->no_hp }}">
                        <label for="alamat" class="fw-bold">Alamat</label>
                        <input type="text" id="alamat" class="form-control mb-3" name="alamat">
                        <label class="input-group-text" for="menu">Menu</label>
                        <select class="form-select" id="menu" name="menu">
                            <option selected>Pilih Menu yang Ingin Kamu beli</option>
                            <option value="Mie Kocok">Mie Kocok</option>
                            <option value="Batagor Bandung">Batagor Bandung</option>
                            <option value="Karedok">Karedok</option>
                            <option value=" Nasi Tutug Oncom"> Nasi Tutug Oncom</option>
                            <option value="Lotek">Lotek</option>
                            <option value="Colenak">Colenak</option>
                            <option value="Tahu Susu Bandung">Tahu Susu Bandung</option>
                        </select><br>
                        <label for="jumlah" class="fw-bold">Jumlah</label>
                        <input type="number" id="jumlah" class="form-control mb-3" name="jumlah">
                        <div class="mb-3"><br>
                            <button type="submit" class="btn btn-success px-6">Beli</button>
                            @endauth
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
@include('layouts.footer')
@endsection