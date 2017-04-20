<?php

/* TopxiaWebBundle:Group:add-thread.html.twig */
class __TwigTemplate_c058fe8c0dfd2586caed9bacc635d1806d923c2a89663ab17e6bac5b4a67e368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:layout.html.twig", "TopxiaWebBundle:Group:add-thread.html.twig", 1);
        $this->blocks = array(
            'group_body' => array($this, 'block_group_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Group:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["script_controller"] = "group/group";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_group_body($context, array $blocks = array())
    {
        // line 4
        echo "
  ";
        // line 5
        if ((((array_key_exists("thread", $context)) ? (_twig_default_filter((isset($context["thread"]) ? $context["thread"] : null), null)) : (null)) && (isset($context["attachs"]) ? $context["attachs"] : null))) {
            // line 6
            echo "    <div id=\"hasAttach\"></div>
  ";
        }
        // line 8
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      ";
        // line 10
        if (((array_key_exists("thread", $context)) ? (_twig_default_filter((isset($context["thread"]) ? $context["thread"] : null), null)) : (null))) {
            // line 11
            echo "        <h3 class=\"panel-title\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑话题"), "html", null, true);
            echo "</h3>
      ";
        } else {
            // line 13
            echo "        <h3 class=\"panel-title\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表话题"), "html", null, true);
            echo "</h3>
      ";
        }
        // line 15
        echo "    </div>
    <div class=\"panel-body\">
      <form id=\"user-thread-form\" class=\"form-horizontal thread-form\" method=\"post\">

        <div class=\"form-group\">
          <label class=\"col-xs-2 control-label\" for=\"thread_title\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标题"), "html", null, true);
        echo "</label>
          <div class=\"col-xs-7 col-xs-10 controls\">
            <input type=\"text\" id=\"thread_title\" name=\"thread[title]\" class=\"form-control\"
                   value=\"";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
            <div class=\"help-block\" style=\"display:none;\"></div>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-xs-2 control-label\"
                 for=\"";
        // line 30
        if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
            echo "thread_content1";
        } else {
            echo "thread_content";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("内容"), "html", null, true);
        echo "</label>
          <div class=\"col-sm-7 col-xs-10 controls\">
            ";
        // line 32
        if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
            // line 33
            echo "              <textarea name=\"thread[content]\" rows=\"10\" id=\"thread_content1\" class=\"form-control\"
                        data-image-upload-url=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array()), "")) : ("")), "html", null, true);
            echo "</textarea>
            ";
        } else {
            // line 36
            echo "              <textarea name=\"thread[content]\" rows=\"10\" id=\"thread_content\" class=\"form-control\"
                        data-image-upload-url=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
            echo "\"
                        data-image-download-url=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array()), "")) : ("")), "html", null, true);
            echo "</textarea>
            ";
        }
        // line 40
        echo "          </div>
        </div>

        ";
        // line 43
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Attachment:formFields", array("targetType" => "group.thread", "targetId" => (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), 0)) : (0)))));
        echo "

        <div class=\"form-group\">
          <div class=\"col-sm-7 col-xs-10 col-xs-offset-2\">
            ";
        // line 47
        if (((array_key_exists("thread", $context)) ? (_twig_default_filter((isset($context["thread"]) ? $context["thread"] : null), null)) : (null))) {
            // line 48
            echo "              <button id=\"groupthread-save-btn\" data-submiting-text=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在修改"), "html", null, true);
            echo "\" type=\"submit\"
                      class=\"btn btn-primary\">";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("修改"), "html", null, true);
            echo "</button>
            ";
        } else {
            // line 51
            echo "              <button id=\"groupthread-save-btn\" data-submiting-text=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在创建"), "html", null, true);
            echo "\" type=\"submit\"
                      class=\"btn btn-primary\">";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布"), "html", null, true);
            echo "</button>
            ";
        }
        // line 54
        echo "          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"files\">
      </form>

    </div>
  </div>

  <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span
                class=\"sr-only\">Close</span></button>
          <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("插入隐藏内容"), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"modal-body\">

          <form class=\"form-horizontal\" method=\"post\">

            <div class=\"row form-group\">
              <div class=\"col-md-4 control\">
                <label class=\"control-label\"> ";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请输入要隐藏的内容"), "html", null, true);
        echo ":</label>
              </div>
              <div class=\"col-md-7 controls\">
                <textarea class=\"form-control\" rows=\"3\" id=\"text\"> </textarea>
              </div>

            </div>

            <div class=\"form-group\">
              <div class=\"controls\">
                <div class=\"col-md-4 control\">
                  <input type=\"radio\" id=\"type0\" name=\"type\" required=\"required\" value=\"coin\" checked=true>
                  <label for=\"amount\"
                         class=\"control-label\"> ";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看所需"), "html", null, true);
        echo twig_escape_filter($this->env, (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()), "")) : ("")), "html", null, true);
        echo ":</label>
                </div>
                <div class=\"col-md-3 controls\">
                  <input name=\"amount\" class=\"form-control\" tyoe=\"text\" id=\"amount\"/>
                </div>
              </div>
            </div>

            <div class=\"row form-group\">
              <div class=\"col-md-4 control\">
                <input type=\"radio\" id=\"type1\" name=\"type\" required=\"required\" value=\"reply\">
                <label for=\"amount\" class=\"control-label\"> ";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复话题后可见"), "html", null, true);
        echo "</label>
              </div>

            </div>

          </form>
        </div>
        <div class=\"modal-footer\">
          <div class=\"pull-left text-muted\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("隐藏话题获得的%coin_name%会在扣除50%之后添加到您的账户", array("%coin_name%" => (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()), "")) : ("")))), "html", null, true);
        echo "
          </div>
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"insert\">";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("插入"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  </div>

  ";
        // line 119
        $this->loadTemplate("TopxiaWebBundle:Group:upload-modal.html.twig", "TopxiaWebBundle:Group:add-thread.html.twig", 119)->display($context);
        // line 120
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:add-thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 120,  247 => 119,  238 => 113,  234 => 112,  229 => 110,  218 => 102,  203 => 91,  187 => 78,  176 => 70,  160 => 57,  155 => 54,  150 => 52,  145 => 51,  140 => 49,  135 => 48,  133 => 47,  126 => 43,  121 => 40,  114 => 38,  110 => 37,  107 => 36,  100 => 34,  97 => 33,  95 => 32,  84 => 30,  74 => 23,  68 => 20,  61 => 15,  55 => 13,  49 => 11,  47 => 10,  43 => 8,  39 => 6,  37 => 5,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }
}
