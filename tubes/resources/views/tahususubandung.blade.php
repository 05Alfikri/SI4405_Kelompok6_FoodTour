@extends('layouts.layouts')

@section('content')

<body style="font-family: 'League Spartan', sans-serif;">

    <div class="container" style=" font-weight: 400; font-style: normal; line-height: 20px; color: #000000;">
        <p class="resep" style="position: absolute; width: 147px; height: 20px; left: 49px; top: 128px;">Resep Makanan </p>
        <span class="material-symbols-outlined" style="position: absolute;    width: 18px;        height: 17px;        left: 186px;        top: 127px;"> arrow_right </span>
        <p class="mie kocok" style="position: absolute;    width: 150px;        height: 20px;        left: 233px;        top: 128px;"> Tahu Susu Bandung </p>
    </div>

    <div style="position: absolute;  width: 386px; height: 110px; left: 49px; top: 209px;
    font-style: normal; font-weight: 700; font-size: 59.9089px; line-height: 55px; color: #000000;;">
        <p>
            Tahu Susu Bandung
            Rp. 15.000

        <p>

    </div>

    <div style="line-height: 21.14px; position: absolute; width: 560px; height: 21px; top: 450px; left: 49px; font-weight: 400px; font-size: 22.9813px;">
        <strong>
            <p> Bahan-bahan : </p>
        </strong>

        <li>10 potong tahu putih</li>
        <li>10 siung bawang putih yang telah dihaluskan</li>
        <li>2 sendok teh baking soda</li>
        <li>2 sendok makan kaldu bubuk</li>
        <li>2 sendok makan garam</li>
        <li>2 sendok teh baking powder double acting</li>
        <li>Air secukupnya</li>
        <li>5 buah cabai</li>
        <li>Kecap manis</li>
    </div>

    <div>
        <img src="https://tempatwisatadibandung.info/wp-content/uploads/2020/01/tahu_susu_lembang_terdekat.jpg" alt="" ; style="position: absolute; width: 500px; height: 500px; left: 683px; top: 209px; border-radius: 23.8565px;">

        <img src="https://i0.wp.com/i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/8ef0e70a-3e32-4bf1-af17-2a28fdf19468_Go-Biz_20211202_112535.jpeg" alt="" ; style="position: absolute; width: 500px; height: 500px; left: 683px; top: 750px; border-radius: 23.8565px;">
    </div>

    <div style="position: absolute; width: 500px; height: 21px; left: 49px; top: 730px; font-style: normal; font-weight: 400; font-size: 22.9813px; line-height: 21px; color: #000000;">
        <strong>
            <p> Langkah :</p>
        </strong>
        <ol>
            <li> Tuang air ke dalam panci, kemudian didihkan. Tambahkan bawang, kaldu bubuk, dan garam ke dalamnya. Rebus sejenak, lalu matikan api. Masukkan semua baking powder ke dalamnya, kemudian aduk kembali. </li><br>
            <li> Potong tahu menjadi beberapa bagian sesuai selera, lalu letakkan di dalam wadah. Tuang campuran air rebusan ke dalam wadah berisi tahu. Diamkan selama kurang lebih tiga jam, pastikan semua tahu terendam. </li><br>
            <li> Goreng tahu yang telah ditiriskan dari air berisi campuran soda sampai berwarna kecokelatan. Angkat dan sajikan selagi hangat! </li><br>
        </ol>

        <strong>
            <p> Cara membuat Sambal Kecap </p>
        </strong>
        <ol>
            <li> Cincang halus bawang putih dan cabai. </li><br>
            <li> Tuangkan kecap manis dan sejumput garam </li><br>
            <li> Lalu aduk hingga rata </li><br>
            <li> Sambal kecap siap dinikmati bersama tahu susu goreng </li><br>
        </ol>

        <a href="{{ 'pemesananMakanan' }}"><button type="button" class="btn btn-success btn-lg;">Pesan sekarang</button></a><br>
    </div>

    <div>
        <div class="container" style="position: absolute; width: 72px; height: 36px; left: 211px; top: 445px;   
        background: #D0B8A0; border-radius: 15px;"></div>
        <p style="position: absolute; width: 72px; height: 36px; left: 220px; top: 450px; font-style: normal;font-weight: 700; font-size: 22.9813px; line-height: 21px; color: #FFFFFF;">hasil</p>

        <div class="container" style="position: absolute; width: 98px;height: 36px; left: 287px; top: 445px; background: #905B3C;
        border-radius: 15px;"></div>
        <p style="position: absolute; width: 90px; height: 36px; left: 298px; top: 450px; font-style: normal;font-weight: 700; font-size: 22.9813px; line-height: 21px; color: #FFFFFF;"> 2 porsi </p>
    </div>

</body>

@endsection