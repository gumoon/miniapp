@extends('admin.layouts.houtai')

@section('headcss')

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
    })
</script>
@endsection

@section('content')

    <div id="app">

        <h2 class="ui header" v-bind:title="message">@{{ message }}</h2>
        <button v-on:click="reverseMessage" class="ui primary button">逆转消息</button>
        <table class="ui celled table">
            <thead>
            <tr><th>标题</th>
                <th>标题</th>
                <th>标题</th>
            </tr></thead>
            <tbody>
            <tr>
                <td>
                    <div class="ui ribbon label">First</div>
                </td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            </tbody>
            <tfoot>
            <tr><th colspan="3">
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

@endsection

