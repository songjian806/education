<?php

/* TopxiaAdminBundle::cloud-app-layout.html.twig */
class __TwigTemplate_c38b41b8ee84c8374768c6b544d86ca7517d22bd6466730fc3bb6dece1de07a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle::cloud-app-layout.html.twig", 1);
        $this->blocks = array(
            'content_header' => array($this, 'block_content_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content_header($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        if ($this->env->getExtension('topxia_web_twig')->isTrial()) {
            // line 4
            echo "    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <script>
          var _hmt = _hmt || [];
        </script>
        <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>
        <p style = \"text-align:center;font-size:16px\">
        ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ES应用由EduSoho官方提供,授权版⽤户可以通过"), "html", null, true);
            echo "<a href=\"http://open.edusoho.com\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("EduSoho开放云平台"), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买"), "html", null, true);
            echo "</p>
        <p style = \"text-align:center;font-size:16px\">";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("如需购买授权版，请联系销售人员。"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("电话："), "html", null, true);
            echo "0571-86819929 ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("或"), "html", null, true);
            echo "
        <span id=\"BizQQWPA\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\"><a id=\"BizQQWPA\" href=\"javascript:\" style='text-decoration:none;'>QQ：800023860 </a>。</span>
        </p>
        <script type=\"text/javascript\">
            BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
        </script>
        </br>
      </div>
    </div>
    <hr>
  ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::cloud-app-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  44 => 12,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
