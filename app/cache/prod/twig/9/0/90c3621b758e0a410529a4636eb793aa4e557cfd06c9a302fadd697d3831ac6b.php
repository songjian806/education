<?php

/* TopxiaAdminBundle:EduCloud:cloud-live.html.twig */
class __TwigTemplate_90c3621b758e0a410529a4636eb793aa4e557cfd06c9a302fadd697d3831ac6b extends Twig_Template
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
        echo "              <div class=\"col-md-6\">
                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\" >
                    <h3 class=\"panel-title\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云直播状态"), "html", null, true);
        echo "</h3>
                  </div>
                  <div class=\"panel-body\" style=\"height: 250px;padding:40px\">
                  <!-- ";
        // line 7
        if (((array_key_exists("liveInfo", $context)) ? (_twig_default_filter((isset($context["liveInfo"]) ? $context["liveInfo"] : null), 0)) : (0))) {
            // line 8
            echo "
                  ";
        } else {
            // line 10
            echo "                  <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_cloud_buy", array("type" => "live"));
            echo "\" target=\"_blank\">购买</a>云直播服务，轻松创建直播课堂
                  ";
        }
        // line 11
        echo " -->
                    ";
        // line 14
        echo "
                  <!-- <h4 class=\"eduyun-title\">云直播
                    ";
        // line 17
        echo "                  </h4> -->
                   <!--未购买-->
                    ";
        // line 19
        if (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "live", array(), "any", false, true), "enableBuy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "live", array(), "any", false, true), "enableBuy", array()), 0)) : (0)) != 1)) {
            // line 20
            echo "                      <div class=\"edu-verticalmiddle\">
                        <div class=\"edu-verticalmiddle-content text-muted\"><i class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></i><a class=\"mhm\" href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("admin_cloud_live", array("type" => "live"));
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买"), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云直播服务，轻松创建直播课堂"), "html", null, true);
            echo "</div> 
                      </div>
                    ";
        } else {
            // line 24
            echo "                      <p class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("教室容量："), "html", null, true);
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "live", array(), "any", false, true), "capacity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "live", array(), "any", false, true), "capacity", array()), 0)) : (0)), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("人/月"), "html", null, true);
            echo "    
                        <a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("admin_cloud_buy", array("type" => "live"));
            echo "\" target=\"_blank\" style=\"margin-left:20px;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("续费"), "html", null, true);
            echo "</a>
                      </p>
                      ";
            // line 27
            if (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "live", array(), "any", false, true), "expire", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array(), "any", false, true), "live", array(), "any", false, true), "expire", array()), 0)) : (0)) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array()), "live", array()), "expire", array()) > 0))) {
                // line 28
                echo "                        <p class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("有效期至："), "html", null, true);
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array()), "live", array()), "expire", array()), "Y-m-d"), "html", null, true);
                echo "</p>
                        ";
                // line 29
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array()), "live", array()), "remaining", array()) > 0) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array()), "live", array()), "remaining", array()) < 30))) {
                    // line 30
                    echo "                          <p class=\"text-warning text-sm\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的云直播服务将于%remaining%天后到期，请尽快续费", array("%remaining%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "service", array()), "live", array()), "remaining", array()))), "html", null, true);
                    echo "</p>
                        ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 31
(isset($context["overview"]) ? $context["overview"] : null), "service", array()), "live", array()), "remaining", array()) <= 0)) {
                    // line 32
                    echo "                          <p class=\"text-danger text-sm\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的云直播服务已到期，请尽快续费"), "html", null, true);
                    echo "</p>
                        ";
                }
                // line 34
                echo "                      ";
            }
            // line 35
            echo "                    ";
        }
        // line 36
        echo "                  </div>
                </div>
              </div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:cloud-live.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 36,  108 => 35,  105 => 34,  99 => 32,  97 => 31,  92 => 30,  90 => 29,  84 => 28,  82 => 27,  75 => 25,  68 => 24,  58 => 21,  55 => 20,  53 => 19,  49 => 17,  45 => 14,  42 => 11,  36 => 10,  32 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
