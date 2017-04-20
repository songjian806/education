<?php

/* TopxiaWebBundle:Course:Part/normal-sidebar-students.html.twig */
class __TwigTemplate_717e9efc073b63b96570a3ccb6c4cce48ba6b1d21a1b3224c84bad329a56a928 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-sidebar-students.html.twig", 1);
        // line 2
        echo "
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    ";
        // line 8
        echo "    <h3 class=\"panel-title\">
      <i class=\"es-icon es-icon-personadd\"></i>
      ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新学员"), "html", null, true);
        echo "
    </h3>
  </div>
  <div class=\"panel-body\">
    ";
        // line 14
        if ((isset($context["students"]) ? $context["students"] : null)) {
            // line 15
            echo "      <ul class=\"user-avatar-list clearfix\">
        ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["members"]) ? $context["members"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 17
                echo "        ";
                $context["student"] = $this->getAttribute((isset($context["students"]) ? $context["students"] : null), $this->getAttribute($context["member"], "userId", array()), array(), "array");
                // line 18
                echo "          <li>
            ";
                // line 19
                echo $context["web_macro"]->getuser_avatar((isset($context["student"]) ? $context["student"] : null), "", "avatar-sm");
                echo "
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "      </ul>
    ";
        } else {
            // line 24
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无学员"), "html", null, true);
            echo "</div>
    ";
        }
        // line 26
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-sidebar-students.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 26,  65 => 24,  61 => 22,  52 => 19,  49 => 18,  46 => 17,  42 => 16,  39 => 15,  37 => 14,  30 => 10,  26 => 8,  21 => 2,  19 => 1,);
    }
}
