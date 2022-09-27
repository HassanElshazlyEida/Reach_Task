<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\failedValidationTrait;


class UserForm extends FormRequest
{
    use failedValidationTrait;


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'              => 'required|string|max:255',
            'email'             => 'required|email|max:255|unique:users,email',
            'password'          => 'required|string|min:8'
        ];
    }

}
