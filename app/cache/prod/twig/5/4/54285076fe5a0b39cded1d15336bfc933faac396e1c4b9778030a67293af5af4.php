<?php

/* TopxiaWebBundle:Course:explore.html.twig */
class __TwigTemplate_54285076fe5a0b39cded1d15336bfc933faac396e1c4b9778030a67293af5af4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:explore.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
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
        $context["bodyClass"] = "course-list-page bg-blank";
        // line 4
        $context["siteNav"] = "course/explore";
        // line 5
        $context["script_controller"] = "course/explore";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        if ((isset($context["categoryArray"]) ? $context["categoryArray"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array()), "html", null, true);
            if ((isset($context["categoryParent"]) ? $context["categoryParent"] : null)) {
                echo ",";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["categoryParent"]) ? $context["categoryParent"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryParent"]) ? $context["categoryParent"] : null), "name", array()), "")) : ("")), "html", null, true);
            }
        } else {
            echo "全部";
        }
    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("categoryArrayDescription", $context)) ? (_twig_default_filter((isset($context["categoryArrayDescription"]) ? $context["categoryArrayDescription"] : null), "")) : ("")), 100);
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array()), $this->env->getExtension('translator')->trans("全部"))) : ($this->env->getExtension('translator')->trans("全部"))), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
        }
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " - Powered By EduSoho";
        }
        // line 10
        echo "    ";
    }

    // line 12
    public function block_top_content($context, array $blocks = array())
    {
        // line 13
        echo "  <div class=\"es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        <i class=\"es-icon es-icon-viewcomfy\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程列表"), "html", null, true);
        echo "
      </div>

      ";
        // line 20
        $context["classrooms"] = $this->env->getExtension('topxia_data_twig')->getData("Classrooms", array("count" => 1));
        // line 21
        echo "      ";
        if (((array_key_exists("classrooms", $context)) ? (_twig_default_filter((isset($context["classrooms"]) ? $context["classrooms"] : null), null)) : (null))) {
            // line 22
            echo "        <a class=\"btn btn-primary btn-lg more\" href=\"";
            echo $this->env->getExtension('routing')->getPath("classroom_explore");
            echo "\">
          ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看%name%", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "
        </a>
      ";
        }
        // line 26
        echo "    </div>
  </div>
";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "  ";
        $context["type"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type", array()), "all")) : ("all"));
        // line 32
        echo "  ";
        $context["price"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "price", array()), "all")) : ("all"));
        // line 33
        echo "  ";
        $context["orderBy"] = ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "latest")) : ("latest"));
        // line 34
        echo "  ";
        $context["currentLevelId"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "currentLevelId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "currentLevelId", array()), "all")) : ("all"));
        // line 35
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Category:treeNav", array("category" => ((array_key_exists("category", $context)) ? (_twig_default_filter((isset($context["category"]) ? $context["category"] : null), "")) : ("")), "path" => "course_explore", "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))));
        echo "
  <div class=\"es-filter\">
    <ul class=\"nav nav-sort clearfix\">
      <li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "latest")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "latest")) {
            echo "active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新"), "html", null, true);
        echo "</a></li><li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "studentNum")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "studentNum")) {
            echo "active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最热"), "html", null, true);
        echo "</a></li><li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "recommendedSeq")) {
            echo "active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("推荐"), "html", null, true);
        echo "</a></li>
    </ul>
    <div class=\"filter hidden-xs\">
      ";
        // line 41
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("vip")) {
            // line 42
            echo "        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"es-icon es-icon-crown text-warning\"></i>
            ";
            // line 44
            if (((isset($context["currentLevelId"]) ? $context["currentLevelId"] : null) == "all")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员课程"), "html", null, true);
            }
            // line 45
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                if (($this->getAttribute($context["level"], "id", array()) == (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "          </button>
          <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\"class=\"";
            // line 48
            if (((isset($context["currentLevelId"]) ? $context["currentLevelId"] : null) == "all")) {
                echo "active ";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => "all"), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部"), "html", null, true);
            echo "</a></li>
          ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 50
                echo "            <li role=\"presentation\"class=\"";
                if (($this->getAttribute($context["level"], "id", array()) == (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null))) {
                    echo "active ";
                }
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => $this->getAttribute($context["level"], "id", array())), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "          </ul>
        </div>
      ";
        }
        // line 55
        echo "      <label class=\"checkbox-inline\">
        <input type=\"checkbox\" ";
        // line 56
        if (((isset($context["type"]) ? $context["type"] : null) == "live")) {
            echo "checked=\"true\" ";
        }
        echo " id=\"live\" value=\"
        ";
        // line 57
        if (((isset($context["type"]) ? $context["type"] : null) == "all")) {
            // line 58
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("type" => "live", "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        } else {
            // line 60
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("type" => "all", "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        }
        // line 61
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播课程"), "html", null, true);
        echo "
      </label>
      <label class=\"checkbox-inline\">
        <input type=\"checkbox\" ";
        // line 64
        if (((isset($context["price"]) ? $context["price"] : null) == "free")) {
            echo "checked=\"true\" ";
        }
        echo " id=\"free\" value=\"
        ";
        // line 65
        if (((isset($context["price"]) ? $context["price"] : null) == "all")) {
            // line 66
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => "free", "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        } else {
            // line 68
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => "all", "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        }
        // line 70
        echo "        \"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费课程"), "html", null, true);
        echo "
      </label>
    </div>
  </div>

  <div class=\"course-list\">
    <div class=\"row\">
      ";
        // line 77
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 78
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
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
                // line 79
                echo "          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            ";
                // line 80
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Course:explore.html.twig", 80)->display($context);
                // line 81
                echo "          </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "      ";
        } else {
            // line 84
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("该分类下无课程"), "html", null, true);
            echo "</div>
      ";
        }
        // line 86
        echo "    </div>
  </div>
  <nav class=\"text-center\">
    ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </nav>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 89,  333 => 86,  327 => 84,  324 => 83,  309 => 81,  307 => 80,  304 => 79,  286 => 78,  284 => 77,  273 => 70,  267 => 68,  261 => 66,  259 => 65,  253 => 64,  246 => 61,  240 => 60,  234 => 58,  232 => 57,  226 => 56,  223 => 55,  218 => 52,  203 => 50,  199 => 49,  189 => 48,  185 => 46,  173 => 45,  169 => 44,  165 => 42,  163 => 41,  135 => 38,  128 => 35,  125 => 34,  122 => 33,  119 => 32,  116 => 31,  113 => 30,  107 => 26,  101 => 23,  96 => 22,  93 => 21,  91 => 20,  85 => 17,  79 => 13,  76 => 12,  72 => 10,  59 => 9,  53 => 8,  39 => 7,  35 => 1,  33 => 5,  31 => 4,  29 => 3,  11 => 1,);
    }
}
