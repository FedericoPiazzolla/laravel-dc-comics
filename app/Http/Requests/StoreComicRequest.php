<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:250',
            'thumb' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'series' => 'required',
            'type' => 'required',           
            'sale_date' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Devi inserire un titolo',
            'title.min' => 'Il titolo deve essere lungo almeno 5 caratteri',
            'thumb.required' => 'Devi inserire un URL',
            'price.required' => 'Devi inserire un prezzo',
            'price.numeric' => 'Inserire un valore numerico',
            'series.required' => 'Devi inserire una serie',
            'sale_date.date' => 'La formattazione della data è errata, inserisci con Y-m-d',
            'sale_date.required' => 'Devi inserire una data',
            'type' => 'Inserisci un tipo'
        ]; 
    }
}
