@extends('layouts.layouts')

@section('content')

<body style="font-family: 'League Spartan', sans-serif;">

    <div class="container" style=" font-weight: 400; font-style: normal; line-height: 20px; color: #000000;">
        <p class="resep" style="position: absolute; width: 147px; height: 20px; left: 49px; top: 128px;">Resep Makanan </p>
        <span class="material-symbols-outlined" style="position: absolute;    width: 18px;        height: 17px;        left: 186px;        top: 127px;"> arrow_right </span>
        <p class="mie kocok" style="position: absolute;    width: 100px;        height: 20px;        left: 233px;        top: 128px;"> colenak </p>
    </div>

    <div style="position: absolute;  width: 386px; height: 110px; left: 49px; top: 209px;
    font-style: normal; font-weight: 700; font-size: 59.9089px; line-height: 55px; color: #000000;;">
        <p>
            Colenak Harga : Rp. 15.000

        <p>
    </div>
    </br>
    </br>
    </br>

    <div style="line-height: 21.14px; position: absolute; width: 560px; height: 21px; top: 400px; left: 49px; font-weight: 400px; font-size: 22.9813px;">

        <strong>
            <p> Bahan-bahan : </p>
        </strong>

        <li>Tape singkong matang - 500 gram</li>
        <li>Mentega - 50 gram</li>
        <li>Kelapa parut - 200 gram</li>
        <li>Gula merah - 150 gram</li>
        <li>Gula pasir - 50 gram</li>
        <li>Santan - 100 ml</li>
        <li>Garam - 1/4 sdt</li>
        <li>Daun pandan - 2 lembar</li>

    </div>

    <div>
        <img src="https://th.bing.com/th/id/OIP.zhCKDUoyoxYSJbcaY0gstgHaE6?pid=ImgDet&rs=1" alt="" ; style="position: absolute; width: 500px; height: 500px; left: 683px; top: 209px; border-radius: 23.8565px;">

        <img src="https://cookandsee.in/wp-content/uploads/2018/05/pumpkin-milk-768x527.jpg" alt="" ; style="position: absolute; width: 500px; height: 500px; left: 683px; top: 750px; border-radius: 23.8565px;">
    </div>

    <div style="position: absolute;    width: 560px;    height: 21px;    left: 49px;    top: 640px; font-style: normal; font-weight: 400; font-size: 22.9813px; line-height: 21px; color: #000000;
    text-align: justify;">
        <strong>
            <p> Langkah :</p>
        </strong>

        <ol>
            <li> Rebus santan bersama gula merah, garam, daun pandan dan gula putih sampai gula larut, angkat lalu saring kemudian rebus kembali lalu masukan kelapa parut aduk aduk sampai mendidih, sisihkan. </li><br>
            <li> Panaskan wajan anti lengket beri sedikit margarine, panggang tape singkong sampai ke kuningan, sajikan dengan kuah kelapa parut. </li><br>
            <li> Gunakan tape singkong yang matang agar rasanya manis dan legit, bisa di tambahkan potongan nangka ke kuah kelapa. </li><br>
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