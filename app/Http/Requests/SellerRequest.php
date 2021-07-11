<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellerRequest extends FormRequest
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
            'logo' => 'required_without:id|mimes:jpg,jpeg,png',
            'store_name' => 'required|string|max:100',
            'full_name' => 'required|string|max:100',
            'mobile' => 'required|max:100|unique:sellers,mobile,' . $this->id,
            'email'  => 'required|email|unique:sellers,email,' . $this->id,
            // 'category_id'  => 'required|exists:main_categories,id',
            'address'   => 'required|string|max:500',
            'password'   => 'required_without:id',
            'cop_name'   => 'required|string|max:100'
        ];
    }


    public function messages()
    {

        return [
            'required'  =>'Ce champ est obligatoire',
            'max'  => 'Ce champ est obligatoire',
            'category_id.exists'  =>'Cette catégorie n existe pas',
            'email.email' => 'Cet email est pas invalide ',
            'address.string' => 'Ce champ doit être composé de caractères, ou bien caractères et numéros',
            'store_name.string'  => 'Ce champ doit être composé de caractères, ou bien caractères et numéros',
            'cop_name.string'  => 'Ce champ doit être composé de caractères, ou bien caractères et numéros',
            'full_name.string'  => 'Ce champ doit être composé de caractères, ou bien caractères et numéros',
            'logo.required_without'=> 'La photo est obligatoite',
            'email.unique' => 'Cet email est déjà utilisé ',
            'mobile.unique' => 'Ce numéro de téléphone est déjà utilisé ',


        ];
    }
}
