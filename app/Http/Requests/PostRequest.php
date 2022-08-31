<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'body' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'タイトルは必須です',
            'title.min' => ':min文字以上入力してください',
            'body.required' => '本文は必須です',
        ];
    }
}
