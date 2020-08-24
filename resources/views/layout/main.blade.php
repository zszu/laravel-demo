 
 @extends('layout.base')


@section('slidebar')
    @parent
    
@endsection


@section('content')

    <!-- 顶部开始 -->
    <div class="container">
        <div class="logo">
            <a href="{{url('/')}}">后台首页</a></div>
        <div class="left_open">
            <a><i title="展开左侧栏" class="iconfont">&#xe699;</i></a>
        </div>
        <ul class="layui-nav left fast-add" lay-filter="">
            <li class="layui-nav-item">
                <a href="javascript:;">+新增</a>
                <dl class="layui-nav-child">
                    <!-- 二级菜单 -->
                    <dd>
                        <a onclick="xadmin.open('最大化','http://www.baidu.com','','',true)">
                            <i class="iconfont">&#xe6a2;</i>弹出最大化</a></dd>
                    <dd>
                        <a onclick="xadmin.open('弹出自动宽高','http://www.baidu.com')">
                            <i class="iconfont">&#xe6a8;</i>弹出自动宽高</a></dd>
                    <dd>
                        <a onclick="xadmin.open('弹出指定宽高','http://www.baidu.com',500,300)">
                            <i class="iconfont">&#xe6a8;</i>弹出指定宽高</a></dd>
                    <dd>
                        <a onclick="xadmin.add_tab('在tab打开','member-list.html')">
                            <i class="iconfont">&#xe6b8;</i>在tab打开</a></dd>
                    <dd>
                        <a onclick="xadmin.add_tab('在tab打开刷新','member-del.html',true)">
                            <i class="iconfont">&#xe6b8;</i>在tab打开刷新</a></dd>
                </dl>
            </li>
        </ul>
        <ul class="layui-nav right" lay-filter="">
            <li class="layui-nav-item">
                <a href="javascript:;">admin</a>
                <dl class="layui-nav-child">
                    <!-- 二级菜单 -->
                    <dd>
                        <a onclick="xadmin.open('个人信息','http://www.baidu.com')">个人信息</a></dd>
                    <dd>
                        <a onclick="xadmin.open('切换帐号','http://www.baidu.com')">切换帐号</a></dd>
                    <dd>
                        <a href="./login.html">退出</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item to-index">
                <a href="/">前台首页</a></li>
        </ul>
    </div>
    <!-- 左侧 -->
    @include('layout.left')
    <!-- 右侧主体 -->
    <div class="page-content">
        <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
            <ul class="layui-tab-title">
                <li class="home">
                    <i class="layui-icon">&#xe68e;</i>我的桌面</li></ul>
            <div class="layui-unselect layui-form-select layui-form-selected" id="tab_right">
                <dl>
                    <dd data-type="this">关闭当前</dd>
                    <dd data-type="other">关闭其它</dd>
                    <dd data-type="all">关闭全部</dd></dl>
            </div>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <iframe src="{{url('/')}}" frameborder="0" scrolling="yes" class="x-iframe"></iframe>
                </div>
            </div>
            <div id="tab_show"></div>
        </div>
    </div>
    <div class="page-content-bg"></div>
    <style id="theme_style"></style>
    

@endsection