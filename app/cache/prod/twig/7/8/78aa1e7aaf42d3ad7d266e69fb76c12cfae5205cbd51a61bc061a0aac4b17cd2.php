<?php

/* PermissionBundle:Templates:macro.html.twig */
class __TwigTemplate_78aa1e7aaf42d3ad7d266e69fb76c12cfae5205cbd51a61bc061a0aac4b17cd2 extends Twig_Template
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
        echo "
";
    }

    // line 2
    public function getmenu_link_html($___context__ = null, $__menu__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "_context" => $___context__,
            "menu" => $__menu__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "  <a 
    title=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "name", array()), "html", null, true);
            echo "\"
  ";
            // line 5
            if ((isset($context["class"]) ? $context["class"] : null)) {
                // line 6
                echo "    class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\"
  ";
            }
            // line 8
            echo "
  ";
            // line 9
            if (((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "modal")) {
                // line 10
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('permission.permission_extension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : null)), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
    href=\"#modal\"
  ";
            } elseif (((($this->getAttribute(            // line 14
(isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "none")) {
                // line 15
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('permission.permission_extension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : null)), "html", null, true);
                echo "\"
    href=\"javascript:;\"
  ";
            } else {
                // line 18
                echo "    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('permission.permission_extension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : null)), "html", null, true);
                echo "\"
  ";
            }
            // line 20
            echo "  
  ";
            // line 21
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array()), false)) : (false))) {
                // line 22
                echo "    target=\"blank\"
  ";
            }
            // line 24
            echo "  >
  ";
            // line 25
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "icon", array()), false)) : (false))) {
                echo "<span class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "icon", array()), "html", null, true);
                echo "\"></span>";
            }
            echo " 
    ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "name", array()), "html", null, true);
            echo "
  </a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PermissionBundle:Templates:macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 26,  93 => 25,  90 => 24,  86 => 22,  84 => 21,  81 => 20,  75 => 18,  68 => 15,  66 => 14,  58 => 10,  56 => 9,  53 => 8,  47 => 6,  45 => 5,  41 => 4,  38 => 3,  24 => 2,  19 => 1,);
    }
}
