@extends('adminlte::page')

@section('title', 'AdminLTE')
@section('content')
<h2>Modification de la description</h2>
<form action="/update-contact/{{$contact->id}}" method="post">
    @csrf
    <label for="" class="mt-3">Adresse : </label><br>
    <input type="text" name="adresse" class="w-50" value="{{$contact->adresse}}"><br>

    <label for="" class="mt-3">Telephone : </label><br>
    <input type="text" name="tel" class="w-50" value="{{$contact->tel}}"><br>

    <label for="" class="mt-3">email : </label><br>
    <input type="text" name="mail" class="w-50" value="{{$contact->mail}}"><br>

    <label for="" class="mt-3">map : </label><br>
    <textarea class="w-75" name="map" id="" cols="30" value="{{$contact->map}}" rows="10">{{$contact->map}}</textarea><br>


    <button class="btn btn-primary mt-4 w-25">Update</button>
    </div>
</form>
@stop