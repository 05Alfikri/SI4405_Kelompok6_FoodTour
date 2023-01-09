@extends('layouts.layouts')

@section('content')

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>tiket admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="quiz.css">
</head>

<body>

  <body>
    <div class="container mt-5" style="width:100%">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Pemesan</th>
            <th scope="col">Email/Alamat</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Tanggal Pesan</th>
            <th scope="col">Total</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <tbody>
          @foreach($data as $d)
          <tr>
            <td>{{$d->id}}</td>
            <td>{{$d['name']}}</td>
            <td>{{$d['email']}}</td>
            <td>{{$d['no_hp']}}</td>
            <td>{{$d['purchase_date']}}</td>
            <td>{{$d['total']}}</td>
            <td>

              <form action="{{ url('delete', $d->id)}}" method="POST" enctype="multipart/form-data" class='row'>
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              <div class='row'>
                <a href="{{ url('detailUser', $d->id)}}" type="button" class="btn btn-success rounded-pill">Detail</a>
                @if($d['status'] == 'Menunggu Konfirmasi Pembayaran')
                <a href="{{ url('/update-status', $d->id)}}" type="button" class="btn btn-success rounded-pill">UpdateStatus</a>
                @endif
              </div>
            </td>
          </tr>
          @endforeach
          @foreach($data2 as $d2)
          <tr>
            <td>{{$d2->id}}</td>
            <td>{{$d2['name']}}</td>
            <td>{{$d2['alamat']}}</td>
            <td>{{$d2['no_hp']}}</td>
            <td>{{$d2['created_at']}}</td>
            <td>{{$d2['total']}}</td>
            <td>
              <form action="{{ url('delete-makanan', $d2->id)}}" method="POST" enctype="multipart/form-data" class='row'>
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              <div class='row'>
                <a href="{{ url('detailMakanan', $d2->id)}}" type="button" class="btn btn-success rounded-pill">Detail</a>
                @if($d2['status'] == 'Menunggu Konfirmasi Pembayaran')
                <a href="{{ url('update-status-makanan', $d2->id)}}" type="button" class="btn btn-success rounded-pill">UpdateStatus</a>
                @endif
              </div>
            </td>
          </tr>
          @endforeach

        </tbody>

      </table>
    </div>
  </body>

</html>
@include('layouts.footer')
@endsection