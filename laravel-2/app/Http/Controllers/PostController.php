<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\post;
use App\pencipta;
use App\kategori;
use App\tag;
use App\user;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        
        $posts = post::paginate(3);
        return view('welcome', compact('posts'));
    }
    public function index()
    {
        $posts = post::paginate(5);
        return view('index', compact('posts'));
    }
 
	public function kategori(){
        $kategori = kategori::paginate(4);
		return view('kategori', compact('kategori'));
	}
 
	public function tag(){
        $tag = tag::paginate(4);
		return view('tag', compact('tag'));
    }
    public function news(){
        $post = post::paginate(5);
		return view('news._news-form', compact('post'));
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_berita = Kategori::all()->pluck('nama_kategori','id'); 
        $list_tag = Tag::all()->pluck('nama_tag','id');
        return view('news.create',compact('list_berita', 'list_tag'));
    }
    public function create2()
    {
        return view('news.create2');
    }
    public function create3()
    {
        return view('news.create3');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeKat(Request $request)
    {
        $kategori = \App\Kategori::create($request->all());
        return redirect('post/kategori');
    }
    public function storeTag(Request $request)
    {
        $tag = \App\Tag::create($request->all()); 
        return redirect('post/tag');
    }
    public function store(Request $request)
    {
        $post = \App\Post::create($request->all());  
        $pencipta = new pencipta;
        $pencipta->nama_pencipta = $request->input('nama_pencipta'); 
        $post->pencipta()->save($pencipta); 
        $post->tag()->attach($request->input('tag'));
        return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $post = \App\Post::findOrFail($id); 
        return view('view', compact('post'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = \App\Post::findOrFail($id); 
        $post->nama_pencipta = $post->pencipta->nama_pencipta; 
        $list_berita = Kategori::all()->pluck('nama_kategori','id');
        $list_tag = Tag::all()->pluck('nama_tag','id');
        return view('news.edit-news', compact('post','list_berita','list_tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $post = \App\Post::findOrFail($id); 
        $post->update($request->all()); 
        $pencipta = $post->pencipta;
        $pencipta->nama_pencipta = $request->input('nama_pencipta'); 
        $post->pencipta()->save($pencipta); 
        $post->tag()->sync($request->input('tag_post'));
        return redirect('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function hapusPos($id)
    {
        post::where('id',$id)->delete();
        // alihkan halaman ke halaman pegawai
        return redirect('/post');
    }

    public function hapusKat($id)
    {
        kategori::where('id',$id)->delete();
        // alihkan halaman ke halaman pegawai
        return redirect('/post/kategori');
    }

    public function hapusTag($id)
    {
        kategori::where('id',$id)->delete();
        // alihkan halaman ke halaman pegawai
        return redirect('/post/tag');
    }
}
