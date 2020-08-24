@extends('layout.main')

@section('title' , '管理员列表')


@section('right_content')
    @parent



	<div class="elem_quote_search">
		<div class="inline pull-right">
			<div class="input-inline">
				<input type="text" value="" placeholder="请输入关键字" class="search_input">
			</div>
			<input class="default_btn" value="查询" type="button">
		</div>
		
		<div class="inline">
			<a class="default_btn btn_add" href="{{url('user/add')}}">新增</a>
		</div>
		<div class="inline">
			<a class="default_btn btn-batchDel">批量删除</a>
		</div>
		
	</div>

	<div class="form_table_list">
		<table class="table">
			<thead>
				<tr>
					<th width="50"><input type="checkbox" name=""></th>
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
					<td><input type="checkbox" name=""></td>
					<td>{{$model->id}}</td>
					<td style="text-align:left;">{{$model->username}}</td>
					<td>{{date('Y-m-d H:i:s' , $model->created_at)}}</td>
					<td>{{date('Y-m-d H:i:s' , $model->last_login_at)}}</td>
					<td> {{$model->status  == 0 ? '禁止' : '正常'}}</td>
					<td>
						<a href="/user/edit/{{$model->id}}" class="btn_mini btn_edit"> 编辑</a>
						<a href="/user/delete/{{$model->id}}" class="btn_mini btn_del item-delete"> 删除</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		<div class="pages">
			<ul>
				<li class="on"><a href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">4</a></li>
				<li><a href="">5</a></li>
				<li class="pages-next"><a href="">下一页</a></li>
				<li class="pages-end"><a href="">末页</a></li>
			</ul>
			<div class="total">共有<span>1</span>条记录</div>
		</div>

	</div>
@endsection
