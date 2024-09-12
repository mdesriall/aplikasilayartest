<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NoHpRule implements Rule
{
    public function passes($attribute, $value)
    {
        // Implement your validation logic for 'no_hp' field here
        // Return true if the validation passes, false otherwise
    }

    public function message()
    {
        return 'The :attribute format is invalid.';
    }
}
