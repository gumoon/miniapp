<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>浏阳云商汇管理后台</title>

    <link href="{{ asset('static/Semantic-UI-CSS-master/semantic.css') }}" rel="stylesheet">
    
    @yield('headcss')

</head>

<body>

<div class="ui attached stackable menu">
    <div class="ui container">
        <a class="item">
            <i class="home icon"></i> Home
        </a>
        <a class="item">
            <i class="grid layout icon"></i> Browse
        </a>
        <a class="item">
            <i class="mail icon"></i> Messages
        </a>
        <div class="ui simple dropdown item">
            More
            <i class="dropdown icon"></i>
            <div class="menu">
                <a class="item"><i class="edit icon"></i> Edit Profile</a>
                <a class="item"><i class="globe icon"></i> Choose Language</a>
                <a class="item"><i class="settings icon"></i> Account Settings</a>
            </div>
        </div>
        <div class="right item">
            <div class="ui input"><input type="text" placeholder="Search..."></div>
        </div>
    </div>
</div>
<div class="ui divider"></div>
<div class="ui grid container">
    <div class="three wide column">
        @include('admin.layouts.navigation')
    </div>
    <div class="thirteen wide column">
        @yield('content')
    </div>
</div>

<script src="{{ asset('static/jQuery/jquery-3.2.1.js') }}"></script>
<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="{{ asset('static/Semantic-UI-CSS-master/semantic.js') }}"></script>

@yield('thirdjs')

@yield('customjs')

</body>
</html>