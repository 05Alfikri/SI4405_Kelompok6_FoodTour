@extends('layouts.layouts')

@section('content')

<!-- Book Start  -->
<section id="book">
    <div class="container">
        <div class="book">
            <p class="login-text" style="font-size: 50px; font-weight: 700; text-align:center">Book Now</p>
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label" for="destination">Where to</label>
                    <input type="name" id="destination" class="form-control form-control-lg" name="destination">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="people">How many people</label>
                    <input type="name" id="people" class="form-control form-control-lg" name="people">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Arrivals">Arrivals</label>
                    <input type="date" id="Arrivals" class="form-control form-control-lg" name="Arrivals">
                </div>
            </form>
        </div>
    </div>
    </div>
</section>
<!-- Book End -->

@endsection