<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PruebaRule implements Rule
{
    public $msj;
    public function __construct($msj)
    {
        $this->msj = $msj;
    }

    public function passes($attribute, $value)
    {
        return ($value === 'roldan') ? true : false;
    }

    public function message()
    {
        return $this->msj;
    }
}
