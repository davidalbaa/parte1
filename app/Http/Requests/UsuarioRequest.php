<?php

namespace App\Http\Requests;

use App\Rules\MimeImg;
use App\Rules\PruebaRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsuarioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rulesPassword = ["nullable"];
        $rulesImg = ["nullable", new MimeImg()];

        if ($this->getMethod() === 'POST') {
            $rulesPassword = ["required"];
            $rulesImg = ["required", new MimeImg()];
        }

        return [
            "name" => ["required", Rule::unique('users')->ignore($this->id)],
            "rol" => ["required"],
            "password" => $rulesPassword,
            "img" => $rulesImg,
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Nombre de usuario obligatorio",
            "name.unique" => "El nombre de usuario ya esta en uso",
            "rol.required" => "Rol de usuario obligatorio",
            "password.required" => "Password de usuario obligatoria",
            "img.required" => "Img de usuario obligatoria",
        ];
    }
}
