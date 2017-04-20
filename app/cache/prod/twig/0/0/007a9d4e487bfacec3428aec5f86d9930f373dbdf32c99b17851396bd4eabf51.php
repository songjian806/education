<?php

/* PermissionBundle:Templates:navigation.html.twig */
class __TwigTemplate_007a9d4e487bfacec3428aec5f86d9930f373dbdf32c99b17851396bd4eabf51 extends Twig_Template
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
        echo "\\";
        $context["permissions"] = $this->env->getExtension('permission.permission_extension')->getSubPermissions((isset($context["parentCode"]) ? $context["parentCode"] : null));
        // line 2
        echo "
";
        // line 3
        if (((array_key_exists("permissions", $context)) ? (_twig_default_filter((isset($context["permissions"]) ? $context["permissions"] : null), null)) : (null))) {
            // line 4
            echo "  ";
            if (((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : null), null)) : (null))) {
                // line 5
                echo "    ";
                $context["rootMenu"] = $this->env->getExtension('permission.permission_extension')->getParentPermission($this->getAttribute($this->env->getExtension('permission.permission_extension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : null)), "code", array()));
                // line 6
                echo "  ";
            } else {
                // line 7
                echo "    ";
                $context["rootMenu"] = $this->env->getExtension('permission.permission_extension')->getPermissionByCode("admin");
                // line 8
                echo "  ";
            }
            // line 9
            echo "
  <ul class=\"nav navbar-nav\">
    ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                if (( !$this->getAttribute($context["m"], "visable", array(), "any", true, true) || $this->env->getExtension('permission.permission_extension')->evalExpression($this->env, $context, $this->getAttribute($context["m"], "visable", array())))) {
                    // line 12
                    echo "      ";
                    // line 13
                    echo "      <li ";
                    if (((isset($context["menu"]) ? $context["menu"] : null) && ($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute((isset($context["rootMenu"]) ? $context["rootMenu"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["rootMenu"]) ? $context["rootMenu"] : null), "code", array()), null)) : (null))))) {
                        echo "class=\"active\"";
                    }
                    echo ">

        ";
                    // line 15
                    $context["tabMenu"] = $this->env->getExtension('permission.permission_extension')->getFirstChild($this->env->getExtension('permission.permission_extension')->getFirstChild($context["m"]));
                    // line 16
                    echo "        ";
                    if (((($this->getAttribute((isset($context["tabMenu"]) ? $context["tabMenu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tabMenu"]) ? $context["tabMenu"] : null), "mode", array()), "")) : ("")) == "capsules")) {
                        // line 17
                        echo "          ";
                        $context["tabMenu"] = $this->env->getExtension('permission.permission_extension')->getFirstChild((isset($context["tabMenu"]) ? $context["tabMenu"] : null));
                        // line 18
                        echo "        ";
                    }
                    // line 19
                    echo "        <a
            title=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                    echo "\"
            href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->env->getExtension('permission.permission_extension')->getPermissionPath($this->env, $context, (isset($context["tabMenu"]) ? $context["tabMenu"] : null)), "html", null, true);
                    echo "\"
        >
          ";
                    // line 23
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                    echo "
        </a>

        ";
                    // line 27
                    echo "      </li>
      ";
                    // line 29
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "PermissionBundle:Templates:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  93 => 29,  90 => 27,  84 => 23,  79 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  61 => 15,  53 => 13,  51 => 12,  46 => 11,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
