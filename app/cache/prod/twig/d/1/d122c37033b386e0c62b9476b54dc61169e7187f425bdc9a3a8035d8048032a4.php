<?php

/* TopxiaWebBundle:Announcement:announcement-block.html.twig */
class __TwigTemplate_d122c37033b386e0c62b9476b54dc61169e7187f425bdc9a3a8035d8048032a4 extends Twig_Template
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
        // line 2
        $context["announcements"] = $this->env->getExtension('topxia_data_twig')->getData("Announcements", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "count" => 10));
        // line 3
        if ((isset($context["announcements"]) ? $context["announcements"] : null)) {
            // line 4
            echo "  <div class=\"alert alert-warning announcements aside-notice\" role=\"alert\">
    <div class=\"swiper-container\">
      <div class=\"swiper-wrapper\">
      ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["announcements"]) ? $context["announcements"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 8
                echo "        <div class=\"swiper-slide\">
          <a style=\"color:#ff5e06\" class=\"alert-link\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_show", array("id" => $this->getAttribute($context["announcement"], "id", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
                echo "\" >
          <i class=\"es-icon es-icon-infooutline\"></i>
          ";
                // line 11
                echo $this->env->getExtension('translator')->trans(_twig_default_filter($this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["announcement"], "content", array()), 40), "<span class=\"text-warning\">(请点击查看)</span>"));
                echo "</a>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "      </div>
    </div>
  </div>

  ";
            // line 18
            $this->env->getExtension('topxia_web_twig')->loadScript("announcement/announcement-swiper-slide");
            // line 19
            echo "
";
        }
        // line 21
        echo "





";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Announcement:announcement-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  60 => 19,  58 => 18,  52 => 14,  43 => 11,  38 => 9,  35 => 8,  31 => 7,  26 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
