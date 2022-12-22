<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HelperController extends Controller
{
    public function getUplinkUser(Request $request)
    {
        $payment_method= User::where('name','like','%'.$request->searchTerm.'%')->orWhere('id','like','%'.$request->searchTerm.'%')->take(15)->get();
        foreach ($payment_method as $value){
             $set_data[]=['id'=>$value->id,'text'=>$value->name];
        }
        return $set_data;
    }
}
