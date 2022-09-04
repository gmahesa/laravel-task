@extends('master') 
@section('title', 'Kategori') 
@section('head')
<header >
                    <h1 class="title-site" font-family:stencil;>Halaman Pertama Portal- Kabar Burung</h1>
</header>
@stop

@section('body')
<body>
<div class="btn-group btn">
    <a href="/post" class="btn btn-info bt-md">Berita </a>
			|
			<a href="/post/kategori"class="btn btn-info bt-md">Kategori</a>
			|
			<a href="/post/tag"class="btn btn-info bt-md">Tag</a>
    </div>
<table class="table table-hover table-striped" style="background-color:#ecf0f1;"> 
    <a>-KATEGORI-</a>
    <thead class="thead-dark" >     
        <tr  style="text-align: center" > 
            <th>No</th> 
            <th>Kategori</th>
            <th>Release</th> 
            <th>Aksi</th>
            </tr> 
    </thead> 
    <tbody  style="text-align: center"> <?php $no=0 ?> 
    @foreach ($kategori as $kat) 
    <?php $no++ ?> 
        <tr> 
            <td>{{ $kat->id }}</td> 
            
            <td>{{ $kat->nama_kategori}}</td>
            <td style ="font-size: 13px">{{ $kat->created_at->format('H.m ,M d, Y') }}</td> 

            <td> 

                <a href="/post/hapusKat/{{$kat->id}}" class="btn btn-danger bt-sm">Delete </a>
		        
            </td> 
            
        </tr> 
        @endforeach 
    </tbody> 
</table> 
<table ><tr>
<td>
<a href="/newskat" class="btn btn-primary bt-sm">Tambah </a>
</td>
<td width="600px"></td> <td></td>
<td> {!! $kategori->links() !!}</td>
</tr></table>
@stop
</body>		