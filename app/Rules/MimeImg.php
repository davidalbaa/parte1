<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MimeImg implements Rule
{
    public function __construct()
    {
    }

    public function passes($attribute, $value)
    {
        return ($value->clientExtension() == 'jpg' || $value->clientExtension() == 'png') ? true : false;
    }

    public function message()
    {
        return 'La img debe en formato: [jpg,png]';
    }
}
