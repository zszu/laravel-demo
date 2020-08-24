<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
	public function index(){

		$models = User::get();

	   	// return view()->with('models' , $models);
	   	// return view('',commpact('models'));

    	return view('user.index' , [
    		'models'=>$models
    	]);
    }

    //添加 
    /**
    * 获取一个页面
    *@param null
    * @return 返回页面
    */
    public function add(){

    	return view('user.add');
    }
    //保存
    public function save(Request $request)
    {
    	// 1.获取数据
		$input = $request->except('_token');
		// dd($input);
    

    	// 2.表单验证
		//修改
		if(isset($input['scenes']) && $input['scenes'] == 'edit'){
			$model = User::find($input['id']);
			unset($input['scenes']);
			$res = $model->update($input);
		}else{
			// 3.添加操作
			$input['password'] = md5($input['password']);

			$res = User::create($input);
		}

		
    	//添加成功 跳转列表页 失败 返回原页面
    	if($res){
    		return redirect('/user/index');
    	}else{
    		return back();
    	}
	}
	public function edit($id){
		$model = User::find($id);

		return view('user.edit' , [
			'model' => $model,
		]);
	}
	public function delete($id){
		$model = User::find($id);
		// dd('ok');

		if($model->delete()){
			return redirect('/user/index');
		}else{
    		return back();
		}
	}
}
