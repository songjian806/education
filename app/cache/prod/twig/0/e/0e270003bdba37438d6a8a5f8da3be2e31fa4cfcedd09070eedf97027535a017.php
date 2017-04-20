<?php

/* TopxiaWebBundle:CourseLessonManage:media-choose.html.twig */
class __TwigTemplate_0e270003bdba37438d6a8a5f8da3be2e31fa4cfcedd09070eedf97027535a017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style>
  .webuploader-container {
    position: relative;
  }

  .webuploader-element-invisible {
    position: absolute !important;
    clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
    clip: rect(1px, 1px, 1px, 1px);
  }

  .webuploader-pick {
    position: relative;
    display: inline-block;
    cursor: pointer;
    background: #fff;
    padding: 5px 10px;
    color: #333;
    text-align: center;
    border-radius: 3px;
    border: 1px solid #ccc;
    overflow: hidden;
  }

  .webuploader-pick-hover {
    background: #e6e6e6;
    border-color: #adadad;
  }

  .webuploader-pick-disable {
    opacity: 0.6;
    pointer-events: none;
  }

  .balloon-uploader {
    border: 1px solid #ddd;
    border-radius: 4px;
  }

  .balloon-uploader-heading {
    background-color: #f5f5f5;
    color: #333;
    padding: 10px 15px;
    border-bottom: 1px solid #ddd;
    display: none;
  }

  .balloon-uploader-footer {
    background-color: #f5f5f5;
    color: #333;
    padding: 10px 15px;
    border-top: 1px solid #ddd;
    text-align: right;
  }

  .balloon-filelist {
    width: 100%;
  }

  .balloon-filelist-heading {
    padding: 8px 10px;
    font-weight: bold;
    border-bottom: 2px solid #ddd;
  }

  .balloon-uploader-body {
    position: relative;

  }

  .balloon-filelist .file-name,
  .balloon-filelist .file-size,
  .balloon-filelist .file-status,
  .balloon-filelist .file-manage {
    position: relative;
    z-index: 1;
  }

  .balloon-filelist .file-name {
    display: inline-block;
    width: 40%;
  }

  .balloon-filelist .file-size {
    display: inline-block;
    width: 20%;
  }

  .balloon-filelist .file-status {
    display: inline-block;
    width: 18%;
  }

  .balloon-filelist .file-manage {
    display: inline-block;
    width: 20%;
    z-index: 9999;
    position: absolute;
  }

  .balloon-filelist ul {
    list-style: none;
    margin: 0;
    padding: 0;
    min-height: 100px;
    max-height: 300px;
    overflow-y: scroll;
  }

  .balloon-filelist ul li {
    position: relative;
    border-bottom: 1px solid #ddd;
    padding: 8px 10px;
  }

  .balloon-dnd {
    visibility: hidden;
  }

  .balloon-uploader-none .balloon-uploader-footer,
  .balloon-uploader-none .balloon-uploader-body {
    visibility: hidden;
  }

  .balloon-uploader-none .balloon-dnd {
    visibility: visible;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    text-align: center;
    vertical-align: middle;
  }

  .balloon-nofile {
    position: absolute;
    top: 40px;
    left: 0;
    right: 0;
    bottom: 0;
    line-height: 100px;
    text-align: center;
    color: #999;
  }

  .balloon-uploader .file-pick-btn {
    display: inline-block;
  }

  .balloon-uploader .start-upload-btn {
    position: relative;
    display: inline-block;
    cursor: pointer;
    background: #5bc0de;
    padding: 5px 10px;
    color: #fff;
    text-align: center;
    border-radius: 3px;
    border: 1px solid #46b8da;
    overflow: hidden;
  }

  .balloon-uploader .start-upload-btn:hover {
    background: #31b0d5;
    border-color: #269abc;
  }

  .balloon-filelist .file-progress {
    position: absolute;
    top: 0;
    left: 0;
    right: -40px;
    bottom: 0;
  }

  .balloon-filelist .file-progress-bar {
    background: rgb(219, 242, 215);
    background: rgba(59, 181, 33, 0.18);
    float: left;
    height: 100%;
  }

</style>

";
        // line 186
        $context["courseType"] = ((array_key_exists("courseType", $context)) ? (_twig_default_filter((isset($context["courseType"]) ? $context["courseType"] : null), "course")) : ("course"));
        // line 187
        if (twig_in_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()), array(0 => "open", 1 => "liveOpen"))) {
            // line 188
            echo "  ";
            $context["courseMaterialUrl"] = "open_course_manage_material_browser";
        } else {
            // line 190
            echo "  ";
            $context["courseMaterialUrl"] = "course_manage_material_browser";
        }
        // line 192
        echo "
";
        // line 193
        $context["lesson"] = ((array_key_exists("lesson", $context)) ? (_twig_default_filter((isset($context["lesson"]) ? $context["lesson"] : null), null)) : (null));
        // line 194
        echo "<div id=\"media-choosers\">

  <div class=\"file-chooser\" id=\"video-chooser\" style=\"display:none;\"
       data-targetType=\"";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
       data-targetId=\"";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> ";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
        echo "</button>
      <div class=\"alert alert-warning\" data-role=\"waiting-tip\"
           style=\"display:none;\">";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在转换视频格式，转换需要一定的时间，期间将不能播放该视频。"), "html", null, true);
        echo "<br/>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("转换完成后将以站内消息通知您。"), "html", null, true);
        echo "</div>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#video-chooser-upload-pane\"
               data-toggle=\"tab\">";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传视频"), "html", null, true);
        echo "</a></li>
        <li>
          <a href=\"#video-chooser-disk-pane\" data-toggle=\"tab\">
            ";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("从资料库中选择"), "html", null, true);
        echo "
          </a>
        </li>

        <li>
          <a href=\"#video-chooser-course-file\" data-toggle=\"tab\">
            ";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("从课程文件中选择"), "html", null, true);
        echo "
          </a>
        </li>

        <li ";
        // line 224
        if (((isset($context["lesson"]) ? $context["lesson"] : null) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaSource", array()) != "self"))) {
            echo "class=\"active\"";
        }
        echo ">
          <a href=\"#video-chooser-import-pane\" data-toggle=\"tab\">";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("导入网络视频"), "html", null, true);
        echo "</a>
        </li>
      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"video-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 232
        $this->loadTemplate("TopxiaWebBundle:CloudFile:video-quality-switcher.html.twig", "TopxiaWebBundle:CourseLessonManage:media-choose.html.twig", 232)->display($context);
        // line 233
        echo "            ";
        $context["token"] = $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : null), (isset($context["targetId"]) ? $context["targetId"] : null), "private");
        // line 234
        echo "            <div class=\"balloon-uploader\"
                 data-init-url=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-finish-url=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-upload-auth-url=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                ";
        // line 238
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 239
            echo "                  data-accept=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_uploader_twig')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null), "video")), "html", null, true);
            echo "\"
                ";
        } else {
            // line 241
            echo "                  data-accept=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_uploader_twig')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null), "local_video")), "html", null, true);
            echo "\"
                ";
        }
        // line 243
        echo "                 data-process=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_uploader_twig')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : null)), "html", null, true);
        echo "\"
            ></div>


            <div class=\"alert alert-info\">
              <ul>
                ";
        // line 249
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 250
            echo "                  <li>";
            echo $this->env->getExtension('translator')->trans("支持");
            echo "<strong>mp4, avi, flv, wmv, mov,
                      m4v</strong>";
            // line 251
            echo $this->env->getExtension('translator')->trans("格式的视频文件上传，文件大小不能超过<strong>2 GB</strong>。");
            echo "</li>
                  <li>";
            // line 252
            echo $this->env->getExtension('translator')->trans("支持");
            echo "<strong>";
            echo $this->env->getExtension('translator')->trans("断点续传");
            echo "</strong>";
            echo $this->env->getExtension('translator')->trans("（仅支持HTML5浏览器）。");
            echo "</li>
                  <li>";
            // line 253
            echo $this->env->getExtension('translator')->trans("视频将上传到");
            echo "
                    <strong>";
            // line 254
            echo $this->env->getExtension('translator')->trans("云视频服务器");
            echo "</strong>";
            echo $this->env->getExtension('translator')->trans("，上传之后会对视频进行格式转换，转换过程需要一定的时间，在这个过程中视频将无法播放。");
            echo "
                  </li>
                ";
        } else {
            // line 257
            echo "                  <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支持"), "html", null, true);
            echo "<strong>mp4</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("格式的视频文件上传，文件大小不能超过"), "html", null, true);
            echo "
                    <strong>";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
            echo " </strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("。MP4文件的视频编码格式，请使用AVC(H264)编码，否则浏览器无法播放。"), "html", null, true);
            echo "
                  </li>
                  <li>
                    ";
            // line 261
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频将上传到"), "html", null, true);
            echo "
                    <strong>";
            // line 262
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网站服务器"), "html", null, true);
            echo "</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("。如需使用%Edusoho%云视频,点击", array("%Edusoho%" => $this->env->getExtension('topxia_web_twig')->removeCopyright("EduSoho"))), "html", null, true);
            echo "
                    <a href=\"http://open.edusoho.com/show/cloud/video\"
                       target=\"_blank\">";
            // line 264
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("这里"), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("了解详情,%Edusoho%云视频将为您提供稳定、安全、经济、便捷的视频托管服务以及优质的视频播放体验。", array("%Edusoho%" => $this->env->getExtension('topxia_web_twig')->removeCopyright("EduSoho"))), "html", null, true);
            echo "
                  </li>
                ";
        }
        // line 267
        echo "              </ul>
            </div>

          </div>

        </div>
        <div class=\"tab-pane\" id=\"video-chooser-disk-pane\">
          <div id=\"file-browser-video\" data-role=\"file-browser\"
               data-base-url=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "video", "source" => "upload")), "html", null, true);
        echo "\"
               data-default-url=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "video", "source" => "upload")), "html", null, true);
        echo "\"
               data-my-sharing-contacts-url=\"";
        // line 277
        echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
        echo "\"
               data-empty=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无视频文件，请先上传。"), "html", null, true);
        echo "\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"video-chooser-course-file\">
          <div id=\"file-browser-video\" data-role=\"course-file-browser\"
               data-url=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["courseMaterialUrl"]) ? $context["courseMaterialUrl"] : null), array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "video", "courseType" => (isset($context["courseType"]) ? $context["courseType"] : null))), "html", null, true);
        echo "\"
               data-empty=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无视频文件，请先上传。"), "html", null, true);
        echo "\">
          </div>
        </div>

        <div class=\"tab-pane\" id=\"video-chooser-import-pane\">
          ";
        // line 291
        if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
            // line 292
            echo "            <div>原地址：";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaUri", array()), "html", null, true);
            echo "</div>
          ";
        }
        // line 294
        echo "          <div class=\"input-group\">
            <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支持优酷、土豆、腾讯、网易公开课的视频页面地址导入"), "html", null, true);
        echo "\"
                   data-role=\"import-url\">
            <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\" data-role=\"import\"
                      data-url=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_media_import", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"
                      data-loading-text=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在导入，请稍等"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("导入"), "html", null, true);
        echo "</button>
            </span>
          </div>
          <strong class=\"text-danger\">* ";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("腾讯和网易的视频不支持手机端播放"), "html", null, true);
        echo "</strong>
        </div>
      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"audio-chooser\" style=\"display:none;\"
       data-targetType=\"";
        // line 312
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
       data-targetId=\"";
        // line 313
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> ";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
        echo "</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#audio-chooser-upload-pane\"
               data-toggle=\"tab\">";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传音频"), "html", null, true);
        echo "</a></li>
        <li><a href=\"#audio-chooser-disk-pane\" data-toggle=\"tab\">
            ";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("从资料库中选择"), "html", null, true);
        echo "
          </a></li>

        <li>
          <a href=\"#audio-chooser-course-file\" data-toggle=\"tab\">
            ";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("从课程文件中选择"), "html", null, true);
        echo "
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"audio-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 340
        $context["token"] = $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : null), (isset($context["targetId"]) ? $context["targetId"] : null), "private");
        // line 341
        echo "            <div class=\"balloon-uploader\"
                 data-init-url=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-finish-url=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-upload-auth-url=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-accept=\"";
        // line 345
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_uploader_twig')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null), "audio")), "html", null, true);
        echo "\"
                 data-process=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_uploader_twig')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : null)), "html", null, true);
        echo "\"
            >
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支持"), "html", null, true);
        echo "<strong>mp3</strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("格式的音频文件上传，且文件大小不能超过"), "html", null, true);
        echo "<strong>
                    ";
        // line 353
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 354
            echo "                      500M
                    ";
        } else {
            // line 356
            echo "                      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
            echo "
                    ";
        }
        // line 358
        echo "                  </strong>。
                </li>
                ";
        // line 360
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 361
            echo "                  <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支持"), "html", null, true);
            echo "<strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("断点续传"), "html", null, true);
            echo "</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("（仅支持HTML5浏览器）。"), "html", null, true);
            echo "</li>
                  <li>";
            // line 362
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音频将上传到"), "html", null, true);
            echo "<strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云服务器"), "html", null, true);
            echo "</strong></li>
                ";
        } else {
            // line 364
            echo "                  <li>
                    ";
            // line 365
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音频将上传到"), "html", null, true);
            echo "
                    <strong>";
            // line 366
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网站服务器"), "html", null, true);
            echo "</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("，%Edusoho%点击", array("%Edusoho%" => $this->env->getExtension('topxia_web_twig')->removeCopyright("如需使用EduSoho云视频,"))), "html", null, true);
            echo "
                    <a href=\"http://open.edusoho.com/show/cloud/video\"
                       target=\"_blank\">";
            // line 368
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("这里"), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("了解详情。"), "html", null, true);
            echo "
                  </li>
                ";
        }
        // line 371
        echo "              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"audio-chooser-disk-pane\">
          <div id=\"file-browser-audio\" data-role=\"file-browser\"
               data-base-url=\"";
        // line 378
        echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "audio"));
        echo "\"
               data-default-url=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "audio", "source" => "upload")), "html", null, true);
        echo "\"
               data-my-sharing-contacts-url=\"";
        // line 380
        echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
        echo "\"
               data-empty=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无音频文件，请先上传。"), "html", null, true);
        echo "\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"audio-chooser-course-file\">
          <div id=\"file-browser-audio\" data-role=\"course-file-browser\"
               data-url=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["courseMaterialUrl"]) ? $context["courseMaterialUrl"] : null), array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "audio", "courseType" => (isset($context["courseType"]) ? $context["courseType"] : null))), "html", null, true);
        echo "\"
               data-empty=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无音频文件，请先上传。"), "html", null, true);
        echo "\"></div>
        </div>

      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"ppt-chooser\" style=\"display:none;\"
       data-params-url=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "convertor" => "ppt", "lazyConvert" => 1)), "html", null, true);
        echo "\"
       data-targetType=\"";
        // line 400
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
       data-targetId=\"";
        // line 401
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> ";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
        echo "</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#ppt-chooser-upload-pane\" data-toggle=\"tab\">上传PPT</a></li>
        <li><a href=\"#ppt-chooser-disk-pane\" data-toggle=\"tab\">
            ";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("从资料库中选择"), "html", null, true);
        echo "
          </a></li>

        <li>
          <a href=\"#ppt-chooser-course-file\" data-toggle=\"tab\">
            ";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("从课程文件中选择"), "html", null, true);
        echo "
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"ppt-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 427
        $context["token"] = $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : null), (isset($context["targetId"]) ? $context["targetId"] : null), "private");
        // line 428
        echo "            <div class=\"balloon-uploader\"
                 data-init-url=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-finish-url=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-upload-auth-url=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-accept=\"";
        // line 432
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_uploader_twig')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null), "ppt")), "html", null, true);
        echo "\"
                 data-process=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_uploader_twig')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : null)), "html", null, true);
        echo "\"
            >
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支持"), "html", null, true);
        echo "<strong>ppt, pptx</strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("格式的PPT文件上传，且文件大小不能超过"), "html", null, true);
        echo "<strong>100 MB</strong>。
                </li>
                <li>";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("PPT将上传到"), "html", null, true);
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云服务器"), "html", null, true);
        echo "</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"ppt-chooser-disk-pane\">
          <div id=\"file-browser-ppt\" data-role=\"file-browser\"
               data-base-url=\"";
        // line 449
        echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "ppt"));
        echo "\"
               data-default-url=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "ppt", "source" => "upload")), "html", null, true);
        echo "\"
               data-my-sharing-contacts-url=\"";
        // line 451
        echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
        echo "\"
               data-empty=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无PPT文件，请先上传。"), "html", null, true);
        echo "\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"ppt-chooser-course-file\">
          <div id=\"file-browser-ppt\" data-role=\"course-file-browser\"
               data-url=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["courseMaterialUrl"]) ? $context["courseMaterialUrl"] : null), array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "ppt", "courseType" => (isset($context["courseType"]) ? $context["courseType"] : null))), "html", null, true);
        echo "\"
               data-empty=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无PPT文件，请先上传。"), "html", null, true);
        echo "\"></div>
        </div>

      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"document-chooser\" style=\"display:none;\"
       data-params-url=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "convertor" => "document")), "html", null, true);
        echo "\"
       data-targetType=\"";
        // line 471
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
       data-targetId=\"";
        // line 472
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> ";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
        echo "</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#document-chooser-upload-pane\"
               data-toggle=\"tab\">";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传文档"), "html", null, true);
        echo "</a></li>
        <li><a href=\"#document-chooser-disk-pane\" data-toggle=\"tab\">
            ";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("从资料库中选择"), "html", null, true);
        echo "
          </a></li>

        <li>
          <a href=\"#document-chooser-course-file\" data-toggle=\"tab\">
            ";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("从课程文件中选择"), "html", null, true);
        echo "
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"document-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">

            ";
        // line 500
        $context["token"] = $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : null), (isset($context["targetId"]) ? $context["targetId"] : null), "private");
        // line 501
        echo "            <div class=\"balloon-uploader\"
                 data-init-url=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-finish-url=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-upload-auth-url=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-accept=\"";
        // line 505
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_uploader_twig')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null), "cloud_document")), "html", null, true);
        echo "\"
                 data-process=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_uploader_twig')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : null)), "html", null, true);
        echo "\"></div>

            <div class=\"alert alert-info\">
              <ul>
                <li>";
        // line 510
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支持"), "html", null, true);
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pdf,doc,docx"), "html", null, true);
        echo "</strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("格式的文档上传，且文件大小不能超过"), "html", null, true);
        echo "
                  <strong>";
        // line 511
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("100 MB"), "html", null, true);
        echo "</strong>。
                </li>
                <li>";
        // line 513
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文档将上传到"), "html", null, true);
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云服务器"), "html", null, true);
        echo "</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"document-chooser-disk-pane\">
          <div id=\"file-browser-document\" data-role=\"file-browser\"
               data-base-url=\"";
        // line 521
        echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "document"));
        echo "\"
               data-default-url=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "document", "source" => "upload")), "html", null, true);
        echo "\"
               data-my-sharing-contacts-url=\"";
        // line 523
        echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
        echo "\"
               data-empty=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无文档，请先上传。"), "html", null, true);
        echo "\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"document-chooser-course-file\">
          <div id=\"file-browser-document\" data-role=\"course-file-browser\"
               data-url=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["courseMaterialUrl"]) ? $context["courseMaterialUrl"] : null), array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "document", "courseType" => (isset($context["courseType"]) ? $context["courseType"] : null))), "html", null, true);
        echo "\"
               data-empty=\"";
        // line 532
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无文档，请先上传。"), "html", null, true);
        echo "\"></div>
        </div>

      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"flash-chooser\" style=\"display:none;\"
       data-params-url=\"";
        // line 542
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "convertor" => "")), "html", null, true);
        echo "\"
       data-targetType=\"";
        // line 543
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
       data-targetId=\"";
        // line 544
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> ";
        // line 549
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
        echo "</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#flash-chooser-upload-pane\"
               data-toggle=\"tab\">";
        // line 555
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传Flash"), "html", null, true);
        echo "</a></li>
        <li><a href=\"#flash-chooser-disk-pane\" data-toggle=\"tab\">
            ";
        // line 557
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("从资料库中选择"), "html", null, true);
        echo "
          </a></li>

        <li>
          <a href=\"#flash-chooser-course-file\" data-toggle=\"tab\">
            ";
        // line 562
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("从课程文件中选择"), "html", null, true);
        echo "
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"flash-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 571
        $context["token"] = $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : null), (isset($context["targetId"]) ? $context["targetId"] : null), "private");
        // line 572
        echo "            <div class=\"balloon-uploader\"
                 data-init-url=\"";
        // line 573
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-finish-url=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-upload-auth-url=\"";
        // line 575
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
                 data-accept=\"";
        // line 576
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_uploader_twig')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null), "flash")), "html", null, true);
        echo "\"
                 data-process=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_uploader_twig')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : null)), "html", null, true);
        echo "\"
            ></div>


            <div class=\"alert alert-info\">
              <ul>
                <li>";
        // line 583
        echo "支持";
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("swf"), "html", null, true);
        echo "</strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("格式的文件上传，且文件大小不能超过"), "html", null, true);
        echo "
                  <strong>";
        // line 584
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("100 MB"), "html", null, true);
        echo "</strong>。
                </li>
                <li>";
        // line 586
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Flash将上传到"), "html", null, true);
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云服务器"), "html", null, true);
        echo "</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"flash-chooser-disk-pane\">
          <div id=\"file-browser-flash\" data-role=\"file-browser\"
               data-base-url=\"";
        // line 594
        echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "flash"));
        echo "\"
               data-default-url=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "flash", "source" => "upload")), "html", null, true);
        echo "\"
               data-my-sharing-contacts-url=\"";
        // line 596
        echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
        echo "\"
               data-empty=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无Flash，请先上传。"), "html", null, true);
        echo "\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"flash-chooser-course-file\">
          <div id=\"file-browser-flash\" data-role=\"course-file-browser\"
               data-url=\"";
        // line 604
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["courseMaterialUrl"]) ? $context["courseMaterialUrl"] : null), array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "flash", "courseType" => (isset($context["courseType"]) ? $context["courseType"] : null))), "html", null, true);
        echo "\"
               data-empty=\"";
        // line 605
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无Flash，请先上传。"), "html", null, true);
        echo "\"></div>
        </div>

      </div>
    </div>

  </div>


</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:media-choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1086 => 605,  1082 => 604,  1072 => 597,  1068 => 596,  1064 => 595,  1060 => 594,  1047 => 586,  1042 => 584,  1034 => 583,  1025 => 577,  1021 => 576,  1017 => 575,  1013 => 574,  1009 => 573,  1006 => 572,  1004 => 571,  992 => 562,  984 => 557,  979 => 555,  970 => 549,  962 => 544,  958 => 543,  954 => 542,  941 => 532,  937 => 531,  927 => 524,  923 => 523,  919 => 522,  915 => 521,  902 => 513,  897 => 511,  889 => 510,  882 => 506,  878 => 505,  874 => 504,  870 => 503,  866 => 502,  863 => 501,  861 => 500,  848 => 490,  840 => 485,  835 => 483,  826 => 477,  818 => 472,  814 => 471,  810 => 470,  797 => 460,  793 => 459,  783 => 452,  779 => 451,  775 => 450,  771 => 449,  758 => 441,  751 => 439,  742 => 433,  738 => 432,  734 => 431,  730 => 430,  726 => 429,  723 => 428,  721 => 427,  709 => 418,  701 => 413,  691 => 406,  683 => 401,  679 => 400,  675 => 399,  662 => 389,  658 => 388,  648 => 381,  644 => 380,  640 => 379,  636 => 378,  627 => 371,  619 => 368,  612 => 366,  608 => 365,  605 => 364,  598 => 362,  589 => 361,  587 => 360,  583 => 358,  577 => 356,  573 => 354,  571 => 353,  565 => 352,  556 => 346,  552 => 345,  548 => 344,  544 => 343,  540 => 342,  537 => 341,  535 => 340,  523 => 331,  515 => 326,  510 => 324,  501 => 318,  493 => 313,  489 => 312,  477 => 303,  469 => 300,  465 => 299,  458 => 295,  455 => 294,  449 => 292,  447 => 291,  439 => 286,  435 => 285,  425 => 278,  421 => 277,  417 => 276,  413 => 275,  403 => 267,  395 => 264,  388 => 262,  384 => 261,  376 => 258,  369 => 257,  361 => 254,  357 => 253,  349 => 252,  345 => 251,  340 => 250,  338 => 249,  328 => 243,  322 => 241,  316 => 239,  314 => 238,  310 => 237,  306 => 236,  302 => 235,  299 => 234,  296 => 233,  294 => 232,  284 => 225,  278 => 224,  271 => 220,  262 => 214,  256 => 211,  245 => 205,  240 => 203,  232 => 198,  228 => 197,  223 => 194,  221 => 193,  218 => 192,  214 => 190,  210 => 188,  208 => 187,  206 => 186,  19 => 1,);
    }
}
