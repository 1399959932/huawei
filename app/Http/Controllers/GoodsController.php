<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.goods.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.goods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $data = $request->only(['title','kucun','price','content']);

        // 填充数据库数据
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['status'] = 1;
        // dd($data);
        //插入表
        $res = DB::table('goods')->insertGetId($data);
       //如果插入成功
       if($res > 0){
        if($request->hasFile('pic')){
            $images = [];

            foreach($request->file('pic') as $k=>$v){
                $tmp = [];
                $suffix = $v->extension();
                $name  = uniqid('img_').'.'.$suffix;
                $dir = '/uploads/'.date('Y-m-d');
                $v->move($dir,$name);
                $tmp['goods_id'] = $res;
                $tmp['pic'] = trim($dir.'/'.$name,'.');
                $images[] = $tmp;
                $data['profile'] = trim($dir.'/'.$name,'.');
            }
            DB::table('goods_pic')->insert($images);
        }
        return redirect('/goods')->with('msg','添加成功');
    }else{
        return redirect('/goods')->with('msg','添加失败');
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
