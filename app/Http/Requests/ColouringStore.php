<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColouringStore extends FormRequest
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif', // max:2048 specifies the maximum file size in kilobytes (2MB)
        ];
    }
}
