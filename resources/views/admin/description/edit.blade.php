@extends('adminlte::page')

@section('title', 'AdminLTE')
@section('content')
<h2>Modification de la description</h2>
<form action="/update-description/{{$description->id}}" method="post">
    @csrf
    <label for="" class="mt-3">Titre : </label><br>
    <input type="text" name="titre" class="w-50" value="{{$description->titre}}"><br>

    <label for="" class="mt-3">texte : </label><br>
    <textarea class="w-75" name="texte" id="" cols="30" value="{{$description->texte}}" rows="10">{{$description->texte}}</textarea><br>


    <button class="btn btn-primary mt-4 w-25">Update</button>
    </div>
</form>
@stop