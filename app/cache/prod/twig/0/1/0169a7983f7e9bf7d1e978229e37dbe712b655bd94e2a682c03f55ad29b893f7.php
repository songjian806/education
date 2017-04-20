<?php

/* TopxiaWebBundle:Article:recommend-articles-block.html.twig */
class __TwigTemplate_0169a7983f7e9bf7d1e978229e37dbe712b655bd94e2a682c03f55ad29b893f7 extends Twig_Template
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
        echo "<div class=\"panel panel-default recommend-article\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">
      <i class=\"es-icon es-icon-language\"></i>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("推荐资讯"), "html", null, true);
        echo "
    </h3>
  </div>
  <div class=\"panel-body\">
    ";
        // line 8
        if ((isset($context["articles"]) ? $context["articles"] : null)) {
            // line 9
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["article"]) {
                // line 10
                echo "        <div class=\"media media-number\">
          <div class=\"media-left\">
            <span class=\"num\">";
                // line 12
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</span>
          </div>
          <div class=\"media-body\">
            <a class=\"link-dark\" href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["article"], "title", array()), 20);
                echo "</a>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无推荐资讯"), "html", null, true);
            echo "</div>
    ";
        }
        // line 22
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article:recommend-articles-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  65 => 20,  62 => 19,  48 => 15,  42 => 12,  38 => 10,  33 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }
}
