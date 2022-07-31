
@extends('layouts.master')
@section('content')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <h3 class="page-title">Transaksi Gudang</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <a class="btn btn-primary" href="/transaksi-gudang/create">Buat Transaksi</a>
        </ol>
      </nav>
      <div class="row">
        <div class="col">
          <!-- BASIC TABLE -->
          <div class="panel panel-headline">
            <div class="panel-heading">
              <h1 class="panel-title">Tabel Transaksi Gudang</h1>
            </div>
            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>id_transaksi </th>
                    <th>lokasi </th>
                    <th>Obat </th>
                    <th>Jumlah </th>
                    <th>tanggal</th>
                    <th>keterangan</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                @foreach ($transaksi_gudang as $transaksi)
                <tbody>
                <tr>
                  <th rowspan="{{count($transaksi->detTransaksiGudang)}}"></th>
                  <th rowspan="{{count($transaksi->detTransaksiGudang)}}">{{$transaksi->id}}</th>
                  <th rowspan="{{count($transaksi->detTransaksiGudang)}}">{{$transaksi->lokasi}}</th>
                
                  <th >{{$transaksi->detTransaksiGudang[0]->name}}</th>
                  <th >{{$transaksi->detTransaksiGudang[0]->jumlah}}</th>
                  <th rowspan="{{count($transaksi->detTransaksiGudang)}}">{{$transaksi->tanggal}}</th>
                  <th rowspan="{{count($transaksi->detTransaksiGudang)}}">{{$transaksi->keterangan}}</th>
                  <th rowspan="{{count($transaksi->detTransaksiGudang)}}"></th>
                </tr>
                @for ($i = 1; $i < count($transaksi->detTransaksiGudang); $i++)
                  <tr>
                      <th style="padding-left: 10px">{{$transaksi->detTransaksiGudang[$i]->name}}</th>
                      <th style="padding-left: 10px">{{$transaksi->detTransaksiGudang[$i]->jumlah}}</th>
                  </tr>
                  @endfor             
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
        
            @endsection