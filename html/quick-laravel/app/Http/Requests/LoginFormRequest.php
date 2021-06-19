<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest
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
            'email' => 'email|max:255',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'メールアドレスの形式が違います',
            'password.required' => 'パスワードを入力してください',
        ];
    }
}
