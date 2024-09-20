{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
<div class="container my-5">
   <h1>Add New Comics</h1>
   <form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="titolo">
    </div> 
    <div class="mb-3">
        <label for="srl" class="form-label">Immagine</label>
        <input type="text" class="form-control" id="srl" name="Immagine">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control" id="price" name="prezzo">
    </div>
    <div class="mb-3">
        <label for="serie" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="serie">
    </div> 
    <div class="mb-3">
        <label for="sale_date" class="form-label">Data di Rilascio</label>
        <input type="text" class="form-control" id="sale_date" name="serie">
    </div> 
    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" class="form-control" id="type" name="type">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" id="description" cols='20' rows="10" name="description"></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" href="#" class="btn btn-success">Invia</button>
        <button type="reset" href="#" class="btn btn-warning">Annulla</button>

    </div>
   </form>

  
    
    
</div>

@endsection


@section('titlePage')
    Dettagli Comics
@endsection
