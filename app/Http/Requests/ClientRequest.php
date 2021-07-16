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

            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'phone' => 'required|max:100|unique:users,phone,' . $this->id,
            'adresse'   => 'required|string|max:500',
            'email'  => 'required|email|unique:users,email,' . $this->id,
            'password'   => 'required_without:id',



        ];
    }

    public function messages()

    {
        return [
            'required'  => 'Ce champ est obligatoire ',
            'max'  => 'Ce champ est trop long',
            'email.email' => "Etes-vous sure de l'existence de votre email ?",
            'adresse.string' => 'L adresse doit être contenir des charactères et des numéros',
            'email.unique' => 'Cet email a déjà un compte',
            'phone.unique' => 'Ce numéro de téléphone a déjà un compte',


        ];
    }
}
