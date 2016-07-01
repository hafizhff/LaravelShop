<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Input;
use Response;

class SearchController extends Controller
{
    //
    public function autocomplete()
    {
        $term = Input::get('term');

        $results = array();

        $queries = DB::table('tb_barangs')
            ->where('nama_barang', 'LIKE', '%'.$term.'%')
            ->take(5)->get();

        foreach ($queries as $query)
        {
            $results[] = [ 'id' => $query->id, 'value' => $query->nama_barang.' - '.$query->kd_barang ];
        }
        return Response::json($results);
    }

    public function databarang()
    {
        $kode = Input::get('kode');

        $results = array();
        $queries = DB::table('tb_barangs')->where('kd_barang', '=', $kode)->get();

        foreach ($queries as $query)
        {
            $results[] = [ 'id' => $query->id, 'value' => $query->nama_barang.' - '.$query->kd_barang ];
        }
        return Response::json($results);

    }
}
