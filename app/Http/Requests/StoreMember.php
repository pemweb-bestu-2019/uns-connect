<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMember extends FormRequest
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
            'nik' => 'required|string|min:16|max:16',
            'name' => 'required|min:6',
            'gender' => 'required|in:L,P',
            'birth_place' => 'required',
            'birth_date' => 'required|date_format:"Y-m-d"|before:today',
            'religion' => 'required|in:Islam,Kristen,Katolik,Hindu,Budha',
            'phone_number' => 'required|phone',
            'address' => 'required',
            'city' => 'required',
            'province' => 'required'
        ];
    }
}
