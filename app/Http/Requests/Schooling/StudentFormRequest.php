<?php

namespace App\Http\Requests\Schooling;

use Illuminate\Foundation\Http\FormRequest;

class StudentFormRequest extends FormRequest
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
            'firstname' => 'required|string|max:100|min:2',
            'lastname' => 'required|string|max:100|min:2',
            'birthday' => 'required|date',
            'phone' => 'required|string',
            'email' => 'required|email',
            'birthplace' => 'required|string',
//            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'classes' => 'required|exists:classes,id',
            'schoolingYear' => 'required|string|max:12',
            // exists:classes,id signifie que la valeur doit exister dans la table classes et dans la colonne id
        ];
    }
}
