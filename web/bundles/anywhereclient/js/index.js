define(function(require, exports, module) {
    var Notify = require('common/bootstrap-notify');

    exports.run = function() {
        $('#refresh-btn').on('click', function(){
            $(this).button('submiting').addClass('disabled');
            $.post($(this).data('url'), {}, function(result) {
                Notify.success('已经激活啦,请不要重复激活!!快去首页看看吧!');
                $('#refresh-btn').button('reset').removeClass('disabled');
            }).error(function(){
                Notify.danger('告诉您一个悲伤的事,激活失败啦!!');
            });
        });
       
        $('#server-table').on('click', '.js-delete-btn', function(){
            $.post($(this).data('url'), function(resp){
                Notify.success('删除成功!');
                setTimeout(function() {
                    window.location.reload();
                }, 1500);
            });
        });
    };

});