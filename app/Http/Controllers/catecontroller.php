<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class catecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $cate = DB::select("select id,name,pid,concat(path,'_',id) as paths from cate order by paths");
        foreach ($cate as $key => &$value){
            $count = count(explode('_',$value->paths))-2;
            $value->name = str_repeat('|----', $count).$value->name;
        }
        return view('admin.cate.index',['cate'=>$cate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = DB::table('cate')->get();
        return view('admin.cate.create',['cate'=>$cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);

        if($data['pid'] == 0){
            $data['path'] = '0';
        }else{
            $p = DB::table('cate')->where('id',$data['pid'])->first();
            $data['path'] = $p->path.'_'.$p->id;
        }

        if(DB::table('cate')->insert($data)){
            return redirect('/cate/create')->with('msg','添加成功');
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
        return view('admin.cate.edit');
<<<<<<< HEAD

=======
>>>>>>> 053b2638ae39fa636a91311cee8189afa04d26ca
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
        $cate = DB::table('cate')->where('id',$id)->first();
        $path = $cate->path .'_'.$cate->id;

        $res = DB::table('cate')->where('path','like',$path.'%')->delete();
        if(DB::table('cate')->where('id',$id)->delete()){
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败');
        }
    }


}
