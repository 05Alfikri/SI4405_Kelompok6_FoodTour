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
            <th scope="col">Nomor HP</th>
            <th scope="col">Alamat Pemesan</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Total</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <tbody>

          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="" type="button" class="btn btn-danger rounded-pill">Delete</a><a href="" type="button" class="btn btn-success rounded-pill">Edit</a></td>
          </tr>

        </tbody>

      </table>
    </div>
  </body>

</html>
@include('layouts.footer')
@endsection