@extends('header/header')

@section('content')
    <div class="col-md-6" style="margin-top: 15px;">
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif
            @if (Session::has('data'))
                   <div class="panel panel-primary">

                    <div class="panel-heading">Data Vendor</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => 'vendor']) !!}

                        <div class="form-group">
                            {!! Form::label('Nama Vendor', 'Nama Vendor:') !!}
                            {!! Form::text('vendor',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Contact', 'Contact :') !!}
                            {!! Form::text('contact',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Alamat', 'Alamat :') !!}
                            {!! Form::textarea('alamat',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Simpan Data', ['class' => 'btn btn-primary']) !!}
                            <a href="{{url('/vendor/')}}" class="btn btn-default">Kembali Ke List Data</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
               @else
                <div class="panel panel-primary">
                    <div class="panel-heading">Data Vendor</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => 'vendor']) !!}
                        <div class="form-group">
                            {!! Form::label('Nama Vendor', 'Nama Vendor:') !!}
                            {!! Form::text('vendor',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Contact', 'Contact :') !!}
                            {!! Form::text('contact',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Alamat', 'Alamat :') !!}
                            {!! Form::textarea('alamat',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Simpan Data', ['class' => 'btn btn-primary']) !!}
                            <a href="{{url('/vendor/')}}" class="btn btn-default">Kembali Ke List Data</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            @endif

    </div>
@stop