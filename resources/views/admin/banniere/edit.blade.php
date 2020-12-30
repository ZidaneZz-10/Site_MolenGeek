@extends('adminlte::page')

@section('title', 'AdminLTE')
@section('content')
<h2>Modification des l'image de la banniere</h2>
<form action="/update-banniere/{{$banniere->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card border-dark p-4 m-auto" style="width: 20rem;">
        <input type="file" name="image">
        <button class="btn btn-primary mt-4 w-50">Update</button>
    </div>
</form>
@stop