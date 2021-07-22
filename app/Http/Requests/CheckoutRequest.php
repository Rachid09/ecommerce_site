<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'phone' => 'required|max:100',
            'address'   => 'required|string|max:500',
            'email'  => 'required|email',
            'city' => 'required',
            'country' => 'required',
            'payment_method' => 'required',




        ];
    }


    // public function messages()

    // {
    // return [
    //     'required'  => 'Ce champ est obligatoire ',
    //     'max'  => 'Ce champ est trop long',
    //     'email.email' => "Etes-vous sure de l'existence de votre email ?",
    //     'address.string' => "L'adresse doit être contenir des charactères et des numéros",



    // ];
    // }
}
