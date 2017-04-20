<?php

/* ClassroomBundle:Classroom:explore.html.twig */
class __TwigTemplate_58b461ec828f28aad175c66e670e7b4359c66e2ead3b0aed78bc855ff7e52d6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "ClassroomBundle:Classroom:explore.html.twig", 1);
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
        // line 2
        $context["bodyClass"] = "classroom-list-page bg-blank";
        // line 3
        $context["script_controller"] = "classroombundle/controller/classroom/explore";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        if ((isset($context["categoryArray"]) ? $context["categoryArray"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array()), "html", null, true);
            if ((isset($context["categoryParent"]) ? $context["categoryParent"] : null)) {
                echo ",";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["categoryParent"]) ? $context["categoryParent"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryParent"]) ? $context["categoryParent"] : null), "name", array()), "")) : ("")), "html", null, true);
            }
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部"), "html", null, true);
        }
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("categoryArrayDescription", $context)) ? (_twig_default_filter((isset($context["categoryArrayDescription"]) ? $context["categoryArrayDescription"] : null), "")) : ("")), 100);
    }

    // line 6
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
        // line 7
        echo "    ";
    }

    // line 9
    public function block_top_content($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        <i class=\"es-icon es-icon-viewcomfy\"></i>
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%name%列表", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo "
      </div>
      <a class=\"btn btn-primary btn-lg more\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("course_explore");
        echo "\">
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看课程"), "html", null, true);
        echo "
      </a>
    </div>
  </div>
  
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "  ";
        $context["price"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "price", array()), "all")) : ("all"));
        // line 25
        echo "  ";
        $context["orderBy"] = ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "createdTime")) : ("createdTime"));
        // line 26
        echo "  ";
        $context["currentLevelId"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "currentLevelId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "currentLevelId", array()), "all")) : ("all"));
        // line 27
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Category:treeNav", array("category" => (isset($context["category"]) ? $context["category"] : null), "path" => "classroom_explore", "filter" => array("price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))));
        echo "
  <div class=\"es-filter\">
    <ul class=\"nav nav-sort\">
      <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "createdTime")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "createdTime")) {
            echo " active ";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新"), "html", null, true);
        echo "</a></li><li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "studentNum")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "studentNum")) {
            echo " active ";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最热"), "html", null, true);
        echo "</a></li><li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "recommendedSeq")) {
            echo " active ";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("推荐"), "html", null, true);
        echo "</a></li>
    </ul>
    <div class=\"filter hidden-xs\">
      ";
        // line 33
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("vip")) {
            // line 34
            echo "        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"es-icon es-icon-crown text-warning\"></i>
            ";
            // line 36
            if (((isset($context["currentLevelId"]) ? $context["currentLevelId"] : null) == "all")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员%name%", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            }
            // line 37
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
            // line 38
            echo "          </button>
          <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\"class=\"";
            // line 40
            if (((isset($context["currentLevelId"]) ? $context["currentLevelId"] : null) == "all")) {
                echo "active ";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => "all"), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部"), "html", null, true);
            echo "</a></li>
          ";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 42
                echo "            <li role=\"presentation\"class=\"";
                if (($this->getAttribute($context["level"], "id", array()) == (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null))) {
                    echo "active ";
                }
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => $this->getAttribute($context["level"], "id", array())), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "          </ul>
        </div>
      ";
        }
        // line 47
        echo "      <label class=\"checkbox-inline hidden-xs\">
        <input type=\"checkbox\" ";
        // line 48
        if (((isset($context["price"]) ? $context["price"] : null) == "free")) {
            echo "checked=\"true\" ";
        }
        echo " id=\"free\" value=\"
        ";
        // line 49
        if (((isset($context["price"]) ? $context["price"] : null) == "all")) {
            // line 50
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("price" => "free", "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        } else {
            // line 51
            echo " 
          ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("price" => "all", "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        }
        // line 54
        echo "        \"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费%name%", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo "
      </label>
    </div>
  </div>
  <div class=\"class-list row\">
    ";
        // line 59
        if ((isset($context["classrooms"]) ? $context["classrooms"] : null)) {
            // line 60
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 61
                echo "        <div class=\"col-md-4 col-sm-6\">
          <div class=\"class-item\">
            <div class=\"class-img\">
              <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
                ";
                // line 65
                echo $this->env->getExtension('topxia_web_twig')->makeLazyImg($this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["classroom"], "middlePicture", array()), "classroom.png"), "img-responsive", $this->getAttribute($context["classroom"], "title", array()), "lazyload_class.png");
                echo "
                <h3>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "</h3>
                <div class=\"image-overlay\"></div>
              </a>
            </div>
            <div class=\"class-serve\">
              ";
                // line 71
                $this->loadTemplate("ClassroomBundle:Classroom:service-block.html.twig", "ClassroomBundle:Classroom:explore.html.twig", 71)->display(array_merge($context, array("services" => $this->getAttribute($context["classroom"], "service", array()))));
                // line 72
                echo "            </div>
            <ul class=\"class-data clearfix\">
              <li><i class=\"es-icon es-icon-book\"></i>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "courseNum", array()), "html", null, true);
                echo "</li>
              <li><i class=\"es-icon es-icon-people\"></i>";
                // line 75
                echo twig_escape_filter($this->env, ($this->getAttribute($context["classroom"], "studentNum", array()) + $this->getAttribute($context["classroom"], "auditorNum", array())), "html", null, true);
                echo "</li>
              <li><i class=\"es-icon es-icon-textsms\"></i>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "threadNum", array()), "html", null, true);
                echo "</li>
            </ul>
          </div>
        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "      
    ";
        } else {
            // line 83
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("目前暂时无%name%", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "</div>
    ";
        }
        // line 85
        echo "  </div>
  <nav class=\"text-center\">
    ";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </nav>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 87,  327 => 85,  321 => 83,  317 => 81,  298 => 76,  294 => 75,  290 => 74,  286 => 72,  284 => 71,  276 => 66,  272 => 65,  268 => 64,  263 => 61,  245 => 60,  243 => 59,  234 => 54,  229 => 52,  226 => 51,  220 => 50,  218 => 49,  212 => 48,  209 => 47,  204 => 44,  189 => 42,  185 => 41,  175 => 40,  171 => 38,  159 => 37,  155 => 36,  151 => 34,  149 => 33,  121 => 30,  114 => 27,  111 => 26,  108 => 25,  105 => 24,  102 => 23,  92 => 17,  88 => 16,  83 => 14,  77 => 10,  74 => 9,  70 => 7,  57 => 6,  51 => 5,  37 => 4,  33 => 1,  31 => 3,  29 => 2,  11 => 1,);
    }
}
