<?php

/* TopxiaWebBundle:Course:create.html.twig */
class __TwigTemplate_20a8b72b0b742c7ec53c9cbc807dbf396054bd1475a332f6ac3e1d574bc871ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "course/create";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建课程"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"row\">
        <div class=\"panel panel-default panel-page panel-create-course\">
            <div class=\"panel-heading\"><h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建课程"), "html", null, true);
        echo "</h2></div>

            ";
        // line 12
        if ((( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "largeAvatar", array()) ||  !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "title", array())) ||  !$this->getAttribute((isset($context["userProfile"]) ? $context["userProfile"] : null), "about", array()))) {
            // line 13
            echo "                ";
            $this->loadTemplate("TopxiaWebBundle:Settings:user-profile.html.twig", "TopxiaWebBundle:Course:create.html.twig", 13)->display($context);
            // line 14
            echo "            ";
        } else {
            // line 15
            echo "                <form id=\"course-create-form\" class=\"form-horizontal\" method=\"post\">

                    ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "

                    <div class=\"course-piece\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("选择类型"), "html", null, true);
            echo "
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <div class=\"course-select active\" data-type=\"normal\">
                                <i class=\"es-icon es-icon-putongkecheng \"></i>
                                <div class=\"course-type\">普通课程</div>
                                <div class=\"course-intro\">支持视频、图文、PPT等各种形式，支持作业、笔记等多个学习工具的课程</div>
                            </div>
                        </div>

                        <div class=\"col-md-3\">
                            ";
            // line 33
            if ( !$this->env->getExtension('topxia_web_twig')->getSetting("live-course.live_course_enabled")) {
                // line 34
                echo "                            <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\"
                                 title=\"云直播开启后可用\"
                                 data-type=\"live\">
                                ";
            } else {
                // line 38
                echo "                                <div class=\"course-select\" data-type=\"live\">
                                    ";
            }
            // line 40
            echo "                                    <i class=\"es-icon es-icon-zhibokecheng \"></i>
                                    <div class=\"course-type\">直播课程</div>
                                    <div class=\"course-intro\">以直播为教学形式的，支持多个学习工具的课程</div>
                                </div>
                            </div>

                            <div class=\"col-md-3\">
                                <div class=\"course-select \" data-type=\"open\">
                                    <i class=\"es-icon es-icon-lubogongkaike\"></i>
                                    <div class=\"course-type\">录播公开课</div>
                                    <div class=\"course-intro\">免费、无门槛观看的视频课程，主要用于营销推广</div>
                                </div>
                            </div>

                            <div class=\"col-md-3\">
                                ";
            // line 55
            if ( !$this->env->getExtension('topxia_web_twig')->getSetting("live-course.live_course_enabled")) {
                // line 56
                echo "                                <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\"
                                     title=\"云直播开启后可用\"
                                     data-type=\"liveOpen\">
                                    ";
            } else {
                // line 60
                echo "                                    <div class=\"course-select\" data-type=\"liveOpen\">
                                        ";
            }
            // line 62
            echo "                                        <i class=\"es-icon es-icon-zhibokecheng2\"></i>
                                        <div class=\"course-type\">直播公开课</div>
                                        <div class=\"course-intro\">免费、无门槛参与的直播课程，主要用于营销推广</div>
                                    </div>
                                </div>
                            </div>

                            ";
            // line 69
            $this->loadTemplate("OrgBundle:Org:course-create-org-tree-select.html.twig", "TopxiaWebBundle:Course:create.html.twig", 69)->display($context);
            // line 70
            echo "
                            <div class=\"course-title row\">
                                <div class=\"col-md-2 controls-label text-lg\">
                                    <div class=\"course-piece title\">
                                        ";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程标题"), "html", null, true);
            echo "
                                    </div>
                                </div>
                                <div class=\"col-md-10 controls\">
                                    <input type=\"text\" id=\"course_title\" name=\"title\" required=\"required\"
                                           class=\"form-control\"
                                           data-widget-cid=\"widget-1\" data-explain=\"\">
                                    <div class=\"help-block\" style=\"display:none;\"></div>
                                </div>
                            </div>

                            <div class=\"text-center\">
                                ";
            // line 86
            if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
                // line 87
                echo "                                    <span class=\"mrm\"><a href=\"http://www.qiqiuyu.com/course/22\" class=\"text-muted\"
                                                         target=\"_blank\">";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("如何创建课程？"), "html", null, true);
                echo "</a></span>
                                ";
            }
            // line 90
            echo "                                <input id=\"course-create-btn\" data-submiting-text=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在创建"), "html", null, true);
            echo "\"
                                       class=\"btn btn-fat btn-primary\"
                                       type=\"submit\" value=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建"), "html", null, true);
            echo "\">
                                <a class=\"btn btn-fat btn-link\"
                                   href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "headers", array()), "get", array(0 => "Referer"), "method"), "html", null, true);
            echo "\">取消</a>
                            </div>

                            <input type=\"hidden\" name=\"type\" value=\"normal\"/>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
                        </div>
                    </div>
                </form>

            ";
        }
        // line 104
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 104,  187 => 98,  180 => 94,  175 => 92,  169 => 90,  164 => 88,  161 => 87,  159 => 86,  144 => 74,  138 => 70,  136 => 69,  127 => 62,  123 => 60,  117 => 56,  115 => 55,  98 => 40,  94 => 38,  88 => 34,  86 => 33,  70 => 20,  64 => 17,  60 => 15,  57 => 14,  54 => 13,  52 => 12,  47 => 10,  43 => 8,  40 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
