@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-between ">
            <div class="col-8">
                <h1 class="py-5 text-primary ">{{$comic->title}}</h1>
            </div>
            <div class="col-4">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Elimina
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered ">
                      <div class="modal-content">
            
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il Comics</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
            
                        <div class="modal-body">
                          Sei sicuro che vuoi eliminare il comics "{{$comic->title}}"
                        </div>
            
            
                        <div class="modal-footer">
            
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                
                                <button class="btn btn-danger">Elimina</button>
                            </form>
            
                        </div>
            
                      </div>
                    </div>
                </div>

                <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning mx-2">Modifica</a>

                <a href="{{route('comics.index')}}" class="btn btn-primary my-5 text-center ">Torna alla Home</a>
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