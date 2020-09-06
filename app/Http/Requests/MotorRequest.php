<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotorRequest extends FormRequest
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
            'log_book_no' => 'required',
            'registration' => 'required',
            'chassis' => 'required',
            'make' => 'required',
            'model' => 'required',
            'type' => 'required',
            'body' => 'required',
            'fuel' => 'required',
            'main_year' => 'required',
            'engine_no' => 'required',
            'rating' => 'required',
            'engine_no' => 'required',
            'passengers' => 'required',
            'color' => 'required',
            'no_of_prev_owners' => 'required',
            'tax_class' => 'required',
            'axies' => 'required',
            'previous_reg_country' => 'required',
        ];
    }
}
