<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;


class StoreApartmentRequest extends FormRequest
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

    public function prepareForValidation()
    {
        $user_id = Auth::id();
        $this->merge([
            'user_id' => $user_id
        ]);
    }

    public function rules()
    {
        return [
            'name' => ['required', 'min:3', 'max:40'],
            'rooms' => ['required', 'numeric', 'min:0', 'max:200'],
            'beds' => ['required', 'numeric', 'min:0', 'max:10'],
            'bathrooms' => ['required', 'numeric', 'min:0', 'max:10'],
            'mq' => ['required', 'numeric', 'min:0', 'max:10000'],
            'lat' => ['required', 'numeric', 'min:-999', 'max:999'],
            'lon' => ['required', 'numeric', 'min:-999', 'max:999'],

            'address' => ['required', 'min:3', 'max:100'],
            'photo' => ['min:0', 'max:255'],
            // 'visible' => ['required', 'in:0,1'],


            // 'slug' => 'nullable',

            'user_id' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Il nome è richiesto',
            // 'name.max' => 'Il nome deve essere lungo massimo :max caratteri',
            // 'name.min' => 'Il nome deve essere lungo almeno :min caratteri',

            // 'price.required' => 'Il prezzo è richiesto',
            // 'price.numeric' => 'Il prezzo deve essere un valore numerico',
            // 'price.max' => 'Il prezzo non può essere superiore a :max',
            // 'price.min' => 'Il prezzo non può essere negativo',

            // 'visibility.required' => 'Seleziona un campo',
            // 'visibility.in' => 'Errore nel campo "avaiable", il valore deve essere 0 o 1',


            // 'description.required' => 'La descrizione è richiesta',
            // 'description.max' => 'La descrizione deve essere lunga massimo :max caratteri',
            // 'description.min' => 'La descrizione deve essere lunga almeno :min caratteri',


        ];
    }
}
