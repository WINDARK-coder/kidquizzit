<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DifferenceUpdate extends FormRequest
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
            'category_id' => 'required|exists:categories,id',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif',
        ];
    }
}
