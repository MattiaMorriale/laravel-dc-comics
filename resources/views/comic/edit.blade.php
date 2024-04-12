@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="mb-4">Modifica il tuo Comics</h1>

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label text-primary">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}" required>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label text-primary">Copertina</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label text-primary">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description" required>{{$comic->description}}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label text-primary">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" required value="{{$comic->price}}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label text-primary">Serie</label>
            <input type="text" class="form-control" id="series" name="series" required value="{{$comic->series}}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label text-primary">Data di vendita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" required value="{{$comic->sale_date}}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label text-primary">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" required value="{{$comic->type}}">
        </div>

        <div class="mb-3">
            <label for="artists" class="form-label text-primary">Artista</label>
            <input type="text" class="form-control" id="artists" name="artists" required value="{{$comic->artists}}">
        </div>

        <div class="mb-3">
            <label for="writers" class="form-label text-primary">Scrittore</label>
            <input type="text" class="form-control" id="writers" name="writers" required value="{{$comic->writers}}">
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>

        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary my-5 text-center mx-2">Torna al Comic</a>

    </form>
</div>

@endsection