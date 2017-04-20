<?php

/* TopxiaAdminBundle:System:course-setting.html.twig */
class __TwigTemplate_007b71f07dcc482b7aa83b63dfcbbe380d885b5b91907a7e107be2b311e9970c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:course-setting.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_setting_course";
        // line 4
        $context["script_controller"] = "setting/course";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "

";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"course-form\" novalidate>

  <fieldset>
    <legend>课程规则</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("给新"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%user_name%发送欢迎私信", array("%user_name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")))), "html", null, true);
        }
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 20
        echo $this->env->getExtension('topxia_html_twig')->radios("welcome_message_enabled", array(1 => $this->env->getExtension('translator')->trans("开启"), 0 => $this->env->getExtension('translator')->trans("关闭")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "welcome_message_enabled", array()));
        echo "
      <p class=\"help-block\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启后，新"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%user_name%加入课程后，会收到教师的欢迎私信", array("%user_name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")))), "html", null, true);
        }
        echo "</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_message_body\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("欢迎私信内容"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_message_body\" name=\"welcome_message_body\" class=\"form-control\" rows=\"5\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "welcome_message_body", array()), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">

          <div>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("变量说明："), "html", null, true);
        echo "</div>
          <ul>
            <li>";
        // line 35
        echo "{{nickname}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("为接收方用户用户名"), "html", null, true);
        echo "</li>
            <li>";
        // line 36
        echo "{{course}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("为课程名称"), "html", null, true);
        echo "</li>
          </ul>

        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程详情页显示相关课程"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 48
        echo $this->env->getExtension('topxia_html_twig')->radios("relatedCourses", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "relatedCourses", array()));
        echo "
        <div class=\"help-block\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("根据课程的标签，显示相关课程"), "html", null, true);
        echo "</div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>权限与版权</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("允许教师设置课程价格"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 61
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_modify_price", array(1 => $this->env->getExtension('translator')->trans("是"), 0 => $this->env->getExtension('translator')->trans("否")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "teacher_modify_price", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("允许教师查询课程订单"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 70
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_search_order", array(1 => $this->env->getExtension('translator')->trans("是"), 0 => $this->env->getExtension('translator')->trans("否")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "teacher_search_order", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("允许教师添加/移除"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
        }
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 79
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_manage_student", array(1 => $this->env->getExtension('translator')->trans("是"), 0 => $this->env->getExtension('translator')->trans("否")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "teacher_manage_student", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("允许教师导出"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%user_name%资料", array("%user_name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")))), "html", null, true);
        }
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 88
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_export_student", array(1 => $this->env->getExtension('translator')->trans("是"), 0 => $this->env->getExtension('translator')->trans("否")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "teacher_export_student", array()));
        echo "
      </div>
    </div>
    ";
        // line 91
        $context["smsSetting"] = $this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms");
        // line 92
        echo "    ";
        if (((($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_enabled", array()), 0)) : (0)) && (((($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_normal_lesson_publish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_normal_lesson_publish", array()), "off")) : ("off")) == "on") || ((($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_live_lesson_publish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_live_lesson_publish", array()), "off")) : ("off")) == "on")))) {
            // line 93
            echo "    ";
        }
        // line 94
        echo "

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("允许"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%user_name%下载课时的音视频", array("%user_name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")))), "html", null, true);
        }
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 101
        echo $this->env->getExtension('topxia_html_twig')->radios("student_download_media", array(0 => $this->env->getExtension('translator')->trans("不允许"), 1 => $this->env->getExtension('translator')->trans("允许")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "student_download_media", array()));
        echo "
        <div class=\"help-block\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启此项设置后，"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%user_name%可在课时学习界面侧栏的\"资料\"面板中下载。", array("%user_name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")))), "html", null, true);
        }
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程列表页默认排序"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 111
        echo $this->env->getExtension('topxia_html_twig')->radios("explore_default_orderBy", array("latest" => $this->env->getExtension('translator')->trans("最新"), "studentNum" => $this->env->getExtension('translator')->trans("最热"), "recommendedSeq" => $this->env->getExtension('translator')->trans("推荐")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "explore_default_orderBy", array()));
        echo "
      </div>
    </div>

     <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("图文、文档课时防复制"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 120
        echo $this->env->getExtension('topxia_html_twig')->radios("copy_enabled", array(1 => $this->env->getExtension('translator')->trans("开启"), 0 => $this->env->getExtension('translator')->trans("关闭")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "copy_enabled", array()));
        echo "
        <div class=\"help-block\"></div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷防复制"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 130
        echo $this->env->getExtension('topxia_html_twig')->radios("testpaperCopy_enabled", array(1 => $this->env->getExtension('translator')->trans("开启"), 0 => $this->env->getExtension('translator')->trans("关闭")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "testpaperCopy_enabled", array()));
        echo "
        <div class=\"help-block\"></div>
      </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>课程运营模式</legend>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>免费课时允许未登录用户观看</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 145
        echo $this->env->getExtension('topxia_html_twig')->radios("allowAnonymousPreview", array(1 => "允许", 0 => "不允许"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "allowAnonymousPreview", array()));
        echo "
        <div class=\"help-block\">如果允许此项设置,未登录用户（游客）可观看免费课时</div>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程中允许显示%user_name%人数", array("%user_name%" => $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", $this->env->getExtension('translator')->trans("学员")))), "html", null, true);
        echo "</label>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 153
        echo $this->env->getExtension('topxia_html_twig')->radios("show_student_num_enabled", array("1" => $this->env->getExtension('translator')->trans("开启"), "0" => $this->env->getExtension('translator')->trans("关闭")), (($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "show_student_num_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "show_student_num_enabled", array()), "1")) : ("1")));
        echo "
      </div>
    </div>

  </fieldset>

  <fieldset>
      <legend>";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名称设置"), "html", null, true);
        echo "</legend>

        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">
            <label>";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置章节名称"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"controls col-md-8 radios\">
            ";
        // line 167
        echo $this->env->getExtension('topxia_html_twig')->radios("custom_chapter_enabled", array(1 => $this->env->getExtension('translator')->trans("开启"), 0 => $this->env->getExtension('translator')->trans("关闭")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "custom_chapter_enabled", array()));
        echo "
            <div class=\"help-block\">
              ";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启后，在课时管理中添加章,节时，系统会自动生成按如下设置的章节名称。"), "html", null, true);
        echo "</div>
          </div>
        </div>

      <div id=\"show_course_chapter_name\"  style=\"display: ";
        // line 173
        if ($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "custom_chapter_enabled", array())) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">
              <label for=\"chapter_name\">";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程章名称"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"chapter_name\" name=\"chapter_name\" class=\"form-control\" ";
        // line 179
        if ($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "chapter_name", array())) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "chapter_name", array()), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("章"), "html", null, true);
            echo "\" ";
        }
        echo ">
          </div>
        </div>

        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
              <label for=\"part_name\">";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程节名称"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"part_name\" name=\"part_name\" class=\"form-control\" ";
        // line 188
        if ($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "part_name", array())) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "part_name", array()), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("节"), "html", null, true);
            echo "\" ";
        }
        echo ">
          </div>
        </div>
      </div>
    <div class=\"alert alert-info deduction text-center\">
    <p><strong>
    ";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注：修改网校字段后，站内相关字段名称都会相应修改为已保存的名称"), "html", null, true);
        echo "
    </strong></p>
    </div>

  </fieldset>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:course-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 205,  408 => 202,  397 => 194,  380 => 188,  374 => 185,  357 => 179,  351 => 176,  341 => 173,  334 => 169,  329 => 167,  323 => 164,  316 => 160,  306 => 153,  301 => 151,  292 => 145,  274 => 130,  268 => 127,  258 => 120,  252 => 117,  243 => 111,  237 => 108,  225 => 102,  221 => 101,  212 => 98,  206 => 94,  203 => 93,  200 => 92,  198 => 91,  192 => 88,  183 => 85,  174 => 79,  165 => 76,  156 => 70,  150 => 67,  141 => 61,  135 => 58,  123 => 49,  119 => 48,  113 => 45,  99 => 36,  93 => 35,  88 => 33,  82 => 30,  76 => 27,  64 => 21,  60 => 20,  51 => 17,  40 => 9,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
