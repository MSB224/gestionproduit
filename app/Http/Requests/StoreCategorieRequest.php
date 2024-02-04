<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategorieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'categories'=>"required|unique:categories,categories"
        ];
    }
    public function messages(){
        return [
            'categories.required'=>'le champs categories est obligatoire',
            'categories.uniqeu'=>'cette existe dèja dans la base'
        ];

    }
}
