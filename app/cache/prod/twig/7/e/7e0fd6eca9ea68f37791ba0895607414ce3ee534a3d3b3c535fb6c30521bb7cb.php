<?php

/* TopxiaWebBundle:OpenCourse:explore.html.twig */
class __TwigTemplate_7e0fd6eca9ea68f37791ba0895607414ce3ee534a3d3b3c535fb6c30521bb7cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:OpenCourse:explore.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["bodyClass"] = "bg-blank";
        // line 5
        $context["siteNav"] = "open/course/explore";
        // line 6
        $context["script_controller"] = "open-course/open-course-explore";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo " 公开课 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_top_content($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        公开课列表
      </div>
    </div>
  </div>
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "  <div class=\"open-course-list\">
    <div class=\"row course-list es-open-course-list\">
      ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            if ($context["course"]) {
                // line 22
                echo "        ";
                $context["lessons"] = $this->env->getExtension('topxia_data_twig')->getData("OpenCourseLessons", array("courseId" => $this->getAttribute($context["course"], "id", array()), "count" => 1));
                // line 23
                echo "        <div class=\"col-md-4 col-xs-6\">
          <div class=\"course-item\">
            <div class=\"course-img\">
              <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_show", array("courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\"
                 target=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\">
                ";
                // line 28
                if (($this->getAttribute($context["course"], "type", array()) == "liveOpen")) {
                    // line 29
                    echo "                  <span class=\"tags\">
            <span class=\"tag-live\"></span>
          </span>
                ";
                }
                // line 33
                echo "                ";
                echo $this->env->getExtension('topxia_web_twig')->makeLazyImg($this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "img-responsive", $this->getAttribute($context["course"], "title", array()));
                echo "
              </a>
              ";
                // line 35
                if ((($this->getAttribute($context["course"], "type", array()) == "liveOpen") && (isset($context["lessons"]) ? $context["lessons"] : null))) {
                    // line 36
                    echo "                <div class=\"mask\">
                  ";
                    // line 37
                    if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), 0, array(), "array"), "startTime", array()), "Y-m-d") == twig_date_format_filter($this->env, "now", "Y-m-d"))) {
                        // line 38
                        echo "                    <i class=\"es-icon es-icon-videocam prs hidden-xs\"></i>";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), 0, array(), "array"), "startTime", array()), "H:i"), "html", null, true);
                        echo " 直播
                  ";
                    } else {
                        // line 40
                        echo "                    <i class=\"es-icon es-icon-videocam prs hidden-xs\"></i>";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), 0, array(), "array"), "startTime", array()), "Y-m-d H:i"), "html", null, true);
                        echo " 直播
                  ";
                    }
                    // line 42
                    echo "                </div>
              ";
                }
                // line 44
                echo "            </div>
            <div class=\"course-info clearfix\">
              <div class=\"title\">
                <a class=\"link-dark\" href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_show", array("courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\"
                   title=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\">
                  ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "
                </a>
              </div>
              <div class=\"metas pull-right\">
                <span class=\"num\"><i class=\"es-icon es-icon-removeredeye\"></i>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "hitNum", array()), "html", null, true);
                echo "</span>
                <span class=\"comment\"><i class=\"es-icon es-icon-textsms\"></i>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "postNum", array()), "html", null, true);
                echo "</span>
              </div>
            </div>

          </div>
        </div>
      ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 61
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无公开课"), "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </div>
    ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:OpenCourse:explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 64,  170 => 63,  161 => 61,  148 => 54,  144 => 53,  137 => 49,  133 => 48,  129 => 47,  124 => 44,  120 => 42,  114 => 40,  108 => 38,  106 => 37,  103 => 36,  101 => 35,  95 => 33,  89 => 29,  87 => 28,  83 => 27,  79 => 26,  74 => 23,  71 => 22,  65 => 21,  61 => 19,  58 => 18,  47 => 10,  44 => 9,  37 => 8,  33 => 1,  31 => 6,  29 => 5,  27 => 3,  11 => 1,);
    }
}
