<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrganization extends FormRequest
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
            'name_short' => 'required|max:16',
            'description' => 'required|min:40',
            'address' => 'required',
            'phone_number' => 'nullable|phone',
            'website' => 'nullable|url',
            'registration_fee' => 'required|integer|min:0'
        ];
    }
}
