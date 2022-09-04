<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table='kategori'; 
    protected $fillable=['nama_kategori']; 
    public function posts() { 
        return $this->hasMany('App\Post','id_kategori'); 
    }
}
