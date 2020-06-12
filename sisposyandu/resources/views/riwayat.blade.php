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
                        <tr>
                            <th scope="row">1</th>
                            <td>Ujang</td>
                            <td>Perumahan Sidanegara no 123 Cirebon</td>
                            <td>
                                <a href="" class="btn btn-info" data-toggle="modal" data-target="#detailModal">Details</a>
                                <a href="" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detailModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection