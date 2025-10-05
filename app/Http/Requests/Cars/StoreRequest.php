<?php

namespace App\Http\Requests\Cars;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // выключаем
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    { //после выноса сюда можно убирать из $fillable?
        return [
            'make' => 'required|string|min:2|max:40',
            'model' => 'required|string|min:2|max:40',
            'year' => 'required|integer|min:1990',
        ];
    }

    public function messages()
    {
        return [
            'make.min' => 'Слишком короткая марка',
        ];
    }
}
