<?php

/* OrgBundle:Org/Parts:table-body-checkbox.html.twig */
class __TwigTemplate_9b4d671b6e5fe2f6127dcb5be372156bd3d7d05dcbde4c11154f221e8b0810ec extends Twig_Template
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
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "\t <td><input type=\"checkbox\"  data-role=\"batch-item\"></td>
";
        }
    }

    public function getTemplateName()
    {
        return "OrgBundle:Org/Parts:table-body-checkbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
