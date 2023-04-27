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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:40',
            'body' => 'required|max:4000'
        ];
    }
    
    public function message()
    {
        return [
            'title.required' => 'タイトルが入力されていません。',
            'title.max:40' => '文字数は４０文字以内です。',
            'body.required' => '内容がありません。',
            'body.max:4000' => '文字数は４０００文字以内です。'
        ];
    }
    
}
