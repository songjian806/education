define(function(require, exports, module) {
	var Notify = require('common/bootstrap-notify');

	exports.run = function(options) {
		var $table = $('#learning-data-table');

		$table.on('click', '.publish-course', function(){
			if (!confirm(Translator.trans('您确认要发布此课程吗？'))) return false;
			$.post($(this).data('url'), function(html){
				var $tr = $(html);
				$table.find('#' + $tr.attr('id')).replaceWith(html);
				Notify.success(Translator.trans('课程发布成功！'));
			});
		});
	};

});
