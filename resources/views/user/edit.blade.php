@extends('layout.base')

@section('title' , '管理员添加')


@section('content')
    @parent
    <div class="layui-fluid">
            <div class="layui-row">
                <form action="{{url('/user/save')}}"  method="post">
                    <tbody>
                        {{csrf_field()}}
                            <!-- 场景 -->
                        <input type="hidden" name="scenes" placeholder="" class="inp" value="edit">
                        <input type="hidden" name="id" placeholder="" class="inp" value="{{$model->id}}">

                        <div class="layui-form-item">
                            <label  class="layui-form-label">
                                用户名：
                            </label>
                            <div class="layui-input-inline">
                                <input type="text"  name="username"  autocomplete="off" class="layui-input" value="{{$model->username}}">
                            </div>
                        </div>
                        
                        <div class="layui-form-item">
                            <label  class="layui-form-label">
                                密码：
                            </label>
                            <div class="layui-input-inline">
                                <input type="password"  name="password"  autocomplete="off" placeholder="请输入密码" class="layui-input" value="{{$model->password}}">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label  class="layui-form-label">
                                邮箱：
                            </label>
                            <div class="layui-input-inline">
                                <input type="text"  name="email"  autocomplete="off" class="layui-input" value="{{$model->email}}">
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label  class="layui-form-label">
                                手机：
                            </label>
                            <div class="layui-input-inline">
                                <input type="text"  name="mobile"  autocomplete="off" class="layui-input" value="{{$model->mobile}}">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label  class="layui-form-label">
                                QQ：
                            </label>
                            <div class="layui-input-inline">
                                <input type="text"  name="qq"  autocomplete="off" class="layui-input" value="{{$model->qq}}">
                            </div>
                        </div>
                        
                        
                        <tr>
                            <th>会员状态：</th>
                            <td>
                                <select name="status" id="">
                                    <option value="1" {{$model->status  == 1 ? : 'selected'}}>正常</option>
                                    <option value="0" {{$model->status  == 0 ? : 'selected'}}>禁止</option>
                                </select>
                                <span>设为禁止后前台不可登录。</span>
                            </td>
                        </tr>
                        <div class="layui-form-item">
                            <label for="L_repass" class="layui-form-label"></label>
                            <button class="layui-btn"  lay-submit="">立刻提交</button>
                        </div>

                    </tbody>
                </form>
        </div>
    </div>
@endsection