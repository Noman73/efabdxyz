<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MCommision;
use App\Http\Traits\TotalBalanceTrait;
use App\Models\Package;
use App\Models\DCommision;
use App\Models\Designation;
use App\Http\Traits\CountTrait;
class HomeController extends Controller
{
    use TotalBalanceTrait;
    use CountTrait;
    public function __construct()
    {
        $this->middleware(['auth','pinVarified']);
    }
    public function index()
    { 
        // return $this->rightCount(81);
        // $x= $this->leftCount(auth()->user()->id);
        // foreach($x as $xs){
        //     $ddd[]=$xs.'='.count($this->leftCount($xs));
        // }
        // return $ddd;
        // return $this->leftCount(auth()->user()->id);
        $leftCount=count($this->leftCount(auth()->user()->id));
        $rightCount=count($this->rightCount(auth()->user()->id));
        $package=User::with('package')->where('id',auth()->user()->id)->first();
        $designation=Designation::where('user_id',auth()->user()->id)->first()->name;
        $total_sale=User::where('refferance_id',auth()->user()->id)->count();
        $all_sale=User::whereBetween('created_at',[date('Y-m-01 00:00:00'),date('Y-m-t 00:00:00')])->count();
        $matching_commision=MCommision::where('user_id',auth()->user()->id)->sum('ammount');
        $direct_commision=DCommision::where('user_id',auth()->user()->id)->sum('ammount');
        $total_balance=$this->totalBalance(auth()->user()->id);
        $total_earn=$this->totalEarn(auth()->user()->id);
        $total_withdraw=$this->totalWithdraw(auth()->user()->id);
        $total_customer=User::count();
        return view('frontend.dashboard.dashboard',compact('leftCount','rightCount','package','all_sale','total_sale','matching_commision','direct_commision','total_balance','total_earn','total_withdraw','designation','total_customer'));
    }
}
