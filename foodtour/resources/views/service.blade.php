@extends('layouts.layouts')

@section('content')

<!--Service Start-->
<div class="container">
  <center>
    <h1 class="heading">
      <span>S</span>
      <span>e</span>
      <span>r</span>
      <span>v</span>
      <span>i</span>
      <span>c</span>
      <span>e</span>
    </h1>
  </center><br>
  <div class="container pb-5">
    <div class="row">
      <div class="col-md-4">
        <div class="d-flex mb-4 mb-lg-0">
          <div class="d-flex flex-column">
            <h5 class="">Makanan Khas Bandung</h5>
            <p class="m-0">Kami menyediakan berbagai macam jenis makanan dan cemilan khas dari Bandung</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="d-flex mb-4 mb-lg-0">
          <div class="d-flex flex-column">
            <h5 class="">Keliling Kota Bandung</h5>
            <p class="m-0">Kami menyediakan tiket untuk berbagai tempat wisata di Kota Bandung dengan harga
              terjangkau</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="d-flex mb-4 mb-lg-0">
          <div class="d-flex flex-column">
            <h5 class="">Pengiriman Cepat</h5>
            <p class="m-0">Proses pengiriman makanan dilakukan dengan cepat dan tepat waktu</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Service End-->
<!-- review div starts  -->

<div class="review">

  <center>
    <h1 class="heading">
      <span>R</span>
      <span>e</span>
      <span>v</span>
      <span>i</span>
      <span>e</span>
      <span>w</span>
    </h1>
  </center>
  <div class="swiper-container review-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="box">
          <img src="images/pic1.png" alt="">
          <h3>john deo</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat
            odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus
            beatae, reprehenderit exercitationem!</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="box">
          <img src="images/pic2.png" alt="">
          <h3>john deo</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat
            odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus
            beatae, reprehenderit exercitationem!</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="box">
          <img src="images/pic3.png" alt="">
          <h3>john deo</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat
            odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus
            beatae, reprehenderit exercitationem!</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="box">
          <img src="images/pic4.png" alt="">
          <h3>john deo</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat
            odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus
            beatae, reprehenderit exercitationem!</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- review div ends -->

@endsection