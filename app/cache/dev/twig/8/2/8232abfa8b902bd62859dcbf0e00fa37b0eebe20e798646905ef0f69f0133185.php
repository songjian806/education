<?php

/* TopxiaWebBundle::layout.html.twig */
class __TwigTemplate_8232abfa8b902bd62859dcbf0e00fa37b0eebe20e798646905ef0f69f0133185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'bottom_content' => array($this, 'block_bottom_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
            'esBar' => array($this, 'block_esBar'),
            'floatConsult' => array($this, 'block_floatConsult'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle::layout.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
";
        // line 8
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method"), "html", null, true);
        echo "\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        // line 18
        echo "</title>
  <meta name=\"keywords\" content=\"";
        // line 19
        ob_start();
        $this->displayBlock('keywords', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\" />
  <meta name=\"description\" content=\"";
        // line 20
        ob_start();
        $this->displayBlock('description', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\" />
  <meta content=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <meta content=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "isLogin", array(), "method"), 0)) : (0)), "html", null, true);
        echo "\" name=\"is-login\" />
  <meta content=\"";
        // line 23
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("login_bind.weixinmob_enabled"), 0), "html", null, true);
        echo "\" name=\"is-open\" />
  ";
        // line 24
        echo $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 25
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 26
            echo "  <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" />
  <link rel=\"shortcut icon\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" media=\"screen\"/>
  ";
        }
        // line 29
        echo "
  ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "
  <!--[if lt IE 9]>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 41
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 42
        echo "
</head>
<body ";
        // line 44
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "html", null, true);
            echo "\"";
        }
        echo ">

";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaWebBundle::layout.html.twig", 90)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
        // line 91
        echo "
</body>
</html>";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EduSoho"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
        }
        if ((($this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned", "0") != "1") || (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright"), 0) == 2))) {
            echo " - Powered By EduSoho";
        }
    }

    // line 19
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 20
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_description"), "html", null, true);
    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $context["currentTheme"] = $this->env->getExtension('topxia_theme_twig')->getCurrentTheme();
        // line 32
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:Default:stylesheet.html.twig", "TopxiaWebBundle::layout.html.twig", 32)->display(array_merge($context, array("config" => (isset($context["currentTheme"]) ? $context["currentTheme"] : $this->getContext($context, "currentTheme")), "isEditColor" => ((array_key_exists("isEditColor", $context)) ? (_twig_default_filter((isset($context["isEditColor"]) ? $context["isEditColor"] : $this->getContext($context, "isEditColor")), false)) : (false)))));
        // line 33
        echo "
  ";
    }

    // line 41
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "  <div class=\"es-wrap\">

    ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 53
        echo "
    ";
        // line 54
        $this->displayBlock('full_content', $context, $blocks);
        // line 63
        echo "
    ";
        // line 64
        $this->displayBlock('footer', $context, $blocks);
        // line 67
        echo "
    ";
        // line 68
        $this->displayBlock('bottom', $context, $blocks);
        // line 69
        echo "  </div>

  ";
        // line 71
        $this->displayBlock('esBar', $context, $blocks);
        // line 76
        echo "
  ";
        // line 77
        $this->displayBlock('floatConsult', $context, $blocks);
        // line 84
        echo "
  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>
";
    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        // line 50
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle::site-hint.html.twig", "TopxiaWebBundle::layout.html.twig", 50)->display($context);
        // line 51
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Default:header.html.twig", "TopxiaWebBundle::layout.html.twig", 51)->display($context);
        // line 52
        echo "    ";
    }

    // line 54
    public function block_full_content($context, array $blocks = array())
    {
        // line 55
        echo "      ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 56
        echo "
      <div id=\"content-container\" class=\"container\">
        ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "      </div>

      ";
        // line 61
        $this->displayBlock('bottom_content', $context, $blocks);
        // line 62
        echo "    ";
    }

    // line 55
    public function block_top_content($context, array $blocks = array())
    {
    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
    }

    // line 61
    public function block_bottom_content($context, array $blocks = array())
    {
    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        // line 65
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Default:footer.html.twig", "TopxiaWebBundle::layout.html.twig", 65)->display($context);
        // line 66
        echo "    ";
    }

    // line 68
    public function block_bottom($context, array $blocks = array())
    {
    }

    // line 71
    public function block_esBar($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
            // line 73
            echo "        ";
            $this->loadTemplate("TopxiaWebBundle:EsBar:index.html.twig", "TopxiaWebBundle::layout.html.twig", 73)->display($context);
            // line 74
            echo "    ";
        }
        // line 75
        echo "  ";
    }

    // line 77
    public function block_floatConsult($context, array $blocks = array())
    {
        // line 78
        echo "    ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter((isset($context["consultDisplay"]) ? $context["consultDisplay"] : $this->getContext($context, "consultDisplay")), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : $this->getContext($context, "siteNav")))) : ("")) == "/")))) {
            // line 79
            echo "      ";
            if ( !$this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
                // line 80
                echo "        ";
                $this->loadTemplate("TopxiaWebBundle::float-consult.html.twig", "TopxiaWebBundle::layout.html.twig", 80)->display($context);
                // line 81
                echo "      ";
            }
            // line 82
            echo "    ";
        }
        // line 83
        echo "  ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 83,  332 => 82,  329 => 81,  326 => 80,  323 => 79,  320 => 78,  317 => 77,  313 => 75,  310 => 74,  307 => 73,  304 => 72,  301 => 71,  296 => 68,  292 => 66,  289 => 65,  286 => 64,  281 => 61,  276 => 58,  271 => 55,  267 => 62,  265 => 61,  261 => 59,  259 => 58,  255 => 56,  252 => 55,  249 => 54,  245 => 52,  242 => 51,  239 => 50,  236 => 49,  228 => 85,  225 => 84,  223 => 77,  220 => 76,  218 => 71,  214 => 69,  212 => 68,  209 => 67,  207 => 64,  204 => 63,  202 => 54,  199 => 53,  197 => 49,  193 => 47,  190 => 46,  185 => 41,  180 => 33,  177 => 32,  174 => 31,  171 => 30,  165 => 20,  159 => 19,  148 => 16,  145 => 15,  139 => 91,  137 => 90,  134 => 89,  132 => 46,  123 => 44,  119 => 42,  117 => 41,  111 => 38,  107 => 37,  103 => 35,  101 => 30,  98 => 29,  93 => 27,  88 => 26,  86 => 25,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  64 => 20,  58 => 19,  55 => 18,  53 => 15,  43 => 8,  36 => 2,  34 => 1,);
    }
}
