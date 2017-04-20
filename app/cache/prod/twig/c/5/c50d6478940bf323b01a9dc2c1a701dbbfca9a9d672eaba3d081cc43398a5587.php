<?php

/* TopxiaAdminBundle:OpenCourse:index.html.twig */
class __TwigTemplate_c50d6478940bf323b01a9dc2c1a701dbbfca9a9d672eaba3d081cc43398a5587 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:OpenCourse:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_open_course";
        // line 5
        $context["script_controller"] = "course/manage";
        // line 7
        $context["script_arguments"] = array("tagMatchUrl" => $this->env->getExtension('routing')->getPath("tag_match"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:OpenCourse:course-search-form.html.twig", "TopxiaAdminBundle:OpenCourse:index.html.twig", 12)->display(array_merge($context, array("actionUrl" => $this->env->getExtension('routing')->getPath("admin_open_course"), "showStatusSelect" => 1)));
        // line 13
        echo "  
  ";
        // line 14
        if (( !$this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled", 0) || (($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled", 0) && ($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_live_play_one_day") == "off")) && ($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_live_play_one_hour") == "off")))) {
            // line 15
            echo "    <div class=\"alert alert-warning\">尚未开启云短信的直播通知开关，开启后直播公开课将支持短信提醒功能&nbsp;&nbsp;";
            if (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
                echo "<a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_edu_cloud_sms");
                echo "\">去开启</a>";
            }
            echo "</div>
  ";
        }
        // line 17
        echo "
  <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
    <thead>
    <tr>
      <th>编号</th>
      <th width=\"49%\">名称</th>      
      <th>状态</th>
      <th>创建者</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 30
            echo "        ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array"), null)) : (null));
            // line 31
            echo "        ";
            $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array"), null)) : (null));
            // line 32
            echo "        ";
            $this->loadTemplate("TopxiaAdminBundle:OpenCourse:tr.html.twig", "TopxiaAdminBundle:OpenCourse:index.html.twig", 32)->display($context);
            // line 33
            echo "      ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 34
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无课程记录</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </tbody>
  </table>

  ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OpenCourse:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 39,  117 => 36,  110 => 34,  97 => 33,  94 => 32,  91 => 31,  88 => 30,  70 => 29,  56 => 17,  46 => 15,  44 => 14,  41 => 13,  38 => 12,  35 => 11,  31 => 1,  29 => 7,  27 => 5,  25 => 3,  11 => 1,);
    }
}
