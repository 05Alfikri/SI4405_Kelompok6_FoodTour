@extends('layouts.layouts')

@section('content')

<!--Packages Makanan-->
<center>
    <section id="packages">
        <div class="container">
            <h1>Makanan Khas Daerah</h1>
            <h5>Cari resep disini</h5>
            <br>
            <h5>List resep makanan</h5>
            <br>
            <div class="text">
                <a href="{{ 'miekocok' }}" style="color: #915A3C; ">Mie Kocok</a>
                <a href="{{ 'batagor' }}" style="color: #915A3C; ">Batagor Bandung</a>
                <a href="{{ 'karedok' }}" style="color: #915A3C; ">Karedok</a>
                <a href="{{ 'nasitutug' }}" style="color: #915A3C; ">Nasi Tutug Oncom</a>
                <a href="#" style="color: #915A3C; ">Lotek</a>
            </div>
            <br>
            <div class="text">
                <a href="#" style="color: #915A3C; ">Colenak</a>
                <a href="#" style="color: #915A3C; ">Tahu Susu Bandung</a>
                <a href="#" style="color: #915A3C; ">Surabi</a>
                <a href="#" style="color: #915A3C; ">Pisang Bollen Bandung</a>
            </div>
</center>
<br>
<!--Packages Makanan End-->
<!--Packages Wisata-->
<br>
<div class="container">
    <center>
        <h1 class="heading">
            Tempat Wisata di Bandung
        </h1>
    </center>
    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <img src="/assets/images/ParkZoo.webp" class="card-img-top" width="50" height="250" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Lembang Park & Zoo</h5>
                    <p>Lembang Park & Zoo adalah salah satu dari kebun binatang terbesar di kota Bandung, dan menjadi objek wisata populer untuk dikunjungi!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="star">4.9/5</i>
                        <i class="text">(39 ulasan)</i>
                    </div>
                    <div class="price"> Rp 115.000 per orang</span></div><br>
                    <center><a href="{{ 'book' }}" class="btn btn-primary">Book Now</a></center>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/assets/images/TamanHutanRaya.webp" class="card-img-top" width="50" height="250" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Taman Hutan Raya</h5>
                    <p>Wisata ke Tahura adalah pilihan yang pas kalau kamu ingin mencoba jalan-jalan di tengah hutan tapi tanpa jauh-jauh keluar kota.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="star">5/5</i>
                        <i class="text">(3 ulasan)</i>
                    </div>
                    <div class="price"> Rp 67.000 per orang</span></div><br>
                    <center><a href="{{ 'book' }}" class="btn btn-primary">Book Now</a></center>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/assets/images/DagoDreamPark.webp" class="card-img-top" width="50" height="250" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dago Dreampark</h5>
                    <p>Di sini, kamu bisa mengambil foto unik di berbagai spot foto penuh warna, seperti Sky Tree, Flying Lounge, Love Seat, Up House, dan lainnya</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="star">5/5</i>
                        <i class="text">(7 ulasan)</i>
                    </div>
                    <div class="price"> Rp 32.000 per orang</span></div><br>
                    <center><a href="{{ 'book' }}" class="btn btn-primary">Book Now</a></center>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <img src="/assets/images/TheGreatAsiaAfricaLembang.webp" class="card-img-top" width="50" height="250" alt="...">
                <div class="card-body">
                    <h5 class="card-title">The Great Asia Africa Lembang</h5>
                    <p>Di sini, kamu bisa berfoto-foto menggunakan hanbok dengan latar belakang ala rumah-rumah di Korea dan menikmati warna-warni dinding di Maroko.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="star">4.2/5</i>
                        <i class="text">(9 ulasan)</i>
                    </div>
                    <div class="price"> Rp 44.000 per orang</span></div><br>
                    <center><a href="{{ 'book' }}" class="btn btn-primary">Book Now</a></center>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/assets/images/JendelaAlam.webp" class="card-img-top" width="50" height="250" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Jendela Alam</h5>
                    <p>Kunjungi Jendela Alam Bandung dan eksplor berbagai aktivitas dan permainan menarik, mulai dari bertani, memberi makan hewan hingga memanen telur.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="star">4.5/5</i>
                        <i class="text">(15 ulasan)</i>
                    </div>
                    <div class="price"> Rp 122.000</span></div><br>
                    <center><a href="{{ 'book' }}" class="btn btn-primary">Book Now</a></center>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/assets/images/GrafikaCikole.webp" class="card-img-top" width="50" height="250" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Grafika Cikole</h5>
                    <p>Grafika Cikole bukan saja menawarkan penginapan dengan suasana menyenangkan khas Hutan Pinus, tetapi juga berbagai aktivitas outdoor.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="star">4.7/5</i>
                        <i class="text">(22 ulasan)</i>
                    </div>
                    <div class="price"> Rp 125.000 per orang</span></div><br>
                    <center><a href="{{ 'book' }}" class="btn btn-primary">Book Now</a></center>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!--Packages Wisata-->
    </section>

    @endsection