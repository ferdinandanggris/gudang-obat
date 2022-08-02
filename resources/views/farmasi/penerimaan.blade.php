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
                                <h1 class="panel-title">Farmasi : Penerimaan Obat</h1>
                            </div>
                            <div class="panel-body">
                                <div class="mx-3">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Tambah Data
                                    </button>
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Penerimaan Obat
                                    </button>
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Distribusi Obat
                                    </button>
                                </div>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Obat</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Satuan</th>
                                            <th scope="col">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Nama Obat</td>
                                        </tr>

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
