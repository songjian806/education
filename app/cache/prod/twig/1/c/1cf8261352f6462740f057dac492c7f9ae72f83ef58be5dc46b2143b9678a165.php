<?php

/* OrgBundle:Org/Parts:table-thead-tr.html.twig */
class __TwigTemplate_1cf8261352f6462740f057dac492c7f9ae72f83ef58be5dc46b2143b9678a165 extends Twig_Template
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
            echo "\t<th width=\"15%\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所属组织机构"), "html", null, true);
            echo "</th>
";
        }
    }

    public function getTemplateName()
    {
        return "OrgBundle:Org/Parts:table-thead-tr.html.twig";
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
