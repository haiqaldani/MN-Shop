<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ItemsRequest extends FormRequest
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
            'categories_id' => 'required|integer|exists:categories,id',
            'category_items_id' => 'required|integer|exists:category_items,id',
            'title' => 'required|max:255',
            'image' => 'required|image',
            'about' => 'required'
        ];
    }
}
