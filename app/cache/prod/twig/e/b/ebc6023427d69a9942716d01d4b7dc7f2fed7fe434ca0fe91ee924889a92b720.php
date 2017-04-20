<?php

/* TopxiaAdminBundle:App:upgrades.html.twig */
class __TwigTemplate_ebc6023427d69a9942716d01d4b7dc7f2fed7fe434ca0fe91ee924889a92b720 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::cloud-app-layout.html.twig", "TopxiaAdminBundle:App:upgrades.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::cloud-app-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "app/upgrades";
        // line 5
        $context["menu"] = "admin_app_upgrades";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <div class=\"alert alert-warning\">
    您好，为了保证网站升级顺利进行，升级过程中会出现短暂（2分钟内）网站无法访问的情况，请在学员访问少的时候进行系统升级，给您带来了不便，还望理解
  </div>

  <div class=\"panel\">
    ";
        // line 14
        if ((isset($context["apps"]) ? $context["apps"] : null)) {
            // line 15
            echo "      <div class=\"panel-heading\"><h4>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["apps"]) ? $context["apps"] : null)), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个可用更新"), "html", null, true);
            echo "</h4></div>
    ";
        }
        // line 17
        echo "    ";
        if (((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : null), null)) : (null))) {
            // line 18
            echo "      <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("AccessKey或者SecretKey设置不正确，会影响到系统正常的运行，"), "html", null, true);
            echo "<a
            href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请修改设置。"), "html", null, true);
            echo "</a></div>
    ";
        } else {
            // line 21
            echo "      ";
            if ((isset($context["apps"]) ? $context["apps"] : null)) {
                // line 22
                echo "        <table class=\"table table-striped table-hover\" id=\"app-table-container\">
          <thead>

          </thead>
          <tbody>
          ";
                // line 27
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                    // line 28
                    echo "            <tr>
              <td>
                <img src=\"http://open.edusoho.com/files/product/";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "icon", array()), "html", null, true);
                    echo "\" class=\"app-img pull-left mrl mtm\"/>
              </td>

              <td width=\"26%\">
                <div class=\"mtm \">
                  <a href=\"#\" class=\"\"><h4><strong class=\"text-primary\">";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "name", array()), "html", null, true);
                    echo "</strong></h4>
                  </a> ";
                    // line 36
                    if ($this->env->getExtension('topxia_web_twig')->versionCompare($this->getAttribute($this->getAttribute($context["app"], "package", array()), "edusohoMinVersion", array()), (isset($context["version"]) ? $context["version"] : null), ">")) {
                        // line 37
                        echo "                    <div
                        class=\"text-danger\">";
                        // line 38
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("需要主系统%edusohoMinVersion%及更高版本", array("%edusohoMinVersion%" => $this->getAttribute($this->getAttribute($context["app"], "package", array()), "edusohoMinVersion", array()))), "html", null, true);
                        echo "</div>";
                    }
                    // line 39
                    echo "                </div>

                <!-- <div class=\"info mtm mbm clearfix\"> -->
                <div class=\"left-info pull-left\">

                  <div class=\"text-muted\">
                    <small>";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开发者："), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "developerName", array()), "html", null, true);
                    echo "</small>
                  </div>

                  <div class=\"class-rating mtm\">
                    <span class=\"text-muted\">";
                    // line 49
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("版本："), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["app"], "package", array()), "toVersion", array()), "html", null, true);
                    echo "</span>
                  </div>

                  <div class=\"middle-info\">
                    <div class=\"text-muted\">";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最后更新："), "html", null, true);
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["app"], "package", array()), "createdTime", array()), "Y-m-d"), "html", null, true);
                    echo "</div>
                  </div>

                  <!-- </div> -->
                </div>

              </td>

              <td>
                <div class=\"info mtm mbm clearfix\">
                  <div class=\"pull-left short-long-text\">
                    <div class=\"short-text text-muted\">";
                    // line 64
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($context["app"], "package", array()), "description", array()), 80);
                    echo " <span
                          class=\"trigger\">(";
                    // line 65
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("展开"), "html", null, true);
                    echo ")</span></div>
                    <div class=\"long-text text-muted\">";
                    // line 66
                    echo $this->getAttribute($this->getAttribute($context["app"], "package", array()), "description", array());
                    echo " <span
                          class=\"trigger\">(";
                    // line 67
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收起"), "html", null, true);
                    echo ")</span></div>
                  </div>
                </div>
              </td>

              <td>
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\"
                   data-url=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($this->getAttribute($context["app"], "package", array()), "id", array()), "type" => "upgrade")), "html", null, true);
                    echo "\"
                   class=\"btn btn-primary ";
                    // line 75
                    if ($this->env->getExtension('topxia_web_twig')->versionCompare($this->getAttribute($this->getAttribute($context["app"], "package", array()), "edusohoMinVersion", array()), (isset($context["version"]) ? $context["version"] : null), ">")) {
                        echo "disabled";
                    }
                    echo " mrl\"
                   data-keyboard=\"false\" data-backdrop=\"static\" style=\"margin-top:40px;\">";
                    // line 76
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更新"), "html", null, true);
                    echo "</a>
              </td>
            </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "          </tbody>
        </table>
      ";
            } else {
                // line 83
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前已是最新版本!"), "html", null, true);
                echo "
      ";
            }
            // line 85
            echo "    ";
        }
        // line 86
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:upgrades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 86,  199 => 85,  193 => 83,  188 => 80,  178 => 76,  172 => 75,  168 => 74,  158 => 67,  154 => 66,  150 => 65,  146 => 64,  131 => 53,  123 => 49,  115 => 45,  107 => 39,  103 => 38,  100 => 37,  98 => 36,  94 => 35,  86 => 30,  82 => 28,  78 => 27,  71 => 22,  68 => 21,  61 => 19,  56 => 18,  53 => 17,  46 => 15,  44 => 14,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
