{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
<div class="container my-5">
    <h1>{{$comics->title}}</h1>
  
    
    
</div>

@endsection


@section('titlePage')
    Dettagli Comics
@endsection
