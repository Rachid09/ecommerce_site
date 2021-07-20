<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LanguageRequest extends FormRequest
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

            'nom' => 'required|string|max:190',
            'abbr' => 'required|string|max:10',
            // 'is_active' => 'required|in:0,1',
            'direction' => 'required|in:rtl,ltr',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب',
            'nom.string' => 'اسم اللغة لابد ان يكون احرف',
            'nom.max' => 'اسم اللغة لابد الا يزيد عن 100 حرف',
            'abbr.max' => 'اختصار اللغة لابد الا يزيد عن 10 حرف',
            'abbr.string' => 'اختصار اللغة لابد ان يكون احرف',
            'in' => 'القيم المدخلة غير صحبحة',
        ];
    }
}
