<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_623b3f590234e9198d39233ca382abe5ce1da2ceeb399abc38b3cc05c1554c21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle:Exception:layout.html.twig", "TwigBundle:Exception:error.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle:Exception:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "出错啦 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"container\">
    <div class=\"panel panel-default error-panel\">
      <div class=\"panel-heading\">
        <span class=\"error-title\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <p>如果你看到该提示，说明服务器出现了问题。</p>
          <p>刚从被窝中努力爬起来的程序员哥哥正拼命修复中。</p>
          <p><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("homepage", array("ref" => 500));
        echo "\">返回首页 ></a></p>
          <span class=\"error-500-icon hidden-xs\"></span>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  44 => 8,  39 => 5,  36 => 4,  29 => 2,  11 => 1,);
    }
}
