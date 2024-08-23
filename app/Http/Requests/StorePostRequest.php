<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|max:100',
            'content' => 'required',
            'url' => 'required|unique:posts',
            'image' => 'required'
        ];
    }

    public function messages () {
        return [
            'title.required' => 'Il campo titolo è obbligatorio',
            'title.max' => 'Il campo titolo non deve superare i 100 caratteri',
            'content.required' => 'Il campo contenuto è obbligatorio',
            'url.required' => 'Il campo url è obbligatorio',
            'url.unique' => 'Il campo url deve essere univoco',
            'image.required' => 'Il campo immagine è obbligatorio'
        ];
    }
}
