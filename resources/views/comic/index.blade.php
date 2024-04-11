@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column align-items-center ">
        <div class="w-100 py-5">
            <h1 class="py-5 text-primary">DC COMICS</h1>
        </div>

        <div class="d-flex flex-wrap gap-4">
            @foreach ($comics as $comic)
            <div class="card" style="width: 18rem;">
                <img src="{{$comic->thumb}}" class="card-img-top" style='height: 400px;' alt="@">
                <div class="card-body position-relative ">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->type}}</p>
                    <strong class="text-end text-primary">{{$comic->price}}</strong>
                    <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary position-absolute" style='right: 8px; bottom: 8px;'>INFO</a> 
                </div>
            </div>
            @endforeach

        </div>

        <div class="w-100 py-5">
            <a href="{{route('comics.create')}}" class="btn btn-primary">AGGIUNGI UN NUOVO COMICS</a>
        </div>
    </div> 
@endsection