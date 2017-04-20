<?php

/* TopxiaWebBundle:Default:friend-link.html.twig */
class __TwigTemplate_ce75cf5c128960355bd5e160e5e947e1c1128fd2323e79887507946df0bd5bb3 extends Twig_Template
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
        if ((isset($context["friendlyLinks"]) ? $context["friendlyLinks"] : null)) {
            // line 2
            echo "<div class=\"es-friend-link\">
  <div class=\"container\">
    <div class=\"title\">";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("友情链接："), "html", null, true);
            echo "</div>
    <ul>
      ";
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["friendlyLinks"]) ? $context["friendlyLinks"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["friendLink"]) {
                // line 7
                echo "      <li><a class=\"link-dark text-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friendLink"], "url", array()), "html", null, true);
                echo "\" ";
                if ($this->getAttribute($context["friendLink"], "isNewWin", array())) {
                    echo "target=\"_blank\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friendLink"], "name", array()), "html", null, true);
                echo "</a></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friendLink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "    </ul>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:friend-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  34 => 7,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
