<?php

/* TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig */
class __TwigTemplate_288e04454d3813248bc0f5ab35896fe0702add824dc66f023290bf07274521ed extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $asm89CacheStrategy9 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key9 = $asm89CacheStrategy9->generateKey((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "/sidebar/statuses"), 600        );
        $asm89CacheBody9 = $asm89CacheStrategy9->fetchBlock($asm89Key9);
        if ($asm89CacheBody9 === false) {
            ob_start();
                // line 4
                echo "
";
                // line 5
                $context["learns"] = $this->env->getExtension('topxia_data_twig')->getData("LatestStatuses", array("count" => 5, "mode" => "simple", "objectType" => "course", "objectId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())));
                // line 6
                echo "
";
                // line 7
                $this->loadTemplate("TopxiaWebBundle:Status:status-block.html.twig", "TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig", 7)->display($context);
                // line 8
                echo "
";
            
            $asm89CacheBody9 = ob_get_clean();
            $asm89CacheStrategy9->saveBlock($asm89Key9, $asm89CacheBody9);
        }
        echo $asm89CacheBody9;
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  38 => 7,  35 => 6,  33 => 5,  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
