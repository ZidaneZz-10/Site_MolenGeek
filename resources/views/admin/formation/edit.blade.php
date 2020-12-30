@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content')
<h2>Modification de la description</h2>
<form action="/formation/{{$formation->id}}" method="post">
    @method('PUT')
    @csrf
        <label for="titre">Titre: <br>
        <input type="text" id="titre" name="titre" value='{{$formation->titre}}'></label><br>
        <label for="horaire">horaire: <br>
        <input type="text" id="horaire" name="horaire" value='{{$formation->horaire}}'></label><br>
        <label for="durée">durée: <br>
        <input type="text" id="durée" name="durée" value='{{$formation->durée}}'></label><br>
        <label for="description">Description: <br>
        <textarea name="description" id="description" cols="30" rows="10" value='{{$formation->description}}'>{{$formation->description}}</textarea></label><br>

    <button class="btn btn-primary mt-4 w-25">Update</button>
    </div>
</form>
@stop
