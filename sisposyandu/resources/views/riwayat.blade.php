@extends('layouts.base')

@section('title', 'Daftar Data Lansia')

@section('header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 p-5">
            <div class="style-card">
              <form action="/cari" method="GET" enctype="multipart/form-data" class="d-block d-lg-flex">
                <div class="fields d-block d-lg-flex">
                  <h1 style="font-size: 34px; margin-bottom: 30px;">Data Lansia</h1>
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
                        @foreach ($kms as $k)
                        <tr>
                            <td class="align-baseline">{{$k->id}}</td>
                            <td class="align-baseline">{{$k->nama_lansia}}</td>
                            <td class="align-baseline">{{$k->alamat}}</td>
                            <td class="align-baseline">
                                <a type="submit" href="{{ route('kms.show', $k->id )}}" class="btn btn-info">Details</a>
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