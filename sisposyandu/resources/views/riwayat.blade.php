@extends('layouts.base')

@section('title', 'Data Lansia')

@section('header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 p-5">
            <div class="style-card">
              <form action="/cari" method="GET" enctype="multipart/form-data" class="d-block d-lg-flex">
                <div class="fields d-block d-lg-flex">
                  <h1 style="font-size: 34px; margin-bottom: 30px;">Data Lansia</h1>
                    <div class="textfield-search one-third"><input type="text" name="cari" class="form-control" placeholder="Cari Data Lansia"></div>
                    <input type="submit" class="search-submit btn btn-primary" value="Cari">  
                </div>
              </form>
                <table class="table">
                    <thead class="thead-dark">
                        <th scope="col">No.</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Detail</th>
                    </thead>
                    <tbody>
                        @foreach ($querykms as $q)
                        <tr>
                            <th scope="row">1</th>
                            <td> {{$q->nama_lansia}} </td>
                            <td> {{$q->alamat}} </td>
                            <td>
                                <a href="" class="btn btn-info" data-toggle="modal" data-target="#detailModal">Details</a>
                                <a href="" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection