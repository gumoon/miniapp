
@extends('admin.layouts.houtai')

@section('thirdjs')
    <script src="{{ asset('static/jQuery/plugin/jquery.validate.min.js') }}"></script>
@endsection

@section('content')
<div class="ui main100">
    <form method="post" action="/zxbidding/ZXBidding/zxBiddingManage" style="min-width:500px;min-height:600px">
        <div class="ui form segment">
            <div class="field">
                <lable>前端售卖数目：</lable><input id="openNum" name="openNum" type="text" value="">
            </div>
            <div class="field">
                <select name="isOpen" id="isOpen">
                    <option value="1">开启</option>
                    <option value="0">关闭</option>
                </select>
            </div>
            <div class="ui buttons floated right">
                <button type="submit" class="ui positive button" id="sq">确定</button>
                <div class="or"></div>
                <div class="ui button negative" onclick="parent.closeDialog(1);">取消</div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('customjs')
<script>
    $("form").submit(function() {
        $(this).validate();
        $("#sq").addClass("disabled");
        $.ajax({
            cache: false,
            type: "POST",
            dataType: "json",
            url: $("form").attr('action'),
            data: $("form").serialize(),
            async: false,
            error: function (request) {
                alert("Connection error");
            },
            success: function (data) {
                if (data.code == 0) {
                    alert("设置成功");
                    parent.closeDialog();
                }
                else {
                    alert(data.msg);
                }
            }
        });
        return false;
    });


</script>
@endsection