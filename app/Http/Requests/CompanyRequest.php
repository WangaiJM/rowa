<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name' => 'required|max:255',
            'industry' => 'required|max:255',
            'email' => 'required|email|max:255',
            'contacts' => 'required|max:255',
            'box_code' => 'required|numeric',
            'postal_code' => 'required|numeric',
            'town' => 'required|max:255',
            'kra_pin' => 'required|max:255',
        ];
    }
}
