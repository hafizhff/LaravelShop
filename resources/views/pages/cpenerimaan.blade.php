@extends('header/header')

@section('content')

    <div class="col-md-12" style="margin-top: 15px;">
        <div class="panel panel-primary">
            <div class="panel-heading">Data Penerimaan</div>
            <div class="panel-body">
                {!! Form::open(['url' => 'customer']) !!}
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('Nama Vendor', 'Nama Vendor:') !!}
                        {!! Form::text('vendor',null,['class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('Tanggal', 'Tanggal :') !!}
                        {!! Form::text('tanggal',null,['class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::text('kode',null,['class'=>'form-control input-kode','placeholder'=>'Masukan Kode Barang']) !!}
                    </div>
                </div>




                <div class="col-md-12">
                    <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="tb_penerimaan">
                        <tr>

                            <td>Nama Barang</td>
                            <td>Jumlah</td>
                            <td>Unit</td>
                            <td>Harga</td>
                            <td>Total</td>
                            <td>Hapus</td>
                        </tr>
                        <tbody class="tb_body">
                        {{--<tr id="col-1">--}}

                            {{--<td class="td-custom">--}}
                                    {{--{!! Form::text('nama_barang[]',null,['class'=>'form-control custom nama_barang']) !!}--}}

                            {{--</td>--}}
                            {{--<td class="td-custom" width="50"> {!! Form::text('jumlah[]',null,['class'=>'form-control custom']) !!}</td>--}}
                            {{--<td class="td-custom" width="50">--}}
                                {{--{!! Form::text('unit[]',null,['class'=>'form-control custom']) !!}--}}

                            {{--</td>--}}
                            {{--<td class="td-custom"> {!! Form::text('harga[]',null,['class'=>'form-control custom']) !!}</td>--}}
                            {{--<td class="td-custom"> {!! Form::text('total[]',null,['class'=>'form-control custom','readonly'=>'readonly']) !!}</td>--}}
                            {{--<td class="td-custom-hps"> <a id="hapus" onclick="hapus-1">Hapus</a> </td>--}}
                        {{--</tr>--}}
                        </tbody>
                    </table>
                    </div>
                </div>

                <br /><p>&nbsp;</p>
                <hr />
                <br />

                <div class="col-md-4 pull-right" style="text-align: right">
                <div class="form-group">

                    <a href="{{url('/customer/')}}" class="btn btn-default">Kembali Ke List Data</a>
                    {!! Form::button('Simpan Data', ['class' => 'btn btn-primary']) !!}
                    <a onclick="addrow(d='');"  class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Row</a>
                </div>
                    </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>


@endsection