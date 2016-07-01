@extends('header/header')
@section('content')
    <div class="col-md-6" style="margin-top: 15px;">
        <div class="panel panel-primary">
            <div class="panel-heading">Data Customer</div>
            <div class="panel-body">
            {!! Form::model($harga,['method' => 'PATCH','route'=>['harga.update',$harga->id]]) !!}

            <div class="form-group">
                {!! Form::label('Nama Barang', 'Nama Barang :') !!}
                {!! Form::text('nama_barang',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Harga Barang (Rp)', 'Harga Barang (Rp) :') !!}
                {!! Form::text('harga',null,['class'=>'form-control']) !!}
            </div>
               <div class="form-group">
                {!! Form::hidden('id',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::hidden('Id_barang',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Tanggal Berlaku', 'Tanggal Berlaku :') !!}
                {!! Form::text('tgl_berlaku',null,['class'=>'form-control datepicker']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
                <a href="{{url('/harga/')}}" class="btn btn-default">Kembali Ke List Data</a>
            </div>
            {!! Form::close() !!}
           </div>
        </div>
    </div>
@stop