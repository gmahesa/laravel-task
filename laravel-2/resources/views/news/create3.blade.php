@extends('master') 
@section('title', 'Create Tag') 
@section('body') 
{!! Form::open(['url'=>'/storetag']) !!}  

 <legend>Create Tag</legend> 
 <div class="form-group"> 
        {!! Form::label('tag', 'Tag') !!} 
     {!! Form::text('nama_tag', null, ['class'=>'form-control']) !!}
</div> 

    {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!} 
    {!! Form::close() !!} @stop