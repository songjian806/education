<?php

/* TopxiaWebBundle:MyTeaching:course-tab.html.twig */
class __TwigTemplate_add6bd5f9a9b70238b1b524af9c7722422af6068d89796e5992eb2033e3acaa3 extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs\">

\t<li class=\"";
        // line 3
        if (((isset($context["filter"]) ? $context["filter"] : null) == "normal")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_teaching_courses", array("filter" => "normal"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("普通课程"), "html", null, true);
        echo "</a></li>
\t<li class=\"";
        // line 4
        if (((isset($context["filter"]) ? $context["filter"] : null) == "live")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_teaching_courses", array("filter" => "live"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播课程"), "html", null, true);
        echo "</a></li>

\t<li class=\"";
        // line 6
        if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_teaching_courses", array("filter" => "classroom"));
        echo "\">";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程"), "html", null, true);
        echo "</a></li>

\t<li class=\"";
        // line 8
        if (((isset($context["filter"]) ? $context["filter"] : null) == "open")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_teaching_open_courses", array("filter" => "open"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("录播公开课"), "html", null, true);
        echo "</a></li>
\t<li class=\"";
        // line 9
        if (((isset($context["filter"]) ? $context["filter"] : null) == "liveOpen")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_teaching_open_courses", array("filter" => "liveOpen"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播公开课"), "html", null, true);
        echo "</a></li>

</ul>
<br>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyTeaching:course-tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  56 => 8,  44 => 6,  33 => 4,  23 => 3,  19 => 1,);
    }
}
