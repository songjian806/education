<?php

/* TopxiaWebBundle:Article/Widget:tag-sidebar.html.twig */
class __TwigTemplate_6a71c59b81ae15e53349248dd9e6f1dc3d17e45b93a2ca1932e7168c2550c94d extends Twig_Template
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
        $context["tags"] = $this->env->getExtension('topxia_data_twig')->getData("Tags", array("count" => 12));
        // line 2
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 3
            echo "  <div class=\"panel panel-default hot-tag\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\"><i class=\"es-icon es-icon-loyalty\"></i>";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("热门标签"), "html", null, true);
            echo "</h3>
    </div>
    <div class=\"panel-body\">
      ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 9
                echo "        ";
                if ($context["tag"]) {
                    // line 10
                    echo "          <a class=\"btn-tag\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_tag_show", array("name" => $this->getAttribute($context["tag"], "name", array()))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                    echo "</a>
        ";
                }
                // line 12
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Widget:tag-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  48 => 12,  40 => 10,  37 => 9,  33 => 8,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
