# note  
<!-- https://learnku.com/docs/laravel/7.x/blade/7470#defining-a-layout -->
## blade 模板（模板继承 ， 区块）
    * 布局
        ```
            <html>
                <head>
                    <title>App Name - @yield('title')</title>
                </head>
                <body>
                    @section('sidebar')
                        This is the master sidebar.
                    @show

                    <div class="container">
                        @yield('content')
                    </div>
                </body>
            </html>
        ```
        @section 指令 定义视图的一部分内容 
        @yield 是用来显示指定的部分的内容  还接受一个默认值作为第二个参数 如果 被 yield 的 片段 未定义 则默认值 被 渲染
        @extends 指定子视图要继承的视图
        @parent 指令想布局的 slidebar 追加内容 ， @parent 将被布局中的 内容 替换
        @endsection 金定义一个片段
        @show 则是定义的同时立即 yield 这个片段
