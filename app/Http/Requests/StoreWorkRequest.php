<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWorkRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required',
            'url' => 'required|unique:works',
            'image' => 'required'
        ];
    }

    public function messages () {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'content.required' => 'Il contenuto è obbligatorio',
            'url.required' => 'Il titolo è obbligatorio',
            'url.unique' => "L'url deve essere univoco",
            'image.required' => "L'immagine è obbligatoria"
        ];
    }
}
