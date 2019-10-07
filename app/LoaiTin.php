<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    //
     protected $table = "LoaiTin";

      public function loaitin() {
     	return $this->hasMany('App\LoaiTin', 'idTheLoai', 'id');
    }

    public function tintuc() {
     	return $this->hasMany('App\TinTuc', 'idTheLoai','id');
    }
}
