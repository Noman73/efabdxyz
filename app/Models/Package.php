<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;


    public function total_sale(){
        return $this->hasMany(User::class,'package_id','id');
    }
}
