@extends('layouts.layouts')

@section('content')

<!--Carousel Start-->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/assets/images/KawahPutih.webp" height="700" width="1550" alt="...">
      <div class="carousel-caption d-none d-md-block" style="top: 15%; ">
        <h1 style="font-size: 100px; font-weight: 800;">Let's Discover Bandung</h1>
        <h1 style="font-size: 100px; font-weight: 800;">Together</h1>
        <br>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/assets/images/GunungPutri.webp" height="700" width="1550" alt="...">
      <div class="carousel-caption d-none d-md-block" style="top: 15%;">
        <h1 style="font-size: 100px; font-weight: 800;">Let's Discover Bandung</h1>
        <h1 style="font-size: 100px; font-weight: 800;">Together</h1>
        <br>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/assets/images/SanghyangHeuleut.webp" height="700" width="1550" alt="...">
      <div class="carousel-caption d-none d-md-block" style="top: 15%;">
        <h1 style="font-size: 100px; font-weight: 800;">Let's Discover Bandung</h1>
        <h1 style="font-size: 100px; font-weight: 800;">Together</h1>
        <br>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!--Carousel End-->

@include('layouts.footer')

@endsection