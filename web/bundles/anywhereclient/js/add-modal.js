define(function(require, exports, module) {
    var Validator = require('bootstrap.validator');
    require('common/validator-rules').inject(Validator);
    var Notify = require('common/bootstrap-notify');

    exports.run = function() {

        var $modal = $('#server-create-form').parents('.modal');
        
        var validator = new Validator({
            element: '#server-create-form',
            autoSubmit: false,
            onFormValidated: function(error, results, $form) {
                if (error) {
                    return false;
                }

                $('#server-create-btn').button('submiting').addClass('disabled');

                $.post($form.attr('action'), $form.serialize(), function(html) {
                    $modal.modal('hide');
                    Notify.success('添加成功');
                    window.location.reload();
                }).error(function(){
                    Notify.danger('添加失败');
                });


            }
        });


        validator.addItem({
            element: '[name="serverName"]',
            required: true,
            rule: 'chinese_alphanumeric byte_minlength{min:4}'
        });

        validator.addItem({
            element: '[name="serverUrl"]',
            required: true,
            rule: 'url'
        });

        validator.addItem({
            element: '[name="clientId"]',
            required: true
        });

        validator.addItem({
            element: '[name="secretKey"]',
            required: true
        });
    };

});