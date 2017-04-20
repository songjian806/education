<?php

/* TopxiaWebBundle:CourseLesson:lesson-data-modal.html.twig */
class __TwigTemplate_d678ec731477863e6e12f3837f265b56d6f8ca35b2e9300d34e9778667420453 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseLesson:lesson-data-modal.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["modal_class"] = "modal-lg";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时的数据"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"table-responsive\">
    <table class=\"table table-bordered\" style=\"word-break:break-all;text-align:center;\">
      <tr class=\"active\">
        <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户名"), "html", null, true);
        echo "</td>
        <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入课时时间"), "html", null, true);
        echo "</td>
        <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("完成课时时间"), "html", null, true);
        echo "</td>
        <td width=\"18%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时学习时长（分）"), "html", null, true);
        echo "</td>
        <td width=\"18%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音视频时长（分）"), "html", null, true);
        echo "</td>
        <td width=\"18%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音视频学习时长（分）"), "html", null, true);
        echo "</td>
        <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最近考试得分"), "html", null, true);
        echo "</td>
      </tr>
      ";
        // line 16
        if ((isset($context["students"]) ? $context["students"] : null)) {
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 18
                echo "          <tr>
            <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "nickname", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 20
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "startTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
            <td>";
                // line 21
                if ($this->getAttribute($context["student"], "finishedTime", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "finishedTime", array()), "Y-m-d H:i:s"), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
            <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["student"], "learnTime", array()) / 60), 0, "floor"), "html", null, true);
                echo "</td>
            <td>
              ";
                // line 24
                if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "live"))) {
                    // line 25
                    echo "                ----
              ";
                } else {
                    // line 27
                    echo "                ";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "length", array()), "----")) : ("----")), "html", null, true);
                    echo "
              ";
                }
                // line 29
                echo "            </td>
            <td>";
                // line 30
                if ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video") || ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "audio"))) {
                    echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["student"], "watchTime", array()) / 60), 0, "floor"), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
            <td>";
                // line 31
                if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "testpaper")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "result", array()), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "      ";
        }
        // line 35
        echo "

    </table>
    <nav class=\"text-center\">
      ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </nav>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson:lesson-data-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 39,  146 => 35,  143 => 34,  130 => 31,  122 => 30,  119 => 29,  113 => 27,  109 => 25,  107 => 24,  102 => 22,  94 => 21,  90 => 20,  86 => 19,  83 => 18,  78 => 17,  76 => 16,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  42 => 5,  39 => 4,  32 => 3,  28 => 2,  26 => 1,  11 => 2,);
    }
}
