<?php

/* TopxiaAdminBundle:System:mobile.html.twig */
class __TwigTemplate_c89292c0744cdd963982269858dd504517399c6c0e9e16a8392a63892e19e3ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:mobile.html.twig", 1);
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
        $context["menu"] = "admin_operation_mobile_banner_manage";
        // line 5
        $context["script_controller"] = "operation/mobile";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<style>

#mobile-banner1-container img , 
#mobile-banner2-container img , 
#mobile-banner3-container img , 
#mobile-banner4-container img , 
#mobile-banner5-container img 
{max-width: 80%; margin-bottom: 10px;}

.course-grids {
  margin:0 -15px 0 0;
  padding:0;
  list-style: none;
}

.course-grid {
  display: inline-block;
  vertical-align: top;
  margin: 15px 15px 15px 0;
  border: 1px solid #e1e1e1;
  border-radius: 4px;
}

.banner-course .course-grid {
  margin: 0 0 0 0;
  margin-left: 10px;
}

.course-grid .series-mode-label {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 12px;
}

.course-grid .grid-body {
  position: relative;
  width: 170px;
  display: block;
  overflow: hidden;
  border-radius: 4px;
  color: #353535;
}

.grid-body a{
  text-decoration: none;
}

.course-grid .title {
  display: block;
  padding: 10px;
  min-height: 52px;
  color: #555;
  font-weight: bold;
}

.course-grid .add-course {
  font-size: 80px;
  height: 148px;
  text-align: center;
  padding-top: 30px;
}


</style>
";
        // line 74
        if (($this->env->getExtension('topxia_web_twig')->getSetting("mobile.enabled") == 1)) {
            // line 75
            echo "
";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "

<form class=\"form-horizontal\" id=\"mobile-form\" method=\"post\">

  <fieldset>
    
    <div class=\"help-block\">";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("客户端显示的轮播图。最多5张，建议图片大小为750*300，格式支持jpg、png。"), "html", null, true);
            echo "</div>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner1\">";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("轮播图1"), "html", null, true);
            echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner1-container\">";
            // line 88
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner1", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner1", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner1-upload\" type=\"button\" data-url=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_upload", array("type" => "banner1"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
            echo "</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner1-remove\" type=\"button\" data-url=\"";
            // line 91
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_remove", array("type" => "banner1"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner1", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
            echo "</button>

        <p class=\"help-block\">";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
            echo "</p>

        <div class=\"banner-setting\" role=\"banner1-setting\" ";
            // line 95
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner1", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">
          <input type=\"radio\" role=\"bannerClick1\" name=\"bannerClick1\" ";
            // line 96
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick1", array())) {
                echo "checked=\"checked\"";
            }
            echo " value=\"0\"/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("默认（无触发动作）"), "html", null, true);
            echo "
          <input type=\"radio\" role=\"bannerClick1\" name=\"bannerClick1\" value=\"1\" ";
            // line 97
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick1", array()) == "1")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("跳转到连接地址"), "html", null, true);
            echo "

          <input type=\"radio\" role=\"bannerClick1\" name=\"bannerClick1\" value=\"2\" ";
            // line 99
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick1", array()) == "2")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("跳转到内部课程"), "html", null, true);
            echo "

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl1\" name=\"bannerUrl1\" class=\"form-control\" value=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerUrl1", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请填写连接地址"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick1", array()) != "1")) {
                echo "style=\"display:none\"";
            }
            echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse1\" data-role=\"selectBannerCourse\" ";
            // line 107
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick1", array()) != "2")) {
                echo "style=\"display:none\"";
            }
            echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 108
            echo $this->env->getExtension('routing')->getPath("admin_course_search_to_fill_banner");
            echo "\" >
             ";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("选课"), "html", null, true);
            echo "
            </a>
            <div name=\"bannerCourseShow1\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
            // line 113
            $this->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig", "TopxiaAdminBundle:System:mobile.html.twig", 113)->display(array_merge($context, array("course" => (isset($context["bannerCourse1"]) ? $context["bannerCourse1"] : null))));
            // line 114
            echo "              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId1\" class=\"form-control\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerJumpToCourseId1", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请填写内部课程Id"), "html", null, true);
            echo "\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner1\" value=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner1", array()), "html", null, true);
            echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner2\">";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("轮播图2"), "html", null, true);
            echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner2-container\">";
            // line 130
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner2", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner2", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner2-upload\" type=\"button\" data-url=\"";
            // line 132
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_upload", array("type" => "banner2"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
            echo "</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner2-remove\" type=\"button\" data-url=\"";
            // line 133
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_remove", array("type" => "banner2"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner2", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
            echo "</button>

        <p class=\"help-block\">";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
            echo "</p>







        <div class=\"banner-setting\" role=\"banner2-setting\" ";
            // line 143
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner2", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">
          <input type=\"radio\" role=\"bannerClick2\" name=\"bannerClick2\" ";
            // line 144
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick2", array())) {
                echo "checked=\"checked\"";
            }
            echo " value=\"0\"/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("默认（无触发动作）"), "html", null, true);
            echo "
          <input type=\"radio\" role=\"bannerClick2\" name=\"bannerClick2\" value=\"1\" ";
            // line 145
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick2", array()) == "1")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("跳转到连接地址"), "html", null, true);
            echo "

          <input type=\"radio\" role=\"bannerClick2\" name=\"bannerClick2\" value=\"2\" ";
            // line 147
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick2", array()) == "2")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("跳转到内部课程"), "html", null, true);
            echo "

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl2\" name=\"bannerUrl2\" class=\"form-control\" value=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerUrl2", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请填写连接地址"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick2", array()) != "1")) {
                echo "style=\"display:none\"";
            }
            echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse2\" data-role=\"selectBannerCourse\" ";
            // line 155
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick2", array()) != "2")) {
                echo "style=\"display:none\"";
            }
            echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 156
            echo $this->env->getExtension('routing')->getPath("admin_course_search_to_fill_banner");
            echo "\" >
             ";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("选课"), "html", null, true);
            echo "
            </a>
            <div name=\"bannerCourseShow2\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
            // line 161
            $this->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig", "TopxiaAdminBundle:System:mobile.html.twig", 161)->display(array_merge($context, array("course" => (isset($context["bannerCourse2"]) ? $context["bannerCourse2"] : null))));
            // line 162
            echo "              </ul>
            </div>

            <input type=\"text\" name=\"bannerJumpToCourseId2\" class=\"form-control\" value=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerJumpToCourseId2", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请填写内部课程Id"), "html", null, true);
            echo "\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner2\" value=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner2", array()), "html", null, true);
            echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner3\">";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("轮播图3"), "html", null, true);
            echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner3-container\">";
            // line 179
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner3", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner3", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner3-upload\" type=\"button\" data-url=\"";
            // line 181
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_upload", array("type" => "banner3"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
            echo "</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner3-remove\" type=\"button\" data-url=\"";
            // line 182
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_remove", array("type" => "banner3"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner3", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
            echo "</button>

        <p class=\"help-block\">";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
            echo "</p>







        <div class=\"banner-setting\" role=\"banner3-setting\" ";
            // line 192
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner3", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">
          <input type=\"radio\" role=\"bannerClick3\" name=\"bannerClick3\" ";
            // line 193
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick3", array())) {
                echo "checked=\"checked\"";
            }
            echo " value=\"0\"/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("默认（无触发动作）"), "html", null, true);
            echo "
          <input type=\"radio\" role=\"bannerClick3\" name=\"bannerClick3\" value=\"1\" ";
            // line 194
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick3", array()) == "1")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("跳转到连接地址"), "html", null, true);
            echo "

          <input type=\"radio\" role=\"bannerClick3\" name=\"bannerClick3\" value=\"2\" ";
            // line 196
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick3", array()) == "2")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("跳转到内部课程"), "html", null, true);
            echo "

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl3\" name=\"bannerUrl3\" class=\"form-control\" value=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerUrl3", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请填写连接地址"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick3", array()) != "1")) {
                echo "style=\"display:none\"";
            }
            echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse3\" data-role=\"selectBannerCourse\" ";
            // line 204
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick3", array()) != "2")) {
                echo "style=\"display:none\"";
            }
            echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 205
            echo $this->env->getExtension('routing')->getPath("admin_course_search_to_fill_banner");
            echo "\" >
             ";
            // line 206
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("选课"), "html", null, true);
            echo "
            </a>
            <div name=\"bannerCourseShow3\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
            // line 210
            $this->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig", "TopxiaAdminBundle:System:mobile.html.twig", 210)->display(array_merge($context, array("course" => (isset($context["bannerCourse3"]) ? $context["bannerCourse3"] : null))));
            // line 211
            echo "              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId3\" class=\"form-control\" value=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerJumpToCourseId3", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请填写内部课程Id"), "html", null, true);
            echo "\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner3\" value=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner3", array()), "html", null, true);
            echo "\">
      </div>
    </div>


    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner4\">";
            // line 225
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("轮播图4"), "html", null, true);
            echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner4-container\">";
            // line 228
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner4", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner4", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner4-upload\" type=\"button\" data-url=\"";
            // line 230
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_upload", array("type" => "banner4"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
            echo "</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner4-remove\" type=\"button\" data-url=\"";
            // line 231
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_remove", array("type" => "banner4"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner4", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
            echo "</button>

        <p class=\"help-block\">";
            // line 233
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
            echo "</p>







        <div class=\"banner-setting\" role=\"banner4-setting\" ";
            // line 241
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner4", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">
          <input type=\"radio\" role=\"bannerClick4\" name=\"bannerClick4\" ";
            // line 242
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick4", array())) {
                echo "checked=\"checked\"";
            }
            echo " value=\"0\"/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("默认（无触发动作）"), "html", null, true);
            echo "
          <input type=\"radio\" role=\"bannerClick4\" name=\"bannerClick4\" value=\"1\" ";
            // line 243
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick4", array()) == "1")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("跳转到连接地址"), "html", null, true);
            echo "

          <input type=\"radio\" role=\"bannerClick4\" name=\"bannerClick4\" value=\"2\" ";
            // line 245
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick4", array()) == "2")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("跳转到内部课程"), "html", null, true);
            echo "

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl4\" name=\"bannerUrl4\" class=\"form-control\" value=\"";
            // line 249
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerUrl4", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请填写连接地址"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick4", array()) != "1")) {
                echo "style=\"display:none\"";
            }
            echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse4\" data-role=\"selectBannerCourse\" ";
            // line 253
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick4", array()) != "2")) {
                echo "style=\"display:none\"";
            }
            echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 254
            echo $this->env->getExtension('routing')->getPath("admin_course_search_to_fill_banner");
            echo "\" >
             ";
            // line 255
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("选课"), "html", null, true);
            echo "
            </a>
            <div name=\"bannerCourseShow4\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
            // line 259
            $this->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig", "TopxiaAdminBundle:System:mobile.html.twig", 259)->display(array_merge($context, array("course" => (isset($context["bannerCourse4"]) ? $context["bannerCourse4"] : null))));
            // line 260
            echo "              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId4\" class=\"form-control\" value=\"";
            // line 262
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerJumpToCourseId4", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请填写内部课程Id"), "html", null, true);
            echo "\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner4\" value=\"";
            // line 267
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner4", array()), "html", null, true);
            echo "\">
      </div>
    </div>


    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner5\">";
            // line 274
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("轮播图5"), "html", null, true);
            echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner5-container\">";
            // line 277
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner5", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner5", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner5-upload\" type=\"button\" data-url=\"";
            // line 279
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_upload", array("type" => "banner5"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
            echo "</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner5-remove\" type=\"button\" data-url=\"";
            // line 280
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_remove", array("type" => "banner5"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner5", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
            echo "</button>

        <p class=\"help-block\">";
            // line 282
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请上传png, gif, jpg格式的图片文件"), "html", null, true);
            echo "。</p>







        <div class=\"banner-setting\" role=\"banner5-setting\" ";
            // line 290
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner5", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">
          <input type=\"radio\" role=\"bannerClick5\" name=\"bannerClick5\" ";
            // line 291
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick5", array())) {
                echo "checked=\"checked\"";
            }
            echo " value=\"0\"/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("默认（无触发动作）"), "html", null, true);
            echo "
          <input type=\"radio\" role=\"bannerClick5\" name=\"bannerClick5\" value=\"1\" ";
            // line 292
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick5", array()) == "1")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("跳转到连接地址"), "html", null, true);
            echo "

          <input type=\"radio\" role=\"bannerClick5\" name=\"bannerClick5\" value=\"2\" ";
            // line 294
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick5", array()) == "2")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("跳转到内部课程"), "html", null, true);
            echo "

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl5\" name=\"bannerUrl5\" class=\"form-control\" value=\"";
            // line 298
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerUrl5", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请填写连接地址"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick5", array()) != "1")) {
                echo "style=\"display:none\"";
            }
            echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse5\" data-role=\"selectBannerCourse\" ";
            // line 302
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick5", array()) != "2")) {
                echo "style=\"display:none\"";
            }
            echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 303
            echo $this->env->getExtension('routing')->getPath("admin_course_search_to_fill_banner");
            echo "\" >
             ";
            // line 304
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("选课"), "html", null, true);
            echo "
            </a>
            <div name=\"bannerCourseShow5\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
            // line 308
            $this->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig", "TopxiaAdminBundle:System:mobile.html.twig", 308)->display(array_merge($context, array("course" => (isset($context["bannerCourse5"]) ? $context["bannerCourse5"] : null))));
            // line 309
            echo "              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId5\" class=\"form-control\" value=\"";
            // line 311
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerJumpToCourseId5", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请填写内部课程Id"), "html", null, true);
            echo "\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner5\" value=\"";
            // line 316
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner5", array()), "html", null, true);
            echo "\">
      </div>
    </div>

    
  </fieldset>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 323
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
  
  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
            // line 327
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提交"), "html", null, true);
            echo "</button>
    </div>
  </div>

</form>

";
        } else {
            // line 334
            echo "<div class=\"well\" style=\"text-align:center;\">


";
            // line 337
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("移动端未开启，"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请先在"), "html", null, true);
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("系统-课程设置-移动端设置 "), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("中设置开启"), "html", null, true);
            echo "

</div>
";
        }
        // line 341
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  817 => 341,  803 => 337,  798 => 334,  788 => 327,  781 => 323,  771 => 316,  761 => 311,  757 => 309,  755 => 308,  748 => 304,  744 => 303,  738 => 302,  725 => 298,  714 => 294,  705 => 292,  697 => 291,  691 => 290,  680 => 282,  669 => 280,  663 => 279,  654 => 277,  648 => 274,  638 => 267,  628 => 262,  624 => 260,  622 => 259,  615 => 255,  611 => 254,  605 => 253,  592 => 249,  581 => 245,  572 => 243,  564 => 242,  558 => 241,  547 => 233,  536 => 231,  530 => 230,  521 => 228,  515 => 225,  505 => 218,  495 => 213,  491 => 211,  489 => 210,  482 => 206,  478 => 205,  472 => 204,  459 => 200,  448 => 196,  439 => 194,  431 => 193,  425 => 192,  414 => 184,  403 => 182,  397 => 181,  388 => 179,  382 => 176,  373 => 170,  363 => 165,  358 => 162,  356 => 161,  349 => 157,  345 => 156,  339 => 155,  326 => 151,  315 => 147,  306 => 145,  298 => 144,  292 => 143,  281 => 135,  270 => 133,  264 => 132,  255 => 130,  249 => 127,  240 => 121,  230 => 116,  226 => 114,  224 => 113,  217 => 109,  213 => 108,  207 => 107,  194 => 103,  183 => 99,  174 => 97,  166 => 96,  160 => 95,  155 => 93,  144 => 91,  138 => 90,  129 => 88,  123 => 85,  117 => 82,  108 => 76,  105 => 75,  103 => 74,  36 => 9,  33 => 8,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
