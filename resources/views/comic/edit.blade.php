{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
<div class="container my-5">
   <h1>Edit Comic: {{$comics->title}}</h1>
   <form action="{{ route('comics.update', $comics )}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input 
            type="text" 
            value="{{$comics->title}}"
            class="form-control" 
            id="title" 
            name="title" 
            placeholder="inserisci il titolo">
    </div> 
    <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input 
            type="thumb" 
            value="{{$comics->thumb}}"
            class="form-control" 
            id="thumb" 
            name="thumb" 
            placeholder="inserisci l'url dell'immagine">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input 
            type="text" 
            value="{{$comics->price}}"
            class="form-control" 
            id="price" 
            name="price" 
            placeholder="inserisci il prezzo">
    </div>
    <div class="mb-3">
        <label for="serie" class="form-label">Serie</label>
        <input 
            type="text" 
            value="{{$comics->series}}"
            class="form-control" 
            id="series" 
            name="series" 
            placeholder="inserisci la serie">
    </div> 
    <div class="mb-3">
        <label for="sale_date" class="form-label">Data di Rilascio</label>
        <input 
            type="text" 
            value="{{$comics->sale_date}}"
            class="form-control" 
            id="sale_date" 
            name="sale_date" 
            placeholder="inserisci la data di rilascio ">
    </div> 
    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input 
            type="text" 
            value="{{$comics->type}}"
            class="form-control" 
            id="type" 
            name="type" 
            placeholder="inserisci il tipo">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea 
            class="form-control" 
            name="description" 
            id="description" 
            cols='20' 
            rows="10" 
            name="description"></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" href="#" class="btn btn-success">Aggiorna</button>
        <button type="reset" href="#" class="btn btn-warning">Annulla</button>

    </div>
   </form>

  
    
    
</div>

@endsection


@section('titlePage')
    Dettagli Comics
@endsection
