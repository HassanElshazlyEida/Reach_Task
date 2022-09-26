<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserForm extends FormRequest
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
            'name'              => 'required|string|max:255',
            'email'             => 'required|string|max:255|unique:users,email',
            'password'          => 'required|string|min:8'
        ];
    }
    public function response(array $errors)
    {
        return response()->json($errors, 422);
    }
}
