@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<h1>Description</h1>
@foreach($descriptions as $description)
<h2>{{$description->titre}}</h2>
<h3>{{$description->texte}}</h3>
<br>
<a href="/edit-description/{{$description->id}}" class="btn btn-primary mt-4 mr-2">Edit</a>
@endforeach
@stop