<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Vivo extends Model
{
    protected $table = "tb_Vivo";
    protected $fillable = ['type','harga','spesifikasi','image'];
}
