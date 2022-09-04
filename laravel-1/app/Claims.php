<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claims extends Model
{

	protected $fillable = ['nama', 'kode_ambil', 'kontak', 'email', 'barang_id'];

    public function found(){
        return $this->belongsTo(Founds::class);
    }
}
