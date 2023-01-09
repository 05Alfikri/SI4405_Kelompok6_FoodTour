@extends('layouts.layouts')

@section('content')

<body>
    <div class="container mt-5" style="width:100%">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tempat Wisata / Makanan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $d)
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d['wisata']}}</td>
                    <td>{{$d['purchase_date']}}</td>
                    <td>
                        <a href="{{ url('/detailUser', $d->id)}}" type="button" class="btn btn-success rounded-pill">Detail</a>
                        @if($d['status'] == 'belum bayar')
                        <a href="{{ url('/pembayaran', $d->id)}}" type="button" class="btn btn-success rounded-pill">Bayar</a>
                        @else
                        <a href="#" type="button" class="btn btn-primary rounded-pill">Sudah di bayar</a>
                        @endif
                    </td>
                </tr>
                @endforeach
                @foreach($data2 as $d2)
                <tr>
                    <td>{{$d2->id}}</td>
                    <td>{{$d2['menu']}}</td>
                    <td>{{$d2['created_at']}}</td>
                    <td>
                        <a href="{{ url('/detailMakanan', $d2->id)}}" type="button" class="btn btn-success rounded-pill">Detail</a>
                        @if($d2['status'] == 'belum bayar')
                        <a href="{{ url('/pembayaran-makanan', $d2->id)}}" type="button" class="btn btn-success rounded-pill">Bayar</a>
                        @else
                        <a href="#" type="button" class="btn btn-primary rounded-pill">Sudah di bayar</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</body>
<br><br><br><br><br><br><br><br><br>
@include('layouts.footer')
@endsection