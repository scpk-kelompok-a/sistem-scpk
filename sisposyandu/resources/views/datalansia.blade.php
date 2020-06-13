@extends('layouts.base')

@section('title', 'Data Lansia')

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
                        <th scope="col">Aksi</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-baseline"></td>
                            <td class="align-baseline"></td>
                            <td class="align-baseline"></td>
                            <td class="align-baseline">
                                <a href="" class="btn btn-danger">Lihat Hasil</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection