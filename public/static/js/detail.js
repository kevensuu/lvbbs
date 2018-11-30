$(function () {
    hljs.initHighlightingOnLoad();

    $('#preview').click(function () {
        var comment_content = $('textarea[name="comment_content"]').val();
        $.ajax({
            headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url:comment_preview_url,
            type:'post',
            dataType:'json',
            data:{comment_content:comment_content},
        success:function (ret) {
            $('#previewContent').remove();
            $('#replies .card-body').append(ret.data.content);
        }
    })
        return false;
    })

    $('#new_reply').ajaxForm({
        dataType:'json',
        beforeSubmit:function(){$('form button').attr('type', 'button');},
        error:function(ret){
            $('form button').attr('type', 'submit');
            var msg = '';
            for (var key in ret.responseJSON.errors)
            {
                msg += ret.responseJSON.errors[key][0]+'<br><br>';
            }
            spop({template: msg, position  : 'top-center', style: 'error', autoclose: 3000});
        },
        success:function (ret) {
            if(ret.code!=0)
            {
                spop({template: ret.msg, position  : 'top-center', style: 'error', autoclose: 3000});
            }
            else
            {
                $('form button').attr('type', 'submit');
                $('#replies .card-body').append(ret.data.content);
                $('textarea[name="comment_content"]').val('');
                spop({template: ret.msg, position  : 'top-center', style: 'success', autoclose: 1000,onClose:function(){}});
            }
        }
    });
})