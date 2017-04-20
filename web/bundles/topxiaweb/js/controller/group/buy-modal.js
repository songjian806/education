define(function(require, exports, module) {

    var AutoComplete = require('autocomplete');
    var Validator = require('bootstrap.validator');
    require('common/validator-rules').inject(Validator);

    var Notify = require('common/bootstrap-notify');

    exports.run = function() {

        var $modal = $('#buy-form').parents('.modal');

        $("#btn-download").on('click',function(){
            $modal.modal('hide');
        });
        
        var validator = new Validator({
            element: '#buy-form',
            autoSubmit: false,
            onFormValidated: function(error){
                    if (error) {
                    return false;
                }
 
                $('#create-btn').button('submiting').addClass('disabled');

                $form=$('#buy-form');

                $.post($form.attr('action'), $form.serialize(), function(html) {
                    $modal.modal('hide');
                    
                    $modal.load($('#buy-form').attr('action'));

                    $modal.modal('show');


                }).error(function(){
                });
            }
        });

    };

});