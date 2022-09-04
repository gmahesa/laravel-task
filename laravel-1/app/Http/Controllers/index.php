<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Claims;
use App\Founds;
use App\Losts;
use App\User;

class index extends Controller
{
    public function index()
    {

        $Founds = Founds::all();
        $Claims = Claims::all();

    	return view('index', compact('Founds', 'Claims'));
    }

    public function tambah_barang(Request $request)
    {
        $barang = new Founds;
        $barang->name = $request->nama;
        $barang->deskripsi = $request->deskripsi;

        $barang->save();

        return redirect ('/');
    }

    public function claim($id)
    {
        $Founds = Founds::find($id);    


        return view('claim',compact('Founds'));
    }

    public function tambah_claim(Request $r, $id)
    {
        $founds = Founds::find($id);

        $barang = new Claims;

        $kode = str_random(10);
        
        $barang->nama = $r->nama;
        $barang->kode_ambil = $kode;
        $barang->kontak = $r->kontak;
        $barang->email = $r->email;
        $barang->barang_nama = $founds->name;

        $barang->save();

        return redirect ('/');
    }


    
    //public function tambah_kamar(Request $request)
    //{
    //	//$kamar = new Kamar;
    	//$kamar->nama_kamar = $request->nama;
    	//$kamar->type = $request->type;

    	//$kamar->save();

    	//return redirect('/');
    //}


    //public function tambah_order(Request $request)
    //{
    	//$order = new Order;

    	//$order->user_id = $request->user()->id;
    	//$order->kamar_id = $request->kamar;

    	//$order->save();

    	//return redirect('/');
    //}
}
