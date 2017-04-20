<?php

/* TopxiaWebBundle:Default:index.html.twig */
class __TwigTemplate_82b93c4df1302c9fc040932aef47bb1bf40adf63bf06eb20e86ecf3092f231b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'full_content' => array($this, 'block_full_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["bodyClass"] = "homepage";
        // line 7
        $context["siteNav"] = "/";
        // line 8
        $context["script_controller"] = "index";
        // line 9
        $context["_target_path"] = $this->env->getExtension('routing')->getPath("homepage");
        // line 11
        $context["currentTheme"] = $this->env->getExtension('topxia_theme_twig')->getCurrentTheme();
        // line 12
        $context["themeConfig"] = ((((array_key_exists("isEditColor", $context)) ? (_twig_default_filter((isset($context["isEditColor"]) ? $context["isEditColor"] : null), false)) : (false))) ? ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : null), "config", array())) : ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : null), "confirmConfig", array())));
        // line 13
        $context["allConfig"] = $this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : null), "allConfig", array());
        // line 15
        $context["isIndex"] = true;
        // line 16
        $context["consultDisplay"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_description"), "html", null, true);
    }

    // line 18
    public function block_full_content($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $asm89CacheStrategy1 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey("jianmo/home/top/banner", 600        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 20
                echo "      ";
                echo $this->env->getExtension('topxia_block_twig')->showBlock("jianmo:home_top_banner");
                echo "
    ";
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
        // line 22
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "blocks", array(), "any", false, true), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "blocks", array(), "any", false, true), "left", array()), array())) : (array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 23
            echo "
      ";
            // line 24
            $context["code"] = $this->getAttribute($context["config"], "code", array());
            // line 25
            echo "      ";
            if ((((($this->getAttribute($context["config"], "sortName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "sortName", array()), "")) : ("")) == "recommended") && ((isset($context["code"]) ? $context["code"] : null) == "category-course"))) {
                // line 26
                echo "        ";
                $context["code"] = "recommend-course";
                // line 27
                echo "      ";
            }
            // line 28
            echo "
      ";
            // line 29
            $context["category"] = (((($this->getAttribute($context["config"], "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "categoryId", array()), 0)) : (0))) ? ($this->env->getExtension('topxia_data_twig')->getData("Category", array("categoryId" => $this->getAttribute($context["config"], "categoryId", array())))) : (null));
            // line 30
            echo "      ";
            if (((isset($context["code"]) ? $context["code"] : null) == "friend-link")) {
                // line 31
                echo "         ";
                $this->loadTemplate((("TopxiaWebBundle:Default:" . (isset($context["code"]) ? $context["code"] : null)) . ".html.twig"), "TopxiaWebBundle:Default:index.html.twig", 31)->display(array_merge($context, array("friendlyLinks" => (isset($context["friendlyLinks"]) ? $context["friendlyLinks"] : null))));
                // line 32
                echo "      ";
            } elseif (((isset($context["code"]) ? $context["code"] : null) != "footer-link")) {
                // line 33
                echo "        ";
                if (((isset($context["code"]) ? $context["code"] : null) != "course-grid-with-condition-index")) {
                    // line 34
                    echo "          ";
                    $asm89CacheStrategy2 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
                    $asm89Key2 = $asm89CacheStrategy2->generateKey(("jianmo/default/" . (isset($context["code"]) ? $context["code"] : null)), 600                    );
                    $asm89CacheBody2 = $asm89CacheStrategy2->fetchBlock($asm89Key2);
                    if ($asm89CacheBody2 === false) {
                        ob_start();
                            // line 35
                            echo "            ";
                            $this->loadTemplate((("TopxiaWebBundle:Default:" . (isset($context["code"]) ? $context["code"] : null)) . ".html.twig"), "TopxiaWebBundle:Default:index.html.twig", 35)->display(array_merge($context, array("config" => $context["config"], "category" => (isset($context["category"]) ? $context["category"] : null))));
                            // line 36
                            echo "          ";
                        
                        $asm89CacheBody2 = ob_get_clean();
                        $asm89CacheStrategy2->saveBlock($asm89Key2, $asm89CacheBody2);
                    }
                    echo $asm89CacheBody2;
                    // line 37
                    echo "        ";
                } else {
                    // line 38
                    echo "          ";
                    $this->loadTemplate((("TopxiaWebBundle:Default:" . (isset($context["code"]) ? $context["code"] : null)) . ".html.twig"), "TopxiaWebBundle:Default:index.html.twig", 38)->display(array_merge($context, array("config" => $context["config"], "category" => (isset($context["category"]) ? $context["category"] : null))));
                    // line 39
                    echo "        ";
                }
                // line 40
                echo "      ";
            }
            // line 41
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 42,  159 => 41,  156 => 40,  153 => 39,  150 => 38,  147 => 37,  140 => 36,  137 => 35,  130 => 34,  127 => 33,  124 => 32,  121 => 31,  118 => 30,  116 => 29,  113 => 28,  110 => 27,  107 => 26,  104 => 25,  102 => 24,  99 => 23,  81 => 22,  71 => 20,  64 => 19,  61 => 18,  55 => 4,  49 => 3,  45 => 1,  43 => 16,  41 => 15,  39 => 13,  37 => 12,  35 => 11,  33 => 9,  31 => 8,  29 => 7,  27 => 6,  11 => 1,);
    }
}
