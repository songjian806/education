<?php

/* TopxiaAdminBundle:System:optimize.html.twig */
class __TwigTemplate_7ed605d5851ea1f3b777e32087e54f119e74188bfa6108aaa4afcf6377897734 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:optimize.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_optimize_settings";
        // line 5
        $context["script_controller"] = "optimize/optimize";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "




<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("刷新缓存"), "html", null, true);
        echo "</h3>
  </div>
  <div class=\"panel-body\">
  \t<p>
      ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("刷新并重建缓存,让系统保持最优的状态。"), "html", null, true);
        echo " 
    </p>
    <p >
  \t\t<button id=\"removecache\" class=\"btn btn-primary fr \" data-url=\"";
        // line 23
        echo $this->env->getExtension('routing')->getUrl("admin_optimize_remove_cache");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("刷新缓存"), "html", null, true);
        echo "</button>
  \t</p>
  </div>
</div>

\t<div class=\"panel panel-default\">
\t  <div class=\"panel-heading\">
\t    <h3 class=\"panel-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("优化磁盘空间"), "html", null, true);
        echo "</h3>
\t  </div>
\t  <div class=\"panel-body\">
\t   \t<p>
\t       ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("移除系统的临时数据，释放出更多磁盘空间。"), "html", null, true);
        echo "
\t    </p>
\t    <p >
\t  \t\t<button id=\"removeTmp\" class=\"btn btn-primary fr\" data-url=\"";
        // line 37
        echo $this->env->getExtension('routing')->getUrl("admin_optimize_remove_tmp");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("优化磁盘空间"), "html", null, true);
        echo "</button>
\t  \t</p>
\t  </div>
\t</div>


<div class=\"panel panel-default\" style=\"display: none\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("数据库备份和下载"), "html", null, true);
        echo "</h3>
  </div>
  <div class=\"panel-body\">
   \t<p>
       ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("备份数据库，并下载备份文件"), "html", null, true);
        echo "。 ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("下载完成后请"), "html", null, true);
        echo "<span class=\"text-info\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("优化磁盘空间"), "html", null, true);
        echo "</span>。
    </p>
    <p>
  \t\t<button id=\"backupDatabase\" class=\"btn btn-primary fr\" data-url=\"";
        // line 52
        echo $this->env->getExtension('routing')->getUrl("admin_optimize_backupdb");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("数据库备份和下载"), "html", null, true);
        echo "</button>
  \t</p>
  \t<p>
  \t\t<span id=\"dbbackup\" class=\"glyphicon glyphicon-download-alt hide\"><a id=\"dbdownload\" href=\"#\" target=\"_blank\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("下载数据库备份"), "html", null, true);
        echo "</a></span>
  \t</p>
  </div>
</div>

<hr/>
<h1><small>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("谨慎操作区域"), "html", null, true);
        echo "</small></h1>
<hr/>

";
        // line 64
        if (!twig_in_filter("upgrade", (isset($context["disabled_features"]) ? $context["disabled_features"] : null))) {
            // line 65
            echo "\t<div class=\"panel panel-default\">
\t  <div class=\"panel-heading \">
\t    <h3 class=\"panel-title text-warning\">";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("清空系统备份数据"), "html", null, true);
            echo "</h3>
\t  </div>
\t  <div class=\"panel-body\">
\t   \t<p class=\"text-warning\">
\t       ";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("慎重：请确保当前系统已经升级成功。当系统升级过程中发生意外，备份的系统文件和数据库可用于恢复。"), "html", null, true);
            echo "
\t    </p>   \t
\t    <p>
\t       ";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("清空系统升级过程中备份的系统文件和备数据库。通过清空系统备份数据，可以让系统释放出更多的磁盘空间"), "html", null, true);
            echo "
\t    <p/>
\t    <p >
\t  \t\t<button id=\"removeBackup\" class=\"btn btn-warning fr\" data-url=\"";
            // line 77
            echo $this->env->getExtension('routing')->getUrl("admin_optimize_remove_backup");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("清空系统备份数据"), "html", null, true);
            echo "</button>
\t  \t</p>
\t  </div>
\t</div>

";
        }
        // line 83
        echo "
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title text-warning\">";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("优化课程视频和相关资料文件"), "html", null, true);
        echo "</h3>
  </div>
  <div class=\"panel-body\">
   \t<p class=\"text-warning\">
       ";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注意：该功能慎用。请仔细阅读下列说明："), "html", null, true);
        echo " 
    </p>
     <p>
       ";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("优化课程文件，将已经不存在系统中的课程相关上传文件移除。假如您希望保留这些数据，
       请不要执行该功能。"), "html", null, true);
        // line 94
        echo "
    </p>
    <p>
  \t\t<a id=\"optimizeFile\" class=\"btn btn-danger fr\" type=\"button\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 97
        echo $this->env->getExtension('routing')->getUrl("admin_optimize_remove_show_progressbar");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("优化课程文件"), "html", null, true);
        echo "</a>
  \t</p>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:optimize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 97,  197 => 94,  194 => 93,  188 => 90,  181 => 86,  176 => 83,  165 => 77,  159 => 74,  153 => 71,  146 => 67,  142 => 65,  140 => 64,  134 => 61,  125 => 55,  117 => 52,  107 => 49,  100 => 45,  87 => 37,  81 => 34,  74 => 30,  62 => 23,  56 => 20,  49 => 16,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
