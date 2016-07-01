@extends('header/header')
@section('content')
    <div class="col-md-6" style="margin-top: 15px;">
        <div class="panel panel-primary">
            <div class="panel-heading">Data Customer</div>
            <div class="panel-body">
            {!! Form::model($cus,['method' => 'PATCH','route'=>['customer.update',$cus->id]]) !!}

            <div class="form-group">
                {!! Form::label('Nama Customer', 'Nama Customer:') !!}
                {!! Form::text('customer',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Alamat Customer', 'Alamat Customer:') !!}
                {!! Form::text('alamat',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
                <a href="{{url('/customer/')}}" class="btn btn-default">Kembali Ke List Data</a>
            </div>
            {!! Form::close() !!}
           </div>
        </div>
    </div>
@stop