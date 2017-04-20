<?php

/* OrgBundle:Org:org-tree-select.html.twig */
class __TwigTemplate_ce0dee84526a24de0fd23346ab2afe9e64035483346f664ddba9d7918d10951c extends Twig_Template
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
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.enable_org", "0")) {
            echo " 
  
  ";
            // line 4
            echo "  ";
            // line 5
            echo "
  ";
            // line 6
            $context["modal"] = ((array_key_exists("modal", $context)) ? (_twig_default_filter((isset($context["modal"]) ? $context["modal"] : null), null)) : (null));
            // line 7
            echo "
  ";
            // line 8
            if (((isset($context["modal"]) ? $context["modal"] : null) == "modal")) {
                // line 9
                echo "    <script>app.load('topxiawebbundle/controller/widget/category-select')</script>
  ";
            } else {
                // line 11
                echo "    ";
                $this->env->getExtension('topxia_web_twig')->loadScript("topxiawebbundle/controller/widget/category-select");
                // line 12
                echo "  ";
            }
            // line 13
            echo "
  ";
            // line 14
            $context["colmd"] = ((array_key_exists("colmd", $context)) ? (_twig_default_filter((isset($context["colmd"]) ? $context["colmd"] : null), 8)) : (8));
            // line 15
            echo "  ";
            $context["lablecolmd"] = ((array_key_exists("lablecolmd", $context)) ? (_twig_default_filter((isset($context["lablecolmd"]) ? $context["lablecolmd"] : null), 2)) : (2));
            // line 16
            echo "  ";
            $context["nocolmd"] = ((array_key_exists("nocolmd", $context)) ? (_twig_default_filter((isset($context["nocolmd"]) ? $context["nocolmd"] : null), false)) : (false));
            // line 17
            echo "  ";
            $context["inputClass"] = ((array_key_exists("inputClass", $context)) ? (_twig_default_filter((isset($context["inputClass"]) ? $context["inputClass"] : null), "")) : (""));
            echo " 

  ";
            // line 19
            $context["currentOrgCode"] = ((array_key_exists("orgCode", $context)) ? (_twig_default_filter((isset($context["orgCode"]) ? $context["orgCode"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "orgCode", array()))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "orgCode", array())));
            // line 20
            echo "  ";
            $context["currentOrgTree"] = $this->env->getExtension('topxia_data_twig')->getData("OrgTree", array("orgCode" => ((twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) ? (null) : ((isset($context["currentOrgCode"]) ? $context["currentOrgCode"] : null)))));
            // line 21
            echo "  
    <div class=\"form-group ";
            // line 22
            if (((isset($context["modal"]) ? $context["modal"] : null) == "list")) {
                echo "controls";
            }
            echo "\">
      ";
            // line 23
            if (((isset($context["modal"]) ? $context["modal"] : null) != "list")) {
                // line 24
                echo "      <label class=\"";
                if ( !(isset($context["nocolmd"]) ? $context["nocolmd"] : null)) {
                    echo " col-md-";
                    echo twig_escape_filter($this->env, (isset($context["lablecolmd"]) ? $context["lablecolmd"] : null), "html", null, true);
                }
                echo " control-label\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("组织机构"), "html", null, true);
                echo "</label>
      <div class=\"";
                // line 25
                if ( !(isset($context["nocolmd"]) ? $context["nocolmd"] : null)) {
                    echo " col-md-";
                    echo twig_escape_filter($this->env, (isset($context["colmd"]) ? $context["colmd"] : null), "html", null, true);
                    echo " ";
                }
                echo "  controls\">
      ";
            }
            // line 27
            echo "      
      <select data-role=\"tree-select\" name=\"orgCode\" class=\"form-control tree-select ";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["inputClass"]) ? $context["inputClass"] : null), "html", null, true);
            echo "\">
        ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currentOrgTree"]) ? $context["currentOrgTree"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
                // line 30
                echo "          <option value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "orgCode", array()), "html", null, true);
                echo " ";
                if (($this->getAttribute($context["org"], "orgCode", array()) == (isset($context["currentOrgCode"]) ? $context["currentOrgCode"] : null))) {
                    echo "selected";
                }
                echo ">";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($this->getAttribute($context["org"], "depth", array()) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($this->getAttribute($context["org"], "depth", array()) > 1)) {
                        echo "　";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "name", array()), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['org'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "      </select>

      ";
            // line 34
            if (((isset($context["modal"]) ? $context["modal"] : null) != "list")) {
                // line 35
                echo "      </div>
      ";
            }
            // line 37
            echo "    </div>
 ";
        }
    }

    public function getTemplateName()
    {
        return "OrgBundle:Org:org-tree-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 37,  140 => 35,  138 => 34,  134 => 32,  109 => 30,  105 => 29,  101 => 28,  98 => 27,  89 => 25,  79 => 24,  77 => 23,  71 => 22,  68 => 21,  65 => 20,  63 => 19,  57 => 17,  54 => 16,  51 => 15,  49 => 14,  46 => 13,  43 => 12,  40 => 11,  36 => 9,  34 => 8,  31 => 7,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
