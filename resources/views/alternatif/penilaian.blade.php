@extends('layouts.base')

@section('title', 'Alternatif | Penilaian')

@section('css')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Penilaian</div>

                <div class="panel-body">
                    <form action="{{ url('alternatif/nilai_simpan') }}" method="POST" role="form">
                        {{ csrf_field() }}
                        <legend>Form Penilaian Alternatif</legend>
                        <input type="hidden" name="id_alternatif" value="{{$alternatif->id_alternatif}}">
                        <div class="form-group">
                            <label for="">Nama Alternatif</label>
                            <input type="text" class="form-control" name="nama_alternatif" value="{{$alternatif->nama_alternatif}}" placeholder="Input field" readonly>
                        </div>

                        @foreach ($kriteria as $data)
                            <div class="form-group">
                                <label for="">{{$data->nama_kriteria}}</label>
                                <input type="text" class="form-control" name="nilai_{{$data->id_kriteria}}" value="{{\App\Helper::nilai($alternatif->id_alternatif,$data->id_kriteria)}}" >
                            </div>
                        @endforeach
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ url('alternatif') }}" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
