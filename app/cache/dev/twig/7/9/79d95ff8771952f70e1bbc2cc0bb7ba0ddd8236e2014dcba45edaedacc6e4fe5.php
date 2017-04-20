<?php

/* TopxiaWebBundle:Default:course-grid-with-condition-index.html.twig */
class __TwigTemplate_79d95ff8771952f70e1bbc2cc0bb7ba0ddd8236e2014dcba45edaedacc6e4fe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section class=\"course-list-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")), "html", null, true);
        echo "\" id=\"course-list-section\">

  ";
        // line 3
        $context["count"] = (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array()), 12)) : (12));
        // line 4
        echo "  ";
        $context["categoryId"] = (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryId", array()), 0)) : (0));
        // line 5
        echo "  ";
        $context["orderBy"] = (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "orderBy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "orderBy", array()), "latest")) : ("latest"));
        // line 6
        echo "  ";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")) == "latest")) {
            // line 7
            echo "    ";
            $context["courses"] = $this->env->getExtension('topxia_data_twig')->getData("LatestCourses", array("count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "categoryId" => (isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId"))));
            // line 8
            echo "  ";
        } elseif (((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")) == "recommendedSeq")) {
            // line 9
            echo "    ";
            $context["courses"] = $this->env->getExtension('topxia_data_twig')->getData("RecommendCourses", array("count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "categoryId" => (isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId"))));
            // line 10
            echo "  ";
        } elseif (((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")) == "studentNum")) {
            // line 11
            echo "    ";
            $context["courses"] = $this->env->getExtension('topxia_data_twig')->getData("PopularCourses", array("count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "categoryId" => (isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), "type" => "studentNum"));
            // line 12
            echo "  ";
        }
        // line 13
        echo "  ";
        $context["categoriesFirst"] = $this->env->getExtension('topxia_data_twig')->getData("Categories", array("group" => "course"));
        // line 14
        echo "  <div class=\"container\">
    <div class=\"text-line\">
      <h5><span>";
        // line 16
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultTitle", array()))), "html", null, true);
        echo "</span><div class=\"line\"></div></h5>
      <div class=\"subtitle\">";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultSubTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultSubTitle", array()))), "html", null, true);
        echo "</div>
    </div>
    <div class=\"course-filter\" id=\"course-filter\">
      <ul class=\"nav nav-pills hidden-xs\" role=\"tablist\">
        <li role=\"presentation\" class=\"";
        // line 21
        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)) == 0)) {
            echo "active ";
        }
        echo " js-course-filter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
        echo "\" data-type=\"course\"><a href=\"javascript:;\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部课程"), "html", null, true);
        echo "</a></li>
        ";
        // line 22
        if ((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : $this->getContext($context, "categoriesFirst"))) {
            // line 23
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : $this->getContext($context, "categoriesFirst")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (($this->getAttribute($context["category"], "parentId", array()) == 0)) {
                    // line 24
                    echo "            ";
                    if (($this->getAttribute($context["loop"], "index0", array()) < (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryCount", array()), 4)) : (4)))) {
                        // line 25
                        echo "              <li role=\"presentation\" class=\"";
                        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)) == $this->getAttribute($context["category"], "id", array()))) {
                            echo "active ";
                        }
                        echo " js-course-filter\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
                        echo "\" data-type=\"course\"><a href=\"javascript:;\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                        echo "</a></li>
            ";
                    }
                    // line 27
                    echo "          ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        ";
        }
        // line 29
        echo "      </ul>
      <div class=\"btn-group visible-xs\">
        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部课程"), "html", null, true);
        echo " <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\" class=\"js-course-filter ";
        // line 33
        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)) == 0)) {
            echo "active ";
        }
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
        echo "\" data-type=\"course\"><a href=\"javascript:;\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部课程"), "html", null, true);
        echo "</a></li>
          ";
        // line 34
        if ((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : $this->getContext($context, "categoriesFirst"))) {
            // line 35
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : $this->getContext($context, "categoriesFirst")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (($this->getAttribute($context["category"], "parentId", array()) == 0)) {
                    // line 36
                    echo "              ";
                    if (($this->getAttribute($context["loop"], "index0", array()) < (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryCount", array()), 4)) : (4)))) {
                        // line 37
                        echo "                <li role=\"presentation\" class = \"js-course-filter ";
                        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)) == $this->getAttribute($context["category"], "id", array()))) {
                            echo "active ";
                        }
                        echo "\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
                        echo "\" data-type=\"course\"><a href=\"javascript:;\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                        echo "</a></li>
              ";
                    }
                    // line 39
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "          ";
        }
        // line 41
        echo "        </ul>
      </div>
      <div class=\"course-sort btn-group\">
        <a href=\"javascript:;\" class=\"btn btn-default ";
        // line 44
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "recommendedSeq")) : ("recommendedSeq")) == "latest")) {
            echo " active ";
        }
        echo "js-course-filter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)), "orderBy" => "latest")), "html", null, true);
        echo "\" data-type='course'>
          ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新"), "html", null, true);
        echo "
        </a>
        <a href=\"javascript:;\" class=\"btn btn-default ";
        // line 47
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "recommendedSeq")) : ("recommendedSeq")) == "studentNum")) {
            echo " active ";
        }
        echo "js-course-filter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)), "orderBy" => "studentNum")), "html", null, true);
        echo "\" data-type='course'>
          ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最热"), "html", null, true);
        echo "
        </a>
        <a href=\"javascript:;\" class=\"btn btn-default ";
        // line 50
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "recommendedSeq")) : ("recommendedSeq")) == "recommendedSeq")) {
            echo " active ";
        }
        echo "js-course-filter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\" data-type='course'>
          ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("推荐"), "html", null, true);
        echo "
        </a>
      </div>
    </div>
    <div class=\"course-list\">
      <div class=\"row\">
        ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
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
            // line 58
            echo "          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            ";
            // line 59
            $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Default:course-grid-with-condition-index.html.twig", 59)->display($context);
            // line 60
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
        // line 62
        echo "      </div>
    </div>
    <div class=\"section-more-btn\">
      <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("course_explore");
        echo "\" class=\"btn btn-default btn-lg\">
        ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多课程"), "html", null, true);
        echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
      </a>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:course-grid-with-condition-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 66,  275 => 65,  270 => 62,  255 => 60,  253 => 59,  250 => 58,  233 => 57,  224 => 51,  216 => 50,  211 => 48,  203 => 47,  198 => 45,  190 => 44,  185 => 41,  182 => 40,  172 => 39,  160 => 37,  157 => 36,  145 => 35,  143 => 34,  133 => 33,  128 => 31,  124 => 29,  121 => 28,  111 => 27,  99 => 25,  96 => 24,  84 => 23,  82 => 22,  72 => 21,  65 => 17,  61 => 16,  57 => 14,  54 => 13,  51 => 12,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  25 => 3,  19 => 1,);
    }
}
