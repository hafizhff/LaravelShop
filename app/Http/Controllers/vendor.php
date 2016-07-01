<?php

namespace App\Http\Controllers;

//use Request;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Validator;
use Illuminate\Support\Facades\Redirect;

class vendor extends Controller
{
    //
    public function index()
    {
       // $customer = DB::table('tb_customer')->get();
        $vendor = DB::table('tb_vendor')->paginate(10);

        return view('pages.vendor', ['vendor' => $vendor]);
    }

    public function create()
    {
        return view('pages.cvendor');
    }

    public function store(Request $request)
    {
        //$vendor = Request::all();
        $vendor = $request->input('vendor');
        $contact = $request->input('contact');
        $alamat = $request->input('alamat');
        $array = array('vendor'=>$vendor,'contact'=>$contact,'alamat'=>$alamat);
        $v = Validator::make($request->all(), [
            'vendor' => 'required',
            'contact' => 'required',
            'alamat' => 'required',
        ]);

        if ($v->fails())
        {
            Session::flash('error', "Lengkapi Semua Data yang akan Diisi");
            return Redirect::back()->withInput($request->all());
        }
        else {
            DB::table('tb_vendor')->insert($array);
            Session::flash('message', "Data Vendor " . $vendor['vendor'] . " Berhasil Ditambah");
            return Redirect::back();
        }

    }

    public function delete($id)
    {
        DB::table('tb_vendor')->where('id', '=', $id)->delete();
        return redirect('vendor');
    }
}
