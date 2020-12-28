@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<h1>Image de la Banniere</h1>
@foreach($bannieres as $banniere)
<img src="{{asset('images/'.$banniere->image)}}" alt="">
<br>
<a href="/edit-banniere/{{$banniere->id}}" class="btn btn-primary mt-4 mr-2">Edit</a>
@endforeach
@stop