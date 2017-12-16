<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $users = DB::table('users')->get();
        $num = $request->input('num',10);
        $keywords = $request->input('keywords','');

        //关键字
        if($request->has('keywords')) {
            //列表显示
            $users = DB::table('users')->where('title','like','%'.$keywords.'%')->paginate($num);
        }else{
            //列表显示
            $users = DB::table('users')->paginate($num);
        }


        //解析模板
        return view('admin.users.index',[
            'users'=>$users,
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
       return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['username','password','email']);
        //加密密码
        $data['password'] = encrypt($data['password']);
        //文件上传
        if($request->hasFile('hwfile')){
            //文件后缀
            $suffix = $request->file('hwfile')->extension();
            //创建一个随机名称
            $name = uniqid('img_').'.'.$suffix;
            //文件夹路径
            $dir = './upload/'.date('Y-m-d');
            //移动文件
            $request->file('hwfile')->move($dir,$name);
            //获取文件路径
            $data['hwfile'] = trim($dir.'/'.$name,'.');

       }
       $data['status'] = 0;

       //数据导入
       if(DB::table('users')->insert($data)){
            return redirect('/users')->with('msg','添加成功');
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
        $users = DB::table('users')->where('id',$id)->first();
        return view('admin.users.edit',['users'=>$users]);
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
        $data = $request->only(['username','email']);
        //文件上传
        if($request->hasFile('hwfile')){

            $suffix = $request->file('hwfile')->extension();

            $name = uniqid('img_').'.'.$suffix;

            $dir = './upload/'.date('Y-m-d');

            $request->file('hwfile')->move($dir,$name);

            $data['hwfile'] = trim($dir.'/'.$name,'.');

        }

        if(DB::table('users')->where('id',$id)->update($data)) {
            return redirect('/users')->with('msg','更新成功');
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
        if(DB::table('users')->where('id', $id)->delete()) {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!!');
        }
    }
}
