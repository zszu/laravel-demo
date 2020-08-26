@extends('layout.base')

@section('title' , '管理员列表')


@section('content')
    @parent

	<div class="x-nav">
		<span class="layui-breadcrumb">
		<a href="{{url('admin/welcome')}}">首页</a>
		<a>
			<cite>用户管理</cite></a>
		</span>
		<a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" onclick="location.reload()" title="刷新">
		<i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
	</div>
	<div class="layui-fluid">
		<div class="layui-row layui-col-space15">
			<div class="layui-col-md12">
				<div class="layui-card">
					<div class="layui-card-body ">
						<form class="layui-form layui-col-space5" action="{{url('admin/user/index')}}">
							<div class="layui-inline layui-show-xs-block">
								<input class="layui-input"  autocomplete="off" placeholder="开始日" name="start" id="start">
							</div>
							<div class="layui-inline layui-show-xs-block">
								<input class="layui-input"  autocomplete="off" placeholder="截止日" name="end" id="end">
							</div>
							<div class="layui-inline layui-show-xs-block">
								<input type="text" name="username"  placeholder="请输入用户名" autocomplete="off" class="layui-input">
							</div>
							<div class="layui-inline layui-show-xs-block">
								<button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
							</div>
						</form>
					</div>
					<div class="layui-card-header">
						<button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>
						<a class="layui-btn" href="{{url('admin/user/add')}}"><i class="layui-icon"></i>添加</a>
					</div>
					<div class="layui-card-body layui-table-body layui-table-main">
						<table class="layui-table layui-form">
							<thead>
								<tr>
									<th>
                                      <input type="checkbox" lay-filter="checkall" name="" lay-skin="primary">
                                    </th>
									<th width="100">ID</th>
									<th style="text-align:left;">会员名</th>
									<th>注册时间</th>
									<th>最后登录时间</th>
									<th>状态</th>
									<th width="300">操作</th>
								</tr>
							</thead>
							<tbody>
							@foreach($models as $model)
							<tr>
								<td>
									<input type="checkbox" name="id" value="1"   lay-skin="primary"> 
								</td>
								<td>{{$model->id}}</td>
								<td style="text-align:left;">{{$model->username}}</td>
								<td>{{date('Y-m-d H:i:s' , $model->created_at)}}</td>
								<td>{{date('Y-m-d H:i:s' , $model->last_login_at)}}</td>
								<td class="td-status"> <span class="layui-btn layui-btn-{{$model->status  == 0 ? 'danger' : 'normal'}} layui-btn-mini">{{$model->status  == 0 ? '禁用' : '已启用'}}</span></td>
								<td class="td-manage">
									<a href="/user/edit/{{$model->id}}" title="编辑"> <i class="layui-icon">&#xe601;</i></a>
									
									<a href="/user/delete/{{$model->id}}" title="删除"><i class="layui-icon">&#xe640;</i></a>
								</td>
							</tr>
							@endforeach
							</tbody>
						</table>
					</div>
					<div class="layui-card-body ">
						<div class="page">
							<div>
								<a class="prev" href="">&lt;&lt;</a>
								<a class="num" href="">1</a>
								<span class="current">2</span>
								<a class="num" href="">3</a>
								<a class="num" href="">489</a>
								<a class="next" href="">&gt;&gt;</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
	<script>
      layui.use(['laydate','form'], function(){
        var laydate = layui.laydate;
        
        //执行一个laydate实例
        laydate.render({
          elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
          elem: '#end' //指定元素
        });


      });

    </script>
@endsection
