<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class SettingsValidations extends FormRequest
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
            'label' => 'required|max:255',
            'name' => 'required|max:255',
            'value' => 'required|max:255',
            'group' => 'required|max:255',
            'is_active' => 'required',
            'is_api_accessibility' => 'required',
            'description' => ''
        ];
    }
}
