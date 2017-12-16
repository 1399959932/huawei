<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roll = DB::table('roll')->get();
        // dd($roll);
        foreach ($roll as $key => $value) {
        }

        return view('admin.roll.index',compact('roll'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roll.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['rollcontent','roll_file','roll_pid','roll_pwz']);

        if($request->hasFile('roll_file')){
          $suffix = $request->file('roll_file')->extension();
          $name = uniqid('img_').'.'.$suffix;
          $dir = './upload/'.date('Y-m-d');
          $request->file('roll_file')->move($dir,$name);
          $data['roll_file'] = trim($dir.'/'.$name,'.');
        }
        $data['status'] = 0;

        if(DB::table('roll')->insert($data)){
            return redirect('/roll')->with('msg','添加成功');
        }else{
          return back()->with('msg','添加失败');
        }

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
        $roll = DB::table('roll')->where('id',$id)->first();
        // dd($roll);
        return view('admin.roll.edit',['roll'=>$roll]);
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
        $data  = $request->only(['rollcaontent','roll_pid','roll_file']);

        if($request->hasFile('roll_file')){
          $suffix = $request->file('roll_file')->extension();
          $name = uniqid('img_').'.'.$suffix;
          $dir = './upload/'.date('Y-m-d');
          $request->file('roll_file')->move($dir,$name);
          $data['roll_file'] = trim($dir.'/'.$name,'.');
        }
        $data['status'] = 0;

        if(DB::table('roll')->insert($data)){
            return redirect('/roll')->with('msg','修改成功');
        }else{
          return back()->with('msg','修改失败');
        }
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
