@extends('layouts.master')
@section('content')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <h3 class="page-title">Penerimaan Obat</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Input Obat Masuk</button>
          <a class="btn btn-success" href="">Input Obat Masuk Dengan Excel</a>
          <a class="btn btn-warning" href="{{ route('jenis-obat.index') }}">Tambah Jenis Obat</a>
        </ol>
      </nav>
      <div class="row">
        <div class="col">
          <!-- BASIC TABLE -->
          <div class="panel panel-headline">
            <div class="panel-heading">
              <h1 class="panel-title">Tabel Penerimaan Obat</h1>
            </div>
            <div class="panel-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Sumber Dana </th>
                    <th>Nama Obat </th>
                    <th>Jenis Obat</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($penerimaan_obats as $po)
                  <tr>
                    <th scope="row"></th>
                    <td>{{$po->sumber_dana}}</td>
                    <td>{{$po->name}}</td>
                    <td>{{$po->jenisObat->type}}</td>
                    <td>{{$po->jumlah}}</td>
                    <td>{{$po->tanggal}}</td>
                    <td>{{$po->keterangan}}</td>
                    <td>
                        <form action="/obat/{{$po->id}}" method="POST">
                          @csrf
                          <button class="button btn-danger btn btn-sm" onclick="return confirm('Are you sure?')">Hapus</button>
                          @method('DELETE')
                        </form>
                          <button class="button btn-warning btn btn-sm">Edit</button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Penerimaan Obat</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="post" action="/obat">
                    @csrf
                    <div class="form-group">
                      <label for="name" class="form-label">Nama Obat</label>
                      <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                      <label for="jenis-obat" class="form-label">Jenis Obat</label>
                      <select class="form-control" aria-label="Default select example" name="jenis_obat_id" id="jenis-obat">
                        @foreach ($jenis_obats as $jenis_obat)
                        @if ($jenis_obat->id==old('jenis_obat_id'))
                        <option value="{{$jenis_obat->id}}" selected>{{$jenis_obat->type}}</option>
                        @else
                        <option value="{{$jenis_obat->id}}">{{$jenis_obat->type}}</option>
                        @endif

                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="jumlah" class="form-label">Jumlah</label>
                      <input type="text" class="form-control" id="jumlah" name="jumlah" required>
                    </div>
                    <div class="form-group">
                      <label for="tanggal_kadaluarsa" class="form-label">Tanggal Kadaluarsa</label>
                      <input type="date" class="form-control" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" required>
                    </div>

                    <div class="form-group">
                      <label for="satuan" class="form-label">Satuan</label>
                      <select class="form-control" aria-label="Default select example" id="satuan" name="satuan">
                        <option value="tablet">TABLET</option>
                        <option value="vial">VIAL</option>
                        <option value="ampul">AMPUL</option>
                        <option value="botol">BOTOL</option>
                        <option value="pcs">PCS</option>
                        <option value="paket">PAKET</option>
                        <option value="blister">BLISTER</option>
                        <option value="galon">GALON</option>
                        <option value="tub">TUB</option>
                        <option value="supp">SUPP</option>
                        <option value="kap">KAP</option>
                        <option value="pen">PEN</option>
                        <option value="sach">SACH</option>
                        <option value="softbag">SOFTBAG</option>
                        <option value="set">SET</option>
                        <option value="kit">KIT</option>
                        <option value="kotak">kotak</option>
                        <option value="pot">POT</option>
                        <option value="lt">LT</option>
                        <option value="tbg">TBG</option>
                        <option value="unit">UNIT</option>
                        <option value="kg">KG</option>
                        <option value="tes">TES</option>
                        <option value="bj">BJ</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="tanggal" class="form-label">Tanggal Penerimaan</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>
                    <div class="form-group">
                      <label for="sumber_dana" class="form-label">Sumber Obat</label>
                      <select class="form-control" aria-label="Default select example" id="sumber_dana" name="sumber_dana">
                        <option value="APBD">APBD</option>
                        <option value="JKN">JKN</option>
                      </select>
                      <div class="form-group">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            @endsection