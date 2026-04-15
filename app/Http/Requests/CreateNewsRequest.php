<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateNewsRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3',
            'subtitle' => 'required|min:3',
            'text' => 'required|min:10'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O campo título é obrigatório',
            'title.min' => 'O campo título deve ter no minimo 3 caracteres',
            'subtitle.required' => 'O campo subtitulo é obrigatório',
            'subtitle.min' => 'O campo subtitulo deve ter no minimo 3 caracteres',
            'text.required' => 'O campo texto é obrigatório',
            'text.min' => 'O campo texto deve ter no minimo 10 caracteres'
        ];
    }
}
