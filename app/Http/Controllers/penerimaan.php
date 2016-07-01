<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Http\Requests;
use DB;

class penerimaan extends Controller
{
    //
    public function index()
    {
        $penerimaan = DB::select('SELECT pen.id, pen.tgl_penerimaan, pen.no_penerimaan,
                                    ven.vendor, pen.jenis_pembayaran, COUNT( det.kd_barang ) AS jumlah
                                    FROM tb_penerimaan pen
                                    INNER JOIN tb_penerimaan_detail det ON det.no_penerimaan = pen.no_penerimaan
                                    INNER JOIN tb_vendor ven ON ven.id = pen.kd_vendor');
        //$pagination = Paginator::make($penerimaan, count($penerimaan), 5);
        $pagination = new Paginator($penerimaan, 10, 10, $options = array());
        return view('pages.penerimaan', ['penerimaan'=>$penerimaan,'pagination'=>$pagination]);
    }

    public function create()
    {
        return view('pages.cpenerimaan');
    }
}
