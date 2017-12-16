<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Yansongda\Pay\Pay;


class DingdanController extends Controller
{

     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('homes.ddym'); 
        
        $config_biz = [
            'out_trade_no' => $bm['did'],
            'total_amount' => $total,
            'subject'      => '珠宝之家',
        ];
        $pay = new Pay($this->config);
        return $pay->driver('alipay')->gateway()->pay($config_biz); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        //显示订单确认页面
        // echo '我是确认页面';
          //插入订单表
        $data['address_id'] = $request->address_id;

        $data['user_id'] = session('id');
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['status'] = 1;
        $data['bm'] = time().rand(10000,99999);

        //插入主表
        $id = DB::table('dingdan')->insertGetId($data);

        //插入订单的商品表
        $goods = [];
        foreach($request->data as $k=>$v) {
            $tmp = [
                'dingdan_id' => $id,
                'goods_id' => $v['id'],
                'goods_num' => $v['num']
            ];
            $goods[] = $tmp;
        }
        if (DB::table('dingdan_goods')->insert($goods)) {
            return redirect('/dingdan/pay?did='.$data['bm']);
        }else{
            return back()->with('msg','err');
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

    public function zhifu(Request $request)
    {
        // dd($request->all());
        // echo '我是确认页面';

        //读取用户的收货地址
        $dizhi = DB::table('address')->where('user_id',session('id'))->get();
        
            //读取收货地址
            foreach($dizhi as $key=>$value){
                $value->pname = DB::table('chinamap')->where('id',$value->province)->value('area_name');
                $value->cname = DB::table('chinamap')->where('id',$value->city)->value('area_name');
                $value->xname = DB::table('chinamap')->where('id',$value->xian)->value('area_name');

            }

        //便利数组
        $data = $request->data;
        $goodsDate= [];
        //重甲
        $zongjia = 0;
        //单价
        $xiaojie = 0;
        foreach ($data as $key => $value) {
            if(isset($value['id'])){
                //读取商品的信息
                //读取商品的详细信息
                $goods = DB::table('goods')->where('id',$value['id'])->first();
                $goods->pic = DB::table('goods_pic')->where('goods_id', $value['id'])->value('pic');
                $goods->num = $value['num'];
                $goodsData[] = $goods;

                 // $goods->picda = DB::table('goods_pic')->where('id',$value['id'])->first();
                $xiaojie = $goods->num * $goods->price;
                $zongjia += $goods->num * $goods->price;

            }
        }
        // dd($goodsData);
       
        //解析模板 分配数据
        return view('home.remind.zhifu', compact('dizhi','goodsData','xiaojie','zongjia'));


    }

    public function pay(Request $request)
    {
         //支付
        $did = $request->did;

        //获取订单的信息
        $dingdan = DB::table('dingdan')->where('bm',$did)->first();

        //计算商品总价
        $goods = DB::table('dingdan_goods')->where('dingdan_id',$dingdan->id)->get();

        $zongjia = 0;

        foreach($goods as $key => $value) {
            $price = DB::table('goods')->where('id',$value->goods_id)->value('price');

            $zongjia += $price * $value->goods_num;


        }
        //完事儿给钱第三方pay

    }

}
