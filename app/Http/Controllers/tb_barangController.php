<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\tb_barang;
use App\Http\Requests;

class tb_barangController extends Controller
{
    //
    public function index()
    {
        $barang = DB::table('tb_barangs')->paginate(20);

        return view('pages.index', ['barang' => $barang]);
       // $barang = tb_barang::all();
        //return view('pages.index',compact('barang'));
    }

    public function create()
    {
        return view('pages.item');
    }

    public function store()
    {
        $shop = Request::all();
        tb_barang::create($shop);
        return redirect('shop');
    }

    public function edit($id)
    {
        $shop=tb_barang::find($id);
        return view('pages.edit',compact('shop'));
    }

    public function update($id)
    {
        //
        $shopUpdate=Request::all();
        $shop=tb_barang::find($id);
        $shop->update($shopUpdate);
        return redirect('shop');
    }

    public function delete($id)
    {
        DB::table('tb_barangs')->where('id', '=', $id)->delete();
        return redirect('shop');
    }
}
