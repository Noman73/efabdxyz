<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\User;
use App\Http\Traits\TotalBalanceTrait;
class BalanceCheck implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    use TotalBalanceTrait;
    public $balance;
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
        $balance=$this->totalBalance(auth()->user()->id);
        $this->balance=$balance;
        if(floatval($balance)>=$value){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'insuficient balance. you have only '.$this->balance;;
    }
}
