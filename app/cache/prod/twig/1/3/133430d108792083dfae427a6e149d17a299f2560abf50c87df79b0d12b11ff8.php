<?php

/* TopxiaWebBundle:CourseManage:learning-data.html.twig */
class __TwigTemplate_133430d108792083dfae427a6e149d17a299f2560abf50c87df79b0d12b11ff8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:learning-data.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "course_manage_data";
        // line 6
        $context["script_controller"] = "course-manage/manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程学习数据"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col course-data\">
    <div class=\"panel-heading\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程学习数据"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
      <div class=\"table-responsive\">
        <table class=\"table table-bordered\" id=\"learning-data-table\" style=\"word-break:break-all;text-align:center;\">
          <tr class=\"active\">
            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程名"), "html", null, true);
        echo "</td>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程学习人数"), "html", null, true);
        echo "</td>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程完成人数"), "html", null, true);
        echo "</td>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程平均学习时长(分)"), "html", null, true);
        echo "</td>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程提问总数"), "html", null, true);
        echo "</td>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程笔记总数"), "html", null, true);
        echo "</td>
            <td>----</td>
            ";
        // line 24
        echo "          </tr>
          <tr>
            <td><a data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_detail_data", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" href=\"javascript:\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</a></td>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["isLearnedNum"]) ? $context["isLearnedNum"] : null), "html", null, true);
        echo "</td>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_round(((isset($context["learnTime"]) ? $context["learnTime"] : null) / 60), 0, "floor"), "html", null, true);
        echo "</td>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["questionCount"]) ? $context["questionCount"] : null), "html", null, true);
        echo "</td>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["noteCount"]) ? $context["noteCount"] : null), "html", null, true);
        echo "</td>
            <td>----</td>
            ";
        // line 34
        echo "          </tr>
          <tr class=\"active\">
            <td width=\"35%\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时名"), "html", null, true);
        echo "</td>
            <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时学习人数"), "html", null, true);
        echo "</td>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时完成人数"), "html", null, true);
        echo "</td>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时平均学习时长(分)"), "html", null, true);
        echo "</td>
            <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音视频时长(分)"), "html", null, true);
        echo "</td>
            <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音视频平均观看时长(分)"), "html", null, true);
        echo "</td>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("测试平均得分"), "html", null, true);
        echo "</td>
         ";
        // line 44
        echo "          </tr>
          ";
        // line 45
        if ((isset($context["lessons"]) ? $context["lessons"] : null)) {
            // line 46
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) ? $context["lessons"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                // line 47
                echo "              <tr>
                <td><a data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_detail_data", array("courseId" => $this->getAttribute($context["lesson"], "courseId", array()), "lessonId" => $this->getAttribute($context["lesson"], "id", array()))), "html", null, true);
                echo "\" href=\"javascript:\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                if (($this->getAttribute($context["lesson"], "type", array()) == "text")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("（图文）"), "html", null, true);
                } elseif (($this->getAttribute($context["lesson"], "type", array()) == "video")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("（视频）"), "html", null, true);
                } elseif (($this->getAttribute($context["lesson"], "type", array()) == "audio")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("（音频）"), "html", null, true);
                } elseif (($this->getAttribute($context["lesson"], "type", array()) == "testpaper")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("（试卷）"), "html", null, true);
                } elseif (($this->getAttribute($context["lesson"], "type", array()) == "ppt")) {
                    echo "（ppt）";
                }
                echo "</a></td></td>
                <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "LearnedNum", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "finishedNum", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["lesson"], "learnTime", array()) / 60), 0, "floor"), "html", null, true);
                echo "</td>
                <td>";
                // line 52
                if ((($this->getAttribute($context["lesson"], "type", array()) == "audio") || ($this->getAttribute($context["lesson"], "type", array()) == "video"))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "length", array()), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
                <td>";
                // line 53
                if ((($this->getAttribute($context["lesson"], "mediaSource", array()) != "self") && ($this->getAttribute($context["lesson"], "type", array()) == "video"))) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("无"), "html", null, true);
                } elseif ((($this->getAttribute($context["lesson"], "type", array()) == "audio") || ($this->getAttribute($context["lesson"], "type", array()) == "video"))) {
                    echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["lesson"], "watchTime", array()) / 60), 0, "floor"), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
                <td>";
                // line 54
                if (($this->getAttribute($context["lesson"], "type", array()) == "testpaper")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "score", array()), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
                ";
                // line 56
                echo "              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "          ";
        }
        // line 59
        echo "        </table>
        <p class=\"text-success\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注：网络视频的观看时长无法获取"), "html", null, true);
        echo "</p>
      </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:learning-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 60,  223 => 59,  220 => 58,  213 => 56,  205 => 54,  195 => 53,  187 => 52,  183 => 51,  179 => 50,  175 => 49,  158 => 48,  155 => 47,  150 => 46,  148 => 45,  145 => 44,  141 => 42,  137 => 41,  133 => 40,  129 => 39,  125 => 38,  121 => 37,  117 => 36,  113 => 34,  108 => 31,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  86 => 26,  82 => 24,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  49 => 11,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
