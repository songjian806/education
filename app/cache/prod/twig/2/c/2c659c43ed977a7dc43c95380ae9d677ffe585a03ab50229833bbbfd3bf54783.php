<?php

/* TopxiaWebBundle:Group:upload-modal.html.twig */
class __TwigTemplate_2c659c43ed977a7dc43c95380ae9d677ffe585a03ab50229833bbbfd3bf54783 extends Twig_Template
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
        echo "
<div class=\"modal fade\" id=\"uploadModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传附件"), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        <button class=\"btn btn-default btn-sm upload-img\" style=\"height:33px;\" type=\"button\" data-url=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("group_upload", array("group" => "user"));
        echo "\"  >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
        echo "</button>
        <span> ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("(大小不能超过"), "html", null, true);
        echo "<span style=\"color:red;\">2</span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("MB，文件类型支持png ,jpg ,gif ,doc ,xls ,txt ,rar ,zip .)"), "html", null, true);
        echo "</span>

        <table id=\"block-table\" class=\"table table-striped table-condensed mtl\">
          <tr >
          <th width=\"60%\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文件名"), "html", null, true);
        echo "</th>
          <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("描述"), "html", null, true);
        echo "</th>
          <th>";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()), "")) : ("")), "html", null, true);
        echo "</th>
          <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
          </tr>
          ";
        // line 20
        if (((array_key_exists("thread", $context)) ? (_twig_default_filter((isset($context["thread"]) ? $context["thread"] : null), null)) : (null))) {
            // line 21
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attachs"]) ? $context["attachs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attach"]) {
                // line 22
                echo "            <tr id=\"file-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "id", array()), "html", null, true);
                echo "\">
              <td><label class=\"control-label\"><span class=\"glyphicon glyphicon-folder-close\"></span> ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "title", array()), "html", null, true);
                echo "</label></td>
              <td><input type=\"hidden\" name=\"id[]\" value=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "fileId", array()), "html", null, true);
                echo "\"/><input type=\"text\" class=\"form-control\" name=\"description[]\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "title", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "description", array()), "html", null, true);
                echo "\"></td>
              <td><input type=\"text\" name=\"coin[]\" class=\"form-control\" value=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "coin", array()), "html", null, true);
                echo "\"></td>
              <td><button type=\"button\" class=\"del-file btn btn-default\" data-id=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
                echo "</button></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
        }
        // line 30
        echo "        </table>
      </div>
      <div class=\"modal-footer\">
          <div class=\"pull-left text-muted\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户下载附件扣除的%name%会在扣除50%之后添加到您的账户", array("%name%" => (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()), "")) : ("")))), "html", null, true);
        echo "
          </div>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"sure\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("确定"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:upload-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 36,  117 => 35,  112 => 33,  107 => 30,  104 => 29,  93 => 26,  89 => 25,  81 => 24,  77 => 23,  72 => 22,  67 => 21,  65 => 20,  60 => 18,  56 => 17,  52 => 16,  48 => 15,  39 => 11,  33 => 10,  27 => 7,  19 => 1,);
    }
}
