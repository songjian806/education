<?php

/* TopxiaAdminBundle:Article:index.html.twig */
class __TwigTemplate_d9f167e31dee0e4d496485646234931dfc533b2d55064bc0468891ca9d74dd92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Article:index.html.twig", 1);
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
        $context["script_controller"] = "article/list";
        // line 5
        $context["menu"] = "admin_operation_article_manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<form class=\"well well-sm form-inline\" action=\"";
        echo $this->env->getExtension('routing')->getPath("admin_article");
        echo "\">

     ";
        // line 10
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:Article:index.html.twig", 10)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 11
        echo "     
  <div class=\"form-group\">
    <select style=\"width:150px;\" class=\"form-control\" name=\"categoryId\">
            <option value=\"0\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("--所属栏目--"), "html", null, true);
        echo "</option>
            ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryTree"]) ? $context["categoryTree"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tree"]) {
            // line 16
            echo "                <option value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "id", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["tree"], "id", array()) == (isset($context["categoryId"]) ? $context["categoryId"] : null))) {
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
        // line 18
        echo "    </select>
  </div>
  <div class=\"form-group\">
    <input class=\"form-control\" name=\"keywords\" type=\"text\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标题关键词"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keywords"), "method"), "html", null, true);
        echo "\">
  </div>
  <div class=\"form-group\">
    <select class=\"form-control\" name=\"property\">
      ";
        // line 25
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("articleProperty"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "property"), "method"), $this->env->getExtension('translator')->trans("--属性--"));
        echo "
    </select>
  </div>
  <div class=\"form-group\">
    <select class=\"form-control\" name=\"status\">
      ";
        // line 30
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("articleStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), $this->env->getExtension('translator')->trans("--发布状态--"));
        echo "
    </select>
  </div>
  <button class=\"btn btn-primary\" type=\"submit\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "</button>
</form>

<div id=\"aticle-table-container\">

  <table class=\"table table-hover table-striped\" id=\"article-table\">
    <thead>
      <tr>
        <th><input type=\"checkbox\"  data-role=\"batch-select\" id=\"batch-select\"> ID</th>
        <th width=\"25%\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("资讯标题"), "html", null, true);
        echo "</th>
        ";
        // line 43
        $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:Article:index.html.twig", 43)->display($context);
        // line 44
        echo "        <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("栏目"), "html", null, true);
        echo "</th>
        <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更新时间"), "html", null, true);
        echo "</th>
        <th>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("属性"), "html", null, true);
        echo "
          <a class=\"glyphicon glyphicon-question-sign text-muted pull-center \" id=\"article-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\"></a>
          <div id=\"article-property-tips-html\" style=\"display:none;\">
          \t";
        // line 49
        echo $this->env->getExtension('translator')->trans("资讯属性Tooltip");
        echo "
          </div>
        </th>
        <th>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("状态"), "html", null, true);
        echo "</th>
        <th width=\"10%\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 57
        if ((isset($context["articles"]) ? $context["articles"] : null)) {
            // line 58
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 59
                echo "          ";
                $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["article"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["article"], "categoryId", array()), array(), "array"), null)) : (null));
                // line 60
                echo "          ";
                $this->loadTemplate("TopxiaAdminBundle:Article:article-tr.html.twig", "TopxiaAdminBundle:Article:index.html.twig", 60)->display($context);
                // line 61
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "      ";
        } else {
            // line 63
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无页面记录"), "html", null, true);
            echo "</div></td></tr>
      ";
        }
        // line 65
        echo "    </tbody>
  </table>
  <div>
    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全选"), "html", null, true);
        echo "</label>
    <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("资讯"), "html", null, true);
        echo "\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_article_delete");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "</button>
    ";
        // line 70
        $this->loadTemplate("OrgBundle:Org:batch-update-org-btn.html.twig", "TopxiaAdminBundle:Article:index.html.twig", 70)->display(array_merge($context, array("module" => "article", "formId" => "article-table", "generate" => "no-generate")));
        // line 71
        echo "  </div>
</div>

";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 74,  228 => 71,  226 => 70,  218 => 69,  214 => 68,  209 => 65,  203 => 63,  200 => 62,  186 => 61,  183 => 60,  180 => 59,  162 => 58,  160 => 57,  153 => 53,  149 => 52,  143 => 49,  137 => 46,  133 => 45,  128 => 44,  126 => 43,  122 => 42,  110 => 33,  104 => 30,  96 => 25,  87 => 21,  82 => 18,  57 => 16,  53 => 15,  49 => 14,  44 => 11,  42 => 10,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
