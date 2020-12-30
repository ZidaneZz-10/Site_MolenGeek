@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<h1>Create Card</h1>
<form action="/add-card" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <input type="file" name="image"><br>
        <label for="titre">Titre: <br><input type="text" id="titre" name="titre"></label><br>
        <label for="description">Description: <br><textarea name="description" id="description" cols="30" rows="10"></textarea></label><br>
        <button type="submit">Add</button>
    </div><br>
</form>
<h1>Cartes Infos</h1>

<div class="row">

    @foreach($cards as $card)
    <div class="col-4">
        <div class="card" style="width: 18rem; height:400px">
            <img src="{{asset('images/'.$card->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$card->titre}}</h5><br>
                <p class="card-text text-success">{{$card->description}}</p><hr>
                <a href="/edit-card/{{$card->id}}" class="btn btn-primary mt-4 mr-2">Edit</a>
                <form action="/delete-card/{{$card->id}}" method="POST">
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