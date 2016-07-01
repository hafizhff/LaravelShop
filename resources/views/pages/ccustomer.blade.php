@extends('header/header')

@section('content')
    <div class="col-md-6" style="margin-top: 15px;">
        <div class="panel panel-primary">
        <div class="panel-heading">Data Customer</div>
        <div class="panel-body">
            {!! Form::open(['url' => 'customer']) !!}
            <div class="form-group">
                {!! Form::label('Nama Customer', 'Nama Customer:') !!}
                {!! Form::text('customer',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Alamat', 'Alamat :') !!}
                {!! Form::text('alamat',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Simpan Data', ['class' => 'btn btn-primary']) !!}
                <a href="{{url('/customer/')}}" class="btn btn-default">Kembali Ke List Data</a>
            </div>
            {!! Form::close() !!}
        </div>
            </div>
    </div>
@stop