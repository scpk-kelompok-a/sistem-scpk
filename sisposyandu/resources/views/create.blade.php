@extends('layouts.base')

@section('title', 'SCPK')

@section('header')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 p-5">
                <div class="style-card">
                    <h1 style="font-size: 34px; margin-bottom: 30px; text-align: center;">Form Pengisian KMS Baru</h1>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    <form  method="POST" action="{{ route('kms.store') }}">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="namaLansia">Nama Lansia</label>
                                <input type="text" id="namaLansia" class="form-control" name="nama_lansia">
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="namaPendamping">Nama Pendamping</label>
                                <input type="text" id="namaPendamping" class="form-control" name="nama_pendamping">
                            </div>
                            <div class="form-group col-4">
                                <label for="usia">Usia Lansia</label>
                                <input type="text" id="usia" class="form-control" name="usia">
                            </div>
                            <div class="form-group col-6">
                                <label for="berat">Jenis Kelamin</label>
                                <br>
                                <input type="radio" name="jenis_kelamin" value="Pria" checked>Pria
                                <br>
                                <input type="radio" name="jenis_kelamin" value="Wanita">Wanita
                            </div>
                            <div class="form-group col-12">
                                <label for="alamat">Alamat Lengkap</label>
                                <input type="text" id="alamat" class="form-control" name="alamat">
                            </div>
                            <div class="form-group col-4">
                                <label for="berat">Berat</label>
                                <input type="text" id="berat" class="form-control" name="berat">
                            </div>
                            <div class="form-group col-4">
                                <label for="suhuTubuh">Suhu Tubuh</label>
                                <input type="text" id="suhuTubuh" class="form-control" name="suhu">
                            </div>
                            <div class="form-group col-4">
                                <label for="tekananDarah">Tekanan Darah</label>
                                <input type="text" id="tekananDarah" class="form-control" name="tekanan_darah">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                <label for="keluhanLansia">Keluhan Lansia</label>
                                <select type="text" id="keluhanLansia" class="form-control" name="keluhan">
                                    <option value="Sakit perut">Sakit perut</option>
                                    <option value="Sesak nafas">Sesak nafas</option>
                                    <option value="Pusing">Pusing</option>
                                    <option value="Masuk angin">Masuk angin</option>
                                </select>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="riwayatPenyakit">Riwayat Penyakit Lansia</label>
                                <select type="text" id="riwayatPenyakit" class="form-control" name="riwayat_penyakit">
                                    <option value="Diabetes">Diabetes</option>
                                    <option value="Darah tinggi">Darah tinggi</option>
                                </select>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="polaHidup">Pola Hidup</label>
                                <select type="text" id="polaHidup" class="form-control" name="pola_hidup">
                                    <option value="Tidak Berolahraga">Tidak Berolahraga</option>
                                    <option value="Berolahraga 3x Seminggu">Berolahraga 3x Seminggu</option>
                                    <option value="Berolahraga 5x Seminggu">Berolahraga 5x Seminggu</option>
                                    <option value="Berolahraga 7x Seminggu">Berolahraga 7x Seminggu</option>
                                </select>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="polaMakan">Pola Makan</label>
                                <select type="text" id="polaMakan" class="form-control" name="pola_makan">
                                    <option value="Tidak Konsumsi Makanan Berlemak">Tidak Konsumsi Makanan Berlemak</option>
                                    <option value="Makan Makanan Berlemak 3x Seminggu">Makan Makanan Berlemak 3x Seminggu</option>
                                    <option value="Makan Makanan Berlemak 5x Seminggu">Makan Makanan Berlemak 5x Seminggu</option>
                                    <option value="Makan Makanan Berlemak 7x Seminggu">Makan Makanan Berlemak 7x Seminggu</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block btn-login text-upper  case font-weight-bold mb-2" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection