<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Request;
use DB;
use App\Http\Requests;

class harga extends Controller
{
    //
    public function index()
    {
       

         $harga = DB::table('list_harga_barang')->get();
        //$pagination = Paginator::make($penerimaan, count($penerimaan), 5);
        $pagination = new Paginator($harga, 10, 10, $options = array());
        return view('pages.harga', ['harga'=>$harga,'pagination'=>$pagination]);
    }

    public function create()
    {
        return view('pages.harga');
    }

    public function edit($id)
    {
        $harga = DB::table('list_harga_barang')->where('id', $id)->first();

        return view('pages.edit_harga', compact('harga'));
    }

    public function update($id)
    {
        $input = Request::all();
        $array = array('customer'=>$input['customer'],'alamat'=>$input['alamat']);
        DB::table('tb_customer')
            ->where('id', $id)
            ->update($array);
        return redirect('harga');
    }

    public function store()
    {
        $cus = Request::all();
        $array = array('customer'=>$cus['customer'],'alamat'=>$cus['alamat']);
        DB::table('tb_customer')->insert($array);
        return redirect('harga');
    }


    public function delete($id)
    {
        DB::table('tb_harga')->where('id', '=', $id)->delete();
        return redirect('harga');
    }
}
