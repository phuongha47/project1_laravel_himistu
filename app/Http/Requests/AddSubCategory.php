<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSubCategoryRequest extends FormRequest
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
            'name' => 'required|max:50|unique:categories|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'parent_id' => 'required|exists:mysql.catgories,id',
        ];
    }
}
