<?php

namespace App\Rules;

use App\Models\Slot;
use Illuminate\Contracts\Validation\Rule;

class SlotNotBooked implements Rule
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
        return Slot::where('id', '=', $value)->where('name', '!=', null)->count() == 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This slot is already booked.';
    }
}
