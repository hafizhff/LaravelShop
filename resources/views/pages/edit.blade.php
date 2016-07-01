@extends('header/header')
@section('content')
    <div class="col-md-6" style="margin-top: 15px;">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Buat Data Barang Baru</legend>
    {!! Form::model($shop,['method' => 'PATCH','route'=>['shop.update',$shop->id]]) !!}

    <div class="form-group">
        {!! Form::label('Kode Barang', 'Kode Barang:') !!}
        {!! Form::text('kd_barang',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nama Barang', 'Nama Barang:') !!}
        {!! Form::text('nama_barang',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
        <a href="{{url('/shop/')}}" class="btn btn-default">Kembali Ke List Data</a>
    </div>
    {!! Form::close() !!}
    </fieldset>
    </div>
@stop