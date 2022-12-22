<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Otp;
class OtpValidate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    protected $username;
    public function __construct($username)
    {
        $this->username=$username;
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
        $result = Otp::validate('password:'.$this->username,$value);
        return $result->status;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'your username not match with the otp !';
    }
}
