<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Designation;
use Validator;
use Hash;
use App\Rules\UplinkRule;
use App\Rules\PositionRule;
use App\Rules\PinVerifyRule;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function index()
    {
        if (request()->ajax()){
            $get=User::all();
            return DataTables::of($get)
              ->addIndexColumn()
              ->addColumn('action',function($get){
                    $button  ='<div class="d-flex justify-content-center">
                    <a data-url="'.route('registration.edit',$get->id).'"  href="javascript:void(0)" class="btn btn-primary shadow btn-xs sharp me-1 mr-1 editRow text-light"><i class="fas fa-pencil-alt"></i></a>
                    <a data-url="'.route('registration.destroy',$get->id).'" href="javascript:void(0)" class="btn btn-danger shadow btn-xs sharp deleteRow"><i class="fa fa-trash"></i></a>
                </div>';
            return $button;
          })
          ->rawColumns(['action'])->make(true);
        }
        return view('frontend.registration.registration');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $validator=Validator::make($request->all(),[
            'name'=>"required|max:200|min:1",
            'username'=>"required|max:200|min:1|unique:users,username",
            'email'=>"nullable|email|max:200|min:1|unique:users,email",
            'phone'=>"required|max:200|min:1",
            'refference'=>"required|max:200|min:1",
            'uplink'=>["required","max:200","min:1",new UplinkRule],
            'position'=>["required","max:200","min:1",new PositionRule($request->uplink)],
            'package'=>"required|max:200|min:1",
            'password'=>"required|max:100|min:6|confirmed",
            'pin_no'=>["required","max:10","min:10",new PinVerifyRule],
        ]);
        if($validator->passes()){
            $customer=new User;
            $customer->name=$request->name;
            $customer->username=$request->username;
            $customer->email=$request->email;
            $customer->phone=$request->phone;
            $customer->refferance_id=$request->refference;
            $customer->uplink_id=$request->uplink;
            $customer->position=$request->position;
            $customer->package_id=$request->package;
            $customer->dateofbirth=strtotime($request->dateofbirth);
            $customer->pin_no=$request->pin_no;
            $customer->password=Hash::make($request->password);
            // $customer->author_id=auth()->user()->id;
            $customer->save();
            if ($customer) {
                $designation=new Designation;
                $designation->name="Sales Associate";
                $designation->level=6;
                $designation->status=1;
                $designation->user_id=$customer->id;
                $designation->save();
                return response()->json(['message'=>'Registration Completed']);
            }
        }
        return response()->json(['error'=>$validator->getMessageBag()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getCustomer(Request $request)
    {
        $payment_method= User::where('username','like','%'.$request->searchTerm.'%')->orWhere('id','like','%'.$request->searchTerm.'%')->take(15)->get();
        foreach ($payment_method as $value){
             $set_data[]=['id'=>$value->id,'text'=>$value->username];
        }
        return $set_data;
    }
}
