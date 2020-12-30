@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content')
<h2>Modification de la description</h2>
<form action="/update-card/{{$card->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="" class="mt-3">Image : </label><br>
    <input type="file" name="image"><br>

    <label for="" class="mt-3">Titre : </label><br>
    <input type="text" name="titre" class="w-50" value="{{$card->titre}}"><br>

    <label for="" class="mt-3">Description : </label><br>
    <input type="text" name="description" class="w-50" value="{{$card->description}}"><br>

    <button class="btn btn-primary mt-4 w-25">Update</button>
    </div>
</form>
@stop
