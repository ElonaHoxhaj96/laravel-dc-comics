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
          <th scope="col">Modifica</th>
        </tr>
      </thead>
      <tbody>
        @foreach($comics as $comic)
          <tr>
            <td>{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td>€{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td ><a class="btn btn-success" href="{{route('comics.show', $comic)}}" title="vedi" ><i class="fa-solid fa-eye"></i></a></td>
            <td ><a class="btn btn-warning" href="{{route('comics.edit', $comic)}}" title="modifica" ><i class="fa-solid fa-pen-to-square"></i></i></a></td>
          
          </tr>
        @endforeach
      </tbody>
  </table>

    
    
</div>

@endsection


@section('titlePage')
    Comics
@endsection
