<?php

/* ClassroomBundle:Classroom:my-classroom.html.twig */
class __TwigTemplate_7cb4e90b9969d62df488a7a2fac8f627d0b08213c4f0b03cd04fa8348a71ddd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "ClassroomBundle:Classroom:my-classroom.html.twig", 1);
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
        $context["side_nav"] = "my-classroom";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的%name%", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<style>
.classroom-footer{

  margin-top: 50px;
}
</style>
<div class=\"panel panel-default panel-col lesson-manage-panel\">
  <div class=\"panel-heading\">
   ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的%name%", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo "
  </div>

  <div class=\"panel-body\">
       <ul class=\"course-wide-list\">
            ";
        // line 21
        if ((isset($context["classrooms"]) ? $context["classrooms"] : null)) {
            // line 22
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 23
                echo "            ";
                $context["progress"] = $this->getAttribute((isset($context["progresses"]) ? $context["progresses"] : null), $this->getAttribute($context["classroom"], "id", array()), array(), "array");
                // line 24
                echo "            <li class=\"course-item clearfix\">
              <a class=\"course-picture-link\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
                <img class=\"course-picture\" src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["classroom"], "middlePicture", array()), "classroom.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "\">
              </a>
              <div class=\"course-body\">
                <h4 class=\"mbl\"><a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "</a>
                ";
                // line 30
                if (($this->getAttribute($context["classroom"], "status", array()) == "draft")) {
                    // line 31
                    echo "                  <span class=\"label label-warning \">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未发布"), "html", null, true);
                    echo "</span>
                  ";
                } elseif (($this->getAttribute(                // line 32
$context["classroom"], "status", array()) == "closed")) {
                    // line 33
                    echo "                  <span class=\"label label-danger \">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关闭"), "html", null, true);
                    echo "</span>
                ";
                }
                // line 35
                echo "              </h4>



                ";
                // line 39
                if (twig_in_filter("student", $this->getAttribute($this->getAttribute((isset($context["members"]) ? $context["members"] : null), $this->getAttribute($context["classroom"], "id", array()), array(), "array"), "role", array()))) {
                    // line 40
                    echo "
                <div class=\"pull-right\">
                <span class=\"text-muted\">";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已学了%day%天", array("%day%" => $this->getAttribute($context["classroom"], "day", array()))), "html", null, true);
                    echo "</span><br>
                <a href=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-info btn-sm mts\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("继续学习"), "html", null, true);
                    echo "</a>
                </div>
                ";
                } else {
                    // line 46
                    echo "                <div class=\"pull-right\">
                <span class=\"text-muted\">";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("旁听生"), "html", null, true);
                    echo "</span><br>
                <a href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-info btn-sm mts\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("进入%name%", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
                    echo "</a>
                </div>
                ";
                }
                // line 51
                echo "
                <div class=\"classroom-footer clearfix\">

                ";
                // line 54
                if (twig_in_filter("student", $this->getAttribute($this->getAttribute((isset($context["members"]) ? $context["members"] : null), $this->getAttribute($context["classroom"], "id", array()), array(), "array"), "role", array()))) {
                    // line 55
                    echo "                <div class=\"col-md-7\">
                  <div class=\"progress\" title=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已学%number%课程", array("%number" => $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "number", array()))), "html", null, true);
                    echo "\">
                    <div class=\"progress-bar\" style=\"width: ";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "percent", array()), "html", null, true);
                    echo "\">
                    </div>
                  </div>
                </div>
                <div class=\"col-md-2\">
                  <span class=\"text-muted mls\">";
                    // line 62
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("共%Count%课", array("%Count%" => $this->getAttribute($context["classroom"], "coursesCount", array()))), "html", null, true);
                    echo "
                  </span>
                </div>
                ";
                }
                // line 66
                echo "

                </div>

              </div>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "            ";
        } else {
            // line 74
            echo "            <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还没有加入%name%！", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "</div>
            ";
        }
        // line 76
        echo "          </ul>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:my-classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 76,  190 => 74,  187 => 73,  175 => 66,  168 => 62,  160 => 57,  156 => 56,  153 => 55,  151 => 54,  146 => 51,  138 => 48,  134 => 47,  131 => 46,  123 => 43,  119 => 42,  115 => 40,  113 => 39,  107 => 35,  101 => 33,  99 => 32,  94 => 31,  92 => 30,  86 => 29,  78 => 26,  74 => 25,  71 => 24,  68 => 23,  63 => 22,  61 => 21,  53 => 16,  43 => 8,  40 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
