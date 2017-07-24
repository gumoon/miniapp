<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>管理后台</title>

    <link href="{{ asset('static/Semantic-UI-CSS-master/semantic.css') }}" rel="stylesheet">

    <style>
        body {
            overflow: auto;
        }

        .ui.leftmenu {
            width: 153px !important;
            position: absolute;
            left: 8px;
        }

        .ui.main {
            margin: 0 auto 0 182px !important;
        }

        .ui.main100 {
            width: 100%;
            height: 100%
        }
    </style>
    @yield('headcss')

</head>

<body>

<!--- 对话框 --->
<div class="ui dialog modal">
    <i class="close icon"></i>
    <div class="header"></div>
    <div class="content">
        <iframe name="fff" src="" width="100%" height="300" frameborder=0></iframe>
    </div>
</div>

{{--@include('admin.layouts.navigation')--}}
@yield('navigation')


@yield('content')

<script src="{{ asset('static/jQuery/jquery-3.2.1.js') }}"></script>
<script src="{{ asset('static/Vuejs/vue.js') }}"></script>
<script src="{{ asset('static/Semantic-UI-CSS-master/semantic.js') }}"></script>

@yield('thirdjs')

<script>
    $(function () {
        $(window.parent.document).find("iframe[name=fff]").each(function () {
            $(this).height($(document).height() + 25);

            _height = $(document).width();
            if (_height > 200) {
                //$(this).width(_height);
            }
        });
    });

    //异步删除请求；alert
    function doDeleteAlert(url) {

        if (confirm('确认删除？') == false) {
            return false;
        }
        $.ajax({
            cache: false,
            type: "GET",
            dataType: "json",
            url: url,
            data: {},
            async: false,
            error: function (request) {
                alert("faild");
            },
            success: function (data) {
                alert("success");
                location.reload();
            }

        });
    }

</script>
@yield('customjs')

</body>
</html>