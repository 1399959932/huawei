<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.address.index');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        //获取数据
        $data = $request->except(['_token']);

        $data['user_id'] = session('id');


        

        //插入
        if (DB::table('address')->insert($data)) {
            return redirect('/cart')->with('msg','成功');
        }else{
            return back()->with('msg','orr');
        }
        // dd($dizhi);
        // return view('home.remind.index',['dizhi'=>$dizhi]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('home.address.index');
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

    public function getArea(Request $request){
        $pid = $request->pid;
        // echo $pid;

        $map = DB::table('chinamap')->where('area_parent_id',$pid)->get();

        return $map->toJson();

    }

}
