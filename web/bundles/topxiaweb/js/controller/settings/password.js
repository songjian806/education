define(function(require, exports, module) {
    var Validator = require('bootstrap.validator');
    require('common/validator-rules').inject(Validator);

    exports.run = function() {
        var validator = new Validator({
            element: '#settings-password-form',
            onFormValidated: function(error){
                if (error) {
                    return false;
                }
                $('#password-save-btn').button('submiting').addClass('disabled');
            }
        });

        validator.addItem({
            element: '[name="form[currentPassword]"]',
            required: true
        });

        validator.addItem({
            element: '[name="form[newPassword]"]',
            required: true,
            rule: 'minlength{min:5} maxlength{max:20}'
        });

        validator.addItem({
            element: '[name="form[confirmPassword]"]',
            required: true,
            rule: 'confirmation{target:#form_newPassword}'
        });
    };

});