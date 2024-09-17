{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
<div class="container my-5">
    <div class="card">       
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
        <div class="card-body">
            <h5 class="card-title">Titolo: {{$comics->title}}</h5>
        </div>
        </li>
        <li class="list-group-item"><strong></strong> Id: {{$comics->id}}</li>
        <li class="list-group-item"><strong>Descrizione:</strong> {{$comics->description}}</li>
        <li class="list-group-item"><img class="thambnail" src="{{$comics->thumb}}" alt="{{$comics->title}}"></li>
        <li class="list-group-item"><strong>Prezzo: </strong>€{{$comics->price}}</li>
        <li class="list-group-item"><strong>Serie</strong>:{{$comics->series}}</li>
        <li class="list-group-item"><strong>Data:</strong> {{$comics->sale_date}}</li>
        <li class="list-group-item"><strong>Tipologia:</strong> {{$comics->type}}</li>
    </ul>
    <button><a class="btn-btn-sucsses" href="{{route('comics.index')}}" >Torna all'elenco</a></button>
    </div>

  
    
    
</div>

@endsection


@section('titlePage')
    Dettagli Comics
@endsection
