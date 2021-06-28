@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                    <a href="tambah_data" class="btn btn-primary btn-md float-right">Tambah Data</a>
                    </div>
                <div class="card-body">
                   <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                        <th>NO</th>
                        <th>NAMA LENGKAP</th>
                        <th>NPM</th>
                        <th>TEMPAT, TANGGAL LAHIR</th>
                        <th>ALAMAT</th>
                        <th>TELEPON</th>
                        <th>JENIS KELAMIN</th>
                        <th>AKSI</th>
                        </tr>
                    @foreach ($mahasiswa as $mhs)
                        <tr>
                            <td>{{ $mhs->id}}</td>
                            <td>{{ $mhs->user->name}}</td>
                            <td>{{ $mhs->npm}}</td>
                            <td>{{ $mhs->tempat_lahir.','.$mhs->tanggal_lahir}}</td>
                            <td>{{ $mhs->alamat}}</td>
                            <td>{{ $mhs->telepon}}</td>
                            <td>{{ $mhs->gender}}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>


                    @endforeach

                        

                    </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
