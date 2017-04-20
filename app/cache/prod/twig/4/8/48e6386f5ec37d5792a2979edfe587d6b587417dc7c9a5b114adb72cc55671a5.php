<?php

/* TopxiaAdminBundle:AppPackageUpdate:modal.html.twig */
class __TwigTemplate_48e6386f5ec37d5792a2979edfe587d6b587417dc7c9a5b114adb72cc55671a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:AppPackageUpdate:modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["updateName"] = ((($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "type", array()) == "upgrade")) ? ($this->env->getExtension('translator')->trans("升级")) : ($this->env->getExtension('translator')->trans("安装")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["updateName"]) ? $context["updateName"] : null), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("应用"), "html", null, true);
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "  <input type=\"hidden\" name=\"package-type\" value=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "type"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "type"), "method"), "")) : ("")), "html", null, true);
        echo "\">

  <div class=\"alert alert-warning\">
    您好，为了保证网站升级顺利进行，升级过程中会出现短暂（2分钟内）网站无法访问的情况，请在学员访问少的时候进行系统升级，给您带来了不便，还望理解
  </div>

  <table class=\"table\">
    <thead>
    <tr>
      <th width=\"40%\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("应用名称"), "html", null, true);
        echo "</th>
      <th width=\"25%\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("版本"), "html", null, true);
        echo "</th>
      <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("备份数据库"), "html", null, true);
        echo "</th>
      <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("备份文件"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "product", array()), "name", array()), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 28
        if (($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "type", array()) == "upgrade")) {
            // line 29
            echo "          <strong class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "fromVersion", array()), "html", null, true);
            echo "</strong> -&gt; <strong
            class=\"text-success\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "toVersion", array()), "html", null, true);
            echo "</strong>
        ";
        } else {
            // line 32
            echo "          <strong class=\"text-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "toVersion", array()), "html", null, true);
            echo "</strong>
        ";
        }
        // line 34
        echo "      </td>
      <td>";
        // line 35
        if (($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "backupDB", array()) == 1)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("是"), "html", null, true);
        } elseif (($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "backupDB", array()) == 0)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("否"), "html", null, true);
        }
        echo "</td>
      <td>";
        // line 36
        if (($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "backupFile", array()) == 1)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("是"), "html", null, true);
        } elseif (($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "backupFile", array()) == 0)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("否"), "html", null, true);
        }
        echo "</td>
    </tr>

    </tbody>
  </table>

  <div id=\"package-update-progress\" class=\"package-update-progress\" style=\"display:none;\">
    <div class=\"progress progress-striped active\">
      <div class=\"progress-bar progress-bar-success\" style=\"width: 0%\"></div>
    </div>
    <div class=\"text-success progress-text\"></div>
  </div>

  <script type=\"text/javascript\"> app.load('app/package-update-modal') </script>
";
    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        // line 53
        echo "  <button id=\"begin-update\" type=\"button\" class=\"btn btn-primary pull-right\"
          data-check-environment-url=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_check_environment", array("id" => $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "id", array()))), "html", null, true);
        echo "\"
          data-check-depends-url=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_check_depends", array("id" => $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "id", array()))), "html", null, true);
        echo "\"
          data-check-last-error-url=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_check_last_error", array("id" => $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "id", array()))), "html", null, true);
        echo "\"
          data-backup-file-url=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_backup_file", array("id" => $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "id", array()))), "html", null, true);
        echo "\"
          data-backup-db-url=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_backup_db", array("id" => $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "id", array()))), "html", null, true);
        echo "\"
          data-check-download-extract-url=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_check_download_and_extract", array("id" => $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "id", array()))), "html", null, true);
        echo "\"
          data-download-extract-url=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_download_and_extract", array("id" => $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "id", array()))), "html", null, true);
        echo "\"
          data-begin-upgrade-url=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_begin_upgrade", array("id" => $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "id", array()), "type" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "type"), "method"))), "html", null, true);
        echo "\"
      ";
        // line 62
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "type"), "method") == "upgrade")) {
            // line 63
            echo "        data-check-newest-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_check_newest", array("code" => (($this->getAttribute($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "product", array(), "array", false, true), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "product", array(), "array", false, true), "code", array()), "")) : ("")))), "html", null, true);
            echo "\"
      ";
        }
        // line 65
        echo "  >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开始"), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["updateName"]) ? $context["updateName"] : null), "html", null, true);
        echo "</button>

  <strong class=\"text text-danger\" id=\"updating-hint\" style=\"display:none;\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在安装，请不要关闭当前窗口..."), "html", null, true);
        echo "</strong>

  <button id=\"finish-update-btn\" data-loading-text=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在完成安装/升级, 请稍等..."), "html", null, true);
        echo "\" class=\"btn btn-primary\"
          style=\"display:none\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("完成安装/升级"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:AppPackageUpdate:modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 70,  191 => 69,  186 => 67,  179 => 65,  173 => 63,  171 => 62,  167 => 61,  163 => 60,  159 => 59,  155 => 58,  151 => 57,  147 => 56,  143 => 55,  139 => 54,  136 => 53,  133 => 52,  110 => 36,  102 => 35,  99 => 34,  93 => 32,  88 => 30,  83 => 29,  81 => 28,  76 => 26,  68 => 21,  64 => 20,  60 => 19,  56 => 18,  43 => 9,  40 => 8,  33 => 6,  29 => 1,  27 => 3,  11 => 1,);
    }
}
