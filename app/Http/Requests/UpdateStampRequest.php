<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStampRequest extends FormRequest
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
            'station_id' => ['required', 'numeric', 'gt:0'],
            'company_id' => ['required', 'numeric', 'gt:0'],
            'name' => ['required', 'string'],
            'name_eng' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'description_eng' => ['nullable', 'string'],
            'is_approved' => ['required', 'boolean'],
        ];
    }
}
