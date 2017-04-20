<?php

/* @theme/jianmo/block/carousel.template.html.twig */
class __TwigTemplate_597e99e9c378c382403e760b65f5f6d9035563b77aa8f85e53ef42b82eea1d4a extends Twig_Template
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
        echo "<section class=\"es-poster swiper-container\">
  <div class=\"swiper-wrapper\">
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posters"]) ? $context["posters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["poster"]) {
            // line 4
            echo "      ";
            if (($this->getAttribute($context["poster"], "status", array()) == 1)) {
                // line 5
                echo "        ";
                if (($this->getAttribute($context["poster"], "mode", array()) == "img")) {
                    // line 6
                    echo "          <div class=\"swiper-slide swiper-hidden\" style=\"background: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["poster"], "background", array()), "html", null, true);
                    echo ";\">
            <div ";
                    // line 7
                    if (($this->getAttribute($context["poster"], "layout", array()) == "limitWide")) {
                        echo "class=\"container\"";
                    }
                    echo ">
              <a href=\"";
                    // line 8
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["poster"], "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["poster"], "href", array()), "")) : ("")), "html", null, true);
                    echo "\" target=\"_blank\" ><img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["poster"], "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["poster"], "src", array()), "")) : ("")), "html", null, true);
                    echo "\">
              </a>
            </div>
          </div>
        ";
                } elseif (($this->getAttribute(                // line 12
$context["poster"], "mode", array()) == "html")) {
                    // line 13
                    echo "            ";
                    echo $this->getAttribute($context["poster"], "html", array());
                    echo "
        ";
                }
                // line 15
                echo "      ";
            }
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poster'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </div>
  <div class=\"swiper-pager\"></div>
</section>";
    }

    public function getTemplateName()
    {
        return "@theme/jianmo/block/carousel.template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  64 => 16,  61 => 15,  55 => 13,  53 => 12,  44 => 8,  38 => 7,  33 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
