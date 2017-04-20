<?php

/* TopxiaWebBundle:MyTeaching:classroom.html.twig */
class __TwigTemplate_da1c5e9a311b87ccddca28aa6fa50afcd600ed3196a662d1028a3855d379f4c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:MyTeaching:classroom.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-teaching-classroom";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所教%classroom.name%", array("%classroom.name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel panel-default panel-col lesson-manage-panel\">
  <div class=\"panel-heading\">
    ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所教%classroom.name%", array("%classroom.name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo "
  </div>

  <div class=\"panel-body\">
       <ul class=\"course-wide-list\">
            ";
        // line 16
        if ((isset($context["classrooms"]) ? $context["classrooms"] : null)) {
            // line 17
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 18
                echo "            <li class=\"course-item clearfix\">
              <a class=\"course-picture-link\" href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
                <img class=\"course-picture\" src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["classroom"], "middlePicture", array()), "classroom.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "\">
              </a>
              <div class=\"course-body\">
                ";
                // line 23
                if ((($this->getAttribute($this->getAttribute((isset($context["members"]) ? $context["members"] : null), $this->getAttribute($context["classroom"], "id", array()), array(), "array"), "role", array()) == "headTeacher") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                    // line 24
                    echo "                  <div style=\"float:right;\" class=\"text-muted mrm mls\">
                  <span class=\"glyphicon glyphicon-cog\"></span> <a href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理%classroom.name%", array("%classroom.name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
                    echo "</a>
                  </div>
                ";
                }
                // line 28
                echo "                <h4 class=\"mbl\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "</a>
                ";
                // line 29
                if (($this->getAttribute($context["classroom"], "status", array()) == "draft")) {
                    // line 30
                    echo "                <span class=\"label label-warning \">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未发布"), "html", null, true);
                    echo "</span>
                ";
                } elseif (($this->getAttribute(                // line 31
$context["classroom"], "status", array()) == "closed")) {
                    // line 32
                    echo "                <span class=\"label label-danger \">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关闭"), "html", null, true);
                    echo "</span>
                ";
                }
                // line 34
                echo "                </h4>

                <span class=\"text-muted\">";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("共%coursesCount%课", array("%coursesCount%" => $this->getAttribute($context["classroom"], "coursesCount", array()))), "html", null, true);
                echo "
                <i class=\"fa fa-users mll\" ></i> ";
                // line 37
                echo twig_escape_filter($this->env, ($this->getAttribute($context["classroom"], "studentNum", array()) + $this->getAttribute($context["classroom"], "auditorNum", array())), "html", null, true);
                echo "</span>
                <div class=\"course-footer clearfix mtl\">
                  <strong class=\"mrl\">";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("今日新增"), "html", null, true);
                echo "</strong>

                   ";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员%allCount%", array("%allCount%" => $this->getAttribute($context["classroom"], "allCount", array()))), "html", null, true);
                echo "  &nbsp;&nbsp;

                   ";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("话题%threadCount%", array("%threadCount%" => $this->getAttribute($context["classroom"], "threadCount", array()))), "html", null, true);
                echo "  &nbsp;&nbsp; ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时完成学习%todayFinishedLessonNum%", array("%todayFinishedLessonNum%" => $this->getAttribute($context["classroom"], "todayFinishedLessonNum", array()))), "html", null, true);
                echo "
                </div>
              </div>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            ";
        } else {
            // line 49
            echo "              <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("找不到所教%classroom.name%！", array("%classroom.name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "</div>
            ";
        }
        // line 51
        echo "          </ul>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyTeaching:classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 51,  152 => 49,  149 => 48,  136 => 43,  131 => 41,  126 => 39,  121 => 37,  117 => 36,  113 => 34,  107 => 32,  105 => 31,  100 => 30,  98 => 29,  91 => 28,  83 => 25,  80 => 24,  78 => 23,  70 => 20,  66 => 19,  63 => 18,  58 => 17,  56 => 16,  48 => 11,  43 => 8,  40 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
