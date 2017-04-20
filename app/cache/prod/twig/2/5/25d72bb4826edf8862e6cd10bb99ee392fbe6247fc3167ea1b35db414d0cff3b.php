<?php

/* TopxiaWebBundle:OpenCourse:open-course-show.html.twig */
class __TwigTemplate_25d72bb4826edf8862e6cd10bb99ee392fbe6247fc3167ea1b35db414d0cff3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:OpenCourse:open-course-show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["script_controller"] = "open-course/open-course";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_keywords($context, array $blocks = array())
    {
        // line 9
        echo "  ";
        $context["tags"] = $this->env->getExtension('topxia_data_twig')->getData("Tags", array("tagIds" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tags", array())));
        // line 10
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
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
            $this->displayParentBlock("keywords", $context, $blocks);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 13
    public function block_description($context, array $blocks = array())
    {
        // line 14
        echo "  ";
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array())) {
            // line 15
            echo "    ";
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getPurifyAndTrimHtml($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array())), ""), 100);
            echo "
  ";
        } else {
            // line 17
            echo "    ";
            $this->displayParentBlock("description", $context, $blocks);
            echo "
  ";
        }
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "  <ol class=\"breadcrumb open-course-breadcrumb\">
    <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">首页</a></li>
    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("open_course_explore");
        echo "\" >公开课</a></li>
    <li>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</li>
  </ol>
  ";
        // line 28
        echo "  <div class=\"open-course-header\">
    <div class=\"row\">

      ";
        // line 31
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:OpenCourse:header", array("course" => (isset($context["course"]) ? $context["course"] : null), "lessonId" => ((array_key_exists("lessonId", $context)) ? (_twig_default_filter((isset($context["lessonId"]) ? $context["lessonId"] : null), null)) : (null)))));
        echo "

      <div class=\"col-md-3 open-course-tab js-open-course-tab\">
        <ul class=\"clearfix\">
          <li class=\"tab-header active\"><i class=\"es-icon es-icon-staroutline prm\"></i>推荐课程</li>
          ";
        // line 39
        echo "        </ul>
        <div id=\"content\">
          <ul id=\"recommand-tab\">
            ";
        // line 42
        $this->loadTemplate("TopxiaWebBundle:OpenCourse:recommend-course-list.html.twig", "TopxiaWebBundle:OpenCourse:open-course-show.html.twig", 42)->display($context);
        // line 43
        echo "          </ul>
          ";
        // line 47
        echo "        </div>
      </div>
    </div>
  </div>
  ";
        // line 52
        echo "
  ";
        // line 53
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:OpenCourse:infoBar", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "as" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "as"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "as"), "method"), "")) : ("")))));
        echo "

  <div class=\"open-course-detail row\">
    <div class=\"col-md-9\">
      <div class=\"es-section gray-darker editor-text\">
        ";
        // line 58
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array())) {
            // line 59
            echo "          ";
            echo $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array());
            echo "
        ";
        } else {
            // line 61
            echo "          <div class=\"empty\">暂无简介</div>
        ";
        }
        // line 63
        echo "      </div>
      ";
        // line 64
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:OpenCourse:comment", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "as" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "as"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "as"), "method"), "")) : ("")))));
        echo "
    </div>

    ";
        // line 68
        echo "    <div class=\"col-md-3 hidden-sm hidden-xs\">
      ";
        // line 69
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:OpenCourse:teachers", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
        echo "
      ";
        // line 70
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:OpenCourse:materialList", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
        echo "
    </div>
    ";
        // line 73
        echo "  </div>
  ";
        // line 74
        $this->loadTemplate("TopxiaWebBundle:Common:weixin-share.html.twig", "TopxiaWebBundle:OpenCourse:open-course-show.html.twig", 74)->display(array_merge($context, array("title" => $this->getAttribute(        // line 75
(isset($context["course"]) ? $context["course"] : null), "title", array()), "desc" => $this->env->getExtension('topxia_web_twig')->getPurifyAndTrimHtml(strip_tags($this->getAttribute(        // line 76
(isset($context["course"]) ? $context["course"] : null), "about", array()))), "link" => $this->getAttribute($this->getAttribute(        // line 77
(isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "imgUrl" => $this->env->getExtension('topxia_web_twig')->getFurl($this->getAttribute(        // line 78
(isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"))));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:OpenCourse:open-course-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 78,  211 => 77,  210 => 76,  209 => 75,  208 => 74,  205 => 73,  200 => 70,  196 => 69,  193 => 68,  187 => 64,  184 => 63,  180 => 61,  174 => 59,  172 => 58,  164 => 53,  161 => 52,  155 => 47,  152 => 43,  150 => 42,  145 => 39,  137 => 31,  132 => 28,  127 => 25,  123 => 24,  119 => 23,  116 => 22,  113 => 21,  105 => 17,  99 => 15,  96 => 14,  93 => 13,  52 => 10,  49 => 9,  46 => 8,  37 => 5,  34 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
