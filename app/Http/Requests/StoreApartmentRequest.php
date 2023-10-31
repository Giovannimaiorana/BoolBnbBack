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
            'visible' => ['required', 'in:0,1'],

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
            'name.max' => 'Il nome deve essere lungo massimo :max caratteri',
            'name.min' => 'Il nome deve essere lungo almeno :min caratteri',

            'rooms.required' => 'Il numero di stanze è richiesto',
            'rooms.numeric' => 'Inesrisci un valore numerico intero',
            'rooms.max' => 'Non puoi inserire più di :max stanze',
            'rooms.min' => 'Inserisci un valore non negativo',

            'beds.required' => 'Il numero di letti è richiesto',
            'beds.numeric' => 'Inesrisci un valore numerico intero',
            'beds.max' => 'Non puoi inserire più di :max letti',
            'beds.min' => 'Inserisci un valore non negativo',

            'bathrooms.required' => 'Il numero di bagni è richiesto',
            'bathrooms.numeric' => 'Inesrisci un valore numerico intero',
            'bathrooms.max' => 'Non puoi inserire più di :max bagni',
            'bathrooms.min' => 'Inserisci un valore non negativo',

            'mq.required' => 'I mq sono richiesti',
            'mq.numeric' => 'Inesrisci un valore numerico intero',
            'mq.max' => 'Non puoi inserire più di :max mq',
            'mq.min' => 'Inserisci un valore non negativo',

            'lat.required' => 'La latitudine è richiesta',
            'lat.numeric' => 'Inesrisci un valore numerico',
            'lat.max' => 'Non puoi inserire più di :max in latitudine',
            'lat.min' => 'Non puoi inserire meno di :min in latitudine',

            'lon.required' => 'La longitudine è richiesta',
            'lon.numeric' => 'Inesrisci un valore numerico',
            'lon.max' => 'Non puoi inserire più di :max in longitudine',
            'lon.min' => 'Non puoi inserire meno di :min in longitudine',

            'address.required' => "L'indirizzo è richiesto",
            'address.max' => 'Il nome deve essere lungo massimo :max caratteri',
            'address.min' => 'Il nome deve essere lungo almeno :min caratteri',

            'visible.required' => 'Seleziona un campo',
            'visible.in' => 'Errore nel campo "avaiable", il valore deve essere 0 o 1',

        ];
    }
}
