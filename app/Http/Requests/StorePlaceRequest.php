<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlaceRequest extends FormRequest
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
        return
            [
                "user_id" => [
                    "required",

                ],
                "name" => [
                    "required",
//                "unique:places,name,{$this->request->get('name')}",
//                "unique:places,user_id, {$this->request->get('user_id')}"
                ],
                "coordinates" => [
                    "required", "array", "min:2", "max:2"
                ]
            ];
    }
}
