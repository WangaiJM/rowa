<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkerRequest extends FormRequest
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
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'id_no' => 'required|max:255',
            'date_of_birth' => 'required|max:255',
            'contacts' => 'required|max:255',
            'box_code' => 'required|numeric',
            'postal_code' => 'required|numeric',
            'town' => 'required|max:255',
            'kra_pin' => 'required|max:255',
        ];
    }
}
