<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LbtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $num = $request->input('num',5);
        $keywords = $request->input('keywords','');

        //关键字
        if($request->has('keywords')) {
            //列表显示
            $goods = DB::table('lbt')->where('title','like','%'.$keywords.'%')->paginate($num);
        }else{
            //列表显示
            $goods = DB::table('lbt')->paginate($num);
        }

        //解析模板
        return view('admin.user.index',[
            'goods'=>$goods,
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
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['status'] = 1;
      if($request->hasFile('pic')) {
        $suffix = $request->file('pic')->extension();
        $name  = uniqid('img_').'.'.$suffix;
        $dir = './upload/'.date('Y-m-d');
        $request->file('pic')->move($dir,$name);
        $data['pic'] = trim($dir.'/'.$name,'.');
      }
      // 添加
      if(DB::table('lbt')->insert($data)){
        return redirect('/admin/lbotu')->with('msg','添加成功');
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
        $goods = DB::table('lbt')->where('id',$id)->first();
        return view('admin.user.edit',['goods'=>$goods]);
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

         $data['status'] = 1;
      if($request->hasFile('pic')) {
        $suffix = $request->file('pic')->extension();
        // dd($suffix);
        $name  = uniqid('img_').'.'.$suffix;
        $dir = './upload/'.date('Y-m-d');
        $request->file('pic')->move($dir,$name);
        $data['pic'] = trim($dir.'/'.$name,'.');
      }
      // 更新
      if(DB::table('lbt')->where('id',$id)->update($data)){
        return redirect('/admin/lbotu')->with('msg','更新成功');
      }else{
        return back()->with('msg','更新失败');
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
        if(DB::table('lbt')->where('id', $id)->delete()) {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!!');
        }
    }

    public function rool()
    {
        //读取商品
        $xinxi = DB::table('goods')->get();
        $tupian = DB::table('goods_pic')->get();
        $goods = DB::table('lbt')
        ->where('status',1)
        ->select('id','pic')
        ->orderBy('id','desc')
        ->paginate(10);
        
        //便利商品信息
        foreach ($goods as $key => &$value) {
            $value->pic = DB::table('lbt')
            ->where('id',$value->id)
            ->value('pic');
        }
        // dd($goods);

        // $cates = DB::table('cate');
        //模板
        return view('homes.ry',compact('goods','tupian','xinxi'));
    }
}
