<?php

/* TopxiaWebBundle:Course:normal-layout.html.twig */
class __TwigTemplate_b6583c35979c70858ffafbcf7ce11d1118703cf7e17fb94529d0a99bd44b0efd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'course_main' => array($this, 'block_course_main'),
            'dashboard_relatedCoursesBlock' => array($this, 'block_dashboard_relatedCoursesBlock'),
            'course_sidebar' => array($this, 'block_course_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["bodyClass"] = "course-dashboard-page";
        // line 12
        $context["script_arguments"] = array("course_uri" => $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->loadTemplate("TopxiaWebBundle:Course:keywords.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 6)->display(array_merge($context, array("course" => (isset($context["course"]) ? $context["course"] : null))));
    }

    // line 9
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getPurifyAndTrimHtml($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array())), ""), 100);
    }

    // line 14
    public function block_top_content($context, array $blocks = array())
    {
        // line 15
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:header", array("course" => (isset($context["course"]) ? $context["course"] : null), "member" => (isset($context["member"]) ? $context["member"] : null))));
        echo "
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "
  ";
        // line 20
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("GroupSell") &&  !(isset($context["member"]) ? $context["member"] : null))) {
            // line 21
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GroupSellBundle:GroupSell:showGroup", array("type" => "course", "targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
            echo "
  ";
        }
        // line 23
        echo "  <div class=\"course-detail row\">
    <div class=\"col-lg-9 col-md-8  course-detail-main\">

      ";
        // line 26
        $this->loadTemplate("TopxiaWebBundle:Announcement:announcement-block.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 26)->display(array_merge($context, array("targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")));
        // line 27
        echo "
      <section class=\"es-section\">
        ";
        // line 29
        $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-nav.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 29)->display($context);
        // line 30
        echo "        ";
        $this->displayBlock('course_main', $context, $blocks);
        // line 31
        echo "      </section>
      ";
        // line 32
        $this->displayBlock('dashboard_relatedCoursesBlock', $context, $blocks);
        // line 37
        echo "    </div>

    <div class=\"col-lg-3 col-md-4  course-sidebar\">
      ";
        // line 40
        $this->displayBlock('course_sidebar', $context, $blocks);
        // line 66
        echo "    </div>
  </div>

  ";
        // line 69
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("HowzhiPopAd")) {
            // line 70
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("HowzhiPopAdBundle:HowzhiPop:index"));
            echo "
  ";
        }
        // line 72
        echo "
  ";
        // line 73
        $this->loadTemplate("TopxiaWebBundle:Common:weixin-share.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 73)->display(array_merge($context, array("title" => $this->getAttribute(        // line 74
(isset($context["course"]) ? $context["course"] : null), "title", array()), "desc" => $this->env->getExtension('topxia_web_twig')->getPurifyAndTrimHtml(strip_tags($this->getAttribute(        // line 75
(isset($context["course"]) ? $context["course"] : null), "about", array()))), "link" => $this->getAttribute($this->getAttribute(        // line 76
(isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "imgUrl" => $this->env->getExtension('topxia_web_twig')->getFurl($this->getAttribute(        // line 77
(isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"))));
        // line 79
        echo "
";
    }

    // line 30
    public function block_course_main($context, array $blocks = array())
    {
    }

    // line 32
    public function block_dashboard_relatedCoursesBlock($context, array $blocks = array())
    {
        // line 33
        echo "        ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("course.relatedCourses") == 1)) {
            // line 34
            echo "          ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:relatedCoursesBlock", array("course" => (isset($context["course"]) ? $context["course"] : null))));
            echo "
        ";
        }
        // line 36
        echo "      ";
    }

    // line 40
    public function block_course_sidebar($context, array $blocks = array())
    {
        // line 41
        echo "        ";
        if (((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : null), null)) : (null))) {
            // line 42
            echo "          ";
            $asm89CacheStrategy1 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
            $asm89Key1 = $asm89CacheStrategy1->generateKey((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "/sidebar/belongClassrooms/for/member"), 600            );
            $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
            if ($asm89CacheBody1 === false) {
                ob_start();
                    // line 43
                    echo "            ";
                    echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:belongClassrooms", array("course" => (isset($context["course"]) ? $context["course"] : null))));
                    echo "
          ";
                
                $asm89CacheBody1 = ob_get_clean();
                $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
            }
            echo $asm89CacheBody1;
            // line 45
            echo "        ";
        }
        // line 46
        echo "
        ";
        // line 47
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()) == 0)) {
            // line 48
            echo "          ";
            $asm89CacheStrategy2 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
            $asm89Key2 = $asm89CacheStrategy2->generateKey((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "/not/classroom/course/sidebar/recommendClassrooms"), 600            );
            $asm89CacheBody2 = $asm89CacheStrategy2->fetchBlock($asm89Key2);
            if ($asm89CacheBody2 === false) {
                ob_start();
                    // line 49
                    echo "            ";
                    echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:recommendClassrooms", array("course" => (isset($context["course"]) ? $context["course"] : null))));
                    echo "
          ";
                
                $asm89CacheBody2 = ob_get_clean();
                $asm89CacheStrategy2->saveBlock($asm89Key2, $asm89CacheBody2);
            }
            echo $asm89CacheBody2;
            // line 51
            echo "        ";
        }
        // line 52
        echo "
        ";
        // line 53
        $asm89CacheStrategy3 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key3 = $asm89CacheStrategy3->generateKey((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "/sidebar/teachers"), 600        );
        $asm89CacheBody3 = $asm89CacheStrategy3->fetchBlock($asm89Key3);
        if ($asm89CacheBody3 === false) {
            ob_start();
                // line 54
                echo "          ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:teachers", array("course" => (isset($context["course"]) ? $context["course"] : null))));
                echo "
        ";
            
            $asm89CacheBody3 = ob_get_clean();
            $asm89CacheStrategy3->saveBlock($asm89Key3, $asm89CacheBody3);
        }
        echo $asm89CacheBody3;
        // line 56
        echo "
        ";
        // line 57
        $asm89CacheStrategy4 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key4 = $asm89CacheStrategy4->generateKey((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "/sidebar/students"), 600        );
        $asm89CacheBody4 = $asm89CacheStrategy4->fetchBlock($asm89Key4);
        if ($asm89CacheBody4 === false) {
            ob_start();
                // line 58
                echo "          ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:students", array("course" => (isset($context["course"]) ? $context["course"] : null))));
                echo "
        ";
            
            $asm89CacheBody4 = ob_get_clean();
            $asm89CacheStrategy4->saveBlock($asm89Key4, $asm89CacheBody4);
        }
        echo $asm89CacheBody4;
        // line 60
        echo "        
        ";
        // line 61
        $asm89CacheStrategy5 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key5 = $asm89CacheStrategy5->generateKey((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "/sidebar/statuses"), 600        );
        $asm89CacheBody5 = $asm89CacheStrategy5->fetchBlock($asm89Key5);
        if ($asm89CacheBody5 === false) {
            ob_start();
                // line 62
                echo "          ";
                $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 62)->display($context);
                // line 63
                echo "        ";
            
            $asm89CacheBody5 = ob_get_clean();
            $asm89CacheStrategy5->saveBlock($asm89Key5, $asm89CacheBody5);
        }
        echo $asm89CacheBody5;
        // line 64
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 64,  263 => 63,  260 => 62,  254 => 61,  251 => 60,  241 => 58,  235 => 57,  232 => 56,  222 => 54,  216 => 53,  213 => 52,  210 => 51,  200 => 49,  193 => 48,  191 => 47,  188 => 46,  185 => 45,  175 => 43,  168 => 42,  165 => 41,  162 => 40,  158 => 36,  152 => 34,  149 => 33,  146 => 32,  141 => 30,  136 => 79,  134 => 77,  133 => 76,  132 => 75,  131 => 74,  130 => 73,  127 => 72,  121 => 70,  119 => 69,  114 => 66,  112 => 40,  107 => 37,  105 => 32,  102 => 31,  99 => 30,  97 => 29,  93 => 27,  91 => 26,  86 => 23,  80 => 21,  78 => 20,  75 => 19,  72 => 18,  65 => 15,  62 => 14,  56 => 9,  51 => 6,  48 => 5,  40 => 3,  36 => 1,  34 => 12,  32 => 11,  11 => 1,);
    }
}
