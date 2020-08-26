<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\User;
use App\Http\Controllers\Controller;

use Gregwar\Captcha\CaptchaBuilder;
use App\Tools\Code;
use Session;
class LoginController extends Controller
{
    // 登录
	public function login(){

        $code = new CaptchaBuilder;
    	return view('admin.login' , [
            'body'=>'login-bg',
            'code'=>$code,
    	]);
    }
    public function doLogin(Request $request){
        $input = $request->except('_token');
       

        //验证数据
        $rule = [
            'username' => 'required|between:4,18',
            'password' => 'required|between:6,18|alpha_dash',
        ];
        $mssage = [
            'username.required' => '用户名必须输入',
            'username.between' => '用户名长度必须在4-18位之间',
            'password.required' => '密码必须输入',
            'password.between' => '密码长度必须在4-18位之间',
            'password.alpha_dash' => '密码必须是数字，字母，下划线组成',
        ];
        $validator = Validator::make($input , $rule , $mssage);
        if($validator->fails()){
            return redirect('admin/login')->withErrors($validator)->withInput();
        }
        //验证 此用户
        $model = User::where(['username' => $input['username']])->first();
        if(!$model){
            return redirect('admin/login')->with('errors' , '该用户不存在！');
        }

        if($model->password != md5($input['password'])){
            return redirect('admin/login')->with('errors' , '密码错误！');
        }
        if(!$this->verifyCode($input['verifyCode'])){
            return redirect('admin/login')->with('errors' , '验证码错误！');
        }
        //保存 登录 信息
        Session::put('admin' , $model);
        return view('admin.index');

    }
    public function code(){
        
    
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
    
        //可以设置图片宽高及字体
        $builder->build($width = 120, $height = 50, $font = null);
    
        //获取验证码的内容
        $phrase = $builder->getPhrase();
    
        //把内容存入session

        Session::flash('admin-captcha', $phrase);
    
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }
    public function verifyCode($code){
        if(strtoupper(Session::get('admin-captcha')) == strtoupper($code)){
            return true;
        }else{
            return false;
        }
    }
    // 退出
    public function logout(){
        Session::flush('admin-captcha');
    	return redirect('admin/login');
    }

    
}
