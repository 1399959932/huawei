<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Mail;

//引用对应的命名空间
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Gregwar\Captcha\PhraseBuilder;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $num = $request->input('num', 10);
        $keywords = $request->input('keywords','');

        //关键字检索
        if($request->has('keywords')) {
            //列表显示
            $users = DB::table('users')
                ->where('username','like','%'.$keywords.'%')
                ->paginate($num);
        }else{
            //列表显示
            $users = DB::table('users')->paginate($num);
        }


        //解析模板
        return view('admin.user.index', [
            'users'=>$users,
            'keywords' => $keywords,
            'num' => $num
            ]);
        // // 列表显示
        // $users = DB::table('users')->paginate(10);
        // // 解析模板
        // return view('admin.user.index',['users'=>$users]);
    }

    /**
     * 显示用户添加模板
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
      $data = $request->only(['username','password','email']);
      // 加密密码
      $data['password'] = encrypt($data['password']);
      // 文件上传
      if($request->hasFile('profile')){
        // 获取文件后缀名
        $suffix = $request->file('profile')->extension();
        // 创建一个新的随机名称
        $name = uniqid('img_').'.'. $suffix;
        // 文件夹路径
        $dir = './uploads/'.date('Y-m-d');
        // 移动文件
        $request->file('profile')->move($dir, $name);
        // 获取文件路径
        $data['profile'] = trim($dir.'/'.$name,'.');
      }
      $data['status'] = 0;
      // 将数据插入导数据库
      if(DB::table('users')->insert($data)) {
        return redirect('/user')->with('msg','添加成功');
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
        // 读取当前用户的信息
        $user = DB::table('users')->where('id',$id)->first();
        return view('admin.user.edit',['user'=>$user]);

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
        // 获取数据
        $data = $request->only(['username','email']);
        /**
         * undocumented constant
         **/
        // dd($data);
        // 图片上传
         if($request->hasFile('profile')){
        // 获取文件后缀名
        $suffix = $request->file('profile')->extension();
        // 创建一个新的随机名称
        $name = uniqid('img_').'.'. $suffix;
        // 文件夹路径
        $dir = './uploads/'.date('Y-m-d');
        // 移动文件
        $request->file('profile')->move($dir, $name);
        // 获取文件路径
        $data['profile'] = trim($dir.'/'.$name,'.');
      }
      // 更新
      if(DB::table('users')->where('id',$id)->update($data)){
        return redirect('/user')->with('msg','更新成功');
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
        // 执行删除
        if(DB::table('users')->where('id',$id)->delete()){
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败');
        }
    }



    ////////////////////我是注册登录////////////////////我是注册登录////////////////////我是注册登录////////////////////我是注册登录////////////////////我是注册登录////////////////////我是注册登录////////////////////我是注册登录////////////////////我是注册登录////////////////////我是注册登录////////////////////我是注册登录////////////////////我是注册登录////////////////////我是注册登录////////////////////我是注册登录////////////////////我是注册登录////////////////////我是注册登录////////////////////我是注册登录////////////////////我是注册登录
     public function zhuce(){
        return view('zhuce.zhuce');
    }


    public function captcha()
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build();
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        // var_dump($phrase);
        
        //把内容存入session
        session(['milkcaptcha'=> $phrase]);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }

    //验证码验证
    // public function getCode(Request $request)
    // {
    //  $userInput = $request->get('captcha');
    //  if (Session::get('milkcaptcha') == $userInput) {
    //  //用户输入验证码正确
    //  return '您输入验证码正确';
    //  } else {
    //  //用户输入验证码错误
    //  return '您输入验证码错误';
    //  }

    // }

    public function zhucet(Request $request){

        //验证吗
        $code = $request->code;
        if(session('milkcaptcha') != $code){
            return back()->with('msg','验证码错误');
        }


        $data = $request->only(['email','tel','password']);
        $data['password'] = Hash::make($data['password']);
        $data['verify'] = str_random(30);


        //dd($data);

        //插入数据库
        if (DB::table('users')->insert($data)) {

            Mail::send('email.send', ['data'=>$data], function ($message) use ($data) {
            //标题
            $message->subject('ABC');
            //接收者
            $message->to('1399959932@qq.com');
            });
            // return redirect('/')->with('msg','ok');
            return redirect('/')->with('msg','注册成功,一封激活邮件已经发送到您的邮箱,请确认激活!!');
        }


        
        else{
            return back()->with('msg','orr');
        }
    }

    public function login(){
        return view('login.login');
    }

    public function dologin(Request $request){

        // dd($request->all());

        // 陈注册
        $data = $request->only(['tel','password']); 
        $datas = DB::table('users')->where('tel',$data['tel'])->first();
        

        if (count($datas) > 0) {
           if($data['password'] = 'password'){
              session(['id'=>$datas->id]);
              session(['tel'=>$datas->tel]);
             return redirect('/homed')->with('msg','登录成功');


           }
        }else{
        return back('/')->with('msg','登录失败');    

        }

        // 陈注册结束

        //强哥
        // $data = $request->except('_token');
        // $user = DB::table('users')->where('tel',$data['tel'])->first();

        // //判断有没有这个用户
        // if (empty($user)) {
        //     return back('/')->with('msg','登录失败');
        // }

        // //校验密码

        // if (Hash::check($data['password'],$user->password)) 
        // {
          
        //     // 密码对比...写入session信息

        //     session(['id'=>$user->id]);
        //     session(['tel'=>$user->tel]);

        //     //登录成功
        //     return redirect('/homed')->with('msg','登录成功');
        // }

        //     return back('/')->with('msg','登录失败');


        // 强哥结束


        
    }
}
