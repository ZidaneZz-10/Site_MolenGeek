@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<h1>Contact</h1>
@foreach($contacts as $contact)
<h3>Adresse : {{$contact->adresse}}</h3>
<h3>telephone : {{$contact->tel}}</h3>
<h3>Email : {{$contact->mail}}</h3>
<h3>Localisation : </h3>
<iframe src="{{$contact->map}}" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
<br>
<a href="/edit-contact/{{$contact->id}}" class="btn btn-primary mt-4 mr-2">Edit</a>
@endforeach
@stop