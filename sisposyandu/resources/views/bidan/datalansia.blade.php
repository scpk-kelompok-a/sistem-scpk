@extends('layouts.basebidan')

@section('title', 'Data Lansia')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 p-5">
            <div class="style-card">
                <h1 style="font-size: 34px; margin-bottom: 30px;">Data Lansia</h1>
                <table class="table">
                    <thead class="thead-dark">
                        <th scope="col">No.</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </thead>
                    <tbody>
                        @foreach($kms as $k)
                        <tr>
                            <td class="align-baseline">{{$k->id}}</td>
                            <td class="align-baseline">{{$k->nama_lansia}}</td>
                            <td class="align-baseline">{{$k->alamat}}</td>
                            <td class="align-baseline">
                                <a href="{{ route('bidan.show', $k->id) }}" class="btn btn-danger">Lihat Hasil</a>
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