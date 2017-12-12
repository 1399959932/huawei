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
    public function index(Request $request)
    {
        $num = $request->input('num',10);
        $keywords = $request->input('keywords','');

        //关键字
        if($request->has('keywords')) {
            //列表显示
            $goods = DB::table('goods')->where('title','like','%'.$keywords.'%')->paginate($num);
        }else{
            //列表显示
            $goods = DB::table('goods')->paginate($num);
        }

        //解析模板
        return view('admin.goods.index',[
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
        // dd($request->hasFile('pic'));
        $data = $request->only(['title','kuchun','price','content']);

        // 填充数据库数据
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['status'] = 1;

        //插入表
        $res = DB::table('goods')->insertGetId($data);
       
       //如果插入成功
       if($res > 0) {
            //处理图片
            if($request->hasFile('pic')){
                $images = [];
                // 便利上传的数组
                foreach($request->file('pic') as $k=>$v) {
                    $tmp = [];
                   // 获取文件的后缀名
                    $suffix = $v->extension();

                    //创建一个新的随机名称
                    $name = uniqid('img').'.'.$suffix;
                    //文件夹路径
                    $dir = '/uploads/'.date('Y-m-d');
                    //移动文件
                    // $v->move($dir, $name); //草你mua
                    //获取文件的路径
                    $tmp['goods_id'] = $res;
                    $tmp['pic'] = trim($dir.'/'.$name,'.');
                    $images[] = $tmp;
                }
                //将图片信息插入到商品图片表中
                DB::table('goods_pic')->insert($images);

            }
            return redirect('/goods')->with('msg','成功');
       }else{
            return redirect('/goods')->with('msg','shibai');
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
        //读取商品的详细信息
        $goods = DB::table('goods')->where('id',$id)->first();

        //读取商品的图片信息
        $goods_pic = DB::table('goods_pic')->where('goods_id',$id)->get();
        $goods_picda = DB::table('goods_pic')->where('id',$id)->get();


        // dd($goods_pic);

        //home.goods.show      homes.gwcs
        return view('home.goods.show',compact(['goods','goods_pic'],['goods','goods_picda']));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //s
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

    public function gdlist(){
        //读取商品
        $goods = DB::table('goods')->where('status',1)
        ->select('id','title','price')->orderBy('id','desc')->paginate(20);
        
        //便利商品信息
        foreach ($goods as $key => $value) {
            $value->pic = DB::table('goods_pic')
            ->where('goods_id',$value->id)->value('pic');
        }
        // dd($goods);
        //模板
        return view('home.goods.list',compact('goods'));
    }
}
