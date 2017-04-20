<?php

/* OrgBundle:Org:batch-update-org-btn.html.twig */
class __TwigTemplate_3f91e4064dcf607c87b5be91b7f8a9863a317f756217da826824f61acbc208ec extends Twig_Template
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
            echo "\t";
            $this->env->getExtension('topxia_web_twig')->loadScript("orgbundle/controller/org/batch-org-btn");
            // line 3
            echo "\t";
            $context["generate"] = (((array_key_exists("generate", $context)) ? (_twig_default_filter((isset($context["generate"]) ? $context["generate"] : null), "generate")) : ("generate")) != "no-generate");
            // line 4
            echo "\t";
            if ((isset($context["generate"]) ? $context["generate"] : null)) {
                // line 5
                echo "\t\t<div>
\t    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全选"), "html", null, true);
                echo "</label>
\t";
            }
            // line 8
            echo "  \t<a class=\"btn btn-default btn-sm ";
            if ((isset($context["generate"]) ? $context["generate"] : null)) {
                echo " mlm ";
            }
            echo "\" id=\"batch-update-org\" data-form-id=\"";
            echo twig_escape_filter($this->env, (isset($context["formId"]) ? $context["formId"] : null), "html", null, true);
            echo "\" data-toggle=\"modal\" data-generate=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("generate", $context)) ? (_twig_default_filter((isset($context["generate"]) ? $context["generate"] : null), false)) : (false)), "html", null, true);
            echo "\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_batch_update_org", array("module" => (isset($context["module"]) ? $context["module"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置组织机构"), "html", null, true);
            echo "</a>
\t";
            // line 9
            if ((isset($context["generate"]) ? $context["generate"] : null)) {
                // line 10
                echo "\t  </div>
\t";
            }
            // line 12
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OrgBundle:Org:batch-update-org-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  55 => 10,  53 => 9,  38 => 8,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
