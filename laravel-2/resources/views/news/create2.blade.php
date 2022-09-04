@extends('master') 
@section('title', 'Create Kategori') 
@section('body') 
{!! Form::open(['url'=>'/storekat']) !!}  

 <legend>Create Kategori</legend> 
 <div class="form-group"> 
        {!! Form::label('kategori', 'Kategori') !!} 
     {!! Form::text('nama_kategori', null, ['class'=>'form-control']) !!}
</div> 

    {!! Form::submit('save', ['class'=>'btn btn-primary']) !!} 
    {!! Form::close() !!} @stop