@extends('master') 
@section('title', 'Create Berita') 
@section('body') 

{!! Form::model($post, ['url'=>'/update/' . $post->id, 'method'=>'put']) !!}
<form action="{{ route('post.update', $post->id) }}" method="post">
{{csrf_field()}}
{{ method_field ('PUT')}}

 <legend>Update Berita</legend> 
 <div class="form-group"> 
        {!! Form::label('pencipta', 'Pencipta') !!} 
     {!! Form::text('nama_pencipta', null, ['class'=>'form-control']) !!}
</div> 
    <div class="form-group"> 
        {!! Form::label('title', 'Title') !!} 
        {!! Form::text('title', null, ['class'=>'form-control']) !!} 
    </div>
    <div class="form-group"> 
        {!! Form::label('content', 'Konten') !!} 
        {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
    </div> 
    <div class="form-group"> 
        {!! Form::label('published', 'Published') !!} 
        {!! Form::select('published', ['yes' => 'Yes', 'no' => 'No'], null, ['class'=>'form-control']) !!} 
    </div> 
    <div class="form-group"> 
        {!! Form::label('kategori', 'Kategori') !!} 
        @if (count($list_berita)>0) 
        {!! Form::select('id_kategori',$list_berita, null, ['class'=>'form-control','id'=>'id_kategori','placeholder'=>'Pilih Kategori']) !!} 
        @else 
        <p>tidak ada pilihan Kategori</p> 
        @endif 
    </div>

<div class="form-group">
    {!! Form::label('tag', 'Tag Berita') !!}
    @if(count($list_tag)>0)
        @foreach($list_tag as $key => $value)
            <div class="checkbox">
                <label>{!! Form::checkbox('tag_post[]',$key, null) !!}
                        {{ $value }}
                </label>
            </div>
        @endforeach
    @else
    <p>tidak ada pilihan</p>
    @endif
</div>

    {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!} 
</form>
    {!! Form::close() !!} @stop