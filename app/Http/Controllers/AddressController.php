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
                
        // $cates = DB::table('cate')->get();

        $goodss = DB::table('carts')->get();
        // dd($goods);

       

        //评论
        $pinglun = DB::table('pinglun')->get();


        return view('home.address.index',compact('goods_pic','pinglun','goodss','goods'));
       
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
         //读取商品的详细信息
        $goodss = DB::table('carts')->get();
        // dd($goods);
            //读取商品的图片信息
            $goods_pic = DB::table('goods_pic')->where('goods_id',$id)->get();
            $goods_picda = DB::table('goods_pic')->where('id',$id)->get();

        return view('home.address.index',compact('goods_pic','goods','pinglun','goodss'));

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
        if(DB::table('address')->where('id', $id)->delete()) {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!!');
        }
    }

    public function getArea(Request $request){
        $pid = $request->pid;
        // echo $pid;

        $map = DB::table('chinamap')->where('area_parent_id',$pid)->get();

        return $map->toJson();

    }

}
