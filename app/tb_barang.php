<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_barang extends Model
{
    //
    protected $fillable=[
        'kd_barang',
        'nama_barang'
    ];
}
