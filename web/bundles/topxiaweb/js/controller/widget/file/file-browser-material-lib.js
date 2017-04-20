define(function (require, exports, module) {

    var Widget = require('widget');

    var FileBrowser = Widget.extend({
        attrs: {
            url: null,
            baseUrl: null,
            mySharingContactsUrl: null,
            publicUrl: null,
            collectionUrl: null,
            files: []
        },
        _inited: false,

        events: {
            'click .file-browser-item': 'onSelectFile',
            'click .js-browser-search': 'onFilterByName',
            'change input:radio': 'onFilterBySource',
            'change .file-filter-by-owner': 'onFilterByOwner'
        },

        setup: function () {
            this._readAttrFromData();
            this._insertFilter();
            $(".modal").off('click.modal-pagination');
            this.element.on('click.switch-page', '.js-switch-page', $.proxy(this._onSwitchPage, this));
        },

        show: function () {

            if (this._inited) {
                return;
            }
            _inited = true;

            if (!this.element.hasClass('file-browser')) {
                this.element.addClass('file-browser');
            }

            var self = this;

            $.get(this.get('url'), function (response) {
                self.refreshFileList.call(self, response.files, response.paginator);
            }, 'json');

            return this;
        },

        refreshTeacherList: function (self, teachers) {
            if (Object.keys(teachers).length > 0) {
                var html="<option value=''>"+Translator.trans('请选择老师')+"</option>";
                $.each(teachers, function (i, teacher) {
                    html += "<option value='" + teacher.id + "'>" + teacher.nickname + "</option>"
                });

                $(".file-filter-by-owner", self.element).html(html);
            }
        },

        _onSwitchPage: function (event) {
            var self = this;
            var url = $(event.target).data('url');

            if(url === undefined){
                return;
            }

            $.get(url, function (response) {
                self.refreshFileList.call(self, response.files, response.paginator);
            }, 'json');
        },

        refreshFileList: function (files, paginator) {
            
            if (files.length > 0) {
                var html = '<ul class="file-browser-list">';
                $.each(files, function (i, file) {
                    html += '<li class="file-browser-item clearfix" data-index="' + i + '">';
                    html += '<span class="filename">' + file.filename + '</span>';
                    html += '<span class="filesize">' + file.fileSize + '</span>';
                    html += '<span class="filetime">' + file.updatedTime + '</span>';
                    html += '<span class="createdUserId" style="display: none;">' + file.createdUserId + '</span>';
                    html += '</li>';
                });
                html += '</ul>';

                if(!$.isEmptyObject(paginator)){
                    html += '<nav class="text-center">';
                    html += '<ul class="pagination">';
                    if (paginator.currentPage != paginator.firstPage) {
                        html += '<li><a href="javascript:;" class="js-switch-page" data-url="' + paginator.firstPageUrl + '">'+Translator.trans('首页')+'</a></li>'
                        html += '<li><a class="es-icon es-icon-chevronleft js-switch-page" data-url="' + paginator.previousPageUrl + '"></a></li>';
                    }


                    paginator.pageUrls.length > 1 && $.each(paginator.pageUrls, function (index, url) {
                        var page = index + 1;
                        if (page == paginator.currentPage) {
                            html += '<li class="active"><a href="javascript:;" class="js-switch-page" data-url="' + url + '">' +  page + '</a></li>';
                        } else {
                            html += '<li ><a href="javascript:;" class="js-switch-page" data-url="' + url + '">' + page + '</a></li>';
                        }
                    });

                    if (paginator.currentPage != paginator.lastPage) {
                        html += '<li><a class="es-icon es-icon-chevronright js-switch-page" data-url="' + paginator.nextPageUrl + '"></a></li>';
                        html += '<li><a href="javascript:;" class="js-switch-page" data-url="' + paginator.lastPageUrl + '">'+Translator.trans('尾页')+'</a></li>';
                    }
                    html += '</ul>';
                    html += '</nav>';
                }
                $(".file-browser-list-container", this.element).html(html);
                this.set('files', files);
            } else {
                var message = this.element.data('empty');
                if (message) {
                    $(".file-browser-list-container", this.element).html('<div class="empty">' + message + '</div>');
                }
            }
        },

        onSelectFile: function (e) {
            var $file = $(e.currentTarget);
            var file = this.get('files')[$file.data('index')];
            this.trigger('select', file);
        },

        onFilterByOwner: function (e) {
            $userId = $(".file-filter-by-owner", this.element).val();
            $(".file-filter-by-name", this.element).val("");

            $("li.file-browser-item").each(function (index) {
                //Show the file entry when the owner id equals to selected user id.
                if (!$userId || $("span.createdUserId", this).text() == $userId) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });

        },

        onFilterByName: function (e) {
            var $key = $(".file-filter-by-name", this.element).val();
            var self = this;
            $.get(this.get('baseUrl'), {keyword: $key, source: this.get('currentSource')}, function (response) {
                self.refreshFileList.call(self, response.files, response.paginator);
            });
        },

        onFilterBySource: function (e) {
            $source = $("input:radio[name=" + this.element.attr("id") + "-source]:checked", this.element).val();
            $(".file-filter-by-name", this.element).val("");

            var self = this;

            if ($source == "shared") {
                $(".file-filter-by-owner-container", this.element).show();

                //Refresh the sharing teacher list
                $.get(this.get('mySharingContactsUrl'), function (teachers) {
                    self.refreshTeacherList(self, teachers);
                }, 'json');
            } else {
                $(".file-filter-by-owner-container", this.element).hide();
            }
            //Refresh the file list panel
            this.set('currentSource', $source);
            $.get(self.get('baseUrl'), {source: $source}, function (response) {
                self.refreshFileList.call(self, response.files, response.paginator);
            }, 'json');
        },

        _readAttrFromData: function () {
            if (!this.get('url')) {
                this.set('url', this.element.data('default-url'));
            }
            if (!this.get('baseUrl')) {
                this.set('baseUrl', this.element.data('base-url'));
            }

            if (!this.get('mySharingContactsUrl')) {
                this.set('mySharingContactsUrl', this.element.data('my-sharing-contacts-url'));
            }
        },

        _insertFilter: function () {
            $filterHtml =
                "<div class='file-browser-filter mvs'> \
                    <div class='radios'>"+Translator.trans('资料来源')+"： \
                        <label><input type='radio' name='" + this.element.attr("id") + "-source' value='upload' checked>"+Translator.trans('来自上传')+"</label> \
        			<label><input type='radio' name='" + this.element.attr("id") + "-source' value='shared'>"+Translator.trans('来自分享')+"</label> \
              <label><input type='radio' name='" + this.element.attr("id") + "-source' value='public'>"+Translator.trans('公共资料')+"</label> \
              <label><input type='radio' name='" + this.element.attr("id") + "-source' value='collection'>"+Translator.trans('我的收藏')+"</label> \
          </div> \
	        	<div class='row'> \
        			<div  class='col-xs-5'> \
			      	<span class='input-group'> \
				    <input name='file-filter-by-name' class='form-control width-input-small file-filter-by-name' type='text' placeholder='" + Translator.trans('输入视频标题关键字') + "'/> \
				    <span class='input-group-btn'> \
				      <button type='button' class='btn btn-default js-browser-search' data-loading-text='"+Translator.trans('正在加载，请稍等')+"'>"+Translator.trans('搜索')+"</button> \
				    </span> \
				  </span> \
        			</div> \
			      <span class='file-filter-by-owner-container col-xs-5' style='display: none;'> \
			      	<select name='file-filter-by-owner' class='file-filter-by-owner form-control width-input-large'> \
				    		<option value=''>"+Translator.trans('请选择老师')+"</option> \
				    </select> \
			      </span> \
			     </div> \
        		</div> ";

            this.element.prepend($filterHtml);
        }
    });

    module.exports = FileBrowser;
});
