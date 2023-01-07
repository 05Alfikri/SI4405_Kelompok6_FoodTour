@extends('layouts.layout')
@section('list')
    active
@endsection
@section('content')
<!-- Content -->
<section id="list">
    <div class="container">
      <div>
        <h1>My Show Room</h1>
        <p>List Show Room Donna - 1202204067</p>
        <div class="d-flex gap-5">
            <div class='card-body'>
                <h5 class='card-title'>{{ $row->name }}</h5>
                <p class='card-text'>{{ $row->description }}</p>
                <span class='d-flex gap-2'>
                  <a href='{{ '/detail/'.$row->id }}' class='btn btn-primary' style='border-radius: 100px; width:140px; height: 36px;'>Detail</a>
                  {{-- delete car --}}
                  <form action='{{ url('list/'.$row->id) }}' method='POST'>
                    @csrf
                    @method('DELETE')
                    <button type='submit' class='btn btn-danger' style='border-radius: 100px; width:140px; height: 36px;'>Delete</button>
                  </form>
                </span>
            </div>
            </div>
        </div>  
      </div>
    </div>
  </section>
<!-- Content End -->
@endsection