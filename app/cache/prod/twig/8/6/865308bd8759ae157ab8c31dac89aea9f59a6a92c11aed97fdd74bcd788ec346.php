<?php

/* TopxiaAdminBundle::layout.html.twig */
class __TwigTemplate_865308bd8759ae157ab8c31dac89aea9f59a6a92c11aed97fdd74bcd788ec346 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'container' => array($this, 'block_container'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'page_title' => array($this, 'block_page_title'),
            'page_buttons' => array($this, 'block_page_buttons'),
            'content_header' => array($this, 'block_content_header'),
            'tabs' => array($this, 'block_tabs'),
            'capsule' => array($this, 'block_capsule'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaAdminBundle::layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle::layout.html.twig", 2);
        // line 3
        $context["self_macro"] = $this;
        // line 4
        echo "
";
        // line 5
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : null), null)) : (null));
        // line 6
        $context["currentMenu"] = $this->env->getExtension('permission.permission_extension')->getPermissionByCode((isset($context["menu"]) ? $context["menu"] : null));
        // line 7
        echo "
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
";
        // line 14
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getLocale", array(), "method"), "html", null, true);
        echo "\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <title>

    ";
        // line 23
        $this->displayBlock('title', $context, $blocks);
        // line 26
        echo "    ";
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " | EduSoho";
        }
        // line 27
        echo "  </title>

  ";
        // line 29
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 30
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" />
    <link href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 33
        echo "  
  ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "
  ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
</head>
<body>
  <div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getUrl("admin");
        echo "\">";
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo "CJEdu";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("教育管理后台"), "html", null, true);
        echo "</a>
      </div>
      <div class=\"navbar-collapse collapse\">
        ";
        // line 60
        $this->loadTemplate("PermissionBundle:Templates:navigation.html.twig", "TopxiaAdminBundle::layout.html.twig", 60)->display(array_merge($context, array("parentCode" => "admin")));
        // line 61
        echo "
        <ul class=\"nav navbar-nav navbar-right\">
          <li data-url=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("admin_common_admin");
        echo "\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" ><span class=\"glyphicon glyphicon-list admin-star\"></span> ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("常用"), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu shortcuts\">
              ";
        // line 66
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:CommonAdmin:commonAdmin"));
        echo "
            </ul>
          </li>
          <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回首页"), "html", null, true);
        echo "</a></li>

          <li class=\"dropdown\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nickname", array()), "html", null, true);
        echo " <span class=\"glyphicon glyphicon-chevron-down\"></span></a>
            <ul class=\"dropdown-menu main-list\">
              <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><i class=\"glyphicon glyphicon-off\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退出"), "html", null, true);
        echo "</a></li>
            </ul>
          </li>
        </ul>

      </div><!--/.navbar-collapse -->
    </div>
  </div>
  
  <div class=\"container\">
    
    ";
        // line 85
        $context["notifies"] = $this->env->getExtension('topxia_web_twig')->pluginUpdateNotify();
        // line 86
        echo "    ";
        if ( !twig_test_empty((isset($context["notifies"]) ? $context["notifies"] : null))) {
            // line 87
            echo "      <div class=\"alert alert-warning\">
        【重要】网站升级v7.2.0后，为保证正常使用，请务必及时升级插件（";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["notifies"]) ? $context["notifies"] : null), "html", null, true);
            echo "）至最新版！请立即升级！ <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
            echo "\">查看详情</a>
      </div>
    ";
        }
        // line 91
        echo "
    ";
        // line 92
        $this->displayBlock('container', $context, $blocks);
        // line 139
        echo "
  </div>

  ";
        // line 142
        $this->displayBlock('footer', $context, $blocks);
        // line 145
        echo "
  ";
        // line 146
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaAdminBundle::layout.html.twig", 146)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/js/admin-app.js"))));
        // line 147
        echo "  <div id=\"modal\" class=\"modal\" ></div>
  ";
        // line 148
        if (($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright") != 1)) {
            // line 149
            echo "    <div class=\"fixed-bar\">
      <a href=\"";
            // line 150
            echo $this->env->getExtension('routing')->getPath("admin_feedback");
            echo "\"  target='_blank' class=\"icon-question-text feedback\">
        <i class=\"es-icon es-icon-help\"></i>
        <span>";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("产品"), "html", null, true);
            echo "<br/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("反馈"), "html", null, true);
            echo "</span>
      </a>
    </div>
  ";
        }
        // line 156
        echo "</body>
</html>

";
    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        // line 24
        echo "      ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "name", array())), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->env->getExtension('permission.permission_extension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : null)), "name", array())), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->env->getExtension('permission.permission_extension')->getParentPermission($this->getAttribute($this->env->getExtension('permission.permission_extension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : null)), "code", array())), "name", array())), "html", null, true);
        echo "
    ";
    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 35
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin_v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/css/es-icon.css"), "html", null, true);
        echo "\" />
  ";
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 92
    public function block_container($context, array $blocks = array())
    {
        // line 93
        echo "      <div class=\"row\">  
        ";
        // line 94
        $this->displayBlock('content', $context, $blocks);
        // line 137
        echo "      </div>
    ";
    }

    // line 94
    public function block_content($context, array $blocks = array())
    {
        // line 95
        echo "          <div class=\"col-md-2\">
            ";
        // line 96
        $this->displayBlock('sidebar', $context, $blocks);
        // line 99
        echo "          </div>

          <div class=\"col-md-10\">
            <div class=\"page-header clearfix\">

              <h1 class=\"pull-left\">
                ";
        // line 105
        $this->displayBlock('page_title', $context, $blocks);
        // line 108
        echo "              </h1>
              <div class=\"pull-right\">

                ";
        // line 111
        $this->displayBlock('page_buttons', $context, $blocks);
        // line 123
        echo "
              </div>
            </div>

            ";
        // line 127
        $this->displayBlock('content_header', $context, $blocks);
        // line 128
        echo "            
            ";
        // line 129
        $this->displayBlock('tabs', $context, $blocks);
        // line 130
        echo "
            ";
        // line 131
        $this->displayBlock('capsule', $context, $blocks);
        // line 132
        echo "
            ";
        // line 133
        $this->displayBlock('main', $context, $blocks);
        // line 134
        echo "          </div>

        ";
    }

    // line 96
    public function block_sidebar($context, array $blocks = array())
    {
        // line 97
        echo "              ";
        $this->loadTemplate("PermissionBundle:Templates:side-bar.html.twig", "TopxiaAdminBundle::layout.html.twig", 97)->display($context);
        // line 98
        echo "            ";
    }

    // line 105
    public function block_page_title($context, array $blocks = array())
    {
        // line 106
        echo "                  ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "fullname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "fullname", array()), $this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "name", array()))) : ($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "name", array()))), "html", null, true);
        echo "
                ";
    }

    // line 111
    public function block_page_buttons($context, array $blocks = array())
    {
        // line 112
        echo "
                  ";
        // line 113
        if ((((($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "mode", array()), "")) : ("")) == "capsules") && ((array_key_exists("capsule", $context)) ? (_twig_default_filter((isset($context["capsule"]) ? $context["capsule"] : null), false)) : (false)))) {
            // line 114
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('permission.permission_extension')->getSubPermissions($this->getAttribute($this->env->getExtension('permission.permission_extension')->getPermissionByCode((isset($context["capsule"]) ? $context["capsule"] : null)), "code", array()), "topBtn"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 115
                echo "                      ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                  ";
        } else {
            // line 118
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('permission.permission_extension')->getSubPermissions($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "code", array()), "topBtn"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 119
                echo "                      ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "                  ";
        }
        // line 122
        echo "                ";
    }

    // line 127
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 129
    public function block_tabs($context, array $blocks = array())
    {
        $this->loadTemplate("PermissionBundle:Templates:tabs.html.twig", "TopxiaAdminBundle::layout.html.twig", 129)->display($context);
    }

    // line 131
    public function block_capsule($context, array $blocks = array())
    {
    }

    // line 133
    public function block_main($context, array $blocks = array())
    {
    }

    // line 142
    public function block_footer($context, array $blocks = array())
    {
        // line 143
        echo "    ";
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.analytics");
        echo " 
  ";
    }

    // line 159
    public function getmenu_link_html($___context__ = null, $__menu__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "_context" => $___context__,
            "menu" => $__menu__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 160
            echo "  <a 
  ";
            // line 161
            if ((isset($context["class"]) ? $context["class"] : null)) {
                // line 162
                echo "    class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\"
  ";
            }
            // line 164
            echo "  ";
            if (((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "modal")) {
                // line 165
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('permission.permission_extension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : null)), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  ";
            } else {
                // line 169
                echo "    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('permission.permission_extension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : null)), "html", null, true);
                echo "\"
  ";
            }
            // line 171
            echo "  ";
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array()), false)) : (false))) {
                // line 172
                echo "    target=\"blank\"
  ";
            }
            // line 174
            echo "  >";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "name", array())), "html", null, true);
            echo "</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  505 => 174,  501 => 172,  498 => 171,  492 => 169,  484 => 165,  481 => 164,  475 => 162,  473 => 161,  470 => 160,  456 => 159,  449 => 143,  446 => 142,  441 => 133,  436 => 131,  430 => 129,  425 => 127,  421 => 122,  418 => 121,  409 => 119,  404 => 118,  401 => 117,  392 => 115,  387 => 114,  385 => 113,  382 => 112,  379 => 111,  372 => 106,  369 => 105,  365 => 98,  362 => 97,  359 => 96,  353 => 134,  351 => 133,  348 => 132,  346 => 131,  343 => 130,  341 => 129,  338 => 128,  336 => 127,  330 => 123,  328 => 111,  323 => 108,  321 => 105,  313 => 99,  311 => 96,  308 => 95,  305 => 94,  300 => 137,  298 => 94,  295 => 93,  292 => 92,  287 => 42,  281 => 39,  277 => 38,  273 => 37,  269 => 36,  264 => 35,  261 => 34,  250 => 24,  247 => 23,  240 => 156,  231 => 152,  226 => 150,  223 => 149,  221 => 148,  218 => 147,  216 => 146,  213 => 145,  211 => 142,  206 => 139,  204 => 92,  201 => 91,  193 => 88,  190 => 87,  187 => 86,  185 => 85,  169 => 74,  164 => 72,  156 => 69,  150 => 66,  145 => 64,  141 => 63,  137 => 61,  135 => 60,  124 => 57,  109 => 45,  105 => 44,  102 => 43,  100 => 42,  97 => 41,  95 => 34,  92 => 33,  87 => 31,  82 => 30,  80 => 29,  76 => 27,  71 => 26,  69 => 23,  63 => 20,  53 => 14,  45 => 7,  43 => 6,  41 => 5,  38 => 4,  36 => 3,  34 => 2,  32 => 1,);
    }
}
