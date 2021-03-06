<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use session;

class GoodsController extends Controller
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

        // $res = DB::table('users')->first();

        $user = session('tel');

        //评论
        $pinglun = DB::table('pinglun')->get();

        
        //关键字
        if($request->has('keywords')) {
            //列表显示
            $goods = DB::table('goods')->where('title','like','%'.$keywords.'%')->paginate($num);
        }else{
            //列表显示
            $goods = DB::table('goods')->paginate($num);
        }


        //解析模板 源'admin.goods.index 后来 homes.xqym
        return view( 's',[
            'goods'=>$goods,
            'keywords'=>$keywords,
            'num' => $num,
            'user' => $user,
            'pinglun' => $pinglun
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $cate = DB::table('cate')->get();

        return view('admin.goods.create',['cate'=>$cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $data = $request->only(['title','price','content','cate_id','kucun']);

    {   
        // dd($request->all());
        // 填充数据库数据
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['status'] = 1;
        $data['kucun'] = rand(1000,2000);
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
                $dir = './upload/'.date('Y-m-d');
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
     * @return \Illuminate\Http\m_responsekeys(conn, identifier)
     */
    public function show(Request $request ,$id)
    {
        //读取商品的详细信息
        $goods = DB::table('goods')->where('id',$id)->first();
        // dd($goods);
        //读取商品的图片信息
        $goods_pic = DB::table('goods_pic')->where('goods_id',$id)->get();


        //index///////////////// //index///////////////// //index/////////////////
        //index///////////////// //index/////////////////
        $num = $request->input('num',10);
        $keywords = $request->input('keywords','');

        // $res = DB::table('users')->first();

        $user = session('tel');

        //评论
        $pinglun = DB::table('pinglun')->get();
         //index///////////////// //index///////////////// //index/////////////////
         //index///////////////// //index///////////////// //index/////////////////

        // dd($goods_picda);

        //home.goods.show      homes.xqym
        return view('homes.xqym',compact('goods','goods_pic','goods_picda','num','keywords','pinglun'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = DB::table('cate')->get();
        $goods = DB::table('goods')->where('id',$id)->first();
        return view('admin.goods.edit',['goods'=>$goods],['cate'=>$cate]);
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
        $data = $request->only(['title','price','content','cate_id']);
        $data['status'] = 1;
        $res = DB::table('goods')->insertGetId($data);
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
            DB::table('goods_pic')->insert($images);
        }
        return redirect('/goods')->with('msg','修改成功');
    }else{
        return redirect('/goods')->with('msg','修改失败');


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
        if(DB::table('goods')->where('id', $id)->delete()) {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!!');
        }
    }



    public function gdlist(){

        //读取商品



        $goods = DB::table('goods')
        ->where('status',1)
        ->select('id','title','price')
        ->orderBy('id','desc')
        ->paginate(20);
        //便利商品信息
        foreach ($goods as $key => &$value) {
            $value->pic = DB::table('goods_pic')
            ->where('goods_id',$value->id)
            ->value('pic');
        }
        // dd($goods);

        $cates = DB::table('cate');
        //模板

        // return view('home.goods.list',compact('goods'));

        return view('homes.fl',compact('goods'));
    }


    public function classify(){
        //读取商品

        $goods = DB::table('goods')
        ->where('status',1)
        ->select('id','title','price')
        ->orderBy('id','desc')
        ->paginate(20);

        //便利商品信息
        foreach ($goods as $key => &$value) {
            $value->pic = DB::table('goods_pic')
            ->where('goods_id',$value->id)
            ->value('pic');
        }
        // dd($goods);
        
        $cates = DB::table('cate');

        //模板

        // return view('home.goods.list',compact('goods'));
        return view('home.classify',compact('goods'));

    }
   
}
