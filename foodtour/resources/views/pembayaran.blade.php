@extends('layouts.layouts')

@section('content')

<body style="font-family: 'League Spartan', sans-serif;">

    <div>
        <p style="position: absolute; width: 100px; height: 29px; left: 48%; top: 150px;"> Pembayaran </p>

        <div class="container" style="position: absolute; width: 47px; height: 47px; left: 50%; top: 194px; background: #4C7972; border-radius: 50%;"></div>
        <p style="position: absolute; height: 47px; left: 51%; top: 205px; color: white;">2</p>
    </div>


    <div class="container;" style="margin-top: 300px; margin-left: 15px; margin-right: 15px;">
            <div class="judul-kategori" style="background-color: #E2E2E2 ; padding-left: 10px; padding-right: 20px; padding-bottom: 90px; border-radius: 10px;">
                <h5 class="text-center pt-3" style="margin-top:15px ; font-size: medium; padding-left: 5%; padding-top: 15px;">Pilih salah satu metode pembayaran berikut :</h5>

                <table style="padding: 20px;">
                    <tr>
                        <td> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Bank_Syariah_Indonesia.svg/2560px-Bank_Syariah_Indonesia.svg.png" width="150px" alt=""> <br>00000 </td>
                        <td> <img src="https://logos-download.com/wp-content/uploads/2016/06/Mandiri_logo.png" width="150px" alt=""> <br>00000</td>
                        <td> <img src="http://infobanking.files.wordpress.com/2009/12/logo-bank-bca1.jpg" width="150px" alt=""> <br>00000</td>
                        <td> <img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/1200px-BNI_logo.svg.png" width="150px" alt=""> <br>00000</td>
                        <td> </td>
                    </tr>
                </table>


                <div style="padding-top: 30px;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Logo_dana_blue.svg/2560px-Logo_dana_blue.svg.png" width="150px" alt="">
                    <input type="radio" name="status" id="belum" value="Belum Lunas" style="width: 15px; height: 15px; margin-right:10px;">
                    <div class="container" style="position: absolute; width: 317px; height: 26px; left: 200px; background: #FFFFFF; opacity: 0.7; top: 510px;">00000</div>
                </div>

                <div style="padding-top: 35px;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Gopay_logo.svg/2560px-Gopay_logo.svg.png" width="150px" alt="">
                    <div class="container" style="position: absolute; width: 317px; height: 26px; left: 200px; background: #FFFFFF; opacity: 0.7; top: 580px;">00000</div>
                </div>

                <div style="padding-top: 35px;">
                    <img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/1081027ebaed20dc6155d99946411a8721f1de6224d0b646a5c767072dfb1afb.png" width="150px" alt="">
                    <div class="container" style="position: absolute; width: 317px; height: 26px; left: 200px; background: #FFFFFF; opacity: 0.7; top: 670px;">00000</div>
                </div>

                <div class="text-center" style="padding-left: 90%; padding-top: 10%;">
                    <a href="{{ 'pembayaran' }}"><button type="button" class="btn btn-success btn-lg;">Pembayaran</button></a>
                </div>
        </form>

            </div>

    </div>

    @endsection