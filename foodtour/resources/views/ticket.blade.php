@extends('layouts.layouts')

@section('content')

<div class="container;" style="margin-top: 50px; margin-left: 15px; margin-right: 15px;">
    <center>
        <h1> TICKET</h1>
    </center>
    <div class="judul-kategori" style="background-color: #E2E2E2 ; padding-left: 10px; padding-right: 20px; padding-bottom: 90px; border-radius: 10px;">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Pemesan</label>
            <input type="nama" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Pemesan</label>
            <input type="date" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">No HP</label>
            <input type="number" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jumlah Tiket</label>
            <input type="number" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jumlah Bayar</label>
            <input type="nama" class="form-control" id="exampleFormControlInput1">
        </div>

        @endsection