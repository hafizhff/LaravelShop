<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\Http\Requests;

class customer extends Controller
{
    //
    public function index()
    {
        $customer = DB::table('tb_customer')->get();
        $customer = DB::table('tb_customer')->paginate(10);

        return view('pages.customer', ['customer' => $customer]);
    }

    public function create()
    {
        return view('pages.ccustomer');
    }

    public function edit($id)
    {
        $cus = DB::table('tb_customer')->where('id', $id)->first();

        return view('pages.edit_customer', compact('cus'));
    }

    public function update($id)
    {
        $input = Request::all();
        $array = array('customer'=>$input['customer'],'alamat'=>$input['alamat']);
        DB::table('tb_customer')
            ->where('id', $id)
            ->update($array);
        return redirect('customer');
    }

    public function store()
    {
        $cus = Request::all();
        $array = array('customer'=>$cus['customer'],'alamat'=>$cus['alamat']);
        DB::table('tb_customer')->insert($array);
        return redirect('customer');
    }


    public function delete($id)
    {
        DB::table('tb_customer')->where('id', '=', $id)->delete();
        return redirect('customer');
    }
}
