<?php

/* PermissionBundle:Templates:tabs.html.twig */
class __TwigTemplate_2703d7f9e82be3198a2c30a7638c0a682f11c7eeed7a739c79680e79a01a5682 extends Twig_Template
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
        $context["tabMenus"] = $this->env->getExtension('permission.permission_extension')->getSubPermissions((($this->getAttribute($this->env->getExtension('permission.permission_extension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : null)), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('permission.permission_extension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : null)), "code", array()), null)) : (null)));
        // line 2
        if ((((array_key_exists("tabMenus", $context)) ? (_twig_default_filter((isset($context["tabMenus"]) ? $context["tabMenus"] : null), null)) : (null)) && (twig_length_filter($this->env, (isset($context["tabMenus"]) ? $context["tabMenus"] : null)) > 1))) {
            // line 3
            echo "  <ul class=\"nav nav-tabs mbm\">
    ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabMenus"]) ? $context["tabMenus"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 5
                echo "
      ";
                // line 6
                if (( !(($this->getAttribute($context["m"], "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "mode", array()), "")) : ("")) == "capsules")) {
                    // line 7
                    echo "        ";
                    $context["path"] = $this->env->getExtension('permission.permission_extension')->getPermissionPath($this->env, $context, $context["m"]);
                    // line 8
                    echo "      ";
                } else {
                    // line 9
                    echo "        ";
                    $context["path"] = $this->env->getExtension('permission.permission_extension')->getPermissionPath($this->env, $context, $this->env->getExtension('permission.permission_extension')->getFirstChild($context["m"]));
                    // line 10
                    echo "      ";
                }
                // line 11
                echo "
      <li ";
                // line 12
                if (($this->getAttribute($context["m"], "code", array()) == ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : null), null)) : (null)))) {
                    echo "class=\"active\"";
                }
                echo ">
        <a
            title=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                echo "\"
            class=\"";
                // line 15
                echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "class", array()), "")) : ("")), "html", null, true);
                echo "\"
            href=\"";
                // line 16
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo "\"
        >
          ";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                echo "
        </a>
      </li>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "  </ul>
";
        }
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "PermissionBundle:Templates:tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 25,  81 => 23,  70 => 18,  65 => 16,  61 => 15,  57 => 14,  50 => 12,  47 => 11,  44 => 10,  41 => 9,  38 => 8,  35 => 7,  33 => 6,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
