<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoriaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            "name" => ["required", Rule::unique('categorias')->ignore($this->id)],
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Nombre de categoria obligatorio",
            "name.unique" => "El nombre de categoria ya esta en uso",
        ];
    }
}
