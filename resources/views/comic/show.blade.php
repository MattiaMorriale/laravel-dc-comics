@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-between ">
            <div class="col-10">
                <h1 class="py-5 text-primary ">{{$comic->title}}</h1>
            </div>
            <div class="col-2">
                <a href="{{route('comics.index')}}" class="btn btn-primary my-5 text-center">Torna alla Home</a>
            </div>
        </div>

        <div class="row w-100">
            <div class="col-5">
                <img src="{{$comic->thumb}}" style="width: 450px; height: 500px;" alt="">
            </div>
            <div class="col-7">
                <p><strong class="text-primary">Descrizione :</strong><br> {{$comic->description}}</p>
                <p><strong class="text-primary">Serie :</strong><br> {{$comic->series}}</p>
                <p><strong class="text-primary">Data di Vendita :</strong><br> {{$comic->sale_date}}</p>
                <p><strong class="text-primary">Artisti :</strong><br> {{$comic->artists}}</p>
                <p><strong class="text-primary">Scrittori :</strong><br> {{$comic->writers}}</p>
            </div>
        </div>
        
    </div> 
@endsection