<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Provinsi extends Model
{
    //
    protected $table = 'tbl_provinsi';
    protected $primaryKey = 'id_provinsi';
    protected $keyType = 'string';
    protected $fillable = ['id_provinsi','provinsi'];
}
