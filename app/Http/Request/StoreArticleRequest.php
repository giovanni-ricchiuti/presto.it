<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //impostare a true invece di false
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
            'title'=> 'required|max:150',
            'categories'=> 'required',
            'description'=> 'required|max:250',
            'body' => 'max:5000',
        ];
    }

    public function messages(): array {
        return [
            'title.required' => ' Il campo Titolo non può essere vuoto.',
            'title.max' => ' Il campo Titolo non può essere più lungo di :max caratteri.',
        ];
    }


}
