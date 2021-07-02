<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sampleRequest extends FormRequest
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
            'title' => 'required | max:100',
            'date' => 'date',
            'price' => 'numeric',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => '書籍のタイトルを入力してください(100文字以内)',
            'date.date' => '日付を入力してください',
            'price.numeric' => '数字を入力してください',
        ];
    }
}
