<?php

/* TopxiaAdminBundle:ArticleCategory:modal.html.twig */
class __TwigTemplate_ae0cb010e0bfe03065b05f617795f0766a2cf1fe82411200687560ef0a8d639a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:ArticleCategory:modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑栏目"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加栏目"), "html", null, true);
        }
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<form id=\"category-form\" class=\"form-horizontal\" action=\"";
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_category_edit", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))), "html", null, true);
        } else {
            echo $this->env->getExtension('routing')->getPath("admin_article_category_create");
        }
        echo "\" method=\"post\">
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-name-field\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("栏目名称"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-name-field\" type=\"text\" name=\"name\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        echo "\" tabindex=\"1\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-code-field\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("栏目编码"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-code-field\" type=\"text\" name=\"code\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array()), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_category_checkcode", array("exclude" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array()))), "html", null, true);
        echo "\" tabindex=\"2\">
\t\t\t\t<div class=\"help-block\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("生成列表、资讯时使用，例如news、bbs等"), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-parentId-field\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("父栏目"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<select class=\"form-control category-select\" id=\"category-parentId-field\" type=\"text\" name=\"parentId\" tabindex=\"2\" data-url=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_category_checkparentid", array("currentId" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t<option value=\"0\">--";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("选择栏目"), "html", null, true);
        echo "--</option>
\t\t\t\t\t";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryTree"]) ? $context["categoryTree"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tree"]) {
            // line 29
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["tree"], "id", array()) == $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "parentId", array()))) {
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
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t</select>
\t\t\t</div>\t\t
\t\t</div>

\t\t<div style=\"display:none;\" class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-publishArticle-field\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("允许发布资讯"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"controls radios col-md-8\"><label>
\t\t\t\t\t<input  id=\"category-publishArticle-field\" type=\"radio\" name=\"publishArticle\" tabindex=\"0\" value=1 ";
        // line 38
        if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "publishArticle", array()) == 1)) {
            echo "checked";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("是"), "html", null, true);
        echo "</label>
\t\t\t\t<label>
\t\t\t\t\t<input  id=\"category-publishArticle-field\" type=\"radio\" name=\"publishArticle\" tabindex=\"0\" value=0 ";
        // line 40
        if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "publishArticle", array()) != 1)) {
            echo "checked";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("否"), "html", null, true);
        echo "
\t\t\t\t</label>\t
\t\t\t\t
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-seoTitle-field\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("SEO标题"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-seoTitle-field\" type=\"text\" name=\"seoTitle\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "seoTitle", array()), "html", null, true);
        echo "\" tabindex=\"4\">
\t\t\t\t<div class=\"help-block\"></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-seoKeyword-field\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("SEO关键字"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-seoKeyword-field\" type=\"text\" name=\"seoKeyword\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "seoKeyword", array()), "html", null, true);
        echo "\" tabindex=\"4\">
\t\t\t\t<div class=\"help-block\"></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-seoDesc-field\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("SEO描述"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-seoDesc-field\" type=\"text\" name=\"seoDesc\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "seoDesc", array()), "html", null, true);
        echo "\" tabindex=\"4\">
\t\t\t\t<div class=\"help-block\"></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-published-field\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("启用"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"controls radios col-md-8\">
\t\t\t\t<label><input id=\"category-published-field\" type=\"radio\" name=\"published\" tabindex=\"0\" value=1 ";
        // line 73
        if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "published", array()) == 1)) {
            echo "checked";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("是"), "html", null, true);
        echo "</label>
\t\t\t\t<label><input id=\"category-published-field\" type=\"radio\" name=\"published\" tabindex=\"0\" value=0 ";
        // line 74
        if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "published", array()) != 1)) {
            echo "checked";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("否"), "html", null, true);
        echo "</label>
\t\t\t\t<div class=\"help-block\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("建议等栏目内容整理编辑完毕后再启用"), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
\t</form>
\t
\t<script type=\"text/javascript\"> app.load('article/category/save-modal') </script>
";
    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        // line 85
        echo "\t";
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array())) {
            // line 86
            echo "\t\t<button type=\"button\" class=\"btn btn-default pull-left delete-category\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_category_delete", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))), "html", null, true);
            echo "\" tabindex=\"5\"><i class=\"glyphicon glyphicon-trash\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
            echo "</button>
\t";
        } else {
            // line 88
            echo "
\t";
        }
        // line 90
        echo "  \t<button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\" tabindex=\"6\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</button>
\t<button id=\"category-save-btn\" data-submiting-text=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在提交"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#category-form\" tabindex=\"4\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:ArticleCategory:modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 91,  261 => 90,  257 => 88,  249 => 86,  246 => 85,  243 => 84,  234 => 78,  228 => 75,  220 => 74,  212 => 73,  207 => 71,  198 => 65,  193 => 63,  184 => 57,  179 => 55,  170 => 49,  165 => 47,  151 => 40,  142 => 38,  137 => 36,  130 => 31,  105 => 29,  101 => 28,  97 => 27,  93 => 26,  88 => 24,  80 => 19,  74 => 18,  69 => 16,  61 => 11,  56 => 9,  46 => 7,  43 => 6,  33 => 4,  29 => 1,  27 => 3,  11 => 1,);
    }
}
