@extends('adminlte::page')

@section('content')
        <div class="card text-center d-flex ">
            <div class="card-header bg-primary text-white">
                Demande de pc
            </div>
            @foreach($datas as $element)
            <div class="card-body d-flex flex-column align-items-center">
               <p>nom : {{$element->pc->name}}</p>
               <p>email : {{$element->pc->email}}</p>
               <p>status : {{$element->statut}}</p>
               <p>raison : {{$element->raison}}</p>
            </div>
            <form action="/Pc/{{$element->id}}" method='post'>
                @method('PUT')
                @csrf
                    <button type="submit" class='btn btn-success'>Accepter</button>
            </form>
            <form action="/Pc/{{$element->id}}" method="post">
                @method('DELETE')
                @csrf
                    <button type="submit" class='btn btn-danger'>Refuser</button>
            </form>
            <hr>
            @endforeach
            <div class="card-footer text-muted bg-primary">
            </div>
        </div>
@endsection
