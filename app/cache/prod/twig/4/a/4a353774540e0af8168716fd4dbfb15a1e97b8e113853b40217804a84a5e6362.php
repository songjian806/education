<?php

/* TopxiaWebBundle:Group:groupindex.html.twig */
class __TwigTemplate_4a353774540e0af8168716fd4dbfb15a1e97b8e113853b40217804a84a5e6362 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:layout.html.twig", "TopxiaWebBundle:Group:groupindex.html.twig", 1);
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
        // line 9
        $context["groupNav"] = "index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%title%小组", array("%title%" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()))), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()), "html", null, true);
    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("groupAbout", $context)) ? (_twig_default_filter((isset($context["groupAbout"]) ? $context["groupAbout"] : null), "")) : ("")), 100);
    }

    // line 11
    public function block_group_main($context, array $blocks = array())
    {
        // line 12
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小组介绍"), "html", null, true);
        echo "</h3></div>
    <div class=\"panel-body\">
      ";
        // line 15
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "firstPage", array()))) {
            // line 16
            echo "        <div class=\"well editor-text\">
          ";
            // line 17
            if ($this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "about", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "about", array());
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无简介"), "html", null, true);
                echo " ";
            }
            // line 18
            echo "        </div>
      ";
        }
        // line 20
        echo "    </div>
  </div>
  <div class=\"panel panel-default\">
    <div class=\"panel-body\">
      <ul class=\"nav nav-tabs\">
        <li ";
        // line 25
        if (((isset($context["groupNav"]) ? $context["groupNav"] : null) == "index")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小组首页"), "html", null, true);
        echo "</a></li>
        <li ";
        // line 26
        if (((isset($context["groupNav"]) ? $context["groupNav"] : null) == "member")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_member", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小组成员"), "html", null, true);
        echo "</a></li>
        ";
        // line 27
        if (((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
            // line 28
            echo "          <li ";
            if (((isset($context["groupNav"]) ? $context["groupNav"] : null) == "setting")) {
                echo "class=\"active\" ";
            }
            echo "><a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_set", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小组设置"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 30
        echo "      </ul>

      ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
      <div class=\"nav-filter clearfix mbl\">

      <ul class=\"nav nav-pills nav-pills-sm\">

        <li";
        // line 37
        if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "type", array()) == "all")) {
            echo " class=\"active\"";
        }
        echo "><a class=\"js-nav\" data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => (isset($context["id"]) ? $context["id"] : null), "num" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "num", array()), "sort" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()), "isElite" => 0)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部"), "html", null, true);
        echo "</a></li>

        <li";
        // line 39
        if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "type", array()) == "elite")) {
            echo " class=\"active\"";
        }
        echo "><a class=\"js-nav\" data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => (isset($context["id"]) ? $context["id"] : null), "type" => "elite", "num" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "num", array()), "sort" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("精华"), "html", null, true);
        echo "</a></li>

        ";
        // line 41
        if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
            // line 42
            echo "        <li";
            if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "type", array()) == "reward")) {
                echo " class=\"active\"";
            }
            echo "><a class=\"js-nav\" data-target=\"#thread-pane\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => (isset($context["id"]) ? $context["id"] : null), "type" => "reward", "num" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "num", array()), "sort" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("悬赏"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 44
        echo "
        <li class=\"dropdown\">
          <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            <span class=\"text-muted\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("排序："), "html", null, true);
        echo "</span>
            ";
        // line 48
        if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()) == "byLastPostTime")) {
            // line 49
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最后回复"), "html", null, true);
            echo "
            ";
        } elseif (($this->getAttribute(        // line 50
(isset($context["condition"]) ? $context["condition"] : null), "sort", array()) == "byCreatedTime")) {
            // line 51
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新发帖"), "html", null, true);
            echo "
            ";
        } elseif (($this->getAttribute(        // line 52
(isset($context["condition"]) ? $context["condition"] : null), "sort", array()) == "byPostNum")) {
            // line 53
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复数"), "html", null, true);
            echo "
            ";
        }
        // line 55
        echo "            <span class=\"caret\"></span>
          </a>
          <ul class=\"dropdown-menu\">
            <li class=\"";
        // line 58
        if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()) == "byCreatedTime")) {
            echo "active";
        }
        echo "\"><a class=\"js-nav\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => (isset($context["id"]) ? $context["id"] : null), "isElite" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "type", array()), "num" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "num", array()), "sort" => "byCreatedTime")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新发帖"), "html", null, true);
        echo "</a></li>
            <li class=\"";
        // line 59
        if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()) == "byLastPostTime")) {
            echo "active";
        }
        echo "\"><a class=\"js-nav\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => (isset($context["id"]) ? $context["id"] : null), "isElite" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "type", array()), "num" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "num", array()), "sort" => "byLastPostTime")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最后回复"), "html", null, true);
        echo "</a></li>
            <li class=\"";
        // line 60
        if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()) == "byPostNum")) {
            echo "active";
        }
        echo "\"><a class=\"js-nav\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => (isset($context["id"]) ? $context["id"] : null), "isElite" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "type", array()), "num" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "num", array()), "sort" => "byPostNum")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复数"), "html", null, true);
        echo "</a></li>
          </ul>
        </li>
      </ul>


      </div>

      ";
        // line 68
        $this->loadTemplate("TopxiaWebBundle:Group:groups-threads-ul.html.twig", "TopxiaWebBundle:Group:groupindex.html.twig", 68)->display(array_merge($context, array("users" => (isset($context["owner"]) ? $context["owner"] : null))));
        // line 69
        echo "
      ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </div>
  </div>
";
    }

    // line 75
    public function block_group_side($context, array $blocks = array())
    {
        // line 76
        echo "  ";
        if (((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) != 0)) {
            // line 77
            echo "    <div class=\"mbm\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_add", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-xlg btn-block\" role=\"button\"><i class=\"es-icon es-icon-comment mrs text-xlg\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表话题"), "html", null, true);
            echo "</a>
    </div>
  ";
        }
        // line 80
        echo "  <form class=\"mbl\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_search", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"get\">
  <div class=\"search-with-btn\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("组内搜索"), "html", null, true);
        echo "\" name=\"keyWord\">
    <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span></button>
  </div>
  </form>
  ";
        // line 87
        if (twig_in_filter((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null), array(0 => 1, 1 => 2, 2 => 3))) {
            // line 88
            echo "    <div class=\"panel panel-default\">
      <div class=\"panel-body group-user-info\">
        <div class=\"media group-item\">
          <div class=\"media-left\">
            ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => "", 2 => "avatar-md"), "method"), "html", null, true);
            echo "
          </div>
          <div class=\"media-body\">
            <p>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => ""), "method"), "html", null, true);
            echo "

              ";
            // line 97
            if (((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 1)) {
                // line 98
                echo "              <span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("组员"), "html", null, true);
                echo "</span>
              ";
            }
            // line 100
            echo "
              ";
            // line 101
            if (((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2)) {
                // line 102
                echo "              <span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("组长"), "html", null, true);
                echo "</span>
              ";
            }
            // line 104
            echo "
              ";
            // line 105
            if (((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3)) {
                // line 106
                echo "              <span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("副组长"), "html", null, true);
                echo "</span>
              ";
            }
            // line 108
            echo "            </p>
            <a href=\"";
            // line 109
            echo $this->env->getExtension('routing')->getPath("group_member_center");
            echo "\" class=\"btn btn-default btn-sm\" role=\"button\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的小组"), "html", null, true);
            echo "</a>
          </div>
          <hr>
           <p class=\"group-message clearfix\">
              <span><strong>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userIsGroupMember"]) ? $context["userIsGroupMember"] : null), "threadNum", array()), "html", null, true);
            echo "</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("话题"), "html", null, true);
            echo "</span>
              <span><strong>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userIsGroupMember"]) ? $context["userIsGroupMember"] : null), "postNum", array()), "html", null, true);
            echo "</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复"), "html", null, true);
            echo "</span>
            </p>
        </div>
      </div>
    </div>
  ";
        }
        // line 120
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小组组长"), "html", null, true);
        echo "</h3></div>
    <div class=\"panel-body\">
      <div class=\"media group-item\">
        <div class=\"media-left\">
          ";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["groupOwner"]) ? $context["groupOwner"] : null), 1 => ""), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"media-body\">
          <div><a class=\"gray-darker\" href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["groupOwner"]) ? $context["groupOwner"] : null), "id", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupOwner"]) ? $context["groupOwner"] : null), "nickname", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupOwner"]) ? $context["groupOwner"] : null), "nickname", array()), "html", null, true);
        echo "</a></div>
          <span class=\"text-sm gray-medium\">";
        // line 129
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["groupOwner"]) ? $context["groupOwner"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["groupOwner"]) ? $context["groupOwner"] : null), "title", array()), $this->env->getExtension('translator')->trans("无"))) : ($this->env->getExtension('translator')->trans("无"))), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
  </div>


  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新加组员"), "html", null, true);
        echo "</h3></div>
    <div class=\"panel-body\">
      ";
        // line 139
        if ((isset($context["recentlyJoinMember"]) ? $context["recentlyJoinMember"] : null)) {
            // line 140
            echo "        <ul class=\"user-avatar-list clearfix\">
          ";
            // line 141
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recentlyJoinMember"]) ? $context["recentlyJoinMember"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 142
                echo "            <li>
              ";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => $this->getAttribute((isset($context["members"]) ? $context["members"] : null), $this->getAttribute($context["member"], "userId", array()), array(), "array"), 1 => "", 2 => "avatar-sm"), "method"), "html", null, true);
                echo "
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "        </ul>
      ";
        } else {
            // line 148
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还没有小组成员！"), "html", null, true);
            echo "</div>
      ";
        }
        // line 150
        echo "    </div>
  </div>

  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("热门小组"), "html", null, true);
        echo "</h3></div>
    <div class=\"panel-body\">
      <div class=\"media-group-list\">
      ";
        // line 157
        $context["hotGroups"] = $this->env->getExtension('topxia_data_twig')->getData("HotGroup", array("count" => 3));
        // line 158
        echo "      ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotGroups"]) ? $context["hotGroups"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 159
            echo "        <div class=\"media media-group\">
          <div class=\"media-left prm\">
            <a href=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\">
              <img src=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["group"], "logo", array()), "group.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\" class=\"avatar-square-md\">
            </a>
          </div>
          <div class=\"media-body\">
            <div class=\"title\">
              <a class=\"gray-darker\" href=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\">
                ";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "
              </a>
            </div>
            <div class=\"metas\">
              <span><i class=\"es-icon es-icon-people\"></i>";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "memberNum", array()), "html", null, true);
            echo "</span>
              <span><i class=\"es-icon es-icon-textsms\"></i>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "threadNum", array()), "html", null, true);
            echo "</span>
            </div>
          </div>
        </div>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 178
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无小组信息！"), "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "      </div>

    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:groupindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  519 => 180,  510 => 178,  500 => 173,  496 => 172,  489 => 168,  483 => 167,  473 => 162,  467 => 161,  463 => 159,  457 => 158,  455 => 157,  449 => 154,  443 => 150,  437 => 148,  433 => 146,  424 => 143,  421 => 142,  417 => 141,  414 => 140,  412 => 139,  407 => 137,  396 => 129,  388 => 128,  382 => 125,  375 => 121,  372 => 120,  361 => 114,  355 => 113,  346 => 109,  343 => 108,  337 => 106,  335 => 105,  332 => 104,  326 => 102,  324 => 101,  321 => 100,  315 => 98,  313 => 97,  308 => 95,  302 => 92,  296 => 88,  294 => 87,  287 => 83,  283 => 82,  277 => 80,  268 => 77,  265 => 76,  262 => 75,  254 => 70,  251 => 69,  249 => 68,  232 => 60,  222 => 59,  212 => 58,  207 => 55,  201 => 53,  199 => 52,  194 => 51,  192 => 50,  187 => 49,  185 => 48,  181 => 47,  176 => 44,  164 => 42,  162 => 41,  151 => 39,  140 => 37,  132 => 32,  128 => 30,  116 => 28,  114 => 27,  104 => 26,  94 => 25,  87 => 20,  83 => 18,  73 => 17,  70 => 16,  68 => 15,  63 => 13,  60 => 12,  57 => 11,  51 => 8,  45 => 7,  37 => 4,  33 => 1,  31 => 9,  29 => 2,  11 => 1,);
    }
}
