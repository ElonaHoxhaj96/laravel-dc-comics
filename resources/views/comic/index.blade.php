{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
<div class="container my-5">
    <h1>Comics</h1>
   

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Titolo </th>
          <th scope="col">Prezzo</th>
          <th scope="col">Serie</th>
          <th scope="col">Dettagli</th>
        </tr>
      </thead>
      <tbody>
        @foreach($comics as $comic)
          <tr>
            <td>{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td>€{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td ><a class="btn-btn-sucsses" href="{{route('comics.show', 'comics')}}" ><i class="fa-solid fa-eye"></i></a></td>
          </tr>
        @endforeach
      </tbody>
  </table>
      <!-- <div class="card">       
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="card-body">
              <h5 class="card-title">Titolo: {{$comic->title}}</h5>
            </div>
          </li>
          <li class="list-group-item"><strong></strong> {{$comic->id}}</li>
          <li class="list-group-item"><strong>Descrizione:</strong> {{$comic->description}}</li>
          <li class="list-group-item"><img class="thambnail" src="{{$comic->thumb}}" alt="{{$comic->title}}"></li>
          <li class="list-group-item"><strong>Prezzo: </strong>€{{$comic->price}}</li>
          <li class="list-group-item"><strong>Serie</strong>:{{$comic->series}}</li>
          <li class="list-group-item"><strong>Data:</strong> {{$comic->sale_date}}</li>
          <li class="list-group-item"><strong>Tipologia:</strong> {{$comic->type}}</li>
        </ul>
      </div> -->

    
    
</div>

@endsection


@section('titlePage')
    Comics
@endsection
