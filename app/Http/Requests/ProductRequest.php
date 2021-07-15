<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'main_image' => 'required_without:id|mimes:jpg,jpeg,png',
            'name' => 'required|string|max:100',
            'code' => 'required|string|max:100',
            'colors' => 'required',
            'price'  => 'required|max:100',
            'description'  => 'required|string',
            'quantite'   => 'required|max:200',

        ];
    }


    public function messages()
    {

        return [
            'required'  => 'ce champ est obligé ',
            'max'  => '  ce champs est trop longue',
            'description.string' => 'ce champ doit etre une chaine de caractere ',
            'name.string'  => 'ce champ doit etre une chaine de caractere',
            'main_image.required_without'  => "l'image est obligé",

        ];
    }
}
