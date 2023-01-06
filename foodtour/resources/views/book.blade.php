@extends('layouts.layouts')

@section('content')

<!-- Book Start  -->
<section id="book">
    <div class="container">
        <div class="book">
            <p class="login-text" style="font-size: 50px; font-weight: 700; text-align:center">Book Now</p>
            <form action="{{ url('pemesanan') }}" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label" for="destination">Nama pemesan</label>
                    <input type="nama" id="destination" class="form-control form-control-lg" value="{{ auth()->user()->name }}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="people">No HP</label>
                    <input type="number" id="number" class="form-control form-control-lg" nama="number">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" class="form-control form-control-lg" nama="email">
                </div>
            </form>
        </div>
    </div>
    </div>
</section>
<!-- Book End -->

@endsection