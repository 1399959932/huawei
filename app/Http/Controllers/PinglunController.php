<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use session;

class PinglunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // homes.xqym
        // return view('homes.xqym');

        $num = $request->input('num',10);
        $keywords = $request->input('keywords','');


        $pinglun = DB::table('pinglun')->get();

         //关键字
        if($request->has('keywords')) {
            //列表显示
            $goods = DB::table('goods')->where('title','like','%'.$keywords.'%')->paginate($num);
        }else{
            //列表显示
            $goods = DB::table('goods')->paginate($num);
        }


        //解析模板
        return view('s',[
            'pinglun'=>$pinglun,
            'keywords'=>$keywords,
            'num' => $num
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homes.xqym');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        // $res = DB::table('users')->where('user_id',$id)->first();

        $data = $request->except(['_token']);
        $data['user_tel'] =  session('tel');
        $data['addtime'] = date('Y-m-d H:i:s');
        $data['star'] = 5;
        // dd($data);
        $res = DB::table('pinglun')->insert($data);
        if($res > 0) {
            return redirect('/dizhi')->with('msg','添加成功');

        }  else{
            return back('/')->with('msg','err');

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
       return view('admin.pinglun.index');
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(DB::table('pinglun')->where('id', $id)->delete()) {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!!');
        }
    }
}
