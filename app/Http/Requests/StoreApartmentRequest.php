<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApartmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
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
            'photo' => ['required', 'min:3', 'max:255'],
            'visible' => ['required', 'in:0,1'],


            'slug' => 'nullable',

            'user_id' => 'required'
        ];
    }
}
