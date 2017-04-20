<?php

/* TopxiaWebBundle:Group:thread.html.twig */
class __TwigTemplate_90ecee2070e29afe4bb19648a582a55d50d2864d13c9fad5b47fb9364c352002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:layout.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'group_main' => array($this, 'block_group_main'),
            'group_side' => array($this, 'block_group_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Group:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["script_controller"] = "group/group";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "title", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()), "html", null, true);
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter((isset($context["threadMainContent"]) ? $context["threadMainContent"] : null), 100);
    }

    // line 7
    public function block_group_main($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "title", array()), "html", null, true);
        echo "
        ";
        // line 12
        if ($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "isStick", array())) {
            // line 13
            echo "          <span class=\"label label-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("置顶"), "html", null, true);
            echo "</span>
        ";
        }
        // line 15
        echo "        ";
        if ($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "isElite", array())) {
            // line 16
            echo "          <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("精华"), "html", null, true);
            echo "</span>
        ";
        }
        // line 18
        echo "        ";
        if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
            // line 19
            echo "          ";
            if ((($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "type", array()) == "reward") && ($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "rewardCoin", array()) > 0))) {
                // line 20
                echo "            <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("奖"), "html", null, true);
                echo "</span>

            <span style=\"color:#d9534f;\" class=\"mll\"> ";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("悬赏:%rewardCoin%%coin_name%", array("%rewardCoin%" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "rewardCoin", array()), "%coin_name%" => $this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()))), "html", null, true);
                echo "</span>

          ";
            }
            // line 25
            echo "        ";
        }
        // line 26
        echo "      </h3>
    </div>
    <div class=\"panel-body clearfix\" id=\"post-action\">
      <div class=\"well well-sm text-sm color-gray clearfix\" style=\"line-height:20px\">
        <div class=\"es-share dropdown pull-right\">
          <span class=\"es-share top\" style=\"font-size:14px;\">
            <a href=\"javascript:;\" class=\"gray-dark\" data-toggle=\"dropdown\"><i class=\"es-icon es-icon-share\"></i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分享"), "html", null, true);
        echo "</a>
            ";
        // line 33
        $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 33)->display(array_merge($context, array("type" => "group_thread", "thread" => (isset($context["threadMain"]) ? $context["threadMain"] : null), "group" => (isset($context["groupinfo"]) ? $context["groupinfo"] : null))));
        // line 34
        echo "          </span>
        </div>
        <div class=\"pull-right mrm\" id=\"thread-list\">
          ";
        // line 37
        if (($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "userId", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))) {
            // line 38
            echo "            <a href=\"javascript:;\" class=\"uncollect-btn link-dark\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_uncollect", array("threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if (((isset($context["isCollected"]) ? $context["isCollected"] : null) == false)) {
                echo " style=\"display:none;\"";
            }
            echo "><i class=\"es-icon es-icon-favorite mrs\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已收藏"), "html", null, true);
            echo "</a>
            <a href=\"javascript:;\" class=\"collect-btn link-dark\" data-url=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_collect", array("threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if (((isset($context["isCollected"]) ? $context["isCollected"] : null) == true)) {
                echo " style=\"display:none;\"";
            }
            echo "><i class=\"es-icon es-icon-favoriteoutline mrs\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收藏"), "html", null, true);
            echo "</a>
          ";
        }
        // line 41
        echo "        </div>
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表于%createdTime%", array("%createdTime%" => $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "createdTime", array())))), "html", null, true);
        echo "
        <span class=\"mll\"> ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%hitNum%次查看", array("%hitNum%" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "hitNum", array()))), "html", null, true);
        echo "</span>
      </div>
      <div class=\"editor-text\">
        ";
        // line 46
        echo $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "content", array());
        echo "
      </div>
      
      ";
        // line 49
        $this->loadTemplate("TopxiaWebBundle:Attachment/Widget:list.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 49)->display(array_merge($context, array("targetType" => "group.thread", "targetId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))));
        // line 50
        echo "
      ";
        // line 51
        if ((isset($context["attachs"]) ? $context["attachs"] : null)) {
            // line 52
            echo "        <hr>
        <span class=\"glyphicon glyphicon-paperclip\"></span> ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("附件下载"), "html", null, true);
            echo " :
        <div class=\"row clearfix mtm\">
          ";
            // line 55
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attachs"]) ? $context["attachs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attach"]) {
                // line 56
                echo "            <div class=\"pull-left attach col-md-4 col-sm-6 col-lg-4\"  data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                if ($this->getAttribute($context["attach"], "description", array())) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("描述：%description%", array("%description%" => $this->getAttribute($context["attach"], "description", array()))), "html", null, true);
                }
                echo "  ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传于 %createdTime%", array("%createdTime%" => $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($this->getAttribute((isset($context["files"]) ? $context["files"] : null), $this->getAttribute($context["attach"], "fileId", array()), array(), "array"), "createdTime", array())))), "html", null, true);
                echo "\">
              ";
                // line 57
                if (((($this->getAttribute($context["attach"], "coin", array()) > 0) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) != $this->getAttribute($context["attach"], "userId", array()))) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                    // line 58
                    echo "                <a href=\"javascript:\" data-toggle=\"modal\" data-target=\"#modal\" data-urL=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_buy_attach", array("attachId" => $this->getAttribute($context["attach"], "id", array()))), "html", null, true);
                    echo "\" class=\"pull-left mrm\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath($this->env->getExtension('topxia_web_twig')->getFileType($this->getAttribute($context["attach"], "title", array()), ".png")), "html", null, true);
                    echo "\" class=\"avatar-md\"></a>
              ";
                } else {
                    // line 60
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_attach_download", array("fileId" => $this->getAttribute($context["attach"], "id", array()))), "html", null, true);
                    echo "\" class=\"pull-left mrm\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath($this->env->getExtension('topxia_web_twig')->getFileType($this->getAttribute($context["attach"], "title", array()), ".png")), "html", null, true);
                    echo "\" class=\"avatar-md\"></a>
              ";
                }
                // line 62
                echo "              <div class=\"media-body\">
                <div class=\"metas mts\">
                  ";
                // line 64
                if (((($this->getAttribute($context["attach"], "coin", array()) > 0) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) != $this->getAttribute($context["attach"], "userId", array()))) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                    // line 65
                    echo "                    <strong><a href=\"javascript:\" data-toggle=\"modal\" data-target=\"#modal\" data-urL=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_buy_attach", array("attachId" => $this->getAttribute($context["attach"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "title", array()), "html", null, true);
                    echo "</a></strong>
                  ";
                } else {
                    // line 67
                    echo "                    <strong><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_attach_download", array("fileId" => $this->getAttribute($context["attach"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "title", array()), "html", null, true);
                    echo "</a></strong>
                  ";
                }
                // line 69
                echo "                </div>

                <div class=\"content\" style=\"color: #999;font-size:11px;\">
                  ";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->fileSizeFilter($this->getAttribute($this->getAttribute((isset($context["files"]) ? $context["files"] : null), $this->getAttribute($context["attach"], "fileId", array()), array(), "array"), "size", array())), "html", null, true);
                echo "
                  ";
                // line 73
                if (($this->getAttribute($context["attach"], "coin", array()) > 0)) {
                    // line 74
                    echo "                    <span class=\"mls\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("售价:%coin%%coin_name%", array("%coin%" => $this->getAttribute($context["attach"], "coin", array()), "%coin_name%" => $this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()))), "html", null, true);
                    echo "</span>
                    ";
                } else {
                    // line 76
                    echo "                    <span class=\"mls\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                    echo "</span>
                  ";
                }
                // line 78
                echo "                  <br>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("下载次数：%hitNum%", array("%hitNum%" => $this->getAttribute($context["attach"], "hitNum", array()))), "html", null, true);
                echo "
                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "        </div>
      ";
        }
        // line 85
        echo "      <div class=\"mtl text-right\">
        ";
        // line 86
        if (($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward") && ($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "count", array()) == 1))) {
            // line 87
            echo "          ";
            if ((((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) == $this->getAttribute((isset($context["owner"]) ? $context["owner"] : null), "id", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) == $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "ownerId", array()))) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
                // line 88
                echo "          ";
            } else {
                // line 89
                echo "            ";
                if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
                    // line 90
                    echo "            <a class=\"btn btn-default btn-sm mrm\" href=\"javascript:\" data-toggle=\"modal\" data-target=\"#modal\" data-urL=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_hide", array("threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看隐藏内容"), "html", null, true);
                    echo "</a>
            ";
                }
                // line 92
                echo "          ";
            }
            // line 93
            echo "        ";
        }
        // line 94
        echo "
        ";
        // line 95
        if ((((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) == $this->getAttribute((isset($context["owner"]) ? $context["owner"] : null), "id", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) == $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "ownerId", array()))) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
            // line 96
            echo "          <a class=\"btn btn-default btn-sm mrm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_update", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
            echo "</a>
        ";
        }
        // line 98
        echo "
        ";
        // line 99
        if (((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
            // line 100
            echo "          ";
            if (($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "isElite", array()) == 1)) {
                // line 101
                echo "            <a id=\"elite\"  title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消加精"), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm mrm\"
              href=\"javascript:\"
            data-url=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_removeElite", array("threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消加精"), "html", null, true);
                echo "</a>
          ";
            } else {
                // line 105
                echo "            <a id=\"elite\"  title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加精"), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm mrm\"
            href=\"javascript:\" data-url=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_setElite", array("threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加精"), "html", null, true);
                echo "</a>
          ";
            }
            // line 108
            echo "
          ";
            // line 109
            if (($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "isStick", array()) == 1)) {
                // line 110
                echo "             <a id=\"stick\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消置顶"), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm mrm\"
            href=\"javascript:\" data-url=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_removeStick", array("threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消置顶"), "html", null, true);
                echo "</a>
          ";
            } else {
                // line 113
                echo "            <a id=\"stick\"  title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("置顶"), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm mrm\"
            href=\"javascript:\" data-url=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_setStick", array("threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("置顶"), "html", null, true);
                echo "</a>
          ";
            }
            // line 116
            echo "
          ";
            // line 117
            if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
                // line 118
                echo "            ";
                if ((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) == $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "ownerId", array()))) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
                    // line 119
                    echo "              ";
                    if ((($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "type", array()) == "reward") && ($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "rewardCoin", array()) > 0))) {
                        // line 120
                        echo "                ";
                        if ( !(isset($context["isAdopt"]) ? $context["isAdopt"] : null)) {
                            // line 121
                            echo "                  <a id=\"cancelReward\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消悬赏"), "html", null, true);
                            echo "\" class=\"btn btn-default btn-sm mrm\"
                  href=\"javascript:\" data-url=\"";
                            // line 122
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_cancel_reward", array("threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
                            echo "\"><span class=\"glyphicon glyphicon-ban-circle\"></span> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消悬赏"), "html", null, true);
                            echo "</a>
                ";
                        }
                        // line 124
                        echo "              ";
                    } else {
                        // line 125
                        echo "                ";
                        if (($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "type", array()) == "default")) {
                            // line 126
                            echo "                  <a id=\"rewardCoin\"  title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("悬赏"), "html", null, true);
                            echo "\" class=\"btn btn-default btn-sm mrm\"
                    href=\"javascript:\" data-toggle=\"modal\" data-target=\"#modal\" data-urL=\"";
                            // line 127
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_reward", array("threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
                            echo "\"><span class=\"glyphicon glyphicon-usd\"></span>  ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("悬赏"), "html", null, true);
                            echo "</a>
                ";
                        }
                        // line 129
                        echo "              ";
                    }
                    // line 130
                    echo "            ";
                }
                // line 131
                echo "          ";
            }
            // line 132
            echo "        ";
        }
        // line 133
        echo "        ";
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "type", array()) == "onlyOwner")) {
            // line 134
            echo "          <a class=\"btn btn-default btn-sm mrm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()), "type" => "all", "sort" => $this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()))), "html", null, true);
            echo "\" %}><span class=\"glyphicon glyphicon-filter\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看全部"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 136
            echo "          <a class=\"btn btn-default btn-sm mrm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()), "type" => "onlyOwner", "sort" => $this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("只看楼主"), "html", null, true);
            echo "</a>
        ";
        }
        // line 138
        echo "
        ";
        // line 139
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "desc")) {
            // line 140
            echo "          <a type=\"button\" class=\"btn btn-default btn-sm mrm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()), "type" => $this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "type", array()), "sort" => "asc")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("顺序查看"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 142
            echo "          <a type=\"button\" class=\"btn btn-default btn-sm mrm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()), "type" => $this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "type", array()), "sort" => "desc")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("倒序查看"), "html", null, true);
            echo "</a>
        ";
        }
        // line 144
        echo "      </div>
    </div>
  </div>

  ";
        // line 148
        if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
            // line 149
            echo "    ";
            if ((isset($context["isAdopt"]) ? $context["isAdopt"] : null)) {
                // line 150
                echo "    <div class=\"panel panel-default group-post-list\">
      <div class=\"panel-heading\" style=\"color:#d9534f;\">
        ";
                // line 152
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最佳回答"), "html", null, true);
                echo "
      </div>
      <div class=\"panel-body\">
        <ul class=\"media-list\">
          <li class=\"media\">
            <a href=\"";
                // line 157
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["isAdopt"]) ? $context["isAdopt"] : null), 0, array(), "array"), "userId", array()))), "html", null, true);
                echo "\" class=\"pull-left\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($this->getAttribute((isset($context["postMember"]) ? $context["postMember"] : null), $this->getAttribute($this->getAttribute((isset($context["isAdopt"]) ? $context["isAdopt"] : null), 0, array(), "array"), "userId", array()), array(), "array"), "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\" class=\"avatar-md\"></a>
            <div class=\"media-body\">
              <div class=\"metas\">
                <strong>";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["postMember"]) ? $context["postMember"] : null), $this->getAttribute($this->getAttribute((isset($context["isAdopt"]) ? $context["isAdopt"] : null), 0, array(), "array"), "userId", array()), array(), "array")), "method"), "html", null, true);
                echo "</strong>
                <span class=\"mhm\">";
                // line 161
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($this->getAttribute((isset($context["isAdopt"]) ? $context["isAdopt"] : null), 0, array(), "array"), "createdTime", array())), "html", null, true);
                echo " </span>
              </div>
              <div class=\"content\">
                ";
                // line 164
                echo $this->getAttribute($this->getAttribute((isset($context["isAdopt"]) ? $context["isAdopt"] : null), 0, array(), "array"), "content", array());
                echo "
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    ";
            }
            // line 172
            echo "  ";
        }
        // line 173
        echo "
  ";
        // line 174
        if ($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "postNum", array())) {
            // line 175
            echo "  <div class=\"panel panel-default group-post-list\">
    <div class=\"panel-heading\">
      ";
            // line 177
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%postNum%回复", array("%postNum%" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "postNum", array()))), "html", null, true);
            echo "
    </div>
    <div class=\"panel-body\">
      <ul class=\"media-list\">
        ";
            // line 181
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["post"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 182
                echo "          ";
                $context["subPosts"] = (($this->getAttribute((isset($context["postReply"]) ? $context["postReply"] : null), $this->getAttribute($context["post"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["postReply"]) ? $context["postReply"] : null), $this->getAttribute($context["post"], "id", array()), array(), "array"), null)) : (null));
                // line 183
                echo "          <li id=\"post-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo "\" class=\"media\">
            <a href=\"";
                // line 184
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["post"], "userId", array()))), "html", null, true);
                echo "\" class=\"pull-left\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($this->getAttribute((isset($context["postMember"]) ? $context["postMember"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array"), "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\" class=\"avatar-sm\"></a>
            <div class=\"media-body\">
              <div class=\"metas\">
                <span class=\"floor\">
                  ";
                // line 188
                if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "desc")) {
                    // line 189
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%postCount%楼", array("%postCount%" => ((((isset($context["postCount"]) ? $context["postCount"] : null) + 1) - ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPerPageCount", array(), "method") * ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) - 1))) - $this->getAttribute($context["loop"], "index0", array())))), "html", null, true);
                    echo "
                  ";
                } else {
                    // line 191
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%loop.index%楼", array("%loop.index%" => (($this->getAttribute($context["loop"], "index", array()) + 1) + ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPerPageCount", array(), "method") * ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) - 1))))), "html", null, true);
                    echo "
                  ";
                }
                // line 193
                echo "                </span>
                <strong>";
                // line 194
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["postMember"]) ? $context["postMember"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array")), "method"), "html", null, true);
                echo "</strong>
                <span class=\"divider mhm\">•</span>
                <span >";
                // line 196
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["post"], "createdTime", array())), "html", null, true);
                echo " </span>
              </div>

              <div class=\"content editor-text\">
                ";
                // line 200
                echo $this->getAttribute($context["post"], "content", array());
                echo "
                  ";
                // line 201
                $this->loadTemplate("TopxiaWebBundle:Attachment/Widget:list.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 201)->display(array_merge($context, array("targetType" => "group.thread.post", "targetId" => $this->getAttribute($context["post"], "id", array()))));
                // line 202
                echo "              </div>

              <div class=\"actions\">
                ";
                // line 205
                if ((((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) == $this->getAttribute($context["post"], "userId", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3)) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2))) {
                    // line 206
                    echo "                  <a title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("确定删除这条回复"), "html", null, true);
                    echo "\" class=\"mhm post-delete-btn\" href=\"javascript:\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_deletePost", array("postId" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 208
                echo "
                ";
                // line 209
                if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
                    // line 210
                    echo "                  ";
                    if (( !(isset($context["isAdopt"]) ? $context["isAdopt"] : null) && ($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "type", array()) == "reward"))) {
                        // line 211
                        echo "                    ";
                        if ((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3)) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2))) {
                            // line 212
                            echo "                      <a title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("确定采纳这条回复"), "html", null, true);
                            echo "\" class=\"mhm post-adopt-btn\" href=\"javascript:\" data-url=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_adopt", array("postId" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("采纳"), "html", null, true);
                            echo "</a>
                    ";
                        }
                        // line 214
                        echo "                  ";
                    }
                    // line 215
                    echo "                ";
                }
                // line 216
                echo "
                ";
                // line 217
                if ( !(isset($context["subPosts"]) ? $context["subPosts"] : null)) {
                    // line 218
                    echo "                  <a href=\"javascript:\" class=\"reply\" id=\"reply-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\"  postId=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" postName=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["postMember"]) ? $context["postMember"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                    echo "\" data-from-user-id-nosub=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["postMember"]) ? $context["postMember"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array"), "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复"), "html", null, true);
                    echo "</a>
                  <a href=\"javascript:\" class=\"unreply\" id=\"unreply-";
                    // line 219
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" postId=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" style=\"display:none;\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收起"), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 221
                    echo "                  <a style=\"display:none;\" href=\"javascript:\" class=\"reply\" id=\"reply-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\"  postId=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" postName=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["postMember"]) ? $context["postMember"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                    echo "\" data-from-user-id-nosub=\"\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复"), "html", null, true);
                    echo "(";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postReplyCount"]) ? $context["postReplyCount"] : null), $this->getAttribute($context["post"], "id", array()), array(), "array"), "html", null, true);
                    echo ")</a>
                  <a href=\"javascript:\" class=\"unreply\" id=\"unreply-";
                    // line 222
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" postId=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收起"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 224
                echo "              </div>
              <div class=\"reply-";
                // line 225
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo "\">
                ";
                // line 226
                if ((isset($context["subPosts"]) ? $context["subPosts"] : null)) {
                    // line 227
                    echo "                  ";
                    $this->loadTemplate("TopxiaWebBundle:Group:post-reply-list.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 227)->display(array_merge($context, array("posts" => (isset($context["subPosts"]) ? $context["subPosts"] : null), "users" => (isset($context["postReplyMembers"]) ? $context["postReplyMembers"] : null), "postMain" => $context["post"])));
                    // line 228
                    echo "                ";
                } else {
                    // line 229
                    echo "                  <div class=\"reply-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" style=\"display:none;\">
                    <form  class=\"thread-post-reply-form reply-";
                    // line 230
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" method=\"post\"  post-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_post", array("groupId" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
                    echo "\">
                      <div class=\"form-group\">
                        <label class=\"control-label hide\" for=\"reply-content-";
                    // line 232
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复内容"), "html", null, true);
                    echo "</label>
                        <div class=\"controls\">
                        <textarea id=\"reply-content-";
                    // line 234
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" class=\"form-control\" data-image-upload-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
                    echo "\"></textarea>
                      </div>
                      </div>
                      <div id=\"fromUserIdNoSubDiv\"></div>
                      <div class=\"form-group\">
                        <button type=\"submit\" postId=\"";
                    // line 239
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" class=\"reply-btn btn btn-xs btn-primary pull-right\" style=\"margin-top:-10px;\"data-submiting-text=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在发表回复"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表"), "html", null, true);
                    echo "</button>
                      </div>
                    </form>
                  </div>
                ";
                }
                // line 244
                echo "              </div>
            </div>
          ";
                // line 246
                if ($this->getAttribute((isset($context["postAttachs"]) ? $context["postAttachs"] : null), $this->getAttribute($context["post"], "id", array()), array(), "array")) {
                    // line 247
                    echo "            <hr>
            <span class=\"glyphicon glyphicon-paperclip\"></span> ";
                    // line 248
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("附件下载"), "html", null, true);
                    echo " :
            <div class=\"row clearfix mtm\">
              ";
                    // line 250
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["postAttachs"]) ? $context["postAttachs"] : null), $this->getAttribute($context["post"], "id", array()), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["attach"]) {
                        // line 251
                        echo "                ";
                        $context["postFile"] = $this->getAttribute((isset($context["postFiles"]) ? $context["postFiles"] : null), $this->getAttribute($context["post"], "id", array()), array(), "array");
                        // line 252
                        echo "                <div class=\"pull-left attach col-md-4 col-sm-6 col-lg-4\"  data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                        if ($this->getAttribute($context["attach"], "description", array())) {
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("描述：%description%", array("%description%" => $this->getAttribute($context["attach"], "description", array()))), "html", null, true);
                            echo " ";
                        }
                        echo "  ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传于%createdTime%", array("%createdTime%" => $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($this->getAttribute((isset($context["postFile"]) ? $context["postFile"] : null), $this->getAttribute($context["attach"], "fileId", array()), array(), "array"), "createdTime", array())))), "html", null, true);
                        echo "\">
                  ";
                        // line 253
                        if (((($this->getAttribute($context["attach"], "coin", array()) > 0) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) != $this->getAttribute($context["attach"], "userId", array())))) {
                            // line 254
                            echo "                    <a href=\"javascript:\" data-toggle=\"modal\" data-target=\"#modal\" data-urL=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_buy_attach", array("attachId" => $this->getAttribute($context["attach"], "id", array()))), "html", null, true);
                            echo "\" class=\"pull-left mrm\"><img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath($this->env->getExtension('topxia_web_twig')->getFileType($this->getAttribute($context["attach"], "title", array()), ".png")), "html", null, true);
                            echo "\" class=\"avatar-md\"></a>
                  ";
                        } else {
                            // line 256
                            echo "                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_attach_download", array("fileId" => $this->getAttribute($context["attach"], "id", array()))), "html", null, true);
                            echo "\" class=\"pull-left mrm\"><img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath($this->env->getExtension('topxia_web_twig')->getFileType($this->getAttribute($context["attach"], "title", array()), ".png")), "html", null, true);
                            echo "\" class=\"avatar-md\"></a>
                  ";
                        }
                        // line 258
                        echo "                  <div class=\"media-body\">
                    <div class=\"metas mts\">
                      ";
                        // line 260
                        if (((($this->getAttribute($context["attach"], "coin", array()) > 0) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) != $this->getAttribute($context["attach"], "userId", array()))) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                            // line 261
                            echo "                        <strong><a href=\"javascript:\" data-toggle=\"modal\" data-target=\"#modal\" data-urL=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_buy_attach", array("attachId" => $this->getAttribute($context["attach"], "id", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "title", array()), "html", null, true);
                            echo "</a></strong>
                      ";
                        } else {
                            // line 263
                            echo "                        <strong><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_attach_download", array("fileId" => $this->getAttribute($context["attach"], "id", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "title", array()), "html", null, true);
                            echo "</a></strong>
                      ";
                        }
                        // line 265
                        echo "                    </div>
                    <div class=\"content\" style=\"color: #999;font-size:11px;\">
                      ";
                        // line 267
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->fileSizeFilter($this->getAttribute($this->getAttribute((isset($context["postFile"]) ? $context["postFile"] : null), $this->getAttribute($context["attach"], "fileId", array()), array(), "array"), "size", array())), "html", null, true);
                        echo "
                      ";
                        // line 268
                        if (($this->getAttribute($context["attach"], "coin", array()) > 0)) {
                            // line 269
                            echo "                        <span class=\"mls\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("售价"), "html", null, true);
                            echo ":";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "coin", array()), "html", null, true);
                            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()), "html", null, true);
                            echo "</span>
                        ";
                        } else {
                            // line 271
                            echo "                        <span class=\"mls\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                            echo "</span>
                      ";
                        }
                        // line 273
                        echo "                      <br>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("下载次数：%hitNum%", array("%hitNum%" => $this->getAttribute($context["attach"], "hitNum", array()))), "html", null, true);
                        echo "
                    </div>
                    ";
                        // line 275
                        if ((((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) == $this->getAttribute($context["post"], "userId", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3)) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2))) {
                            // line 276
                            echo "                      <a title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("确定删除此附件"), "html", null, true);
                            echo "\" class=\"mhm post-delete-btn\" href=\"javascript:\" data-url=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_delete_attach", array("goodsId" => $this->getAttribute($context["attach"], "id", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
                            echo "</a>
                    ";
                        }
                        // line 278
                        echo "                  </div>
                </div>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 281
                    echo "            </div>
          ";
                }
                // line 283
                echo "          </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "      </ul>

      ";
            // line 287
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 291
        echo "
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表回复"), "html", null, true);
        echo "</div>

    <div class=\"panel-body\">

      ";
        // line 297
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 298
            echo "        <form id=\"post-thread-form\" class=\"post-thread-form thread-form\" method=\"post\" post-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_post", array("groupId" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
            echo "\">

          <div class=\"form-group\">
            <label class=\"control-label hide\" for=\"post_content\">";
            // line 301
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复内容"), "html", null, true);
            echo "</label>
            <div class=\"controls\">
              <textarea name=\"content\" value=\"\" rows=\"10\" id=\"post_content\" class=\"form-control\" data-image-upload-url=\"";
            // line 303
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
            echo "\" data-image-download-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
            echo "\"></textarea>
            </div>
          </div>

            <div class=\"form-group\">
                ";
            // line 308
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Attachment:formFields", array("targetType" => "group.thread.post", "targetId" => (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), 0)) : (0))), array("showLabel" => false)));
            echo "
            </div>

          <div class=\"form-group\">
            <div class=\"controls\">
            <button id=\"post-thread-btn\" data-submiting-text=\"";
            // line 313
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在回复"), "html", null, true);
            echo "\" type=\"submit\" class=\"post-thread-btn btn btn-primary pull-right\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表"), "html", null, true);
            echo "</button>
            </div>
          </div>
           ";
            // line 316
            if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
                // line 317
                echo "            <input type=\"hidden\" name=\"group_reward\" id=\"group_reward\">
           ";
            }
            // line 319
            echo "          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
        </form>
      ";
        } else {
            // line 322
            echo "        <div class=\"empty\">
          ";
            // line 323
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("你还没有登录，请先"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录"), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("或"), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注册"), "html", null, true);
            echo "</a>！
        </div>
      ";
        }
        // line 326
        echo "    </div>
  </div>
  ";
        // line 328
        $this->loadTemplate("TopxiaWebBundle:Group:upload-modal.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 328)->display($context);
    }

    // line 331
    public function block_group_side($context, array $blocks = array())
    {
        // line 332
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("话题作者"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
      <div class=\"media\">
        <div class=\"media-left prm\">
          <a class=\"\" href=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["owner"]) ? $context["owner"] : null), "id", array()))), "html", null, true);
        echo "\">
            <img src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["owner"]) ? $context["owner"] : null), "smallAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" class=\"avatar-md\">
          </a>
        </div>
        <div class=\"media-body ptm\">
          <div>
            <a class=\"gray-darker\">";
        // line 343
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["owner"]) ? $context["owner"] : null)), "method"), "html", null, true);
        echo "</a>
          </div>
          <span class=\"text-sm gray-medium\">";
        // line 345
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["owner"]) ? $context["owner"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["owner"]) ? $context["owner"] : null), "title", array()), $this->env->getExtension('translator')->trans("无"))) : ($this->env->getExtension('translator')->trans("无"))), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
  </div>

  ";
        // line 351
        if ((isset($context["activeMembers"]) ? $context["activeMembers"] : null)) {
            // line 352
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:Group:active-member-list.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 352)->display(array_merge($context, array("activeMembers" => (isset($context["activeMembers"]) ? $context["activeMembers"] : null))));
            // line 353
            echo "  ";
        }
        // line 354
        echo "
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("热门小组"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
      ";
        // line 358
        $context["hotGroups"] = $this->env->getExtension('topxia_data_twig')->getData("HotGroup", array("count" => 3));
        // line 359
        echo "      ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotGroups"]) ? $context["hotGroups"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 360
            echo "        <div class=\"media media-group\">
          <div class=\"media-left\">
            <a href=\"";
            // line 362
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\">
              <img src=\"";
            // line 363
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["group"], "logo", array()), "group.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\" class=\"avatar-square-md\">
            </a>
          </div>
          <div class=\"media-body\">
            <div class=\"title\">
              <a class=\"gray-darker\" href=\"";
            // line 368
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\">
                ";
            // line 369
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "
              </a>
            </div>
            <div class=\"metas\">
              <span><i class=\"es-icon es-icon-people\"></i>";
            // line 373
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "memberNum", array()), "html", null, true);
            echo "</span>
              <span><i class=\"es-icon es-icon-textsms\"></i>";
            // line 374
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "threadNum", array()), "html", null, true);
            echo "</span>
            </div>
          </div>
        </div>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 379
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无小组信息！"), "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 381
        echo "    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1127 => 381,  1118 => 379,  1108 => 374,  1104 => 373,  1097 => 369,  1091 => 368,  1081 => 363,  1075 => 362,  1071 => 360,  1065 => 359,  1063 => 358,  1058 => 356,  1054 => 354,  1051 => 353,  1048 => 352,  1046 => 351,  1037 => 345,  1032 => 343,  1024 => 338,  1020 => 337,  1013 => 333,  1010 => 332,  1007 => 331,  1003 => 328,  999 => 326,  983 => 323,  980 => 322,  973 => 319,  969 => 317,  967 => 316,  959 => 313,  951 => 308,  941 => 303,  936 => 301,  929 => 298,  927 => 297,  920 => 293,  916 => 291,  909 => 287,  905 => 285,  890 => 283,  886 => 281,  878 => 278,  868 => 276,  866 => 275,  860 => 273,  854 => 271,  845 => 269,  843 => 268,  839 => 267,  835 => 265,  827 => 263,  819 => 261,  817 => 260,  813 => 258,  805 => 256,  797 => 254,  795 => 253,  785 => 252,  782 => 251,  778 => 250,  773 => 248,  770 => 247,  768 => 246,  764 => 244,  752 => 239,  742 => 234,  735 => 232,  728 => 230,  723 => 229,  720 => 228,  717 => 227,  715 => 226,  711 => 225,  708 => 224,  699 => 222,  686 => 221,  677 => 219,  664 => 218,  662 => 217,  659 => 216,  656 => 215,  653 => 214,  643 => 212,  640 => 211,  637 => 210,  635 => 209,  632 => 208,  622 => 206,  620 => 205,  615 => 202,  613 => 201,  609 => 200,  602 => 196,  597 => 194,  594 => 193,  588 => 191,  582 => 189,  580 => 188,  571 => 184,  566 => 183,  563 => 182,  546 => 181,  539 => 177,  535 => 175,  533 => 174,  530 => 173,  527 => 172,  516 => 164,  510 => 161,  506 => 160,  498 => 157,  490 => 152,  486 => 150,  483 => 149,  481 => 148,  475 => 144,  467 => 142,  459 => 140,  457 => 139,  454 => 138,  446 => 136,  438 => 134,  435 => 133,  432 => 132,  429 => 131,  426 => 130,  423 => 129,  416 => 127,  411 => 126,  408 => 125,  405 => 124,  398 => 122,  393 => 121,  390 => 120,  387 => 119,  384 => 118,  382 => 117,  379 => 116,  372 => 114,  367 => 113,  360 => 111,  355 => 110,  353 => 109,  350 => 108,  343 => 106,  338 => 105,  331 => 103,  325 => 101,  322 => 100,  320 => 99,  317 => 98,  309 => 96,  307 => 95,  304 => 94,  301 => 93,  298 => 92,  290 => 90,  287 => 89,  284 => 88,  281 => 87,  279 => 86,  276 => 85,  272 => 83,  260 => 78,  254 => 76,  248 => 74,  246 => 73,  242 => 72,  237 => 69,  229 => 67,  221 => 65,  219 => 64,  215 => 62,  207 => 60,  199 => 58,  197 => 57,  188 => 56,  184 => 55,  179 => 53,  176 => 52,  174 => 51,  171 => 50,  169 => 49,  163 => 46,  157 => 43,  153 => 42,  150 => 41,  139 => 39,  128 => 38,  126 => 37,  121 => 34,  119 => 33,  115 => 32,  107 => 26,  104 => 25,  98 => 22,  92 => 20,  89 => 19,  86 => 18,  80 => 16,  77 => 15,  71 => 13,  69 => 12,  65 => 11,  60 => 8,  57 => 7,  51 => 5,  45 => 4,  35 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
