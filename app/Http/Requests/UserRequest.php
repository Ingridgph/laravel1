<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo name obrigatório',
            'email.required' => 'Campo email obrigatório',
            'password.required' => 'Campo password obrigatório',
            'email.email' => 'Este campo deve ser do tipo email',
            'email.unique' => 'Este email deve ser unico',
            'password.min' => 'Campo password precisa de no minimo :min digitos',
        ];
    }
}
