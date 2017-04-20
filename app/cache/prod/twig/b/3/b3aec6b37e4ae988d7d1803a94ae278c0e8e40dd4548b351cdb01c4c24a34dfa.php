<?php

/* TopxiaWebBundle:Course:Part/normal-header-layout.html.twig */
class __TwigTemplate_b3aec6b37e4ae988d7d1803a94ae278c0e8e40dd4548b351cdb01c4c24a34dfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'before_content' => array($this, 'block_before_content'),
            'content' => array($this, 'block_content'),
            'after_content' => array($this, 'block_after_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section class=\"course-detail-header ";
        echo twig_escape_filter($this->env, ((array_key_exists("layoutClass", $context)) ? (_twig_default_filter((isset($context["layoutClass"]) ? $context["layoutClass"] : null), "")) : ("")), "html", null, true);
        echo "\">
  <div class=\"container\">

    ";
        // line 4
        $this->displayBlock('before_content', $context, $blocks);
        // line 5
        echo "
    <div class=\"es-section clearfix\">
      ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "
      ";
        // line 9
        if ((((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()), "")) : ("")) == "teacher") || $this->env->getExtension('permission.permission_extension')->hasPermission("admin_course_content_manage"))) {
            // line 10
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default setting hidden-xs hidden-sm\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程管理"), "html", null, true);
            echo "\">
          <i class=\"es-icon es-icon-setting\"></i>
        </a>
      ";
        }
        // line 14
        echo "      
      ";
        // line 15
        if (((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : null), false)) : (false))) {
            // line 16
            echo "        ";
            if (((( !(($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array()), false)) : (false)) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) == "student")) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "joinedType", array()) == "course")) &&  !$this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array()))) {
                // line 17
                echo "          ";
                if ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "orderId", array())) {
                    // line 18
                    echo "            <a href=\"#modal\" class=\"btn btn-default setting hidden-xs hidden-sm\" data-toggle=\"modal\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_refund", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                    echo "\">
              <i class=\"es-icon es-icon-exit\"></i>
            </a>
          ";
                } else {
                    // line 22
                    echo "            <a id=\"exit-course-learning\" class=\"course-exit-btn btn btn-default setting hidden-xs hidden-sm\" href=\"javascript:;\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\"  data-goto=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) != "student")) {
                        echo " disabled ";
                    }
                    echo ">
              <i class=\"es-icon es-icon-exit\"></i>
            </a>
          ";
                }
                // line 26
                echo "        ";
            } elseif (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "joinedType", array(), "array") == "groupSell")) {
                // line 27
                echo "          <a class=\"btn btn-default setting hidden-xs hidden-sm\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("组合购买课程不能退出"), "html", null, true);
                echo "\">
            <i class=\"hz-icon icon-exit\"></i>
          </a>
        ";
            }
            // line 31
            echo "      ";
        }
        // line 32
        echo "    </div>
  </div>
</section>

";
        // line 36
        $this->displayBlock('after_content', $context, $blocks);
        // line 37
        echo "

";
    }

    // line 4
    public function block_before_content($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
    }

    // line 36
    public function block_after_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 36,  118 => 7,  113 => 4,  107 => 37,  105 => 36,  99 => 32,  96 => 31,  88 => 27,  85 => 26,  71 => 22,  63 => 18,  60 => 17,  57 => 16,  55 => 15,  52 => 14,  42 => 10,  40 => 9,  37 => 8,  35 => 7,  31 => 5,  29 => 4,  22 => 1,);
    }
}
