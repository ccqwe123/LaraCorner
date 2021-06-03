<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basic;
use Log;
class BasicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $basics = Basic::paginate(10);
        return view('crud.basic',compact('basics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.basic-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|min:5',
            'address'=>'required|min:5',
            'status'=>'required',
        ]);
        Basic::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'status'=>$request->status,
        ]);
        return redirect()->route('crud.index')->with('success', 'Basic CRUD Added!');
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
        $basic = Basic::where('id',$id)->first();
        return view('crud.basic-edit',compact('basic'));
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
        $this->validate($request,[
            'name'=>'required|min:5',
            'address'=>'required|min:5',
            'status'=>'required',
        ]);
        $basic = Basic::findorfail($id);
        $basic->update($request->all());
        return redirect()->route('crud.index')->with('success', 'Basic CRUD Added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Basic::find($id);
        if(!$data)
        {
            return redirect()->route('crud.index')->with('danger', 'Something went wrong!');
        }else{
            $data->delete();
            return redirect()->route('crud.index')->with('success', 'CRUD deleted!');
        }
    }
}
