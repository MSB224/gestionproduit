<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduitRequest extends FormRequest
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
            'designation'=>'required',
            'quantite'=>'required',
            'prix_unitaire'=>'required',
            'categorie_id'=>'required',


        ];
    }
    // the function message 
    public function message(){
        return [
            'desgnation.required'=>'le champ designation est obligatoire',
            'quantite'=>'le champ quantite est obligatoire',
            'prix_unitaire'=>'le champ prix unitaire est obligatoire',
            'categorie_id'=>'veuillez indiquez l\'id de la categorie',
        ];
    }
}
