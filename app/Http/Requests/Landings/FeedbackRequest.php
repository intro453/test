<?php

namespace App\Http\Requests\Landings;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class FeedbackRequest extends FormRequest
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
            'name'    => 'required|string|max:40',
            'email'   => 'required|email|max:40',
            'subject' => 'required|string|max:40',
            'message' => 'required|string|max:2000',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'    => 'Введите имя',
            'email.required'   => 'Введите email',
            'email.email'      => 'Введите корректный email',
            'subject.required' => 'Введите тему',
            'message.required' => 'Введите сообщение',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $messages = implode("<br>", $validator->errors()->all());

        throw new HttpResponseException(
            response($messages, 200)
        );
    }
}
