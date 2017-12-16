<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SyscController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $num = $request->input('num',10);
        $keywords = $request->input('keywords','');

        //关键字
        if($request->has('keywords')) {
            //列表显示
            $goods = DB::table('shouye')->where('title','like','%'.$keywords.'%')->paginate($num);
        }else{
            //列表显示
            $goods = DB::table('shouye')->paginate($num);
        }

        //解析模板
        return view('home.sysc.index',[
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
        return view('home.sysc.create');
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
        $data = $request->only(['price','title','youhui','pic']);

        //填充数据库
        $data['status'] = 1;
        // dd($data);
        //插入表
        $res = DB::table('shouye')->insertGetId($data);
        // dd($data);

        if($res > 0){
            if($request->hasFile('pic')){
                $images = [];

                foreach($request->file('pic') as $k=>$v){
                    $tmp = [];
                    $suffix = $v->extension();
                    $name  = uniqid('img_').'.'.$suffix;
                    $dir = './upload/'.date('Y-m-d');
                    $v->move($dir,$name);
                    $tmp['goods_id'] = $res;
                    $tmp['pic'] = trim($dir.'/'.$name,'.');
                    $images[] = $tmp;
                    $data['profile'] = trim($dir.'/'.$name,'.');
                }    
                DB::table('shouye')->insert($images);
            }
            return redirect('/sysc')->with('msg','添加成功');
        }else{
            return redirect('/sysc')->with('msg','添加失败');
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
        // echo "5555";
        $goods = DB::table('shouye')->where('id',$id)->first();
        return view('home.sysc.edit',compact('goods'));
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
        // dd($request->all());
        $data = $request->only(['price','title','youhui','pic']);

        $data['status'] = 1;
        if($request->hasFile('pic')){
            $suffix = $request->file('pic')->extension();
            // dd($suffix);
            $name = uniqid('img_').'.'.$suffix;
            $dir = './upload/'.date('Y-m-d');
            $request->file('pic')->move($dir,$name);
            $data['pic'] = trim($dir.'/'.$name,'.');
            
        }
        if(DB::table('shouye')->where('id',$id)->update($data)){
            return redirect('/sysc')->with('msg','更新成功');
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
        if(DB::table('shouye')->where('id',$id)->delete()){
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败');
        }
    }


    public function colle(){
        //读取商品

        $shouye = DB::table('shouye')
        ->where('status',1)
        ->select('id','title','price','youhui')
        ->orderBy('id','desc')
        ->paginate(20);
        
        //遍历商品信息
        foreach ($shouye as $key => &$value) {
            $value->pic = DB::table('shouye')
            ->where('id',$value->id)
            ->value('pic');
        }
        // dd($shouye);

        //模板
        return view('home.colle',compact('shouye'));

    }
}
