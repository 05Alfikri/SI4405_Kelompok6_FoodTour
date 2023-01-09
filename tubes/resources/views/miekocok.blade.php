@extends('layouts.layouts')

@section('content')

<body style="font-family: 'League Spartan', sans-serif;">

    <div class="container" style=" font-weight: 400; font-style: normal; line-height: 20px; color: #000000;">
        <p class="resep" style="position: absolute; width: 147px; height: 20px; left: 49px; top: 128px;">Resep Makanan </p>
        <span class="material-symbols-outlined" style="position: absolute;    width: 18px;        height: 17px;        left: 186px;        top: 127px;"> arrow_right </span>
        <p class="mie kocok" style="position: absolute;    width: 100px;        height: 20px;        left: 233px;        top: 128px;"> Mie Kocok </p>
    </div>

    <div style="position: absolute;  width: 386px; height: 110px; left: 49px; top: 209px;
    font-style: normal; font-weight: 700; font-size: 59.9089px; line-height: 55px; color: #000000;;">

        <p>
            Mie Kocok Khas Bandung Harga : Rp. 15.0000
        <p>
    </div>
    </br>
    </br>
    </br>

    <div style="line-height: 21.14px; position: absolute; width:550px; height: 21px; top: 550px; left: 49px; font-weight: 400px; font-size: 22.9813px;">

        <strong>
            <p> Bahan-bahan : </p>
        </strong>

        <li>Kaki sapi, cuci bersih - 1 buah</li>
        <li>Air - 3 liter</li>
        <li>Mie basah pipih, cuci dengan air bersih - 500 gram</li>
        <li>Tauge, cuci dengan air bersih - 250 gram</li>
        <li>Bawang merah, haluskan - 5 buah</li>
        <li>Bawang putih, haluskan - 5 siung</li>
        <li>Daun salam - 2 lembar</li>
        <li>Daun jeruk - 5 lembarJahe - 3 cm</li>
        <li>Merica bubuk - 1,5 sdt</li>
        <li>Garam - 3 sdmGula - 1 sdm</li>
    </div>

    <div>
        <img src="https://awsimages.detik.net.id/community/media/visual/2021/05/16/mie-kocok-bandung_43.jpeg?w=700&q=90" alt="" ; style="position: absolute; width: 500px; height: 500px; left: 683px; top: 209px; border-radius: 23.8565px;">

        <img src="https://i0.wp.com/rasabunda.com/wp-content/uploads/2022/05/Mie-Kocok-Bandung.jpg?fit=450%2C600&ssl=1" alt="" ; style="position: absolute; width: 500px; height: 500px; left: 683px; top: 750px; border-radius: 23.8565px;">
    </div>

    <div style="position: absolute; width: 500px; height: 21px; left: 49px; top: 850px; font-style: normal; font-weight: 400;    font-size: 22.9813px;    line-height: 25px; color: #000000;">
        <p>Pelengkap :</p>

        <li>Bawang merah goreng - secukupnya</li>
        <li>Irisan daun bawang - secukupnya</li>
        <li>Irisan seledri - secukupnya</li>
        <li>Irisan jeruk nipis / limau - secukupnya</li>
        <li>Sambal - secukupnya</li>
    </div>

    <div style="position: absolute;    width: 500px;    height: 25px;    left: 49px;    top: 1050px; text-align: justify;   font-style: normal;    font-weight: 400;    font-size: 22.9813px;    line-height: 21px;    color: #000000;">
        <p>Langkah :</p>

        <p> 1. Rebus kaki sapi hingga empuk. Angkat dan tiriskan (jangan dibuang air sisa rebusannya). Potong-potong kecil sesuai selera. Masukkan kembali ke dalam air rebusan. Didihkan kembali dan sisihkan. </p>
        <p> 2. Panaskan minyak. Tumis bawang merah dan bawang putih hingga harum. Angkat lalu tuang ke dalam panci rebusan kaki sapi. Aduk rata. </p>
        <p> 3. Masukkan jahe, daun jeruk, daun salam, garam, gula, dan merica. Aduk rata dan masak hingga mendidih. Koreksi rasanya. Matikan api. </p>
        <p> 4. Penyajian: Tata mie dan toge dalam mangkuk. Beri kikil/kaki sapi. Siram dengan kuah. Beri taburan bawang merah goreng, irisan daun bawang, dan irisan seledri. </p>

        <p> TIPS

        <p> 1. Agar tidak repot, bisa minta penjual kaki sapi untuk sekaligus memotong-motongnya menjadi beberapa bagian lebih kecil. </p>
        <p> 2. Agar cepat empuk, kaki sapi bisa direbus menggunakan panci presto. Pakailah GM Bear Panci Presto (Lihat di Lazada DISKON) yang dibuat dengan material bermutu tinggi serta dilengkapi fitur kedap udara pada tutup panci yang menaikkan suhu secara drastis sehingga mampu membuat kaki sapi cepat lunak. </p>

        <a href="{{ 'pemesananMakanan' }}"><button type="button" class="btn btn-success btn-lg;">Pesan sekarang</button></a><br>

    </div>

    <div>
        <div class="container" style="position: absolute; width: 72px; height: 36px; left: 211px; top: 540px;   
        background: #D0B8A0; border-radius: 15px;"></div>
        <p style="position: absolute; width: 72px; height: 36px; left: 220px; top: 549px; font-style: normal;font-weight: 700; font-size: 22.9813px; line-height: 21px; color: #FFFFFF;">hasil</p>

        <div class="container" style="position: absolute; width: 98px;height: 36px; left: 287px; top: 540px; background: #905B3C;
        border-radius: 15px;"></div>
        <p style="position: absolute; width: 90px; height: 36px; left: 298px; top: 549px; font-style: normal;font-weight: 700; font-size: 22.9813px; line-height: 21px; color: #FFFFFF;"> 4 porsi </p>
    </div>

</body>

@endsection