@extends('layouts.layouts')

@section('content')

<body style="font-family: 'League Spartan', sans-serif;">

    <div class="container" style=" font-weight: 400; font-style: normal; line-height: 20px; color: #000000;">
        <p class="resep" style="position: absolute; width: 147px; height: 20px; left: 49px; top: 128px;">Resep Makanan </p>
        <span class="material-symbols-outlined" style="position: absolute;    width: 18px;        height: 17px;        left: 186px;        top: 127px;"> arrow_right </span>
        <p class="mie kocok" style="position: absolute;    width: 100px;        height: 20px;        left: 233px;        top: 128px;"> lotek </p>
    </div>

    <div style="position: absolute;  width: 386px; height: 110px; left: 49px; top: 209px;
    font-style: normal; font-weight: 700; font-size: 59.9089px; line-height: 55px; color: #000000;;">
        <p>
            Lotek Harga : Rp. 12.0000

        <p>
    </div>
    </br>
    </br>
    </br>

    <div style="line-height: 21.14px; position: absolute; width: 560px; height: 21px; top: 400px; left: 49px; font-weight: 400px; font-size: 22.9813px;">

        <strong>
            <p> Bahan-bahan : </p>
        </strong>

        <li>Kangkung - 1 ikat</li>
        <li>Bayam - 1 ikat</li>
        <li>Tauge - 100 gram</li>
        <li>Kacang panjang - 100 gram </li>
        <li>Labu siam - 100 gram</li>

    </div>

    <div>
        <img src="https://i0.wp.com/resepkoki.id/wp-content/uploads/2017/05/Resep-Lotek.jpg?fit=500%2C659&ssl=1" alt="" ; style="position: absolute; width: 500px; height: 500px; left: 683px; top: 209px; border-radius: 23.8565px;">

        <img src="https://www.masakapahariini.com/wp-content/uploads/2021/02/Lotek-Bandung-Sederhana.jpg" alt="" ; style="position: absolute; width: 500px; height: 500px; left: 683px; top: 750px; border-radius: 23.8565px;">
    </div>

    <div class="pelengkap" style="position: absolute; width: 560px; height: 21px; left: 49px; top: 570px; font-style: normal; font-weight: 400; font-size: 22.9813px; line-height: 21px; color: #000000;">
        <strong>
            <p>Bumbu :</p>
        </strong>

        <li>Kacang tanah, goreng - 100 gram</li>
        <li>Bawang putih - 1 siung</li>
        <li>Kencur - 3 cm</li>
        <li>Cabai rawit - 3 buah</li>
        <li>Terasi, goreng - 1/2 sdt</li>
        <li>Garam - 1 sdt</li>
        <li>Gula merah - 1 sdt</li>
        <li>Air asam - 1 sdm</li>
        <li>Jeruk limau, ambil airnya - 1 buah</li>
        <li>Air matang - secukupnya</li>
        <br>

        <strong>
            <p>Pelengkap :</p>
        </strong>
        <li> Bawang merah goreng - secukupnya </li>
        <li>Kerupuk - secukupnya</li>

    </div>

    <div style="position: absolute;    width: 560px;    height: 21px;    left: 49px;    top: 990px; font-style: normal; font-weight: 400; font-size: 22.9813px; line-height: 21px; color: #000000;
    text-align: justify;">
        <strong>
            <p> Langkah :</p>
        </strong>

        <ol>
            <li> Siapkan semua sayuran. Petik dan potong-potong kangkung serta daun bayam. Cuci bersih dan tiriskan. Cuci bersih tauge, kacang panjang, kol, dan labu siam. Potong-potong kacang panjang dan kol. Iris kecil labu siam. </li><br>
            <li> Rebus masing-masing sayuran. Angkat dan tiriskan. </li><br>
            <li> Haluskan bawang putih, kencur, cabai rawit, dan garam. </li><br>
            <li> Tambahkan kacang tanah goreng dan gula merah. Haluskan kembali. </li><br>
            <li> Tuang air asam, air perasan jeruk limau, dan air matang secukupnya hingga saus berubah jadi pasta. </li><br>
            <li> Masukan sayur rebus. Aduk rata hingga sayur terlumuri oleh saus seluruhnya.</li><br>
            <li> Tata di piring dan siap disajikan bersama bahan pelengkap.</li><br>
        </ol>

        <strong>
            <p> Tips : </p>
        </strong>

        <ol>
            <li> Sayuran jangan direbus terlalu lama agar teksturnya tetap terjaga.</li><br>
            <li> Rebus sayuran menggunakan GM Bear Panci Stainless Steel 24 CM (Lihat di Lazada DISKON) agar nutrisinya tetap terjaga.</li><br>

        </ol>

        <a href="{{ 'pemesananMakanan' }}"><button type="button" class="btn btn-success btn-lg;">Pesan sekarang</button></a><br>

    </div>

    <div>
        <div class="container" style="position: absolute; width: 72px; height: 36px; left: 211px; top: 390px;   
        background: #D0B8A0; border-radius: 15px;"></div>
        <p style="position: absolute; width: 72px; height: 36px; left: 220px; top: 396px; font-style: normal;font-weight: 700; font-size: 22.9813px; line-height: 21px; color: #FFFFFF;">hasil</p>

        <div class="container" style="position: absolute; width: 98px;height: 36px; left: 287px; top: 390px; background: #905B3C;
        border-radius: 15px;"></div>
        <p style="position: absolute; width: 90px; height: 36px; left: 298px; top: 396px; font-style: normal;font-weight: 700; font-size: 22.9813px; line-height: 21px; color: #FFFFFF;"> 4 porsi </p>
    </div>

</body>

@endsection