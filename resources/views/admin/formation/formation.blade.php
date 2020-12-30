@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<h1>Create formation :</h1>
<form action="/formation" method="POST">
    @csrf
    <div class="container">
        <label for="titre">Titre: <br>
        <input type="text" id="titre" name="titre"></label><br>
        <label for="horaire">horaire: <br>
        <input type="text" id="horaire" name="horaire"></label><br>
        <label for="durée">durée: <br>
        <input type="text" id="durée" name="durée"></label><br>
        <label for="description">Description: <br>
        <textarea name="description" id="description" cols="30" rows="10"></textarea></label><br>
        <button type="submit">Add</button>
    </div><br>
</form>
<h1>Les Formation :</h1>

<div class="row">

    @foreach($formations as $formation)
    <div class="col-4">
        <div class="formation" style="width: 18rem; height:400px">
            <div class="formation-body">
                <h5 class="formation-title">{{$formation->titre}}</h5><br>
                <p>{{$formation->horaire}}</p>
                <p>{{$formation->durée}}</p>
                <p class="formation-text text-success">{{$formation->description}}</p><hr>
                <p>{{$formation->prix}}</p>
                <a href="/formation/{{$formation->id}}/edit" class="btn btn-primary mt-4 mr-2">Edit</a>
                <form action="/formation/{{$formation->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        <br>
    </div>

    @endforeach
</div>
@stop