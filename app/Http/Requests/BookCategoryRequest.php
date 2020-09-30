<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}
