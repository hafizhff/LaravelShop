@extends('header/header')

@section('content')
    <div class="col-sm-12 ">
        <div class="bs-callout bs-callout-success pull-right col-md-12" >
            <div class="pull-right"><a href="{{url('/penerimaan/create')}}" class="btn btn-success ">Buat Data Harga Baru</a></div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Data Harga Barang</div>
            <div class="panel-body">

                <div class="col-sm-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <td>No. </td>
                            <td>Nama Barang</td>
                            <td>Harga Barang (Rp.)</td>
                            <td>Tanggal Berlaku</td>
                            <td>Edit</td>
                            <td>Delete </td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($harga as $h)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $h->nama_barang }}</td>
                                <td>{{ $h->harga }}</td>
                                <td>{{ $h->tgl_berlaku }}</td>
                                <td><a href="{{route('harga.edit',$h->id)}}">Update</a></td>
                                <td><a href="{{url('/harga/delete',$h->id)}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                        </tbody>

                    </table>
                    <div class="pull-right">

                        {!! $pagination->links() !!}</div>

                </div>
            </div>
        </div>
    </div>


@endsection