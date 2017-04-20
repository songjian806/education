<?php

/* TopxiaAdminBundle:EduCloud:cloud-storage.html.twig */
class __TwigTemplate_56507cc30503c197ca88b55a589c3de56cbad6e16746a3c5f434e13b769329b9 extends Twig_Template
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
        echo "<div class=\"col-md-6\">
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\" >
      <h3 class=\"panel-title\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云视频包状态"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\" style=\"height: 250px;padding:40px\">
      ";
        // line 7
        $context["bill"] = (($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "bill", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "bill", array()), null)) : (null));
        // line 8
        echo "
      <!--未购买-->
      ";
        // line 10
        if (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "storage", array(), "any", false, true), "enableBuyVideo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "storage", array(), "any", false, true), "enableBuyVideo", array()), 0)) : (0)) != 1)) {
            // line 11
            echo "        <div class=\"edu-verticalmiddle\">
          <div class=\"edu-verticalmiddle-content text-muted\"><i class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></i><a class=\"mhm\" href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("admin_cloud_buy", array("type" => "video"));
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买"), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云视频包，享受更优惠的视频托管服务"), "html", null, true);
            echo "</div> 
        </div>
      ";
        } else {
            // line 15
            echo "      <p>
        <span class=\"text-muted mrm\">";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("存储空间:"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array()), "storage", array()), "freeSpace", array()), "html", null, true);
            echo "GB</span>
        ";
            // line 17
            if ( !(($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "storage", array(), "any", false, true), "renewVideo", array(), "any", false, true), "effectiveDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "storage", array(), "any", false, true), "renewVideo", array(), "any", false, true), "effectiveDate", array()), 0)) : (0))) {
                // line 18
                echo "        <a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_cloud_video_upgrade");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("升级"), "html", null, true);
                echo "</a>
        <a href=\"";
                // line 19
                echo $this->env->getExtension('routing')->getPath("admin_cloud_video_renew");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("续费"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 21
                echo "        <span>
          ";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已续费"), "html", null, true);
                echo "（";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("将于%effectiveDate%生效", array("%effectiveDate%" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array()), "storage", array()), "renewVideo", array()), "effectiveDate", array()), "Y-n-d"))), "html", null, true);
                echo ")
        </span>
        ";
            }
            // line 25
            echo "      </p>
      <p class=\"text-muted\">";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("流量:"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array()), "storage", array()), "freeTransfer", array()), "html", null, true);
            echo "GB</p>
      ";
            // line 27
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array()), "storage", array()), "startMonth", array()) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array()), "storage", array()), "endMonth", array()))) {
                // line 28
                echo "        <p class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("服务期限:"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array()), "storage", array()), "startMonth", array()), "Y.n.d"), "html", null, true);
                echo " ~ ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array()), "storage", array()), "endMonth", array()), "Y.n.d"), "html", null, true);
                echo "
      ";
            }
            // line 30
            echo "      ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array()), "storage", array()), "remaining", array()) > 0) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array()), "storage", array()), "remaining", array()) < 30))) {
                // line 31
                echo "        <p class=\"text-danger text-sm\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的云视频包将于%remaining%天后到期，请尽快续费", array("%remaining%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array()), "storage", array()), "remaining", array()))), "html", null, true);
                echo "</p>
      ";
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 32
(isset($context["overview"]) ? $context["overview"] : null), "service", array()), "storage", array()), "remaining", array()) <= 0)) {
                // line 33
                echo "        <p class=\"text-danger text-sm\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的云视频包已到期，请尽快续费"), "html", null, true);
                echo "</p>
      ";
            }
            // line 35
            echo "

       ";
            // line 82
            echo "      ";
        }
        // line 83
        echo "      
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:cloud-storage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 83,  128 => 82,  124 => 35,  118 => 33,  116 => 32,  111 => 31,  108 => 30,  98 => 28,  96 => 27,  90 => 26,  87 => 25,  79 => 22,  76 => 21,  69 => 19,  62 => 18,  60 => 17,  54 => 16,  51 => 15,  41 => 12,  38 => 11,  36 => 10,  32 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
