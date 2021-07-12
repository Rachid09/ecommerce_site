<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest
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

        //
        return [
            'photo' => 'required_without:id|mimes:jpg,jpeg,png',
            // 'category' => 'required|array|min:1',
            'name' => 'required|string|max:190',
            'maincategory_id' => 'required',
            'description' => 'required',
        ];
    }

     public function messages()
    {
        return [
            'required' => 'Ce champ est obligatoire',
            'nom.string' =>  'Le nom de la catégorie doit être des caractères',
        ];
    }
}
