  
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>后台 @yield('title')</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <meta name="format-detection" content="telephone=no" />

        <link rel="stylesheet" href="/admin/css/autoCheck.css">
        <link rel="stylesheet" href="/admin/css/style.css" />
        <script src="/admin/js/jquery.min.js"></script>
        <script src="/admin/js/lib.js"></script>


        <script src="/admin/js/jquery.min.js"></script>
        <script src="/layer/layer.js"></script>
        <script src="/admin/js/admin.js"></script>


        </head>
    <body>

        @yield('content')

        

        <script>
            $('.item-delete').linkConfirm('确定要删除该项？');
        </script>

    </body>
</html>
  
  
 