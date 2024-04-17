@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column  justify-content-center align-items-center pt-5">
        <h1 class="text-primary " style='font-size: 170px;'>DC COMICS</h1>
        <div class="row">
            <div>
                <a href="{{route('comics.index')}}" class="btn btn-outline-primary my-5 ">Gaurda tutti i nostri Comics</a>
            </div>
        </div>
    </div>
@endsection