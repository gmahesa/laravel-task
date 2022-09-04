<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Founds extends Model
{

	protected $fillable = ['name', 'deskripsi'];

    public function claims()
    {
        return $this->hasMany('App\Claims','barang_id');
    }
}
