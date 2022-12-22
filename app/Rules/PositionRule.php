<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\User;
use App\Http\Traits\TotalBalanceTrait;
class PositionRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    private $uplink_id;
    public function __construct($uplink_id)
    {
        $this->uplink_id=$uplink_id;
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
        info($this->uplink_id);
        $data=User::where('uplink_id',$this->uplink_id)->where('position',$value)->count();
        if($data>0){
            return false;
        }else{
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
        return 'the position already used';
    }
}
