<?php

namespace App\Http\Requests\Admin\Post;

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
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|integer',
            'tags' => 'nullable|array',
            'tags.*' => 'integer|nullable',
            'main_image' => 'required|image',
            'prev_image' => 'required|image',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Необходимо заполнить поле',
            'title.string' => 'Неверный формат данных',
            'content.required' => 'Необходимо заполнить поле',
            'content.string' => 'Неверный формат данных',
            'category_id.required' => 'Выберите категорию',
            'main_image.required' => 'Необходимо прикрепить картинку',
            'main_image.image' => 'Недопустимое расширение у файла',
            'prev_image.required' => 'Необходимо прикрепить картинку',
            'prev_image.image' => 'Недопустимое расширение у файла',
        ];
    }
}
