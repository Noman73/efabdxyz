<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;
use DataTables;
use Validator;
class NoteController extends Controller
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
            $get=Note::query();
            return DataTables::of($get)
              ->addIndexColumn()
              ->addColumn('action',function($get){
              $button  ='<div class="d-flex justify-content-center">
              <a data-url="'.route('note.edit',$get->id).'"  href="javascript:void(0)" class="btn btn-primary shadow btn-xs sharp me-1 mr-1 editRow text-light"><i class="fas fa-pencil-alt"></i></a>
              <a data-url="'.route('note.destroy',$get->id).'" href="javascript:void(0)" class="btn btn-danger shadow btn-xs sharp deleteRow"><i class="fa fa-trash"></i></a>
          </div>';
            return $button;
          })
          ->rawColumns(['action'])->make(true);
        }
        return view('backend.note.note');
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
            'fathers_name'=>"required|max:200|min:1",
            'phone'=>"required|max:200|min:1",
            'note'=>"required|max:500|min:1",
            
        ]);
        if($validator->passes()){
            // return $request->all();
            $customer=new Note;
            $customer->name=$request->name;
            $customer->fathers_name=$request->fathers_name;
            $customer->phone=$request->phone;
            $customer->note=$request->note;
            $customer->author_id=auth()->user()->id;
            $customer->save();
            return response()->json(['message'=>"Note Added Successful"]);
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
        return response()->json(Note::find($id));
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
            'name'=>"required|max:200|min:1",
            'fathers_name'=>"required|max:200|min:1",
            'phone'=>"required|max:200|min:1",
            'note'=>"required|max:500|min:1",
            
        ]);
        if($validator->passes()){
            // return $request->all();
            $customer=Note::find($id);
            $customer->name=$request->name;
            $customer->fathers_name=$request->fathers_name;
            $customer->phone=$request->phone;
            $customer->note=$request->note;
            $customer->author_id=auth()->user()->id;
            $customer->save();
            return response()->json(['message'=>"Note Updated Successful"]);
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
        $delete=Note::where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message'=>'Note Deleted Success']);
        }
    }
}
