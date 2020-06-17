@extends('layouts.basebidan')

@section('title', 'Detail Data Lansia')

@section('header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 p-5">
            <p style="text-align: center; font-size: 50px">Hasil</p>
            <div class="style-card">
                <div class="row justify-content-between">
                    <div class="col-12">
                        <table class="table">
                            <thead class="thead-dark">
                                <th scope="col">No.</th>
                                <th scope="col">Alternatif</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($alt as $a)
                                <tr>
                                    <td class="align-baseline">{{$a->id_alternatif}}</td>
                                    <td class="align-baseline">{{$a->nama_alternatif}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection