@extends('layouts.basebidan')

@section('title', 'Detail Data Lansia')

@section('header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 p-5">
            <div class="style-card">
                <div class="row justify-content-between">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label for="namaLansia">Nama Lansia</label>
                        <input type="text" id="namaLansia" class="form-control" name="nama_lansia" value="{{$kms->nama_lansia}}" readonly>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label for="namaPendamping">Nama Pendamping</label>
                        <input type="text" id="namaPendamping" class="form-control" name="nama_pendamping" value="{{$kms->nama_pendamping}}" readonly>
                    </div>
                    <div class="form-group col-4">
                        <label for="usia">Usia Lansia</label>
                        <input type="text" id="usia" class="form-control" name="usia" value="{{$kms->usia}}" readonly>
                    </div>
                    <div class="form-group col-6">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <br>
                        <input style="width: 100px" class="form-control" type="text" id="jenis_kelamin" name="jenis_kelamin" value="{{$kms->jenis_kelamin}}" readonly>
                    </div>
                    <div class="form-group col-12">
                        <label for="alamat">Alamat Lengkap</label>
                        <input type="text" id="alamat" class="form-control" name="alamat" value="{{$kms->alamat}}" readonly>
                    </div>
                    <div class="form-group col-4">
                        <label for="berat">Berat</label>
                        <div class="input-group w-50">
                            <input type="text" id="berat" class="form-control" name="berat" value="{{$kms->berat}}" readonly>
                            <div class="input-group-append">
                                <span class="input-group-text">kg</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-4">
                        <label for="suhuTubuh">Suhu Tubuh</label>
                        <div class="input-group w-50">
                            <input type="text" id="suhuTubuh" class="form-control" name="suhu" value="{{$kms->suhu}}" readonly>
                            <div class="input-group-append">
                                <span class="input-group-text">°C</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-4">
                        <label for="tekananDarah">Tekanan Darah</label>
                        <div class="input-group w-50">
                            <input type="text" id="tekananDarah" class="form-control" name="tekanan_darah" value="{{$kms->tekanan_darah}}" readonly>
                            <div class="input-group-append">
                                <span class="input-group-text">mmHg</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-xs-12 col-sm-12">
                        <label for="keluhanLansia">Keluhan Lansia</label>
                        <input type="text" id="keluhanLansia" class="form-control" name="keluhan" value="{{$kms->keluhan}}" readonly>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label for="riwayatPenyakit">Riwayat Penyakit Lansia</label>
                        <input type="text" id="riwayatPenyakit" class="form-control" name="riwayat_penyakit" value="{{$kms->riwayat_penyakit}}" readonly>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label for="polaHidup">Pola Hidup</label>
                        <input type="text" id="polaHidup" class="form-control" name="pola_hidup" value="{{$kms->pola_hidup}}" disabled>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label for="polaMakan">Pola Makan</label>
                        <input type="text" id="polaMakan" class="form-control" name="pola_makan" value="{{$kms->pola_makan}}" disabled>
                    </div>
                </div>
                <a href="/hasil" class="btn btn-lg btn-primary btn-block btn-login text-upper case font-weight-bold mb-2">Lihat Hasil</a>
            </div>
        </div>
    </div>
</div>
@endsection