<?php

/* TopxiaWebBundle:My:avatar-alert.html.twig */
class __TwigTemplate_a0e1bf384550f29be8122cf8ed2d02f552068744533348fbb620bd736ab8a14a extends Twig_Template
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
        if ((isset($context["avatarAlert"]) ? $context["avatarAlert"] : null)) {
            // line 2
            echo " <div class=\"alert alert-warning alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    <strong>";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您还没有头像"), "html", null, true);
            echo "</strong>。";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("拥有一个独有的头像，老师和同学们能更容易关注到你哦"), "html", null, true);
            echo "～～ <a href=\"";
            echo $this->env->getExtension('routing')->getPath("settings_avatar");
            echo "\" class=\"alert-link\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("点击设置"), "html", null, true);
            echo "</a>
 </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:My:avatar-alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }
}
