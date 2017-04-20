<?php

/* TopxiaWebBundle:Common:data-dict-macro.html.twig */
class __TwigTemplate_6203d9b200d877520af3676044edc92e8386c2807087de50f46a92ababc24c3a extends Twig_Template
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
        // line 10
        echo "
";
        // line 24
        echo "
";
        // line 38
        echo "
";
        // line 50
        echo "
";
        // line 60
        echo "
";
        // line 70
        echo "
";
        // line 80
        echo "
";
        // line 90
        echo "
";
    }

    // line 1
    public function getcourseStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (((isset($context["status"]) ? $context["status"] : null) == "draft")) {
                // line 3
                echo "        <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未发布"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 4
(isset($context["status"]) ? $context["status"] : null) == "published")) {
                // line 5
                echo "        <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已发布"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 6
(isset($context["status"]) ? $context["status"] : null) == "closed")) {
                // line 7
                echo "        <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关闭"), "html", null, true);
                echo "</span>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 11
    public function getfileType($__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 12
            echo "    ";
            if (((isset($context["type"]) ? $context["type"] : null) == "video")) {
                // line 13
                echo "        <span class=\"glyphicon glyphicon-facetime-video text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 14
(isset($context["type"]) ? $context["type"] : null) == "audio")) {
                // line 15
                echo "        <span class=\"glyphicon glyphicon-music text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音频"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 16
(isset($context["type"]) ? $context["type"] : null) == "document")) {
                // line 17
                echo "        <span class=\"glyphicon glyphicon-briefcase text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文档"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 18
(isset($context["type"]) ? $context["type"] : null) == "image")) {
                // line 19
                echo "        <span class=\"glyphicon glyphicon-picture text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("图片"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 20
(isset($context["type"]) ? $context["type"] : null) == "other")) {
                // line 21
                echo "        <span class=\"glyphicon glyphicon-question-sign text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("其他"), "html", null, true);
                echo "</span>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function getorderStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "    ";
            if (((isset($context["status"]) ? $context["status"] : null) == "created")) {
                // line 27
                echo "        <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未付款"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 28
(isset($context["status"]) ? $context["status"] : null) == "paid")) {
                // line 29
                echo "        <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已付款"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 30
(isset($context["status"]) ? $context["status"] : null) == "refunding")) {
                // line 31
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退款中"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 32
(isset($context["status"]) ? $context["status"] : null) == "refunded")) {
                // line 33
                echo "        <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已退款"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 34
(isset($context["status"]) ? $context["status"] : null) == "cancelled")) {
                // line 35
                echo "        <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关闭"), "html", null, true);
                echo "</span>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function getrefundStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 40
            echo "    ";
            if (((isset($context["status"]) ? $context["status"] : null) == "created")) {
                // line 41
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已申请"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 42
(isset($context["status"]) ? $context["status"] : null) == "success")) {
                // line 43
                echo "        <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退款成功"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 44
(isset($context["status"]) ? $context["status"] : null) == "failed")) {
                // line 45
                echo "        <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退款失败"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 46
(isset($context["status"]) ? $context["status"] : null) == "cancelled")) {
                // line 47
                echo "        <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已取消"), "html", null, true);
                echo "</span>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 51
    public function getlogLevel($__level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "level" => $__level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 52
            echo "    ";
            if (((isset($context["level"]) ? $context["level"] : null) == "info")) {
                // line 53
                echo "        <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提示"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 54
(isset($context["level"]) ? $context["level"] : null) == "warning")) {
                // line 55
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("警告"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 56
(isset($context["level"]) ? $context["level"] : null) == "error")) {
                // line 57
                echo "        <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("错误"), "html", null, true);
                echo "</span>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 61
    public function getcontentStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 62
            echo "    ";
            if (((isset($context["status"]) ? $context["status"] : null) == "published")) {
                // line 63
                echo "        <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已发布"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 64
(isset($context["status"]) ? $context["status"] : null) == "unpublished")) {
                // line 65
                echo "        <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未发布"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 66
(isset($context["status"]) ? $context["status"] : null) == "trash")) {
                // line 67
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回收站"), "html", null, true);
                echo "</span>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 71
    public function getarticleStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 72
            echo "    ";
            if (((isset($context["status"]) ? $context["status"] : null) == "published")) {
                // line 73
                echo "        <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已发布"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 74
(isset($context["status"]) ? $context["status"] : null) == "unpublished")) {
                // line 75
                echo "        <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未发布"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 76
(isset($context["status"]) ? $context["status"] : null) == "trash")) {
                // line 77
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回收站"), "html", null, true);
                echo "</span>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 81
    public function getdiscountStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 82
            echo "    ";
            if (((isset($context["status"]) ? $context["status"] : null) == "unstart")) {
                // line 83
                echo "        <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未开始"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 84
(isset($context["status"]) ? $context["status"] : null) == "running")) {
                // line 85
                echo "        <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("进行中"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 86
(isset($context["status"]) ? $context["status"] : null) == "finished")) {
                // line 87
                echo "        <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已结束"), "html", null, true);
                echo "</span>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 91
    public function getvideo_quality($__option__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "option" => $__option__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 92
            echo "     ";
            if (((isset($context["option"]) ? $context["option"] : null) == "low")) {
                // line 93
                echo "       ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("流畅"), "html", null, true);
                echo " <span class=\"text-muted\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("适合PPT讲解"), "html", null, true);
                echo ")</span>
    ";
            } elseif ((            // line 94
(isset($context["option"]) ? $context["option"] : null) == "normal")) {
                // line 95
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标准"), "html", null, true);
                echo " <span class=\"text-muted\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("适合屏幕录制、摄像头拍摄"), "html", null, true);
                echo ")</span>
    ";
            } elseif ((            // line 96
(isset($context["option"]) ? $context["option"] : null) == "high")) {
                // line 97
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("精细"), "html", null, true);
                echo " <span class=\"text-muted\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("适合动态电影"), "html", null, true);
                echo ")</span>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Common:data-dict-macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 97,  463 => 96,  456 => 95,  454 => 94,  447 => 93,  444 => 92,  432 => 91,  417 => 87,  415 => 86,  410 => 85,  408 => 84,  403 => 83,  400 => 82,  388 => 81,  373 => 77,  371 => 76,  366 => 75,  364 => 74,  359 => 73,  356 => 72,  344 => 71,  329 => 67,  327 => 66,  322 => 65,  320 => 64,  315 => 63,  312 => 62,  300 => 61,  285 => 57,  283 => 56,  278 => 55,  276 => 54,  271 => 53,  268 => 52,  256 => 51,  241 => 47,  239 => 46,  234 => 45,  232 => 44,  227 => 43,  225 => 42,  220 => 41,  217 => 40,  205 => 39,  190 => 35,  188 => 34,  183 => 33,  181 => 32,  176 => 31,  174 => 30,  169 => 29,  167 => 28,  162 => 27,  159 => 26,  147 => 25,  132 => 21,  130 => 20,  125 => 19,  123 => 18,  118 => 17,  116 => 16,  111 => 15,  109 => 14,  104 => 13,  101 => 12,  89 => 11,  74 => 7,  72 => 6,  67 => 5,  65 => 4,  60 => 3,  57 => 2,  45 => 1,  40 => 90,  37 => 80,  34 => 70,  31 => 60,  28 => 50,  25 => 38,  22 => 24,  19 => 10,);
    }
}
