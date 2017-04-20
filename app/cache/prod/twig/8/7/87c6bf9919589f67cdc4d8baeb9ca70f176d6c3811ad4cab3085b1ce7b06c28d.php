<?php

/* PermissionBundle:Templates:side-bar.html.twig */
class __TwigTemplate_87c6bf9919589f67cdc4d8baeb9ca70f176d6c3811ad4cab3085b1ce7b06c28d extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('permission.permission_extension')->groupedPermissions((($this->getAttribute($this->env->getExtension('permission.permission_extension')->getParentPermission($this->getAttribute($this->env->getExtension('permission.permission_extension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : null)), "code", array())), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('permission.permission_extension')->getParentPermission($this->getAttribute($this->env->getExtension('permission.permission_extension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : null)), "code", array())), "code", array()), null)) : (null))));
        foreach ($context['_seq'] as $context["_key"] => $context["groupedPermissions"]) {
            // line 2
            echo "  <div class=\"list-group\">
    ";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["groupedPermissions"]);
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                if (( !$this->getAttribute($context["m"], "visable", array(), "any", true, true) || ($this->getAttribute($context["m"], "visable", array(), "any", true, true) && $this->env->getExtension('permission.permission_extension')->evalExpression($this->env, $context, $this->getAttribute($context["m"], "visable", array()))))) {
                    // line 4
                    echo "      ";
                    $context["menuClass"] = ((($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute($this->env->getExtension('permission.permission_extension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : null)), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('permission.permission_extension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : null)), "code", array()), null)) : (null)))) ? ("list-group-item active") : ("list-group-item"));
                    // line 5
                    echo "
      ";
                    // line 6
                    $context["tabMenu"] = $this->env->getExtension('permission.permission_extension')->getFirstChild($context["m"]);
                    // line 7
                    echo "      ";
                    if (((($this->getAttribute((isset($context["tabMenu"]) ? $context["tabMenu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tabMenu"]) ? $context["tabMenu"] : null), "mode", array()), "")) : ("")) == "capsules")) {
                        // line 8
                        echo "        ";
                        $context["tabMenu"] = $this->env->getExtension('permission.permission_extension')->getFirstChild((isset($context["tabMenu"]) ? $context["tabMenu"] : null));
                        // line 9
                        echo "      ";
                    }
                    // line 10
                    echo "
      <a
          title=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                    echo "\"
          class=\"";
                    // line 13
                    echo twig_escape_filter($this->env, (isset($context["menuClass"]) ? $context["menuClass"] : null), "html", null, true);
                    echo "\"
          href=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->env->getExtension('permission.permission_extension')->getPermissionPath($this->env, $context, (isset($context["tabMenu"]) ? $context["tabMenu"] : null)), "html", null, true);
                    echo "\"
      >
        ";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                    echo "
      </a>
    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupedPermissions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "PermissionBundle:Templates:side-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  65 => 16,  60 => 14,  56 => 13,  52 => 12,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
