@extends('layouts.app')
@section('title', 'Halaman Utama Portal - Kabar Burung')
@section('content')
{!! Form::open(['route' => 'user.store'])!!}
@include('user._user-form')
{!! Form::close() !!}                  
@stop 