<?php

/* TopxiaWebBundle:Attachment:form-fields.html.twig */
class __TwigTemplate_ef3cb70b8f390fb8d86f52d78d4774cf3bdbb1949528f135a83f52478dacf8f5 extends Twig_Template
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
        if ((($this->env->getExtension('topxia_web_twig')->getSetting("cloud_attachment.enable") && $this->env->getExtension('topxia_web_twig')->getSetting(("cloud_attachment." . (isset($context["target"]) ? $context["target"] : null)))) && ($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") == "cloud"))) {
            // line 2
            echo "  ";
            $this->env->getExtension('topxia_web_twig')->loadScript("topxiawebbundle/controller/attachment/upload-form");
            // line 3
            echo "  
  ";
            // line 4
            $context["ids_class"] = ((((isset($context["useType"]) ? $context["useType"] : null) == true)) ? (("js-attachment-ids-" . (isset($context["fileType"]) ? $context["fileType"] : null))) : ("js-attachment-ids"));
            // line 5
            echo "  ";
            $context["list_class"] = ((((isset($context["useType"]) ? $context["useType"] : null) == true)) ? (("js-attachment-list-" . (isset($context["fileType"]) ? $context["fileType"] : null))) : ("js-attachment-list"));
            // line 6
            echo "  ";
            $context["reupload"] = twig_length_filter($this->env, ((array_key_exists("attachments", $context)) ? (_twig_default_filter((isset($context["attachments"]) ? $context["attachments"] : null), null)) : (null)));
            // line 7
            echo "  
  <div class=\"form-group\">
    ";
            // line 9
            if (((array_key_exists("showLabel", $context)) ? (_twig_default_filter((isset($context["showLabel"]) ? $context["showLabel"] : null), false)) : (false))) {
                // line 10
                echo "      <label class=\"col-xs-2 control-label\" for=\"thread_title\">";
                if (((isset($context["targetType"]) ? $context["targetType"] : null) == "question.stem")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题干附件"), "html", null, true);
                } elseif (((isset($context["targetType"]) ? $context["targetType"] : null) == "question.analysis")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("解析附件"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("附件"), "html", null, true);
                }
                echo "</label>
      <div class=\"col-xs-7 controls\">
    ";
            } else {
                // line 13
                echo "      <div class=\"controls\"> 
    ";
            }
            // line 15
            echo "      <div class=\"js-attachment-list ";
            echo twig_escape_filter($this->env, (isset($context["list_class"]) ? $context["list_class"] : null), "html", null, true);
            echo "\" style=\"inline-height:60px\">
        ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attachments"]) ? $context["attachments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                if ($this->getAttribute($context["attachment"], "file", array())) {
                    // line 17
                    echo "          <div class=\"well well-sm\">
            <img class=\"mrm\" src=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("assets/img/default/cloud_" . $this->getAttribute($this->getAttribute($context["attachment"], "file", array()), "type", array())) . ".png")), "html", null, true);
                    echo "\" height=\"60px\" width=\"107px\">
            ";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attachment"], "file", array()), "filename", array()), "html", null, true);
                    echo "
            <button class=\"btn btn-link js-attachment-delete pull-right\" data-url=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("attachment_delete", array("id" => $this->getAttribute($context["attachment"], "id", array()))), "html", null, true);
                    echo "\" type=\"button\" style=\"margin-top:13px\">删除</button> 
             <a class=\"btn btn-link pull-right\" style=\"margin-top:13px\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("attachment_preview", array("id" => $this->getAttribute($context["attachment"], "id", array()))), "html", null, true);
                    echo "\">预览</a>
          </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "      </div>
      <a class=\"btn btn-primary js-upload-file  ";
            // line 25
            if ((isset($context["reupload"]) ? $context["reupload"] : null)) {
                echo " hidden ";
            }
            echo "\" data-toggle=\"modal\" data-backdrop=\"static\"
         data-target=\"#modal\"
         data-url=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("attachment_upload", array("idsClass" => (isset($context["ids_class"]) ? $context["ids_class"] : null), "listClass" => (isset($context["list_class"]) ? $context["list_class"] : null), "token" => $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken("attachment", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "private"))), "html", null, true);
            echo "\"
         title=\"上传附件\" data-placement=\"bottom\" data-title=\"上传附件\">
         上传附件
      </a>
    </div>
    ";
            // line 33
            echo "    
    <input class=\"";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["ids_class"]) ? $context["ids_class"] : null), "html", null, true);
            echo "\" 
      value=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_join_filter($this->env->getExtension('topxia_web_twig')->arrayColumn((isset($context["attachments"]) ? $context["attachments"] : null), "fileId"), ","), "html", null, true);
            echo "\" 
      name=\"";
            // line 36
            if (((array_key_exists("useType", $context)) ? (_twig_default_filter((isset($context["useType"]) ? $context["useType"] : null), false)) : (false))) {
                echo " attachment[";
                echo twig_escape_filter($this->env, (isset($context["fileType"]) ? $context["fileType"] : null), "html", null, true);
                echo "][fileIds] ";
            } else {
                echo " attachment[fileIds]";
            }
            echo "\" 
      type=\"hidden\">

    <input class=\"js-file-target-type\" 
      value=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
            echo "\" 
      name=\"";
            // line 41
            if (((array_key_exists("useType", $context)) ? (_twig_default_filter((isset($context["useType"]) ? $context["useType"] : null), false)) : (false))) {
                echo " attachment[";
                echo twig_escape_filter($this->env, (isset($context["fileType"]) ? $context["fileType"] : null), "html", null, true);
                echo "][targetType] ";
            } else {
                echo " attachment[targetType]";
            }
            echo "\"
      type=\"hidden\">

    <input class=\"js-file-type\" 
      value=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" 
      name=\"";
            // line 46
            if (((array_key_exists("useType", $context)) ? (_twig_default_filter((isset($context["useType"]) ? $context["useType"] : null), false)) : (false))) {
                echo " attachment[";
                echo twig_escape_filter($this->env, (isset($context["fileType"]) ? $context["fileType"] : null), "html", null, true);
                echo "][type] ";
            } else {
                echo " attachment[type]";
            }
            echo "\"
      type=\"hidden\">
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Attachment:form-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 46,  152 => 45,  139 => 41,  135 => 40,  122 => 36,  118 => 35,  114 => 34,  111 => 33,  103 => 27,  96 => 25,  93 => 24,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  68 => 17,  63 => 16,  58 => 15,  54 => 13,  41 => 10,  39 => 9,  35 => 7,  32 => 6,  29 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
