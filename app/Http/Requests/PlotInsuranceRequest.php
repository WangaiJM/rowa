<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlotInsuranceRequest extends FormRequest
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
            'premium' => 'required|numeric',
            'fire' => 'required|numeric',
            'floods' => 'required|numeric',
            'terrorism' => 'required|numeric',
            'added_on' => 'required'
        ];
    }
}
