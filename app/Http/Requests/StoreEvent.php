<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEvent extends FormRequest
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
            'name' => 'required',
            'description' => 'required|min:40',
            'quota' => 'required|integer|min:0',
            'date_eventday' => 'required|date_format:"Y-m-d H:i"|after:now',
            'date_register_close' => 'required|after:now|date_format:"Y-m-d H:i"|before:date_eventday',
            'lat' => 'nullable',
            'long' => 'nullable'
        ];
    }
}
