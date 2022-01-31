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
            'main_key' => 'required|max:255',
            'main_scale' => 'required|max:255',
            'progress_chord' => 'required|max:255',
            'body' => 'required|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'main_key.required' => "使用キーは必須項目です。",
            'main_scale.required' => "使用スケールは必須項目です。",
            'progress_chord.required' => "コード進行は必須項目です。",
            'body.required' => "ポイントは必須項目です。",
            'max' => "文字数が規定を超えています。"
        ];
    }
}
