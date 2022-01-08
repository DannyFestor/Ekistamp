<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StorePostcodeRequest extends FormRequest
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
            'city_id' => ['required', 'numeric', 'min:1'],
            'postcode' => ['required', 'string', 'size:7', 'regex:/^[0-9]{7}$/i'],
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'postcode' => Str::replace('-', '', $this->postcode),
        ]);
    }
}
