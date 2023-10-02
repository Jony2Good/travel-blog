<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:3',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Необходимо заполнить поле',
            'name.string' => 'Неверный формат данных',
            'email.required' => 'Необходимо заполнить поле',
            'email.string' => 'Неверный формат данных',
            "email.unique" => "Пользователь с выбраной почтой уже существует",
            'password.required' => 'Необходимо заполнить поле',
            'password.string' => 'Неверный формат данных',
            'password.min' => 'Длина пароля от 3 символов',
        ];
    }
}
