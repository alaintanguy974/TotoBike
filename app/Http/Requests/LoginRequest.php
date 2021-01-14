<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username' => 'required|min:5|max:50',
            'pass' => 'required'
        ];
    }

    public function messages(){
        return [
            'username.required' => 'le username est requis',
            'username.min' => 'le username doit faire au moins 5 caractères',
            'username.max' => 'le username doit faire au moins 5 caractères',
            'pass.required' => 'le pass est requis'
        ];
    }
}

