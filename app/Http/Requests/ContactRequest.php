<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'string |required ',
            'email' => 'email|nullable | required',
            'body' => 'required '
        ];
    }

    public function messages()
    {
        return [
            'required' => 'The text :attribute is required',
            'string' => 'The text :attribute must be a text',
            'email' => 'The text :attribute must be email',
        ];
    }
}
