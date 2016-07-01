@extends('header/header')

@section('content')
    <div class="col-sm-12">
        <div class="bs-callout bs-callout-success pull-right col-md-12" >
            <div class="pull-right"><a href="{{url('/vendor/create')}}" class="btn btn-success">Tambah Data Vendor Baru</a></div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Data Vendor</div>
            <div class="panel-body">

                <div class="col-sm-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <td>No. </td>
                            <td>Nama Vendor</td>
                            <td>Contact</td>
                            <td>Alamat</td>
                            <td>Edit </td>
                            <td>Delete </td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($vendor as $v)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $v->vendor }}</td>
                                <td>{{ $v->contact }}</td>
                                <td>{{ $v->alamat }}</td>
                                <td><a href="{{route('vendor.edit',$v->id)}}">Update</a></td>
                                <td><a href="{{url('/vendor/delete',$v->id)}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                        </tbody>

                    </table>
                    <div class="pull-right">  {!! $vendor->render() !!}</div>

                </div>
            </div>
        </div>
    </div>


@endsection