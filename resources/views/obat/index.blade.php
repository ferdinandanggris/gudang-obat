@extends('layouts.master')
@section('content')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <!--  <button  class="btn-primary btn mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Tambah Data
  </button> -->
      <div class="row">
        <div class="col">
          <!-- BASIC TABLE -->
          <div class="panel panel-headline">
            <div class="panel-heading">
              <h3 class="panel-title">Gudang Obat</h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Obat</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Tanggal Kadaluarsa</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Jenis Obat</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($obats as $obat) : ?>
                    <tr>
                      <th scope="row">1</th>
                      <td>{{$obat->name}}</td>
                      <td>{{$obat->jumlah}}</td>
                      <td>{{$obat->tanggal_kadaluarsa}}</td>
                      <td>{{$obat->satuan}}</td>
                      <td>{{$obat->jenisObat->type}}</td>


                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>



        <!-- Modal -->
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Obat</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" action="">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nama Obat</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="mb-3">
                <label for="jenis-obat" class="form-label">Jenis Obat</label>
                <select class="form-select" aria-label="Default select example" name="jenis_obat_id" id="jenis-obat">
                  @foreach ($jenis_obats as $jenis_obat)
                  @if ($jenis_obat->id==old('jenis_obat_id'))
                  <option value="{{$jenis_obat->id}}" selected>{{$jenis_obat->type}}</option>
                  @else
                  <option value="{{$jenis_obat->id}}">{{$jenis_obat->type}}</option>
                  @endif

                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah" required>
              </div>
              <div class="mb-3">
                <label for="tanggal_kadaluarsa" class="form-label">Tanggal Kadaluarsa</label>
                <input type="date" class="form-control" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" required>
              </div>

              <div class="mb-3">
                <label for="satuan" class="form-label">Satuan</label>
                <input type="text" class="form-control" id="satuan" name="satuan" required>
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </form> -->
      </div>
    </div>
  </div>
</div>
  </html>

  @endsection