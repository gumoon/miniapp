@extends('admin.layouts.houtai')

@section('navigation')
@endsection

@section('thirdjs')

@endsection


@section('customjs')
<script>
//    $('.ui.labeled.icon.sidebar')
//        .sidebar('toggle')
//    ;
</script>
@endsection

@section('content')
    <div class="ui main">
        <div class="ui left demo vertical inverted sidebar labeled icon menu visible">
            <a class="item">
                <i class="home icon"></i>
                Home
            </a>
            <a class="item">
                <i class="block layout icon"></i>
                Topics
            </a>
            <a class="item">
                <i class="smile icon"></i>
                Friends
            </a>
        </div>
        <div class="pusher">
            <!-- Site content !-->
            <h1>aaa</h1>
            <div class="ui secondary vertical pointing menu">
                <a class="item active">111</a>
                <a class="item">222<i class="cn flag"></i></a>
            </div>
        </div>
    </div>
@endsection

