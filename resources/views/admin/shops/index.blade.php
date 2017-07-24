@extends('admin.layouts.houtai')

@section('navigation')
    @include('admin.layouts.navigation')
@endsection

@section('thirdjs')
    <script src="{{ asset('static/js/dialog.js') }}"></script>
@endsection


@section('customjs')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var app = new Vue({
        el: '#app',
        data: {
            message: "{{ $name }}"
        },
        methods: {
            reverseMessage: function () {
                $.post('/admin/index/test', {}, function(data){
                    console.log(data);
                });
                this.message = this.message.split('').reverse().join('')
            }
        }
    });
</script>
@endsection

@section('content')
    <div class="ui main">
    <div id="app">
        <h2 class="ui header" v-bind:title="message">@{{ message }}</h2>
        <button v-on:click="reverseMessage" class="ui primary button">逆转消息</button>

        <table class="ui celled table">
            <thead>
            <tr><th>商户ID</th>
                <th>商户名</th>
                <th>商户老板</th>
                <th>商户电话</th>
                <th>商户地址</th>
                <th>商户简介</th>
                <th>操作</th>
            </tr></thead>
            <tbody>
            @foreach ($shops AS $shop)
            <tr>
                <td>{{$shop->s_id}}</td>
                <td>{{$shop->s_name}}</td>
                <td>{{$shop->s_owner}}</td>
                <td>{{$shop->s_tel}}</td>
                <td>{{$shop->s_addr}}</td>
                <td>{{$shop->s_intro}}</td>
                <td><a onclick="openDialog('编辑商户', '/admin/shops/edit')">编辑</a></td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr><th colspan="7">
                    <div class="ui right floated pagination menu">
                        <a class="icon item">
                            <i class="left chevron icon"></i>
                        </a>
                        <a class="item">1</a>
                        <a class="item">2</a>
                        <a class="item">3</a>
                        <a class="item">4</a>
                        <a class="icon item">
                            <i class="right chevron icon"></i>
                        </a>
                    </div>
                </th>
            </tr></tfoot>
        </table>
    </div>
    </div>
@endsection

