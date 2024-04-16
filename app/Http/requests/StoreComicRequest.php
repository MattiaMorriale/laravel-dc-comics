<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required | max:200',
            'description' => 'nullable | max:4000',
            'thumb' => 'nullable',
            'price' => 'required | max:20',
            'series' => 'required | max:50',
            'sale_date' => 'required',
            'type' => 'required | max:50',
            'artists' => 'required',
            'writers' => 'required',
        ];
    }

    public function messages(): array {
        return [
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
        ];
    }
}
