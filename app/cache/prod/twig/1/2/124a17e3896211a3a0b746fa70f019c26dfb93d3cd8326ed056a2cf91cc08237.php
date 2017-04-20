<?php

/* ClassroomBundle:Classroom:content-layout.html.twig */
class __TwigTemplate_124a17e3896211a3a0b746fa70f019c26dfb93d3cd8326ed056a2cf91cc08237 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
            'side' => array($this, 'block_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "ClassroomBundle:Classroom:layout.html.twig")) : ("ClassroomBundle:Classroom:layout.html.twig")), "ClassroomBundle:Classroom:content-layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_keywords($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:keywords", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("GroupSell") &&  !(isset($context["member"]) ? $context["member"] : null))) {
            // line 9
            echo "  ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GroupSellBundle:GroupSell:showGroup", array("type" => "classroom", "targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
            echo "
";
        }
        // line 11
        echo "
<div class=\"class-detail row\" id=\"detail-content\">
  <div class=\"col-lg-9 col-md-8 class-detail-main\">

    ";
        // line 15
        $this->loadTemplate("TopxiaWebBundle:Announcement:announcement-block.html.twig", "ClassroomBundle:Classroom:content-layout.html.twig", 15)->display(array_merge($context, array("targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")));
        // line 16
        echo "
    <section class=\"es-section\">
      ";
        // line 18
        if (array_key_exists("nav", $context)) {
            // line 19
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:dashboard", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null), "nav" => (isset($context["nav"]) ? $context["nav"] : null), "member" => (isset($context["member"]) ? $context["member"] : null))));
            echo "
      ";
        }
        // line 21
        echo "      <div class=\"class-detail-content\">
        ";
        // line 22
        $this->displayBlock('main', $context, $blocks);
        // line 24
        echo "      </div>
    </section>
  </div>

  <aside class=\"col-lg-3 col-md-4 class-sidebar\">
    ";
        // line 29
        $this->displayBlock('side', $context, $blocks);
        // line 45
        echo "  </aside>

  ";
        // line 47
        if ( !((array_key_exists("canLook", $context)) ? (_twig_default_filter((isset($context["canLook"]) ? $context["canLook"] : null), false)) : (false))) {
            // line 48
            echo "    <input type=\"hidden\" name=\"access-intercept-check\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_canview", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">
    ";
            // line 49
            $this->loadTemplate("ClassroomBundle:ClassroomThread:access-intercept-modal.html.twig", "ClassroomBundle:Classroom:content-layout.html.twig", 49)->display($context);
            // line 50
            echo "  ";
        }
        // line 51
        echo "</div>

  ";
        // line 53
        $this->loadTemplate("TopxiaWebBundle:Common:weixin-share.html.twig", "ClassroomBundle:Classroom:content-layout.html.twig", 53)->display(array_merge($context, array("title" => $this->getAttribute(        // line 54
(isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "desc" => $this->env->getExtension('topxia_web_twig')->getPurifyAndTrimHtml(strip_tags($this->getAttribute(        // line 55
(isset($context["classroom"]) ? $context["classroom"] : null), "about", array()))), "link" => $this->getAttribute($this->getAttribute(        // line 56
(isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "imgUrl" => $this->env->getExtension('topxia_web_twig')->getFurl($this->getAttribute(        // line 57
(isset($context["classroom"]) ? $context["classroom"] : null), "largePicture", array()), "course.png"))));
        // line 59
        echo "
";
    }

    // line 22
    public function block_main($context, array $blocks = array())
    {
        // line 23
        echo "        ";
    }

    // line 29
    public function block_side($context, array $blocks = array())
    {
        // line 30
        echo "      ";
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 31
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomPlanBundle:ClassroomPlan:todayUserTaskBlock", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
            echo "
      ";
        }
        // line 33
        echo "
      ";
        // line 34
        if ($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Take", true)) {
            // line 35
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:signPage", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
            echo "
      ";
        }
        // line 37
        echo "      
      ";
        // line 38
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:teachersBlock", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "

      ";
        // line 40
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:latestMembersBlock", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "

      ";
        // line 42
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:classroomStatusBlock", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "
      
    ";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:content-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 42,  164 => 40,  159 => 38,  156 => 37,  150 => 35,  148 => 34,  145 => 33,  139 => 31,  136 => 30,  133 => 29,  129 => 23,  126 => 22,  121 => 59,  119 => 57,  118 => 56,  117 => 55,  116 => 54,  115 => 53,  111 => 51,  108 => 50,  106 => 49,  101 => 48,  99 => 47,  95 => 45,  93 => 29,  86 => 24,  84 => 22,  81 => 21,  75 => 19,  73 => 18,  69 => 16,  67 => 15,  61 => 11,  55 => 9,  53 => 8,  50 => 7,  47 => 6,  41 => 5,  34 => 3,  31 => 2,  22 => 1,);
    }
}
