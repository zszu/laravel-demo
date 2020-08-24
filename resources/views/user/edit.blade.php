@extends('layout.main')

@section('title' , '管理员添加')


@section('right_content')
    @parent
    <div class="page-content-wrap">
        <div class="tit">
            <h3>修改会员</h3>
            <a href="{{url('/user/index')}}" class="btn-last-page">返 回</a>
        </div>
        <div class="content">
            <table cellspacing="0" cellpadding="0" width="100%" class="maintable">
                <form action="{{url('/user/save')}}"  method="post">
                    <tbody>
                        {{csrf_field()}}
                            <!-- 场景 -->
                        <input type="hidden" name="scenes" placeholder="" class="inp" value="edit">
                        <input type="hidden" name="id" placeholder="" class="inp" value="{{$model->id}}">
                        
                        <tr>
                            <th>用户名：</th>
                            <td>
                                <input type="text" name="username" placeholder="" class="inp" value="{{$model->username}}">
                            </td>
                        </tr>
                        
                        <tr>
                            <th>密码：</th>
                            <td>
                                <input type="password" name="password" placeholder="请输入密码" class="inp" value="{{$model->password}}">
                            </td>
                        </tr>
                        
                        <tr>
                            <th>邮箱：</th>
                            <td>
                                <input type="text" name="email" placeholder="" class="inp" value="{{$model->email}}">
                            </td>
                        </tr>
                        
                        <tr>
                            <th>手机：</th>
                            <td>
                                <input type="text" name="mobile" placeholder="" class="inp" value="{{$model->mobile}}">
                            </td>
                        </tr>
                        
                        <tr>
                            <th>QQ：</th>
                            <td>
                                <input type="text" name="qq" placeholder="" class="inp" value="{{$model->qq}}">
                            </td>
                        </tr>
                        
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

                        <tr class="btn_tab">
                            <th></th>
                            <td>
                                <button class="btn-normal">立即提交</button>
                            </td>
                        </tr>

                    </tbody>
                </form>
            </table>
            
        </div>
    </div>
@endsection