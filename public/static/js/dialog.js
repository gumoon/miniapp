
$(function(){

    $('body').append('\
        <div id="popupModal" class="ui modal">\
        <i class="close icon"></i>\
        <div class="header">title</div>\
        <div class="content"><iframe name="fff" id="popForm" src="" width="100%" style="min-width:600px;min-height:100px" frameborder=0 ></iframe></div>\
        </div>');
});

//打开
function openDialog(title,url,width,height){
    $('#popupModal').modal('show');
    $('#popupModal iframe[name=fff]').attr('src',url);
    $('#popupModal .header').html(title);
    if(width>0){
        $('#popForm').css('width',width+'px');
    }
    if(height>0){
        $('#popForm').css('height',height+'px');
    }
}

//关闭
function closeDialog(c){
    $('#popupModal').trigger('modal:hide');

    if( c==undefined ){
        location.reload();
    }
}


