@extends('layout.main')

@section('title' , '欢迎页面')


@section('content')

    <div class="login layui-anim layui-anim-up">
        <div class="message">后台-管理登录</div>
        <div id="darkbannerwrap"></div>
        
        <form method="post" class="layui-form" action="{{url('admin/doLogin')}}">
            {{csrf_field()}}
            <input name="username" placeholder="用户名"  type="text" lay-verify="required" class="layui-input" >
            <hr class="hr15">
            <input name="password" lay-verify="required" placeholder="密码"  type="password" class="layui-input">
            <hr class="hr15">
            <div class="layui-form-item">
              <input type="text" id="verifyCode"  name="verifyCode" lay-verify="required"  placeholder="验证码" autocomplete="off" class="layui-input" style="width:205px;float:left;margin-right:13px">
              <img src="{{url('admin/code')}}" onclick="this.src='{{url('admin/code')}}?' + Math.random()">
            </div>
            <hr class="hr15">
            <input value="登录" lay-submit lay-filter="login" style="width:100%;" type="submit">
            <hr class="hr20" >
        </form>
    </div>

    <link rel="stylesheet" href="/static/css/login.css">


@endsection