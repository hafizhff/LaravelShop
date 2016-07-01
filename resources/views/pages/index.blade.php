@extends('header/header')

@section('content')
    <div class="col-sm-12">
        <div class="bs-callout bs-callout-success pull-right col-md-12" >
            <div class="pull-right"><a href="{{url('/shop/create')}}" class="btn btn-success pull-right">Buat Data Barang Baru</a></div>
            </div>
    </div>

    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Data Barang</div>
            <div class="panel-body">
                <div class="pull-right"> {!! $barang->render() !!} </div>
            <div class="col-sm-12">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <td>No. </td>
                    <td>Kode Barang (Barcode) </td>
                    <td>Nama Barang </td>
                    <td>Edit </td>
                    <td>Delete </td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    @foreach($barang as $b)
                        <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $b->kd_barang }}</td>
                        <td>{{ $b->nama_barang }}</td>
                            <td><a href="{{route('shop.edit',$b->id)}}">Update</a></td>
                            <td><a href="{{url('/shop/delete',$b->id)}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
                            {{--<td>--}}
                                {{--{!! Form::open(['method' => 'DELETE', 'route'=>['shop.destroy', $b->id]]) !!}--}}
                                {{--{!! Form::submit('Delete', ['class' => '', 'id'=>'btn-submit']) !!}--}}
                                {{--{!! Form::close() !!}--}}
                            {{--</td>--}}
                        </tr>
                        <?php $i++; ?>
                        @endforeach
                    </tbody>

                </table>

            </div>
            </div>

</div>
    </div>


@endsection