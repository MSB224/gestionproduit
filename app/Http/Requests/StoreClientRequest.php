<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
             'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required|unique:clients,telephone',
            'genre'=>'required',
           
        ];
    }
     public function messages(){
        return [
            'nom.required'=>'le champs nom est obligatoire',
            'prenom'=>'le champs prenom est obligatoire',
            'telephone'=>'le champs telephone est obligatoire',
            'telephone.unique'=>'le champs telephone est unique',
            'genre'=>'le champs genre est obligatoie',
           
        ];
}
}