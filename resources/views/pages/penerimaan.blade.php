@extends('header/header')

@section('content')
    <div class="col-sm-12 ">
        <div class="bs-callout bs-callout-success pull-right col-md-12" >
            <div class="pull-right"><a href="{{url('/penerimaan/create')}}" class="btn btn-success ">Buat Data Penerimaan Baru</a></div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Data Penerimaan</div>
            <div class="panel-body">

                <div class="col-sm-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <td>No. </td>
                            <td>Tanggal</td>
                            <td>No. Penerimaan</td>
                            <td>Suplier</td>
                            <td>Pembayaran</td>
                            <td>Jumlah Barang</td>
                            <td>Edit</td>
                            <td>Delete </td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($penerimaan as $p)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $p->tgl_penerimaan }}</td>
                                <td>{{ $p->no_penerimaan }}</td>
                                <td>{{ $p->vendor }}</td>
                                <td>{{ $p->jenis_pembayaran }}</td>
                                <td>{{ $p->jumlah }}</td>
                                <td><a href="{{route('penerimaan.edit',$p->id)}}">Update</a></td>
                                <td><a href="{{url('/penerimaan/delete',$p->id)}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
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