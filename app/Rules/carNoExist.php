<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Person;

class carNoExist implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $person = Person::where('car_id', $value)->first();

        if ($person === null) {
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You can`t delete this car because it belongs to our employee';
    }
}
