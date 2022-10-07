@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="main">
            <div class="main-content">
                <div class="row justify-content-lg-center">
                    <div class="col-md-auto">
                        <!-- TABLE STRIPED -->
                        <div class="panel panel-headline">
                            <div class="panel-heading">
                                <h1 class="panel-title">Farmasi : Daftar Obat</h1>
                            </div>
                            <div class="panel-body">
                                <div class="mx-3">
                                    <button type="button" class="btn btn-primary" data-target="#exampleModal">
                                        Tambah Data
                                    </button>
                                    <a href="/farmasi/penerimaan-obat" class="btn btn-warning">
                                        Penerimaan Obat
                                    </a>
                                    <a href="/farmasi/distribusi-obat" class="btn btn-success">
                                        Distribusi Obat
                                    </a>
                                    <a href="/farmasi/daftar-obat" class="btn btn-success">
                                        Daftar Obat
                                    </a>
                                </div>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Obat</th>
                                            <th scope="col">Kategori Obat</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Satuan</th>
                                            <th scope="col">Tanggal Kadaluarsa</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($obats as $obat)
                                            
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{$obat->name}}</td>
                                            <td>{{$obat->jenis_obat}}</td>
                                            <td>{{$obat->jumlah}}</td>
                                            <td>{{$obat->satuan}}</td>
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
    </div>
@endsection('content')
