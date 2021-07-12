<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
         
                'full_name' => 'required|string|max:100',
                'mobile' => 'required|max:100|unique:users,mobile,' . $this->id,
                'address'   => 'required|string|max:500',
                'email'  => 'required|email|unique:users,email,' . $this->id,
                'password'   => 'required_without:id',
                
            
            
        ];
    }

    public function messages()

    {
        return [
            'required'  => 'Ce champ est obligatoire ',
            'max'  => 'Ce champ est trop long',
            'email.email' => 'Etes-vous sure de l \ existence de votre email ?',
            'address.string' => 'L adresse doit être contenir des charactères et des numéros',
            'email.unique' => 'Cet email a déjà un compte' ,
            'mobile.unique' => 'Ce numéro de téléphone a déjà un compte',


        ];
    }
}
