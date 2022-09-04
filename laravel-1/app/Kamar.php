<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{

	protected $fillable = [
        'nama_kamar', 'type'];

    public function post()
    {
        return $this->hasMany('App\Order','kamar_id');
    }
}
