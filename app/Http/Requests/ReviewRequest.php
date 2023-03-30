<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
        $reviewId = ','.$this->route('id') ?? '';
        return [
            'title' => 'required|max:255',
            'body' => 'required',
            'price_from' => 'nullable|numeric',
            'is_recommend' => 'nullable|numeric',
            'discount' => 'nullable|string',
            'deadline' => 'nullable|string',
            'visit_site' => 'nullable|string',
            'status' => 'nullable|numeric',
            'reff_link' => 'nullable|string',
            'is_sidebar' => 'nullable|numeric',
            'sidebar_img' => 'nullable|string',
            'best_advantage' => 'nullable|string',
            'short_description' => 'nullable|string',
            'thumbnail_url' => 'nullable|max:512|string',
            'rate' => 'nullable|numeric',
            'meta_title' => 'nullable|max:512',
            'meta_description' => 'nullable|max:700',
            'slug' => 'required|max:255|unique:reviews,slug'.$reviewId,
            'created_at' => 'nullable|date',
            'updated_at' => 'nullable|date'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute is required',
            'max' => 'The max number of characters for :attribute is :max',
            'unique' => 'The :attribute must be unique',
            'date' => 'The :attribute must match yyyy-mm-dd hh:mm:ss',
            'numeric' => 'The :attribute must be a number',
            'string' => 'The :attribute must be a text',
        ];
    }
}
