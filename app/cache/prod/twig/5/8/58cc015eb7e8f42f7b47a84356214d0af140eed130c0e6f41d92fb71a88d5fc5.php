<?php

/* TopxiaAdminBundle:Block/Tag:poster.html.twig */
class __TwigTemplate_58cc015eb7e8f42f7b47a84356214d0af140eed130c0e6f41d92fb71a88d5fc5 extends Twig_Template
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
        $context["first"] = 1;
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "data", array(), "any", false, true), (isset($context["code"]) ? $context["code"] : null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "data", array(), "any", false, true), (isset($context["code"]) ? $context["code"] : null), array(), "array"), null)) : (null)));
        foreach ($context['_seq'] as $context["dataId"] => $context["data"]) {
            // line 3
            echo "  <div role=\"tabpanel\" class=\"tab-pane ";
            if (((isset($context["first"]) ? $context["first"] : null) == 1)) {
                echo "active";
            }
            echo "\" id=\"poster-";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "\">
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("是否开启"), "html", null, true);
            echo "</label>
      <label class=\"checkbox-inline\">
        <input class=\"status-input\" type=\"radio\" value=\"1\" ";
            // line 7
            if (($this->getAttribute($context["data"], "status", array()) == 1)) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启"), "html", null, true);
            echo "
      </label>
      <label class=\"checkbox-inline\">
        <input class=\"status-input\" type=\"radio\" value=\"0\" ";
            // line 10
            if (($this->getAttribute($context["data"], "status", array()) == 0)) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭"), "html", null, true);
            echo "
      </label>
      <input class=\"status-value\" type=\"hidden\" name=\"data[";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][status]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "status", array()), "html", null, true);
            echo "\">
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("布局模式"), "html", null, true);
            echo "</label>
      <label class=\"checkbox-inline\">
        <input class=\"layout-input\" type=\"radio\" value=\"limitWide\"
               ";
            // line 18
            if (($this->getAttribute($context["data"], "layout", array()) == "limitWide")) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("限宽居中"), "html", null, true);
            echo "
      </label>
      <label class=\"checkbox-inline\">
        <input class=\"layout-input\" type=\"radio\" value=\"tile\" ";
            // line 21
            if (($this->getAttribute($context["data"], "layout", array()) == "tile")) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("平铺居中"), "html", null, true);
            echo "
      </label>
      <input class=\"layout-value\" type=\"hidden\" name=\"data[";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][layout]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "layout", array()), "html", null, true);
            echo "\">
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑模式"), "html", null, true);
            echo "</label>
      <label class=\"checkbox-inline\">
        <input class=\"imgMode\" type=\"radio\" value=\"option1\"
               ";
            // line 29
            if (($this->getAttribute($context["data"], "mode", array()) == "img")) {
                echo "checked=\"checked\"";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("图片模式"), "html", null, true);
            echo "
      </label>
      <label class=\"checkbox-inline\">
        <input class=\"htmlMode\" type=\"radio\" value=\"option2\"
               ";
            // line 33
            if (($this->getAttribute($context["data"], "mode", array()) == "html")) {
                echo "checked=\"checked\"";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("HTML模式"), "html", null, true);
            echo "
      </label>
      <input type=\"hidden\" name=\"data[";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][mode]\" class=\"mode-value\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "mode", array()), "html", null, true);
            echo "\">
    </div>
    <div class=\"edit-mode-img\" ";
            // line 37
            if (($this->getAttribute($context["data"], "mode", array()) == "html")) {
                echo "style=\"display: none;\"";
            }
            echo ">
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">
          ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("选择图片"), "html", null, true);
            echo "
        </label>

        <div class=\"col-sm-10\">
          <label class=\"control-label img-mrl\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "src", array()), "html", null, true);
            echo "</label>
          <a class=\"btn btn-default btn-sm img-mode-upload\" id=\"img-";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "-uploadId-";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "\"
             data-upload-token=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
            echo "</a>
          <p class=\"text-success\">
            ";
            // line 48
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "code", array()) == "live_top_banner")) {
                // line 49
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("[ 限宽居中 ] 图片推荐尺寸 宽：1140px，高：300px"), "html", null, true);
                echo "<br>
              ";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("[ 平铺居中 ] 图片推荐尺寸 宽：1920px，高：450px"), "html", null, true);
                echo "<br>
              ";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("建议所有海报 [ 布局模式 ] 、 [ 海报尺寸 ] 保持一致。"), "html", null, true);
                echo "
            ";
            } else {
                // line 53
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("[ 限宽居中 ] 图片推荐尺寸 宽：1140px，高：450px"), "html", null, true);
                echo "<br>
              ";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("[ 平铺居中 ] 图片推荐尺寸 宽：1920px，高：600px"), "html", null, true);
                echo "<br>
              ";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("建议所有海报 [ 布局模式 ] 、 [ 海报尺寸 ] 保持一致。"), "html", null, true);
                echo "
            ";
            }
            // line 57
            echo "          </p>
          <input class=\"form-control img-value\" type=\"hidden\" name=\"data[";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][src]\"
                 id=\"data[";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][src]\" data-role=\"img-url\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["data"], "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["data"], "src", array()), "")) : ("")), "html", null, true);
            echo "\">
          <img class=\"img-responsive mtm img-mtl\" src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["data"], "src", array())), "html", null, true);
            echo "\" alt=\"\">
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">
          ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("背景色填充"), "html", null, true);
            echo "
        </label>

        <div class=\"col-sm-10\">
          <input type=\"text\" class=\"form-control colorpicker-input width-input-small\"
                 name=\"data[";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][background]\" id=\"data[";
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][background]\"
                 placeholder=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "background", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "background", array()), "html", null, true);
            echo "\">
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">
          ";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("海报链接地址"), "html", null, true);
            echo "
        </label>

        <div class=\"col-sm-10\">
          <input type=\"text\" class=\"form-control width-input-large\" name=\"data[";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][href]\"
                 id=\"data[";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][href]\" placeholder=\"http://\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "href", array()), "html", null, true);
            echo "\">
        </div>
      </div>
    </div>
    <div class=\"edit-mode-html\" ";
            // line 85
            if (($this->getAttribute($context["data"], "mode", array()) == "img")) {
                echo "style=\"display: none;\"";
            }
            echo ">
      <div class=\"form-group\">
        <div class=\"col-sm-10 col-sm-offset-2\">
          <textarea class=\"form-control mbl\" id=\"data[";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][html]\" rows=\"15\"
                    name=\"data[";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][html]\" data-role=\"editor-field\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "html", array()), "html", null, true);
            echo "</textarea>
          <label class=\"control-label html-mrl\"></label><br>
          <a class=\"btn btn-default btn-sm html-mode-upload\" id=\"html-";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "-uploadId-";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "\"
             data-upload-token=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
            echo "</a>
        </div>
      </div>
    </div>
  </div>
  ";
            // line 97
            $context["first"] = 0;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['dataId'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block/Tag:poster.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 97,  307 => 92,  301 => 91,  292 => 89,  286 => 88,  278 => 85,  267 => 81,  261 => 80,  254 => 76,  244 => 71,  234 => 70,  226 => 65,  218 => 60,  210 => 59,  204 => 58,  201 => 57,  196 => 55,  192 => 54,  187 => 53,  182 => 51,  178 => 50,  173 => 49,  171 => 48,  164 => 46,  158 => 45,  154 => 44,  147 => 40,  139 => 37,  130 => 35,  121 => 33,  110 => 29,  104 => 26,  94 => 23,  85 => 21,  75 => 18,  69 => 15,  59 => 12,  50 => 10,  40 => 7,  35 => 5,  25 => 3,  21 => 2,  19 => 1,);
    }
}
