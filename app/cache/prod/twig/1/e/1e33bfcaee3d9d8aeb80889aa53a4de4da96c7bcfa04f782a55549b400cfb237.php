<?php

/* TopxiaWebBundle:OpenCourse:open-course-material-block.html.twig */
class __TwigTemplate_1e33bfcaee3d9d8aeb80889aa53a4de4da96c7bcfa04f782a55549b400cfb237 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:OpenCourse:open-course-material-block.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ((isset($context["materials"]) ? $context["materials"] : null)) {
            // line 4
            echo "  <div class=\"open-course-teacher panel panel-default\">
    <div class=\"panel-heading\"> 
      <h3 class=\"panel-title\">
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程资料下载"), "html", null, true);
            echo "
      </h3>
    </div>
    <div class=\"panel-body\">
      <ul class=\"media-list\">
        ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["materials"]) ? $context["materials"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
                // line 13
                echo "          ";
                $context["lesson"] = (($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["material"], "lessonId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["material"], "lessonId", array()), array(), "array"), null)) : (null));
                // line 14
                echo "          <li class=\"media\">
            <div class=\"media-body\">
              <div class=\"mbs\">
                ";
                // line 17
                if (((isset($context["lesson"]) ? $context["lesson"] : null) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) != "published"))) {
                    // line 18
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "title", array()), "html", null, true);
                    echo " <span class=\"text-muted text-sm\">(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时未发布，不能下载该资料"), "html", null, true);
                    echo ")</span>
              ";
                } else {
                    // line 20
                    echo "                ";
                    if ($this->getAttribute($context["material"], "link", array())) {
                        // line 21
                        echo "                  <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "link", array()), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "title", array()), "html", null, true);
                        echo "</a>
                  <span class=\"glyphicon glyphicon-new-window text-muted text-sm\" title=\"";
                        // line 22
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网络链接资料"), "html", null, true);
                        echo "\"></span>
                ";
                    } else {
                        // line 24
                        echo "                  <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_material_download", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "materialId" => $this->getAttribute($context["material"], "id", array()))), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "title", array()), "html", null, true);
                        echo "</a>
                ";
                    }
                    // line 26
                    echo "              ";
                }
                // line 27
                echo "              </div>

              ";
                // line 29
                if (($this->getAttribute($context["material"], "description", array()) &&  !$this->getAttribute($context["material"], "link", array()))) {
                    // line 30
                    echo "                <div class=\"text-muted text-sm mbs\">
                  ";
                    // line 31
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["material"], "description", array()), 100);
                    echo "
                </div>
              ";
                }
                // line 34
                echo "
              <div class=\"text-sm\">
                ";
                // line 36
                if (($this->getAttribute($context["material"], "fileId", array()) > 0)) {
                    // line 37
                    echo "                  <span class=\"text-muted\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->fileSizeFilter($this->getAttribute($context["material"], "fileSize", array())), "html", null, true);
                    echo "</span>
                  <span class=\"bullet\">•</span>
                ";
                }
                // line 40
                echo "                ";
                if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
                    // line 41
                    echo "                  <a class=\"link-muted\" href=\"javascript:;\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
                    echo "\">课时";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
                    echo "</a>
                  <span class=\"bullet\">•</span>
                ";
                }
                // line 44
                echo "                <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传于"), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["material"], "createdTime", array())), "html", null, true);
                echo "</span>
              </div>

            </div>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "      </ul>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:OpenCourse:open-course-material-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 50,  127 => 44,  118 => 41,  115 => 40,  108 => 37,  106 => 36,  102 => 34,  96 => 31,  93 => 30,  91 => 29,  87 => 27,  84 => 26,  76 => 24,  71 => 22,  64 => 21,  61 => 20,  53 => 18,  51 => 17,  46 => 14,  43 => 13,  39 => 12,  31 => 7,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
