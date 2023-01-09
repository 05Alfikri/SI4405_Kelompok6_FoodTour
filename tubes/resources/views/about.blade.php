@extends('layouts.layouts')

@section('content')

<!-- About Start -->
<div class="container">
  <div class="container pt-5">
    <div class="row">
      <div class="col-lg-6" style="min-height: 500px;">
        <div class="position-relative h-100">
          <img class="position-absolute w-100 h-100" src="/assets/images/RancaUpas.webp" style="object-fit: cover;">
        </div>
      </div>
      <div class="col-lg-6 pt-5 pb-lg-5">
        <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
          <h5 class="text-dark text-uppercase" style="letter-spacing: 5px;">About Us</h5>
          <h1 class="mb-3">We Provide Best Tour Packages In Your Budget</h1>
          <p></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End -->
<br>
<!-- Feature Start -->
<div class="container">
  <div class="container pb-5">
    <div class="row">
      <div class="col-md-4">
        <div class="d-flex mb-4 mb-lg-0">
          <div class="d-flex flex-column">
            <h5 class="">Competitive Pricing</h5>
            <p class="m-0">Memberikan penawaran harga yang kompetitif</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="d-flex mb-4 mb-lg-0">
          <div class="d-flex flex-column">
            <h5 class="">Best Services</h5>
            <p class="m-0">Nikmati semua pelayanan terbaik dari FoodTour</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="d-flex mb-4 mb-lg-0">
          <div class="d-flex flex-column">
            <h5 class="">Best Place in Bandung</h5>
            <p class="m-0">Kunjungi tempat-tempat wisata indah dan nyaman di Kota Bandung</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Feature End -->
@include('layouts.footer')
@endsection