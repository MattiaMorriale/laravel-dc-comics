<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();


        return view('comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validation($request->all());

        $newComic = new Comic();


        $newComic->title = $request['title'];
        $newComic->description = $request['description'];
        $newComic->thumb = $request['thumb'];
        $newComic->price = $request['price'];
        $newComic->series = $request['series'];
        $newComic->sale_date = $request['sale_date'];
        $newComic->type = $request['type'];
        $newComic->artists = $request['artists'];
        $newComic->writers = $request['writers'];

        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $comic->title = $request['title'];
        $comic->description = $request['description'];
        $comic->thumb = $request['thumb'];
        $comic->price = $request['price'];
        $comic->series = $request['series'];
        $comic->sale_date = $request['sale_date'];
        $comic->type = $request['type'];
        $comic->artists = $request['artists'];
        $comic->writers = $request['writers'];

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    private function validation($data)
    {
        $validator = Validator::make($data, [
            'title' => 'required | max:200',
            'description' => 'nullable | max:4000',
            'thumb' => 'nullable',
            'price' => 'required | max:20',
            'series' => 'required | max:50',
            'sale_date' => 'required',
            'type' => 'required | max:50',
            'artists' => 'required',
            'writers' => 'required',
        ], [
            
            'title.required' => 'Il titolo deve essere inserito nel campo',
            'title.max' => 'Il titolo supera il numero di caratteri consentiti (:max)',
            'description.max' => 'La descrizione supera il numero di caratteri consentiti (:max)',
            'price.required' => 'Il prezzo deve essere inserito nel campo',
            'price.max' => 'Il prezzo supera il numero di caratteri consentiti (:max)',
            'series.required' => 'La Serie deve essere inserito nel campo',
            'series.max' => 'La Serie supera il numero di caratteri consentiti (:max)',
            'sale_date.required' => 'La data deve essere inserito nel campo',
            'type.required' => 'La tipologia deve essere inserito nel campo',
            'type.max' => 'La tipologia supera il numero di caratteri consentiti (:max)',
            'artists.required' => "l'artista deve essere inserito nel campo",
            'writers.required' => "lo scrittore deve essere inserito nel campo",

        ])->validate();
    }
}