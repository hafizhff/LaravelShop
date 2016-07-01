@extends('header/header')

@section('content')
    <div class="col-sm-12 ">
        <div class="bs-callout bs-callout-success pull-right col-md-12" >
            <div class="pull-right"><a href="{{url('/customer/create')}}" class="btn btn-success ">Buat Baru</a></div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="panel panel-primary">
        <div class="panel-heading">Data Customer</div>
        <div class="panel-body">

            <div class="col-sm-12">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <td>No. </td>
                        <td>Nama Customer</td>
                        <td>Alamat</td>
                        <td>Edit </td>
                        <td>Delete </td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    @foreach($customer as $c)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $c->customer }}</td>
                            <td>{{ $c->alamat }}</td>
                            <td><a href="{{route('customer.edit',$c->id)}}">Update</a></td>
                            <td><a href="{{url('/customer/delete',$c->id)}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                    </tbody>

                </table>
                <div class="pull-right"> {!! $customer->render() !!}</div>

            </div>
            </div>
        </div>
    </div>


@endsection