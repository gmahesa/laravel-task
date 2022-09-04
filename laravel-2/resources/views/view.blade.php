@extends('master') 
@section('title', 'View') 
@section('head')
<header >
                    <h1 class="title-site" font-family:stencil;>View Berita</h1>
</header>
@stop
@section('body')
<body >

<table class="table table-hover table-striped " style="background-color:#ecf0f1;"> 
<a>-DETAIL BERITA-</a>
    <thead class="bg-primary">     
        <tr> 
            <th>Komponen</th> 
            <th style="text-align: center" >Data</th>
            </tr> 
    </thead> 
    <tbody> 
        <tr> 
            <td>Judul</td>
            <td>{{ $post->title }}</td> 
        </tr>
        <tr> 
            <td>Konten</td>
            <td>{{ $post->content }}</td> 
        </tr>
        <tr>
            <td>Tag</td>
            <td>
            @foreach($post->tag as $item)
                {{ !empty($item->nama_tag) ? $item->nama_tag : '-' }},
            @endforeach
            </td>
            </tr>
        <tr>
            <td>Nama Penulis </td>
            <td>
                {{ !empty($post->pencipta->nama_pencipta) ? $post->pencipta->nama_pencipta : '-' }}
            </td>
        </tr>
        <tr>
            <td>Kategori </td>
            <td>{{ !empty($post->kategori->nama_kategori) ? $post->kategori->nama_kategori : '-' }}</td>
        </tr>
        <tr>
            <td>Tanggal Dibuat </td>
            <td style ="font-size: 13px">{{ $post->created_at->format('H.m ,M d, Y') }}</td> 
        </tr>
        <tr>
            <td> Tanggal Update</td>
            <td style ="font-size: 13px">{{ $post->updated_at->format('H.m ,M d, Y') }}</td> 
        </tr>
    </tbody> 

</table> 

<a href="/post" class="btn btn-primary bt-sm">Back </a>


@stop

</body>
	