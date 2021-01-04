<?php

namespace App\Rules;

use App\Models\Slot;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class SlotBookable implements Rule
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
        return Slot::where('id', '=', $value)->where('date', '>=', Carbon::now()->addDays(6))->count() > 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You can only book slots one week from now.';
    }
}
