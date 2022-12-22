<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MCommision;
use App\Models\Withdraw;
use App\Models\DCommision;
class AdminHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        return view('backend.dashboard.dashboard');
    }

    public function totalInfo(Request $request)
    {
        // return $request->all();
        $fromDate=date('Y-m-d 00:00:00',strtotime($request->fromDate));
        // return strtotime($fromDate);
        $pending_withdraws=Withdraw::where('status',0)->count();
        $toDate=date('Y-m-d 23:59:59',strtotime($request->toDate));
        $total_sale=User::whereBetween('created_at',[$fromDate,$toDate])->count();
        $total_customer=User::count();
        $matching_commision=MCommision::whereBetween('date',[strval(strtotime($fromDate)),strval(strtotime($toDate))])->sum('ammount');
        $direct_commision=DCommision::whereBetween('created_at',[$fromDate,$toDate])->sum('ammount');
        $total_withdraw=Withdraw::whereBetween('created_at',[$fromDate,$toDate])->sum('ammount');
        return response()->json(['pending_withdraws'=>$pending_withdraws,'total_sale'=>$total_sale,'matching_comm'=>$matching_commision,'direct_comm'=>$direct_commision,'withdraw'=>$total_withdraw,'total_customer'=>$total_customer]);
    }
}
