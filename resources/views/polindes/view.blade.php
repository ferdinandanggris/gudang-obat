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
              <h1 class="panel-title">Kategori Obat</h1>
            </div>
            <div class="panel-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Obat</th>
                    <th scope="col">Jenis Obat</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>Jenis Obat</td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END TABLE STRIPED -->
        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Tambah Data
        </button>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Tambah Data</h3>
              
            </div>
            <div class="modal-body">
              <form method="post" action="">
                @csrf
                <div class="mb-3">
                  <label for="type" class="form-label">Kategori Obat</label>
                  <input type="text" class="form-control" id="type" name="type" required placeholder="masukkan kategori / jenis obat">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection('content')