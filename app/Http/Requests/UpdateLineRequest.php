<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLineRequest extends FormRequest
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
            'prefecture_id' => ['required', 'numeric', 'min:1'],
            'company_id' => ['required', 'numeric', 'min:1'],
            'kanji' => ['required', 'string'],
            'hiragana' => ['nullable', 'string'],
            'katakana' => ['nullable', 'string'],
            'romaji' => ['nullable', 'string'],
        ];
    }
}
