<?php
namespace App\Http\Traits;

use DB;
use App\Models\MCommision;
use App\Models\User;
use App\Models\Withdraw;
use App\Models\DCommision;

trait TotalBalanceTrait{

    public function totalBalance($id)
    {
        $commision=MCommision::where('user_id',$id)->sum('ammount');
        $direct_commision=DCommision::where('user_id',$id)->sum('ammount');;
        $withdraw=Withdraw::where('user_id',$id)->sum('ammount');
        $balance=floatval($commision+$direct_commision)-floatval($withdraw);
        return $balance;
    }
    public function totalEarn($id)
    {
        $commision=MCommision::where('user_id',$id)->sum('ammount');
        $direct_commision=DCommision::where('user_id',$id)->sum('ammount');
        $earn=floatval($commision+$direct_commision);
        return $earn;
    }
    public function totalWithdraw($id){
      return  $withdraw=Withdraw::where('user_id',$id)->where('status',1)->sum('ammount');
    }
}

