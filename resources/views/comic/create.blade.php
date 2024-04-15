@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-primary py-5">AGGIUNGI IL TUO COMICS</h1>

        <form action="{{route('comics.store')}}" method="POST">
            @csrf
    
            <div class="mb-3">
                <label for="title" class="form-label text-primary">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title">
                @error('title')
                    <div class="invalid-feedback ">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="thumb" class="form-label text-primary">Copertina</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
    
            <div class="mb-3">
                <label for="description" class="form-label text-primary">Descrizione</label>
                <textarea type="text" class="form-control  @error('description') is-invalid @enderror " id="description" name="description"></textarea>
                @error('description')
                    <div class="invalid-feedback ">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label text-primary">Prezzo</label>
                <input type="text" class="form-control  @error('price') is-invalid @enderror " id="price" name="price">
                @error('price')
                    <div class="invalid-feedback ">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="series" class="form-label text-primary">Serie</label>
                <input type="text" class="form-control  @error('series') is-invalid @enderror " id="series" name="series">
                @error('series')
                    <div class="invalid-feedback ">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="sale_date" class="form-label text-primary">Data di vendita</label>
                <input type="text" class="form-control  @error('sale_date') is-invalid @enderror " id="sale_date" name="sale_date">
                @error('sale_date')
                    <div class="invalid-feedback ">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="type" class="form-label text-primary">Tipo</label>
                <input type="text" class="form-control  @error('type') is-invalid @enderror " id="type" name="type">
                @error('type')
                    <div class="invalid-feedback ">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="artists" class="form-label text-primary">Artista</label>
                <input type="text" class="form-control  @error('artists') is-invalid @enderror " id="artists" name="artists">
                @error('artists')
                    <div class="invalid-feedback ">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="writers" class="form-label text-primary">Scrittore</label>
                <input type="text" class="form-control  @error('writers') is-invalid @enderror " id="writers" name="writers">
                @error('writers')
                    <div class="invalid-feedback ">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
            <div>
                <button type="submit" class="btn btn-primary my-5">Salva</button>
                <a href="{{route('comics.index')}}" class="btn btn-primary my-5 mx-2">Torna alla Home</a>
            </div>
    
        </form>
    </div> 
@endsection