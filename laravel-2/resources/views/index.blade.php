@extends('master') 
@section('title', 'Berita') 
@section('head')
<header >
    <h1 class="title-site" font-family:stencil;>Halaman Pertama Portal- Kabar Burung</h1>
</header>
@stop
@section('body')
<body >
<div class="btn-group btn">
    <a href="/post" class="btn btn-info bt-md">Berita </a>
			|
			<a href="/post/kategori"class="btn btn-info bt-md">Kategori</a>
            |
			<a href="/post/tag"class="btn btn-info bt-md">Tag</a>
            |
            <a href="{{ route('user.index') }}"class="btn btn-info bt-md">User</a>

</div>
<table class="table table-hover table-striped" style="background-color:#ecf0f1;"> 
<a>-LIST BERITA-</a>
    <thead class="thead-dark">     
        <tr style="text-align: center"> 
            <th>No</th> 
            <th>Title</th> 
            <th>Published</th>
            <th>Pencipta</th>
            <th>Tanggal</th>
            <th>Kategori</th> 
            <th>Aksi</th>
            </tr> 
    </thead> 
    <tbody > <?php $no=0 ?> 
    @foreach ($posts as $post) 
    <?php $no++ ?> 
        <tr> 
            <td  style="text-align: center" >{{ $no }}</td> 
            <td>{{ $post->title }}</td> 
            <td>
            @foreach($post->tag as $item)
                <strong>{{ !empty($item->nama_tag) ? $item->nama_tag : '-' }},</strong>
            @endforeach
            </td>
            <td>
                {{ !empty($post->pencipta->nama_pencipta) ? $post->pencipta->nama_pencipta : '-' }}
            </td>
            <td  style="text-align: center" >{{ !empty($post->kategori->nama_kategori) ? $post->kategori->nama_kategori : '-' }}</td>
            <td style ="font-size: 13px">{{ $post->created_at->format('H.m ,M d, Y') }}</td> 
            
            
            <td  style="align: center" > 
                <a href="/edit/{{$post->id}}" class="btn btn-success bt-sm">Edit </a>
                <a href="/detail/{{$post->id}}" class="btn btn-info bt-sm">Detail </a>
                <a href="/post/{{$post->id}}" class="btn btn-danger bt-sm">Delete </a>
            </td> 
            
        </tr> 
        @endforeach 
    </tbody> 

</table> 
<table ><tr>
<td>
<a href="/news" class="btn btn-primary bt-sm">Tambah </a>
</td>
<td width="600px"></td> <td></td>
<td> {!! $posts->links() !!}</td>
</tr></table>

@stop

</body>
	