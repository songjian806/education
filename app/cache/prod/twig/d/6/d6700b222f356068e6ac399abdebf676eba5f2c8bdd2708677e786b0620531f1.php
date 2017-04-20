<?php

/* TopxiaWebBundle:Course:Part/normal-sidebar-teachers.html.twig */
class __TwigTemplate_d6700b222f356068e6ac399abdebf676eba5f2c8bdd2708677e786b0620531f1 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-sidebar-teachers.html.twig", 1);
        // line 2
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"> <i class=\"es-icon es-icon-assignmentind\"></i>
      ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("授课教师"), "html", null, true);
        echo "
    </h3>
  </div>
  <div class=\"panel-body\">
    ";
        // line 9
        if ((isset($context["teachers"]) ? $context["teachers"] : null)) {
            // line 10
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                // line 11
                echo "        <div class=\"media media-default\">
          <div class=\"media-left\">
            ";
                // line 13
                echo $context["web_macro"]->getuser_avatar($context["teacher"], "", "avatar-md");
                echo "
          </div>
          <div class=\"media-body\">
            <div class=\"title\">
              ";
                // line 17
                echo $context["web_macro"]->getuser_link($context["teacher"], "link-light");
                echo "
            </div>
            <div class=\"content\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "title", array()), "html", null, true);
                echo "</div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无教师"), "html", null, true);
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
        return "TopxiaWebBundle:Course:Part/normal-sidebar-teachers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 26,  69 => 24,  66 => 23,  56 => 19,  51 => 17,  44 => 13,  40 => 11,  35 => 10,  33 => 9,  26 => 5,  21 => 2,  19 => 1,);
    }
}
