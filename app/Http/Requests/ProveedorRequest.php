<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProveedorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "name" => ["required", Rule::unique('proveedores')->ignore($this->id)],
            "email" => ["required", "email", Rule::unique('proveedores')->ignore($this->id)],
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "Nombre de proveedor obligatorio",
            "name.unique" => "El nombre de proveedor ya esta en uso",
            "email.required" => "Correo de proveedor obligatorio",
            "email.unique" => "El email de proveedor ya esta en uso",
            "email.email" => "El campo debe ser un email",
        ];
    }
}
