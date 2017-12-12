<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class goodcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.good.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['gd_name','gd_price','gd_stock']);
        $data['gd_cretetime'] = date('Y-m-d H:i:s');
        $data['status'] = 1;

        $res = DB::table('good')->insertGetId($data);
        if($res > 0){
            if($request->hasFile('gd_file')){
                $images = [];
                foreach($request->file('gd_file')as $k=>$v){
                    $tmp = [];
                    $suffix = $v->extension();
                    $name = uniqid('img_').'.'.$suffix;
                    $dir = '/uploads/'.date('Y-m-d');
                    $v->move($dir,$name);

                    $tmp[]
                }
            }
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
