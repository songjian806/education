<?php

/* TopxiaWebBundle::macro.html.twig */
class __TwigTemplate_17c4a14b6fec15c507c2127a1f48f6cdf680502d02e638b58f9a23bec79fa35e extends Twig_Template
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
        // line 73
        echo "
";
        // line 96
        echo "
";
        // line 117
        echo "
";
    }

    // line 2
    public function getuser_avatar($__user__ = null, $__class__ = null, $__imgClass__ = null, $__card__ = true)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "imgClass" => $__imgClass__,
            "card" => $__card__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
                // line 4
                echo "  <a class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo " ";
                if ((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card"))) {
                    echo "js-user-card";
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\" data-card-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_card_show", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\" data-user-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
                echo "\">
    ";
                // line 5
                if (((isset($context["imgClass"]) ? $context["imgClass"] : $this->getContext($context, "imgClass")) == "avatar-md")) {
                    // line 6
                    echo "      ";
                    $context["userAvatar"] = $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mediumAvatar", array());
                    // line 7
                    echo "    ";
                } elseif (((isset($context["imgClass"]) ? $context["imgClass"] : $this->getContext($context, "imgClass")) == "avatar-lg")) {
                    // line 8
                    echo "      ";
                    $context["userAvatar"] = $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "largeAvatar", array());
                    // line 9
                    echo "    ";
                } else {
                    // line 10
                    echo "      ";
                    $context["userAvatar"] = $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "smallAvatar", array());
                    // line 11
                    echo "    ";
                }
                // line 12
                echo "    <img class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("imgClass", $context)) ? (_twig_default_filter((isset($context["imgClass"]) ? $context["imgClass"] : $this->getContext($context, "imgClass")), "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath((isset($context["userAvatar"]) ? $context["userAvatar"] : $this->getContext($context, "userAvatar")), "avatar.png"), "html", null, true);
                echo "\">

  </a>
  ";
            } else {
                // line 16
                echo "    <a class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\" href=\"javascript:;\">
      <img class=\"";
                // line 17
                echo twig_escape_filter($this->env, ((array_key_exists("imgClass", $context)) ? (_twig_default_filter((isset($context["imgClass"]) ? $context["imgClass"] : $this->getContext($context, "imgClass")), "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath("", "avatar.png"), "html", null, true);
                echo "\">
    </a>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function getuser_avatar_link($__user__ = null, $__size__ = null, $__options__ = array())
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "size" => $__size__,
            "options" => $__options__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 24
            if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
                // line 25
                echo "    <a
      class=\"avatar-link-{size} ";
                // line 26
                if (twig_in_filter("card", (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")))) {
                    echo "js-user-card";
                }
                echo "\"
      ";
                // line 27
                if (twig_in_filter("_blank", (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")))) {
                    // line 28
                    echo "        target=\"_blank\"
      ";
                }
                // line 30
                echo "      href=\"";
                if (twig_in_filter("null_link", (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")))) {
                    echo "javascript:;";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                }
                echo "\"
      data-card-url=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_card_show", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\"
      data-user-id=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
                echo "\">
      ";
                // line 33
                echo $this->getAttribute($this, "user_avater_img", array(0 => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 1 => (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size"))), "method");
                echo "
    </a>
  ";
            } else {
                // line 36
                echo "    <a class=\"avatar-link-{size}\" href=\"javascript:;\">
      ";
                // line 37
                echo $this->getAttribute($this, "user_avater_img", array(0 => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 1 => (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size"))), "method");
                echo "
    </a>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 42
    public function getuser_avater_img($__user__ = null, $__size__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "size" => $__size__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 43
            $context["userAvatar"] = (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), ((isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")) . "Avatar"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), ((isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")) . "Avatar"), array(), "array"), "")) : (""));
            // line 44
            echo "  <img class=\"avatar-{size}\"  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath((isset($context["userAvatar"]) ? $context["userAvatar"] : $this->getContext($context, "userAvatar")), "avatar.png", "user"), "html", null, true);
            echo "\">";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 58
    public function getuser_link($__user__ = null, $__class__ = null, $__card__ = true)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "card" => $__card__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 59
            if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
                // line 60
                echo "    <a class=\"link-dark ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nickname", array()), "html", null, true);
                echo "</a>
  ";
            } else {
                // line 62
                echo "    <a class=\"link-dark ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\" href=\"javascript:;\"><del>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户不存在"), "html", null, true);
                echo "</del></a>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 66
    public function getflash_messages()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 67
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
                // line 68
                echo "    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["flashMessages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 69
                    echo "      <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">";
                    echo $context["flashMessage"];
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 74
    public function getbytesToSize($__bytes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 75
            echo "  ";
            ob_start();
            // line 76
            echo "      
      ";
            // line 77
            $context["kilobyte"] = 1024;
            // line 78
            echo "      ";
            $context["megabyte"] = ((isset($context["kilobyte"]) ? $context["kilobyte"] : $this->getContext($context, "kilobyte")) * 1024);
            // line 79
            echo "      ";
            $context["gigabyte"] = ((isset($context["megabyte"]) ? $context["megabyte"] : $this->getContext($context, "megabyte")) * 1024);
            // line 80
            echo "      ";
            $context["terabyte"] = ((isset($context["gigabyte"]) ? $context["gigabyte"] : $this->getContext($context, "gigabyte")) * 1024);
            // line 81
            echo "
      ";
            // line 82
            if (((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["kilobyte"]) ? $context["kilobyte"] : $this->getContext($context, "kilobyte")))) {
                // line 83
                echo "          ";
                echo twig_escape_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) . " B"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 84
(isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["megabyte"]) ? $context["megabyte"] : $this->getContext($context, "megabyte")))) {
                // line 85
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["kilobyte"]) ? $context["kilobyte"] : $this->getContext($context, "kilobyte"))), 2, ".") . " KB"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 86
(isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["gigabyte"]) ? $context["gigabyte"] : $this->getContext($context, "gigabyte")))) {
                // line 87
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["megabyte"]) ? $context["megabyte"] : $this->getContext($context, "megabyte"))), 2, ".") . " MB"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 88
(isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["terabyte"]) ? $context["terabyte"] : $this->getContext($context, "terabyte")))) {
                // line 89
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["gigabyte"]) ? $context["gigabyte"] : $this->getContext($context, "gigabyte"))), 2, ".") . " GB"), "html", null, true);
                echo "
      ";
            } else {
                // line 91
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["terabyte"]) ? $context["terabyte"] : $this->getContext($context, "terabyte"))), 2, ".") . " TB"), "html", null, true);
                echo "
      ";
            }
            // line 93
            echo "
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 97
    public function getpaginator($__paginator__ = null, $__class__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "class" => $__class__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 98
            echo "  ";
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "lastPage", array()) > 1)) {
                // line 99
                echo "    <nav class=\" ";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination\">
        ";
                // line 101
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "firstPage", array()))) {
                    // line 102
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "firstPage", array())), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("首页"), "html", null, true);
                    echo "</a></li>
          <li><a  href=\"";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "previousPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronleft\"></i></a></li>
        ";
                }
                // line 105
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 106
                    echo "          <li ";
                    if (($context["page"] == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()))) {
                        echo "class=\"active\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $context["page"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "
        ";
                // line 109
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "lastPage", array()))) {
                    // line 110
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nextPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronright\"></i></a></li>
          <li><a  href=\"";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getLastPage", array(), "method")), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("尾页"), "html", null, true);
                    echo "</a></li>
        ";
                }
                // line 113
                echo "      </ul>
    </nav>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 118
    public function getstar($__score__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "score" => $__score__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 119
            echo "  ";
            $context["floorScore"] = twig_round((isset($context["score"]) ? $context["score"] : $this->getContext($context, "score")), 0, "floor");
            // line 120
            echo "  ";
            $context["emptyNum"] = (5 - (isset($context["floorScore"]) ? $context["floorScore"] : $this->getContext($context, "floorScore")));
            // line 121
            echo "
  ";
            // line 122
            if (((isset($context["floorScore"]) ? $context["floorScore"] : $this->getContext($context, "floorScore")) > 0)) {
                // line 123
                echo "    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["floorScore"]) ? $context["floorScore"] : $this->getContext($context, "floorScore"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 124
                    echo "      <i class=\"es-icon es-icon-star color-warning\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "  ";
            }
            // line 127
            echo "
  ";
            // line 128
            if ((((isset($context["score"]) ? $context["score"] : $this->getContext($context, "score")) - (isset($context["floorScore"]) ? $context["floorScore"] : $this->getContext($context, "floorScore"))) >= 0.5)) {
                // line 129
                echo "    ";
                $context["emptyNum"] = ((isset($context["emptyNum"]) ? $context["emptyNum"] : $this->getContext($context, "emptyNum")) - 1);
                // line 130
                echo "    <i class=\"es-icon es-icon-starhalf color-warning\"></i>
  ";
            }
            // line 132
            echo "
  ";
            // line 133
            if (((isset($context["emptyNum"]) ? $context["emptyNum"] : $this->getContext($context, "emptyNum")) > 0)) {
                // line 134
                echo "    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["emptyNum"]) ? $context["emptyNum"] : $this->getContext($context, "emptyNum"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 135
                    echo "      <i class=\"es-icon es-icon-star\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  538 => 137,  531 => 135,  526 => 134,  524 => 133,  521 => 132,  517 => 130,  514 => 129,  512 => 128,  509 => 127,  506 => 126,  499 => 124,  494 => 123,  492 => 122,  489 => 121,  486 => 120,  483 => 119,  471 => 118,  457 => 113,  450 => 111,  445 => 110,  443 => 109,  440 => 108,  425 => 106,  420 => 105,  415 => 103,  408 => 102,  406 => 101,  400 => 99,  397 => 98,  384 => 97,  371 => 93,  365 => 91,  359 => 89,  357 => 88,  352 => 87,  350 => 86,  345 => 85,  343 => 84,  338 => 83,  336 => 82,  333 => 81,  330 => 80,  327 => 79,  324 => 78,  322 => 77,  319 => 76,  316 => 75,  304 => 74,  289 => 71,  278 => 69,  273 => 68,  268 => 67,  257 => 66,  240 => 62,  230 => 60,  228 => 59,  214 => 58,  201 => 44,  199 => 43,  186 => 42,  171 => 37,  168 => 36,  162 => 33,  158 => 32,  154 => 31,  145 => 30,  141 => 28,  139 => 27,  133 => 26,  130 => 25,  128 => 24,  114 => 23,  97 => 17,  92 => 16,  82 => 12,  79 => 11,  76 => 10,  73 => 9,  70 => 8,  67 => 7,  64 => 6,  62 => 5,  47 => 4,  45 => 3,  30 => 2,  25 => 117,  22 => 96,  19 => 73,);
    }
}
