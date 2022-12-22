<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Validator;
class SettingController extends Controller
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
        return view('backend.setting.setting');
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
            'company_name'=>"required|max:200|min:1",
            'matching_commision'=>"required|max:200|min:1",
            'direct_commision'=>"required|max:200|min:1",
            'sales_ambassador_commision'=>"required|max:200|min:1",
            'marketing_director_commision'=>"required|max:200|min:1",
            'diamond_member_commision'=>"required|max:200|min:1",
            'crown_member_commision'=>"required|max:200|min:1",
            'share_holder_commision'=>"required|max:200|min:1",
        ]);
        if($validator->passes()){
            $existance=Setting::count();
            if($existance>0){
                $setting=Setting::first();
            }else{
                $setting=new Setting;
            }
            $setting->company_name=$request->company_name;
            $setting->matching_comm=$request->matching_commision;
            $setting->direct_comm=$request->direct_commision;
            $setting->sales_amb_comm=$request->sales_ambassador_commision;
            $setting->marketing_dir_comm=$request->marketing_director_commision;
            $setting->diamond_mmb_comm=$request->diamond_member_commision;
            $setting->crown_mmb_comm=$request->crown_member_commision;
            $setting->share_holder_comm=$request->share_holder_commision;
            $setting->author_id=auth()->user()->id;
            $setting->save();
            if ($setting) {
                return response()->json(['message'=>'Setting Added Success']);
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
}
