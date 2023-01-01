@extends('layouts.layouts')

@section('content')

<div class="container">
    <p class="login-text" style="font-size: 50px; font-weight: 700; text-align:center">Lembang Park & Zoo</p>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/images/Lembang Park & Zoo/gambar1.webp" height="550" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/assets/images/Lembang Park & Zoo/gambar2.webp" height="550" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/assets/images/Lembang Park & Zoo/gambar3.webp" height="550" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="lokasi">
        <p class="lokasi-text" style="font-size: 50px; font-weight: 700; text-align:center">Lokasi</p>
        <p style="text-align: justify;">Ada sejumlah kebun binatang berlokasi di Bandung, namun salah satu yang terkenal dan paling diminati adalah Lembang Park and Zoo.
            Datang dan menepilah sejenak dari hiruk-pikuk perkotaan. Pesan tiketnya dengan mudah di sini, lalu jumpai berbagai hewan menarik
            di tempat penangkaran yang terjaga. Nikmati hari kamu menjelajahi kebun binatang bersama keluarga dan teman-teman! Kamu bisa
            mengelilingi kebun binatang sambil berjalan kaki atau menggunakan e-scooter yang dapat disewa di lokasi. Ketika mengunjungi berbagai
            bagian di kebun binatang luas ini, kamu dapat mengamati bermacam-macam fauna yang menakjubkan mulai dari binturong hingga singa yang agung.
            Kamu bahkan bisa berinteraksi dengan hewan seperti burung unta, serta mempelajari semua yang perlu kamu ketahui tentang keanekaragaman hayati
            Indonesia dari petugas yang berwawasan luas dan para naturalis.</p>

        <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7031814976563!2d107.58939767485987!3d-6.805915393191532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e1aad8ed4373%3A0x1b73fc926cc7fee6!2sLembang%20Park%20%26%20Zoo!5e0!3m2!1sen!2sid!4v1672475885312!5m2!1sen!2sid" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
    </div>

    <div class="tiket">
        <p class="tiket-text" style="font-size: 50px; font-weight: 700; text-align:center">Harga Tiket</p>
    </div>
    <div class="card text-center">
  <div class="card-header">
    Pilihan Tanggal dan Tiket
  </div>
  <div class="card-body">
    <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="nama" class="form-control">
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="nama" class="form-control">
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="nama" class="form-control">
    </div>
  </div>
</div>
<br>
@endsection