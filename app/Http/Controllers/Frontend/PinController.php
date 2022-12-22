<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
class PinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (request()->ajax()){
            // $get=PinBuilder::where('customer_id',auth)->get();
            $get=DB::select("SELECT pin_builders.id,pin_builders.pin,user2.username name,if(user2.pin_no=null,0,user2.pin_no ) is_used from pin_builders
            inner join users on users.id=pin_builders.customer_id
            left join users as user2 on user2.pin_no=pin_builders.pin
            where pin_builders.customer_id=:customer_id
            order by pin_builders.id
            ",['customer_id'=>auth()->user()->id]);
            return DataTables::of($get)
              ->addIndexColumn()
              ->addColumn('action',function($get){
                $button  ='<div class="d-flex justify-content-center">
                <a data-url="'.route('pin_generate.edit',$get->id).'"  href="javascript:void(0)" class="btn btn-primary shadow btn-xs sharp me-1 mr-1 editRow text-light"><i class="fa fa-eye"></i></a>
                <a data-url="'.route('pin_generate.destroy',$get->id).'" href="javascript:void(0)" class="btn btn-danger shadow btn-xs sharp deleteRow"><i class="fa fa-trash"></i></a>
              </div>';
            return $button;
          })
          ->addColumn('pin',function($get){
            return "<span class='p-1 rounded text-white ".($get->is_used==null ? "bg-success" :"bg-danger")."'>".$get->pin."<span>";
            })
          ->rawColumns(['action','pin'])->make(true);
        }
        return view('frontend.pin.pin');
    }
}
