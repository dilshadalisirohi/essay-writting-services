<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'url' => 'string',
            'email' => 'email|nullable | required',
            'post_id' => 'numeric',
            'status' => 'numeric',
            'body' => 'required',
            'rating' => 'nullable|numeric',
            'g-recaptcha-response' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'The comment :attribute and Captcha is required',
            'numeric' => 'The comment :attribute must be a number',
            'string' => 'The comment :attribute must be a text',
            'email' => 'The comment :attribute must be email',
        ];
    }
}
