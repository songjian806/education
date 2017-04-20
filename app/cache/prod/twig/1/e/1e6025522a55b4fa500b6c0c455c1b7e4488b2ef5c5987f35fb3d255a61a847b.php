<?php

/* TopxiaAdminBundle:Article:article-modal.html.twig */
class __TwigTemplate_1e6025522a55b4fa500b6c0c455c1b7e4488b2ef5c5987f35fb3d255a61a847b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Article:article-modal.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
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
        $context["menu"] = "admin_operation_article_manage";
        // line 5
        $context["script_controller"] = "article/article-modal";
        // line 7
        $context["article"] = ((array_key_exists("article", $context)) ? (_twig_default_filter((isset($context["article"]) ? $context["article"] : null), null)) : (null));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        if ((isset($context["article"]) ? $context["article"] : null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑资讯"), "html", null, true);
        } else {
            $this->displayParentBlock("page_title", $context, $blocks);
        }
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "
<style>
  #article-form .popover {
    max-width: 400px;
    width: 400px;
  }
</style>


<form class=\"two-col-form\" id=\"article-form\" method=\"post\" enctype=\"multipart/form-data\"
  ";
        // line 22
        if ((isset($context["article"]) ? $context["article"] : null)) {
            // line 23
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        } else {
            // line 25
            echo "    action=\"";
            echo $this->env->getExtension('routing')->getPath("admin_article_create");
            echo "\"
  ";
        }
        // line 27
        echo "  >
  <div class=\"row\">
    <div class=\"col-md-8\">
      <div class=\"form-group\">
        <label for=\"article-title-field\" class=\"control-label\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("资讯标题"), "html", null, true);
        echo "</label>
        <div class=\"controls\">
          <input class=\"form-control\" id=\"article-title-field\" type=\"text\" name=\"title\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <label for=\"categoryId\" class=\"control-label\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所属栏目"), "html", null, true);
        echo "</label>
        <div class=\"controls\">
          <select class=\"form-control\" id=\"categoryId\" type=\"text\" name=\"categoryId\" tabindex=\"2\">
            ";
        // line 41
        if ( !((array_key_exists("article", $context)) ? (_twig_default_filter((isset($context["article"]) ? $context["article"] : null), false)) : (false))) {
            // line 42
            echo "              <option value=\"0\">--";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("选择所属栏目"), "html", null, true);
            echo "--</option>
            ";
        }
        // line 44
        echo "          ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryTree"]) ? $context["categoryTree"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tree"]) {
            // line 45
            echo "            <option value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "id", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["tree"], "id", array()) == (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))) : ("")))) {
                echo "selected";
            }
            echo ">";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($this->getAttribute($context["tree"], "depth", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if (($this->getAttribute($context["tree"], "depth", array()) > 1)) {
                    echo "　";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "name", array()), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </select>
        </div>
      </div>

      <div class=\"form-group\">
        <label for=\"article-tagIds\"　class=\"control-label\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("TAG标签"), "html", null, true);
        echo "</label>
        <div class=\"controls\">
          <input type=\"form-control\" id=\"article-tags\" name=\"tags\" required=\"required\" class=\"width-full select2-offscreen\" tabindex=\"-1\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_join_filter(((array_key_exists("tagNames", $context)) ? (_twig_default_filter((isset($context["tagNames"]) ? $context["tagNames"] : null), array())) : (array())), ","), "html", null, true);
        echo "\" data-match-url=\"";
        echo $this->env->getExtension('routing')->getPath("tag_match");
        echo "\">
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

      ";
        // line 59
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:Article:article-modal.html.twig", 59)->display(array_merge($context, array("orgCode" => (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "orgCode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "orgCode", array()), null)) : (null)), "nocolmd" => true)));
        // line 60
        echo "
      <div class=\"form-group\">
        <label for=\"richeditor-body-field\" class=\"control-label\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正文"), "html", null, true);
        echo "</label>
        <div class=\"controls\">
          <textarea class=\"form-control\" id=\"richeditor-body-field\" rows=\"16\" name=\"body\"
            data-image-upload-url=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\"
            data-flash-upload-url=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default", "flash"))), "html", null, true);
        echo "\"
           >";
        // line 67
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "body", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "body", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
        </div>
      </div>

      ";
        // line 71
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Attachment:formFields", array("targetType" => "article", "targetId" => (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), 0)) : (0))), array("showLabel" => false)));
        echo "

      <div class=\"form-group\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
        <button id=\"article-operate-save\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-loading-text=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在保存..."), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("确定"), "html", null, true);
        echo "</button>
        <a class=\"btn btn-link\" href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("admin_article");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回"), "html", null, true);
        echo "</a>
      </div>

    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("资讯属性"), "html", null, true);
        echo "</div>
        <div class=\"panel-body\">
            <label class=\"checkbox-inline\">
            <input type=\"checkbox\" name=\"sticky\" value=\"1\" ";
        // line 85
        if ($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["article"]) ? $context["article"] : null), "sticky")) {
            echo " checked=\"checked\" ";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("置顶"), "html", null, true);
        echo "
          </label>
          <label class=\"checkbox-inline\">
            <input type=\"checkbox\" name=\"featured\" value=\"1\" ";
        // line 88
        if ($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["article"]) ? $context["article"] : null), "featured")) {
            echo " checked=\"checked\" ";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("头条"), "html", null, true);
        echo "  
          </label>
          <label class=\"checkbox-inline\">
            <input type=\"checkbox\" name=\"promoted\" value=\"1\" ";
        // line 91
        if ($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["article"]) ? $context["article"] : null), "promoted")) {
            echo " checked=\"checked\" ";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("推荐"), "html", null, true);
        echo "
          </label>
          <a class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\">
          </a>
          <div id=\"article-property-tips-html\" style=\"display:none;\">
            ";
        // line 96
        echo $this->env->getExtension('translator')->trans("资讯属性Tooltip");
        echo "
          </div>
        </div>
      </div>

      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("来源设置"), "html", null, true);
        echo "</div>
        <div class=\"panel-body\">
            <div class=\"form-group\">
              <label for=\"article-source-field\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("来源名称"), "html", null, true);
        echo "</label>
              <div class=\"controls\">
                <input class=\"form-control\" id=\"article-source-field\" type=\"text\" name=\"source\" value=\"";
        // line 107
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["article"]) ? $context["article"] : null), "source");
        echo "\">
              </div>
            </div>

            <div class=\"form-group\">
                <label for=\"article-sourceUrl-field\">";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("来源地址"), "html", null, true);
        echo "</label>
              <div class=\"controls\">
                  <input class=\"form-control\" id=\"article-sourceUrl-field\" type=\"text\" name=\"sourceUrl\" value=\"";
        // line 114
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["article"]) ? $context["article"] : null), "sourceUrl");
        echo "\">
              </div>
            </div>
        </div>
      </div>

      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置缩略图"), "html", null, true);
        echo "</div>
        <div class=\"panel-body\">
          <div id=\"article-thumb-container\">
              ";
        // line 124
        if ((($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "thumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "thumb", array()), null)) : (null))) {
            // line 125
            echo "                <img class=\"img-responsive\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "thumb", array())), "html", null, true);
            echo "'>
              ";
        }
        // line 127
        echo "            </div>
            <br>
            <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("admin_article_show_upload");
        echo "\" class=\"btn btn-default\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
        echo "</a>
          <a id=\"article_thumb_remove\"  class=\"btn btn-default\" data-url=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_thumb_remove", array("id" => (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), 0)) : (0)))), "html", null, true);
        echo "\" ";
        if ( !(($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "thumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "thumb", array()), null)) : (null))) {
            echo "style=\"display:none;\" ";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "</a>
          <input type=\"hidden\" name=\"thumb\" value=\"";
        // line 131
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "thumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "thumb", array()))) : ("")), "html", null, true);
        echo "\" id=\"article-thumb\">
          <input type=\"hidden\" name=\"originalThumb\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "originalThumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "originalThumb", array()))) : ("")), "html", null, true);
        echo "\" id=\"article-originalThumb\">
          <p class=\"help-block\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
        echo "</p>
          <p class=\"help-block mbs\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请推荐尺寸754*424px。"), "html", null, true);
        echo "
        </div>
      </div>

      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布时间"), "html", null, true);
        echo "</div>
        <div class=\"panel-body\">
          <div class=\"form-group\">
            <div class=\"controls\">
              <input class=\"form-control\" type=\"text\" name=\"publishedTime\" value=\" ";
        // line 143
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["article"]) ? $context["article"] : null), "publishedTime", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_TIME"), "method")), "Y-m-d H:i:s"), "html", null, true);
        echo "\">
              <div class=\"help-block\">";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("内容条目默认按发布时间的倒序显示"), "html", null, true);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Article:article-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 144,  356 => 143,  349 => 139,  341 => 134,  337 => 133,  333 => 132,  329 => 131,  319 => 130,  313 => 129,  309 => 127,  303 => 125,  301 => 124,  295 => 121,  285 => 114,  280 => 112,  272 => 107,  267 => 105,  261 => 102,  252 => 96,  240 => 91,  230 => 88,  220 => 85,  214 => 82,  203 => 76,  197 => 75,  193 => 74,  187 => 71,  180 => 67,  176 => 66,  172 => 65,  166 => 62,  162 => 60,  160 => 59,  150 => 54,  145 => 52,  138 => 47,  113 => 45,  108 => 44,  102 => 42,  100 => 41,  94 => 38,  86 => 33,  81 => 31,  75 => 27,  69 => 25,  63 => 23,  61 => 22,  49 => 12,  46 => 11,  36 => 9,  32 => 1,  30 => 7,  28 => 5,  26 => 3,  11 => 1,);
    }
}
