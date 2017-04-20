<?php

/* TopxiaAdminBundle:Block:block-visual-items.html.twig */
class __TwigTemplate_a648e1a6253506e46d0ceeedde1585f5b6e9d71917f8aaa3a2102d12ccc22bc7 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "meta", array(), "any", false, true), "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "meta", array(), "any", false, true), "items", array()), null)) : (null)));
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
        foreach ($context['_seq'] as $context["code"] => $context["item"]) {
            // line 2
            echo "  ";
            if (($this->getAttribute($context["item"], "type", array()) != "poster")) {
                // line 3
                echo "    <section id=\"js-affix-";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">
      <div class=\"item-title\">
        <strong>";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</strong>
        <p class=\"text-muted\">";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "desc", array()), "html", null, true);
                echo "</p>
      </div>

      <div class=\"panel-group sortable-list\" id=\"js-accordion-";
                // line 9
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\"  data-code=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\" data-prefix=\"data[";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "]\" data-count=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "count", array()), "html", null, true);
                echo "\" data-role=\"collapse\" role=\"tablist\" aria-multiselectable=\"true\">
        ";
                // line 10
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "data", array(), "any", false, true), $context["code"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "data", array(), "any", false, true), $context["code"], array(), "array"), null)) : (null)));
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
                foreach ($context['_seq'] as $context["dataId"] => $context["data"]) {
                    // line 11
                    echo "          <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\" id=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "-heading-";
                    echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                    echo "\" data-toggle=\"collapse\" data-parent=\"#js-accordion-";
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "\" href=\"#";
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "-collapse-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                    echo "\" aria-expanded=\"false\" aria-controls=\"";
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "-collapse-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                    echo "\">
              <h4 class=\"panel-title clearfix\">
                <i class=\"js-move-seq glyphicon glyphicon-move pull-left mrs\"></i>
                <span class=\"panel-item-title ellipsis\">";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo "</span>
                <span class=\"pull-left\">&nbsp;-&nbsp;</span>
                ";
                    // line 17
                    $this->loadTemplate((("TopxiaAdminBundle:Block/Label:" . $this->getAttribute($context["item"], "type", array())) . ".html.twig"), "TopxiaAdminBundle:Block:block-visual-items.html.twig", 17)->display($context);
                    // line 18
                    echo "                <i class=\"js-expand-icon glyphicon glyphicon-chevron-down pull-right\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("展开"), "html", null, true);
                    echo "\"></i>
                ";
                    // line 19
                    if (($this->getAttribute($context["item"], "count", array()) != 1)) {
                        // line 20
                        echo "                  <i class=\"mrs js-remove-btn glyphicon glyphicon-trash pull-right\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
                        echo "\"></i>
                ";
                    }
                    // line 22
                    echo "              </h4>

            </div>
            <div id=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "-collapse-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                    echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"";
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "-heading-";
                    echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                    echo "\">
              <div class=\"panel-body\">
               ";
                    // line 27
                    $this->loadTemplate((("TopxiaAdminBundle:Block/Tag:" . $this->getAttribute($context["item"], "type", array())) . ".html.twig"), "TopxiaAdminBundle:Block:block-visual-items.html.twig", 27)->display($context);
                    // line 28
                    echo "              </div>
            </div>
          </div>

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
                unset($context['_seq'], $context['_iterated'], $context['dataId'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "      </div>
    ";
                // line 34
                if (($this->getAttribute($context["item"], "count", array()) != 1)) {
                    // line 35
                    echo "      <div class=\"btn btn-default text-center js-add-btn\" style=\"width:100%;margin-top:-10px;margin-bottom:20px;\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("+新增"), "html", null, true);
                    echo "</div>
    ";
                }
                // line 37
                echo "
    </section>
  ";
            } else {
                // line 40
                echo "    <ul class=\"nav nav-pills mvl sortable-list\" id=\"btn-tabs\">
      ";
                // line 41
                $this->loadTemplate((("TopxiaAdminBundle:Block/Label:" . $this->getAttribute($context["item"], "type", array())) . ".html.twig"), "TopxiaAdminBundle:Block:block-visual-items.html.twig", 41)->display($context);
                // line 42
                echo "    </ul>
    <div class=\"well\">

      <div class=\"tab-content\">
        ";
                // line 46
                $this->loadTemplate((("TopxiaAdminBundle:Block/Tag:" . $this->getAttribute($context["item"], "type", array())) . ".html.twig"), "TopxiaAdminBundle:Block:block-visual-items.html.twig", 46)->display($context);
                // line 47
                echo "      </div>
      <div class=\"form-group mtl\">
        <div class=\"col-sm-10 col-sm-offset-2\">       
        <input type=\"hidden\" name=\"blockId\" value=\"";
                // line 50
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "blockId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "blockId", array()))) : ("")), "html", null, true);
                echo "\">
        <input type=\"hidden\" name=\"blockTemplateId\" value=\"";
                // line 51
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "blockTemplateId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "blockTemplateId", array()))) : ("")), "html", null, true);
                echo "\">
        <input type=\"hidden\" name=\"templateName\" value=\"";
                // line 52
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "templateName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "templateName", array()))) : ("")), "html", null, true);
                echo "\">
        <input type=\"hidden\" name=\"code\" value=\"";
                // line 53
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "code", array()))) : ("")), "html", null, true);
                echo "\">
        <input type=\"hidden\" name=\"mode\" value=\"";
                // line 54
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "mode", array()))) : ("")), "html", null, true);
                echo "\">
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
                echo "\">
          <button id=\"block-save-btn\" data-submiting-text=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在提交"), "html", null, true);
                echo "\" type=\"submit\" class=\"btn btn-primary mrm\" data-toggle=\"block-edit-form\" data-target=\"#block-edit-form\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存设置"), "html", null, true);
                echo "</button>
        </div>
      </div>
    </div>
  ";
            }
            // line 61
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:block-visual-items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 61,  223 => 56,  219 => 55,  215 => 54,  211 => 53,  207 => 52,  203 => 51,  199 => 50,  194 => 47,  192 => 46,  186 => 42,  184 => 41,  181 => 40,  176 => 37,  170 => 35,  168 => 34,  165 => 33,  147 => 28,  145 => 27,  132 => 25,  127 => 22,  121 => 20,  119 => 19,  114 => 18,  112 => 17,  107 => 15,  85 => 12,  82 => 11,  65 => 10,  55 => 9,  49 => 6,  45 => 5,  39 => 3,  36 => 2,  19 => 1,);
    }
}
