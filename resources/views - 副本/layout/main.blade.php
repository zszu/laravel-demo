 
 @extends('layout.base')


@section('slidebar')
    @parent
    
@endsection


@section('content')


    <div class="header">
        <div class="logo">
            <a href="">
                <img src="/admin/images/logo.png" alt="" />
            </a>
        </div>
        <div class="hd_btn">
            <a href="javascript:void(0);" class="update">更新缓存</a>
            <a href="" class="exit">退出</a>
        </div>
        <h2>管理后台</h2>
    </div>
    <div class="main">
        <div class="box_con_d1">
            <div class="col-l">
                @include('layout/left');     
            </div>
            <div class="col-r">
                @yield('right_content')

                <div class="fd_copy">Powered By www.sitesmo.com © 2019 思默建站.</div>
            </div>
        </div>
    </div>
    <div class="pop-box">
        <div class="cont" id="pop-con1">
            <div class="tit"><span>思默机器人正在检测您的网站</span></div>
            <div class="circleChart" id="chart2"></div>
            <div class="con"></div>
            <p class="p1">请耐心等待正在体检中...</p>
        </div>
        <div class="cont" id="pop-con2">
            <div class="tit"><span>您还有提升的空间哦</span></div>
            <div class="circleChart" id="chart3"></div>
            <ul class="list">
                <li><span>填写了网站介绍</span><a href="" class="more">前往 &gt;</a></li>
                <li><span>设置了网站图标</span><a href="" class="more">前往 &gt;</a></li>
                <li><span>上传了分享封面图</span><a href="" class="more">前往 &gt;</a></li>
                <li class="ok"><span>最新版网站系统</span><a href="" class="more">前往 &gt;</a></li>
                <li><span>SEO设置</span><a href="" class="more">前往 &gt;</a></li>
                <li><span>发布10篇文章</span><a href="" class="more">前往 &gt;</a></li>
                <li class="ok"><span>开启站点地图</span><a href="" class="more">前往 &gt;</a></li>
            </ul>
            <div class="bot">
                <p>体检完成</p>
                <a href="javascript:void(0);" class="js-close">已阅</a>
            </div>
        </div>
    </div>
    

@endsection