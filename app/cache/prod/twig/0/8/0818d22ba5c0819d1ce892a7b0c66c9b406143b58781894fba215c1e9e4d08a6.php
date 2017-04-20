<?php

/* TopxiaAdminBundle:System:site.html.twig */
class __TwigTemplate_0818d22ba5c0819d1ce892a7b0c66c9b406143b58781894fba215c1e9e4d08a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:site.html.twig", 1);
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
        $context["menu"] = "admin_setting_message";
        // line 5
        $context["script_controller"] = "setting/site";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"site-form\" method=\"post\">
  
  <fieldset>
    
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网站名称"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "name", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"slogan\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网站副标题"), "html", null, true);
        echo "</label> 
      </div>
      <div class=\"col-md-8 controls\">
         <input type=\"text\" id=\"slogan\" name=\"slogan\" class=\"form-control\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "slogan", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"url\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网站域名"), "html", null, true);
        echo "</label> 
      </div>
      <div class=\"col-md-8 controls\">
       <input type=\"text\" id=\"url\" name=\"url\" class=\"form-control\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "\">
        <p class=\"help-block\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("以\"http://\"开头"), "html", null, true);
        echo "</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"logo\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网站LOGO"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-logo-container\">";
        // line 48
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <a class=\"btn btn-default\" id=\"site-logo-upload\" 
        data-upload-token=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("admin_setting_logo_upload");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
        echo "</a>
        <button class=\"btn btn-default\" id=\"site-logo-remove\" type=\"button\" data-url=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("admin_setting_logo_remove");
        echo "\" ";
        if ( !$this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "</button>
        <p class=\"help-block\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请上传png, gif, jpg格式的图片文件。LOGO图片建议不要超过250*50。"), "html", null, true);
        echo "</p>
        <input type=\"hidden\" name=\"logo\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"favicon\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("浏览器图标"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-favicon-container\">";
        // line 63
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "favicon", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "favicon", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <a class=\"btn btn-default\" 
        id=\"site-favicon-upload\" 
        data-upload-token=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("admin_setting_favicon_upload");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
        echo "</a>
        <button class=\"btn btn-default\" 
        id=\"site-favicon-remove\" 
        type=\"button\" data-url=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("admin_setting_favicon_remove");
        echo "\" ";
        if ( !$this->getAttribute((isset($context["site"]) ? $context["site"] : null), "favicon", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "</button>
        <p class=\"help-block\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请上传ico格式的图标文件, 建议大小16*16或者32*32。"), "html", null, true);
        echo "</p>
        <input type=\"hidden\" name=\"favicon\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "favicon", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_keywords\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("SEO关键词"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_keywords\" name=\"seo_keywords\" class=\"form-control\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "seo_keywords", array()), "html", null, true);
        echo "\">
        <p class=\"help-block\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置多个关键词请用半角逗号\",\"隔开。"), "html", null, true);
        echo "</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_description\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("SEO描述信息"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_description\" name=\"seo_description\" class=\"form-control\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "seo_description", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"master_email\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理员邮箱地址"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"master_email\" name=\"master_email\" class=\"form-control\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "master_email", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"copyright\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程内容版权方"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"copyright\" name=\"copyright\" class=\"form-control\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您可以填写网站名称或公司名称。"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"icp\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ICP备案号"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"icp\" name=\"icp\" class=\"form-control\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "icp", array()), "html", null, true);
        echo "\">
      </div>
    </div>

  </fieldset>

<br>

  <fieldset>
    <legend>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网站统计分析代码部署"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"analytics\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("统计分析代码"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">

        <textarea id=\"analytics\" name=\"analytics\" class=\"form-control\" rows=\"4\">";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "analytics", array()), "html", null, true);
        echo "</textarea>

        <p class=\"help-block\">
          ";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("建议使用下列统计分析的一种："), "html", null, true);
        echo "
          <a href=\"http://www.google.cn/intl/zh-CN_ALL/analytics/\" target=\"_blank\">";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("谷歌分析"), "html", null, true);
        echo "</a>、
          <a href=\"http://tongji.baidu.com/\" target=\"_blank\">";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("百度统计"), "html", null, true);
        echo "</a>、
          <a href=\"http://ta.qq.com/\" target=\"_blank\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("腾讯分析"), "html", null, true);
        echo "</a>、
          <a href=\"http://www.cnzz.com/\" target=\"_blank\">CNZZ</a>。
        </p>
      </div>
    </div>
  </fieldset>

  <fieldset style=\"display:none;\">
    <legend>";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("站点状态"), "html", null, true);
        echo "</legend>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label >";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网站状态"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 156
        echo $this->env->getExtension('topxia_html_twig')->radios("status", array("open" => $this->env->getExtension('translator')->trans("开放"), "closed" => $this->env->getExtension('translator')->trans("关闭")), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "status", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label>";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网站关闭公告"), "html", null, true);
        echo "</label>
      </div>
        <div class=\"col-md-8 controls\">
          <textarea id=\"closed_note\" name=\"closed_note\" class=\"form-control\" rows=\"4\">";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "closed_note", array()), "html", null, true);
        echo "</textarea>
        <p class=\"help-block\">";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网站处于关闭状态时，用户访问网站将显示此公告，支持HTML代码"), "html", null, true);
        echo "。</p>
      </div>
    </div>
  </fieldset>

  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 177,  368 => 173,  358 => 166,  354 => 165,  348 => 162,  339 => 156,  333 => 153,  326 => 149,  315 => 141,  311 => 140,  307 => 139,  303 => 138,  297 => 135,  290 => 131,  284 => 128,  272 => 119,  266 => 116,  257 => 110,  253 => 109,  247 => 106,  238 => 100,  232 => 97,  223 => 91,  217 => 88,  208 => 82,  204 => 81,  198 => 78,  189 => 72,  185 => 71,  175 => 70,  167 => 67,  163 => 66,  153 => 63,  147 => 60,  138 => 54,  134 => 53,  124 => 52,  118 => 51,  114 => 50,  105 => 48,  99 => 45,  90 => 39,  86 => 38,  80 => 35,  71 => 29,  65 => 26,  56 => 20,  50 => 17,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
