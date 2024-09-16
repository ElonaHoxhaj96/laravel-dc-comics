{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
<div class="container my-5">
    <h1>Comics</h1>
    @foreach($comics as $comic)
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="card-body">
              <h5 class="card-title">{{$comic->title}}</h5>
            </div>
          </li>
          <li class="list-group-item">{{$comic->id}}</li>
          <li class="list-group-item">{{$comic->description}}</li>
          <li class="list-group-item">{{$comic->thumb}}</li>
          <li class="list-group-item">{{$comic->price}}</li>
          <li class="list-group-item">{{$comic->series}}</li>
          <li class="list-group-item">{{$comic->sale_date}}</li>
          <li class="list-group-item">{{$comic->type}}</li>
        </ul>
      </div>
  @endforeach
    
    
</div>

@endsection


@section('titlePage')
    Comics
@endsection
