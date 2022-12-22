<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdraw;
use DataTables;
use Validator;
class WithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth:admin');
     }
    public function index()
    {
        if (request()->ajax()){
            $get=Withdraw::with('user')->get();
            return DataTables::of($get)
              ->addIndexColumn()
              ->addColumn('action',function($get){
              $button  ='<div class="d-flex justify-content-center">
              <button data-id="'.$get->id.'" class="btn btn-primary shadow btn-xs sharp me-1 mr-1 editRow text-light" data-toggle="modal" data-target="#modal" data-whatever="@mdo"><i class="fas fa-pencil-alt"></i> Authorize</button>
          </div>';
            return $button;
          })
          ->addColumn('status',function($get){
            if($get->status==0){
                return "<span class='bg-danger text-white p-1 rounded'>Pending</span>";
            }elseif($get->status==1){
                return "<span class='bg-success text-white p-1 rounded'>Approved</span>";
            }else{
                return "<span class='bg-dark text-white p-1 rounded'>Reject</span>";
            }
        })
          ->addColumn('date',function($get){
                return date('d-m-Y',$get->date);
        })
        ->addColumn('method',function($get){
            switch ($get->method) {
                case 1:
                    return "Rocket";
                    break;
                case 2:
                    return "Bkash";
                    break;
                case 3:
                    return "Nagad";
                    break;
            }
          })
          ->addColumn('username',function($get){
            return $get->user->username;
          })
          ->rawColumns(['action','status'])->make(true);
        }
        return view('backend.withdraw.withdraw');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $validator=Validator::make($request->all(),[
            'authorize'=>["required","max:20","min:1"],
        ]);
        if($validator->passes()){
            $package=Withdraw::find($id);
            $package->status=$request->authorize;
            $package->approved_by_id=auth()->user()->id;
            $package->save();
            if ($package){
                return response()->json(['message'=>'Withdraw Authorized Success']);
            }
        }
        return response()->json(['error'=>$validator->getMessageBag()]);
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
}
