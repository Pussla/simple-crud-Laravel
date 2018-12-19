<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePerson extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'Name' => 'required|alpha|max:20',
            'Lastname' => 'required|alpha|max:30',
            'Car_id' => 'integer|exists:cars,id',
            'Town_id' => 'required|integer|exists:towns,id',
            'Birth_year' => 'required|integer',
        ];
    }
}
