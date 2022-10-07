@extends('layouts.master')
@section('content')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container">
      <!--  <button  class="btn-primary btn mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Tambah Data
  </button> -->
      <div class="row justify-content-lg-center">
        <div class="col-md-auto">
          <!-- TABLE STRIPED -->
          <div class="panel panel-headline">
            <div class="panel-heading">
              <h1 class="panel-title">{{$polindes->name}}</h1>
            </div>
            <div class="panel-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Obat</th>
                    <th scope="col">Jenis Obat</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Tanggal Kadaluarsa</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($obats as $obat)                      
                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$obat->name}}</td>
                      <td>{{$obat->jenis_obat}}</td>
                      <td>{{$obat->jumlah}}</td>
                      <td>{{$obat->tanggal_kadaluarsa}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- END TABLE STRIPED -->
        </div>
      </div>
  </div>
</div>
@endsection('content')