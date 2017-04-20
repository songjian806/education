<?php

/* TopxiaWebBundle:OpenCourse:open-course-teacher-block.html.twig */
class __TwigTemplate_a0d9a24007228c4c699994921226bb81d99536506c9dc0dd0a261bf87ebd5ff6 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:OpenCourse:open-course-teacher-block.html.twig", 1);
        // line 2
        echo "
<div class=\"open-course-teacher panel panel-default\">
  <div class=\"panel-heading\"> 
    <h3 class=\"panel-title\">
      ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程教师"), "html", null, true);
        echo "
    </h3>
  </div>
  <div class=\"panel-body text-center\">
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            if ($context["teacher"]) {
                // line 11
                echo "      ";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    // line 12
                    echo "        ";
                    $context["userProfile"] = (($this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : null), $this->getAttribute($context["teacher"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : null), $this->getAttribute($context["teacher"], "id", array()), array(), "array"), null)) : (null));
                    // line 13
                    echo "        ";
                    echo $context["web_macro"]->getuser_avatar($context["teacher"], "", "avatar-lg");
                    echo "
        <h4 class=\"mtl\">";
                    // line 14
                    echo $context["web_macro"]->getuser_link($context["teacher"], "", false);
                    echo "</h4>
        <p class=\"color-gray\">";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "title", array()), "html", null, true);
                    echo "</p>
        <div class=\"intro\">
          ";
                    // line 17
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter((($this->getAttribute((isset($context["userProfile"]) ? $context["userProfile"] : null), "about", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userProfile"]) ? $context["userProfile"] : null), "about", array()), null)) : (null)), 55);
                    echo "
        </div>
      ";
                }
                // line 20
                echo "    ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 21
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无教师"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:OpenCourse:open-course-teacher-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  81 => 21,  72 => 20,  66 => 17,  61 => 15,  57 => 14,  52 => 13,  49 => 12,  46 => 11,  34 => 10,  27 => 6,  21 => 2,  19 => 1,);
    }
}
