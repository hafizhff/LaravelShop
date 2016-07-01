<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Http\Requests;

class ShopController extends Controller
{
    //
    public function index()
    {
        $shop = Shop::all();
    }

}
