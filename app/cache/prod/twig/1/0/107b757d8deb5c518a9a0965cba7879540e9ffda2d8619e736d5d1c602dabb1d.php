<?php

/* TopxiaAdminBundle:App:center.html.twig */
class __TwigTemplate_107b757d8deb5c518a9a0965cba7879540e9ffda2d8619e736d5d1c602dabb1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::cloud-app-layout.html.twig", "TopxiaAdminBundle:App:center.html.twig", 1);
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
        $context["menu"] = "admin_app_center";
        // line 5
        $context["script_controller"] = "app/center";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <div class=\"mbl btn-group\">

      <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("admin_app_center", array("postStatus" => "all"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "all")) {
            echo " btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部"), "html", null, true);
        echo "</a>

      <a href=\" ";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("admin_app_center", array("postStatus" => "theme"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "theme")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("主题"), "html", null, true);
        echo "</a>

      <a href=\" ";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("admin_app_center", array("postStatus" => "app"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "app")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("应用"), "html", null, true);
        echo "</a>
  </div>


  <div class=\"checkbox-group appTypeChoices\" RepeatDirection=\"Horizontal\" id=\"appTypeChoices\" name=\"appTypeChoices\" style=\"float:right;margin-top:-45px;\">
      <div class=\"sortedCourses\">
      <input type=\"checkbox\" name=\"appTypeChoices\" id=\"installedApps\" 
         value=\"installedApps\"  ";
        // line 22
        if ((((array_key_exists("appTypeChoices", $context)) ? (_twig_default_filter((isset($context["appTypeChoices"]) ? $context["appTypeChoices"] : null), null)) : (null)) == "installedApps")) {
            echo " data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_center", array("postStatus" => (isset($context["type"]) ? $context["type"] : null), "showType" => "unhidden")), "html", null, true);
            echo "\"  checked  ";
        } else {
            echo " data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_center", array("postStatus" => (isset($context["type"]) ? $context["type"] : null), "showType" => "hidden")), "html", null, true);
            echo "\" ";
        }
        echo ">
         ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("隐藏已购应用"), "html", null, true);
        echo "
      <input type=\"hidden\" name=\"type\" value= '";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "' id=\"type\">
      </div>
  </div>


  ";
        // line 29
        if ((((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : null), null)) : (null)) == "error")) {
            // line 30
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("AccessKey或者SecretKey设置不正确，会影响到系统正常的运行，"), "html", null, true);
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请修改设置。"), "html", null, true);
            echo "</a></div>
  ";
        } elseif ((((        // line 31
array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : null), null)) : (null)) == "unlink")) {
            // line 32
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的服务器无法连接到更新服务器，请检查网络连接状况。"), "html", null, true);
            echo "</div>
  ";
        } else {
            // line 34
            echo "  <table class=\"table table-striped table-hover\" id=\"app-table-container\">
    <thead>

    </thead>
    <tbody>

      ";
            // line 40
            if (((isset($context["type"]) ? $context["type"] : null) == "all")) {
                // line 41
                echo "      ";
                $context["apps"] = (isset($context["apps"]) ? $context["apps"] : null);
                // line 42
                echo "      ";
            } elseif (((isset($context["type"]) ? $context["type"] : null) == "theme")) {
                // line 43
                echo "      ";
                $context["apps"] = (isset($context["theme"]) ? $context["theme"] : null);
                // line 44
                echo "      ";
            } elseif (((isset($context["type"]) ? $context["type"] : null) == "app")) {
                // line 45
                echo "      ";
                $context["apps"] = (isset($context["allApp"]) ? $context["allApp"] : null);
                // line 46
                echo "      ";
            }
            // line 47
            echo "
      ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 49
                echo "        ";
                $context["installedApp"] = (($this->getAttribute((isset($context["installedApps"]) ? $context["installedApps"] : null), $this->getAttribute($context["app"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["installedApps"]) ? $context["installedApps"] : null), $this->getAttribute($context["app"], "code", array()), array(), "array"), null)) : (null));
                // line 50
                echo "
           ";
                // line 51
                if ((((array_key_exists("appTypeChoices", $context)) ? (_twig_default_filter((isset($context["appTypeChoices"]) ? $context["appTypeChoices"] : null), null)) : (null)) == "installedApps")) {
                    // line 52
                    echo "
                         ";
                    // line 53
                    if ((((($this->getAttribute($context["app"], "purchased", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "purchased", array()), false)) : (false)) == true) || (isset($context["installedApp"]) ? $context["installedApp"] : null))) {
                        // line 54
                        echo "                            
                            ";
                        // line 55
                        if ((isset($context["installedApp"]) ? $context["installedApp"] : null)) {
                            // line 56
                            echo "                            ";
                        } else {
                            // line 57
                            echo "                            ";
                            $this->loadTemplate("TopxiaAdminBundle:App:app-detail.html.twig", "TopxiaAdminBundle:App:center.html.twig", 57)->display($context);
                            // line 58
                            echo "                            <div class=\"right-info pull-right\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                            // line 59
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                            echo "\" class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("安装"), "html", null, true);
                            echo "</a>
                            </div>
                              </td>
                            </tr>
                            ";
                        }
                        // line 64
                        echo "                         ";
                    } else {
                        // line 65
                        echo "
                          ";
                        // line 66
                        $this->loadTemplate("TopxiaAdminBundle:App:app-detail.html.twig", "TopxiaAdminBundle:App:center.html.twig", 66)->display($context);
                        // line 67
                        echo "                            <div class=\"right-info pull-right\">
                              ";
                        // line 68
                        if (((($this->getAttribute($context["app"], "userAccess", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "userAccess", array()), null)) : (null)) == "impossible")) {
                            // line 69
                            echo "                                <a href=\"http://open.edusoho.com\" class=\"user-access\" target=_blank>";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("商业专属"), "html", null, true);
                            echo "</a>
                              ";
                        } else {
                            // line 71
                            echo "                                  ";
                            if (($this->getAttribute($context["app"], "price", array()) == 0)) {
                                // line 72
                                echo "                                   <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                                echo "\" class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("安装"), "html", null, true);
                                echo "</a>
                                  ";
                            } else {
                                // line 74
                                echo "                                     <a href=\"http://open.edusoho.com/app/";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                                echo "\" class=\"btn btn-warning app-btn\" target=\"_blank\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买"), "html", null, true);
                                echo "</a>
                                  ";
                            }
                            // line 76
                            echo "                                    <p class=\"mtm\"><span class=\"text-muted\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格："), "html", null, true);
                            echo "</span><span class=\"price\"> ¥ ";
                            if (($this->getAttribute($context["app"], "price", array()) > 0)) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "price", array()), "html", null, true);
                            } else {
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                            }
                            echo "</span></p>
                                ";
                        }
                        // line 78
                        echo "                            </div>
                              </td>
                            </tr>
                         ";
                    }
                    // line 81
                    echo "                

            ";
                } else {
                    // line 84
                    echo "              ";
                    $this->loadTemplate("TopxiaAdminBundle:App:app-detail.html.twig", "TopxiaAdminBundle:App:center.html.twig", 84)->display($context);
                    // line 85
                    echo "              <div class=\"right-info pull-right\">

                 ";
                    // line 87
                    if ((((($this->getAttribute($context["app"], "purchased", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "purchased", array()), false)) : (false)) == true) || (isset($context["installedApp"]) ? $context["installedApp"] : null))) {
                        // line 88
                        echo "            
                    ";
                        // line 89
                        if ((isset($context["installedApp"]) ? $context["installedApp"] : null)) {
                            // line 90
                            echo "                      <a href=\"javascript:;\" class=\"btn btn-default disabled app-btn\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已购买"), "html", null, true);
                            echo "</a>
                    ";
                        } else {
                            // line 92
                            echo "                      <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                            echo "\" class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("安装"), "html", null, true);
                            echo "</a>
                    ";
                        }
                        // line 94
                        echo "                    
                    <p class=\"mtm\"><span class=\"text-muted\">";
                        // line 95
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格："), "html", null, true);
                        echo "</span><span class=\"price\"> ¥ ";
                        if (($this->getAttribute($context["app"], "price", array()) > 0)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "price", array()), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                        }
                        echo "</span></p>
                 ";
                    } else {
                        // line 97
                        echo "                    ";
                        if (((($this->getAttribute($context["app"], "userAccess", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "userAccess", array()), null)) : (null)) == "impossible")) {
                            // line 98
                            echo "                      <a href=\"http://www.edusoho.com/product/system\" class=\"user-access\" target=_blank>";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("商业专属"), "html", null, true);
                            echo "</a>
                    ";
                        } else {
                            // line 100
                            echo "                      ";
                            if (($this->getAttribute($context["app"], "price", array()) == 0)) {
                                // line 101
                                echo "                       <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                                echo "\" class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("安装"), "html", null, true);
                                echo "</a>
                      ";
                            } else {
                                // line 103
                                echo "                         <a href=\"http://open.edusoho.com/app/";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                                echo "\" class=\"btn btn-warning app-btn\" target=\"_blank\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买"), "html", null, true);
                                echo "</a>
                      ";
                            }
                            // line 105
                            echo "                        <p class=\"mtm\"><span class=\"text-muted\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格："), "html", null, true);
                            echo "</span><span class=\"price\"> ¥ ";
                            if (($this->getAttribute($context["app"], "price", array()) > 0)) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "price", array()), "html", null, true);
                            } else {
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                            }
                            echo "</span></p>
                    ";
                        }
                        // line 107
                        echo "                 ";
                    }
                    echo " 
               
              </div> 
                </td>
              </tr>
                ";
                }
                // line 113
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "    </tbody>
  </table>
  ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 115,  360 => 113,  350 => 107,  338 => 105,  330 => 103,  322 => 101,  319 => 100,  313 => 98,  310 => 97,  299 => 95,  296 => 94,  288 => 92,  282 => 90,  280 => 89,  277 => 88,  275 => 87,  271 => 85,  268 => 84,  263 => 81,  257 => 78,  245 => 76,  237 => 74,  229 => 72,  226 => 71,  220 => 69,  218 => 68,  215 => 67,  213 => 66,  210 => 65,  207 => 64,  197 => 59,  194 => 58,  191 => 57,  188 => 56,  186 => 55,  183 => 54,  181 => 53,  178 => 52,  176 => 51,  173 => 50,  170 => 49,  153 => 48,  150 => 47,  147 => 46,  144 => 45,  141 => 44,  138 => 43,  135 => 42,  132 => 41,  130 => 40,  122 => 34,  116 => 32,  114 => 31,  105 => 30,  103 => 29,  95 => 24,  91 => 23,  79 => 22,  63 => 15,  52 => 13,  41 => 11,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
