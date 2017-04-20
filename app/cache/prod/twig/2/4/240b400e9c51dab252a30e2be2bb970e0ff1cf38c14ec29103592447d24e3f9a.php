<?php

/* TopxiaWebBundle:Group:groupmember.html.twig */
class __TwigTemplate_240b400e9c51dab252a30e2be2bb970e0ff1cf38c14ec29103592447d24e3f9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:layout.html.twig", "TopxiaWebBundle:Group:groupmember.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $context["script_controller"] = "group/group_member";
        // line 4
        $context["groupNav"] = "member";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%title%小组", array("%title%" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()))), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_group_main($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小组介绍"), "html", null, true);
        echo "</h3></div>
    <div class=\"panel-body\">
      ";
        // line 9
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "firstPage", array()))) {
            // line 10
            echo "        <div class=\"well editor-text\">
          ";
            // line 11
            if ($this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "about", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "about", array());
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无简介"), "html", null, true);
                echo " ";
            }
            // line 12
            echo "        </div>
      ";
        }
        // line 14
        echo "    </div>
  </div>
  <div class=\"es-section\">
    <ul class=\"nav nav-tabs\">
      <li ";
        // line 18
        if (((isset($context["groupNav"]) ? $context["groupNav"] : null) == "index")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小组首页"), "html", null, true);
        echo "</a></li>
      <li ";
        // line 19
        if (((isset($context["groupNav"]) ? $context["groupNav"] : null) == "member")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_member", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小组成员"), "html", null, true);
        echo "</a></li>
      ";
        // line 20
        if (((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
            // line 21
            echo "        <li ";
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
        // line 23
        echo "    </ul>

    ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
    <div class=\"es-piece\">
      <div class=\"piece-header\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("组长"), "html", null, true);
        echo "</div>
      <div class=\"piece-body clearfix\">
        <div class=\"grouplist\">
          <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["owner_info"]) ? $context["owner_info"] : null), "id", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["owner_info"]) ? $context["owner_info"] : null), "nickname", array()), "html", null, true);
        echo "\"  >
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["owner_info"]) ? $context["owner_info"] : null), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["owner_info"]) ? $context["owner_info"] : null), "nickname", array()), "html", null, true);
        echo "\" class=\"avatar-md\">
          </a>
        </div>
      </div>
    </div>

    <div class=\"es-piece\">
      <div class=\"piece-header\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("副组长"), "html", null, true);
        echo "</div>
      <div class=\"piece-body clearfix\">
        <form action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_remove_admin", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\" id=\"admin-form\">
          ";
        // line 41
        if ((isset($context["groupAdmin"]) ? $context["groupAdmin"] : null)) {
            // line 42
            echo "            ";
            if ((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 43
                echo "              <button id=\"remove-admin-btn\" type=\"button\" class=\"btn btn-default btn-sm pull-right\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("撤消副组长"), "html", null, true);
                echo "</button>
            ";
            }
            // line 45
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groupAdmin"]) ? $context["groupAdmin"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 46
                echo "              <div class=\"grouplist\"  style=\"width: 82px;\">
                <p>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => $this->getAttribute((isset($context["usersLikeAdmin"]) ? $context["usersLikeAdmin"] : null), $this->getAttribute($context["member"], "userId", array()), array(), "array"), 1 => "", 2 => "avatar-md"), "method"), "html", null, true);
                echo "</p>

                ";
                // line 49
                if ((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                    // line 50
                    echo "                  <input type=\"checkbox\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "userId", array()), "html", null, true);
                    echo "\" name=\"adminId[]\"class=\"checkboxs\">
                ";
                }
                // line 52
                echo "                <br>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "          ";
        } else {
            // line 56
            echo "            <p><span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还没有副组长！"), "html", null, true);
            echo "</span></p>
          ";
        }
        // line 58
        echo "        </form>
      </div>
    </div>

    <div class=\"btn-group pull-right\">
      ";
        // line 63
        if ((isset($context["groupmember_info"]) ? $context["groupmember_info"] : null)) {
            // line 64
            echo "        ";
            if (((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
                // line 65
                echo "          <button  id=\"delete-btn\" type=\"button\" class=\"btn btn-default btn-sm \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("踢出成员"), "html", null, true);
                echo "</button>
        ";
            }
            // line 67
            echo "        ";
            if ((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 68
                echo "          <button  id=\"set-admin-btn\" type=\"button\" class=\"btn btn-default btn-sm \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置副组长"), "html", null, true);
                echo "</button>
          <input id=\"set-admin-url\" type=\"hidden\" value=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_set_admin", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
                echo "\">
        ";
            }
            // line 71
            echo "      ";
        }
        // line 72
        echo "    </div>

    <div class=\"es-piece\">
      <div class=\"piece-header\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("组员"), "html", null, true);
        echo "</div>
      <div class=\"piece-body\">
        <form action=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_member_delete", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\" id=\"member-form\" class=\"clearfix\">
          ";
        // line 78
        if ((isset($context["groupmember_info"]) ? $context["groupmember_info"] : null)) {
            // line 79
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groupmember_info"]) ? $context["groupmember_info"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 80
                echo "              <div class=\"grouplist\">
                <p>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => $this->getAttribute((isset($context["members"]) ? $context["members"] : null), $this->getAttribute($context["member"], "userId", array()), array(), "array"), 1 => "", 2 => "avatar-md"), "method"), "html", null, true);
                echo "</p>

                ";
                // line 83
                if (((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
                    // line 84
                    echo "                  <input type=\"checkbox\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "userId", array()), "html", null, true);
                    echo "\" name=\"memberId[]\"class=\"checkboxs\">
                ";
                }
                // line 85
                echo "<br>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "
            ";
            // line 89
            if (((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
                // line 90
                echo "              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
                echo "\">
            ";
            }
            // line 92
            echo "
          ";
        } else {
            // line 94
            echo "            <p><span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还没有小组成员！"), "html", null, true);
            echo "</span></p>
          ";
        }
        // line 96
        echo "        </form>
      </div>
    </div>

    <nav class=\"text-center\">
      ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </nav>
  </div>
";
    }

    // line 105
    public function block_group_side($context, array $blocks = array())
    {
        // line 106
        echo "
  ";
        // line 107
        if (((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) != 0)) {
            // line 108
            echo "    <div class=\"mbm\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_add", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-xlg btn-block\" role=\"button\"><i class=\"es-icon es-icon-comment mrs text-xlg\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表话题"), "html", null, true);
            echo "</a>
    </div>
  ";
        }
        // line 111
        echo "  <form class=\"mbl\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_search", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"get\">
    <div class=\"search-with-btn\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("组内搜索"), "html", null, true);
        echo "\" name=\"keyWord\">
      <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span></button>
    </div>
  </form>
  ";
        // line 118
        if (twig_in_filter((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null), array(0 => 1, 1 => 2, 2 => 3))) {
            // line 119
            echo "    <div class=\"panel panel-default\">
      <div class=\"panel-body group-user-info\">
        <div class=\"media group-item\">
          <div class=\"media-left\">
            ";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => "", 2 => "avatar-md"), "method"), "html", null, true);
            echo "
          </div>
          <div class=\"media-body\">
            <p>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => ""), "method"), "html", null, true);
            echo "

              ";
            // line 128
            if (((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 1)) {
                // line 129
                echo "              <span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("组员"), "html", null, true);
                echo "</span>
              ";
            }
            // line 131
            echo "
              ";
            // line 132
            if (((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2)) {
                // line 133
                echo "              <span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("组长"), "html", null, true);
                echo "</span>
              ";
            }
            // line 135
            echo "
              ";
            // line 136
            if (((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3)) {
                // line 137
                echo "              <span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("副组长"), "html", null, true);
                echo "</span>
              ";
            }
            // line 139
            echo "            </p>
            <a href=\"";
            // line 140
            echo $this->env->getExtension('routing')->getPath("group_member_center");
            echo "\" class=\"btn btn-default btn-sm\" role=\"button\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的小组"), "html", null, true);
            echo "</a>
          </div>
          <hr>
           <p class=\"group-message clearfix\">
              <span><strong>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userIsGroupMember"]) ? $context["userIsGroupMember"] : null), "threadNum", array()), "html", null, true);
            echo "</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("话题"), "html", null, true);
            echo "</span>
              <span><strong>";
            // line 145
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
        // line 151
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小组组长"), "html", null, true);
        echo "</h3></div>
    <div class=\"panel-body\">
      <div class=\"media group-item\">
        <div class=\"media-left\">
          ";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["groupOwner"]) ? $context["groupOwner"] : null), 1 => ""), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"media-body\">
          <div><a class=\"gray-darker\" href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["groupOwner"]) ? $context["groupOwner"] : null), "id", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupOwner"]) ? $context["groupOwner"] : null), "nickname", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupOwner"]) ? $context["groupOwner"] : null), "nickname", array()), "html", null, true);
        echo "</a></div>
          <span class=\"text-sm gray-medium\">";
        // line 160
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["groupOwner"]) ? $context["groupOwner"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["groupOwner"]) ? $context["groupOwner"] : null), "title", array()), $this->env->getExtension('translator')->trans("无"))) : ($this->env->getExtension('translator')->trans("无"))), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
  </div>


  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新加组员"), "html", null, true);
        echo "</h3></div>
    <div class=\"panel-body\">
      ";
        // line 170
        if ((isset($context["recentlyJoinMember"]) ? $context["recentlyJoinMember"] : null)) {
            // line 171
            echo "        <ul class=\"user-avatar-list clearfix\">
          ";
            // line 172
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recentlyJoinMember"]) ? $context["recentlyJoinMember"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 173
                echo "            <li>
              ";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => $this->getAttribute((isset($context["recentlyMembers"]) ? $context["recentlyMembers"] : null), $this->getAttribute($context["member"], "userId", array()), array(), "array"), 1 => "", 2 => "avatar-sm"), "method"), "html", null, true);
                echo "
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "        </ul>
      ";
        } else {
            // line 179
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还没有小组成员！"), "html", null, true);
            echo "</div>
      ";
        }
        // line 181
        echo "    </div>
  </div>

  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("热门小组"), "html", null, true);
        echo "</h3></div>
    <div class=\"panel-body\">
      <div class=\"media-group-list\">
      ";
        // line 188
        $context["hotGroups"] = $this->env->getExtension('topxia_data_twig')->getData("HotGroup", array("count" => 3));
        // line 189
        echo "      ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotGroups"]) ? $context["hotGroups"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 190
            echo "        <div class=\"media media-group\">
          <div class=\"media-left prm\">
            <a href=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\">
              <img src=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["group"], "logo", array()), "group.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\" class=\"avatar-square-md\">
            </a>
          </div>
          <div class=\"media-body\">
            <div class=\"title\">
              <a class=\"gray-darker\" href=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\">
                ";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "
              </a>
            </div>
            <div class=\"metas\">
              <span><i class=\"es-icon es-icon-people\"></i>";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "memberNum", array()), "html", null, true);
            echo "</span>
              <span><i class=\"es-icon es-icon-textsms\"></i>";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "threadNum", array()), "html", null, true);
            echo "</span>
            </div>
          </div>
        </div>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 209
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无小组信息！"), "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "      </div>

    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:groupmember.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 211,  569 => 209,  559 => 204,  555 => 203,  548 => 199,  542 => 198,  532 => 193,  526 => 192,  522 => 190,  516 => 189,  514 => 188,  508 => 185,  502 => 181,  496 => 179,  492 => 177,  483 => 174,  480 => 173,  476 => 172,  473 => 171,  471 => 170,  466 => 168,  455 => 160,  447 => 159,  441 => 156,  434 => 152,  431 => 151,  420 => 145,  414 => 144,  405 => 140,  402 => 139,  396 => 137,  394 => 136,  391 => 135,  385 => 133,  383 => 132,  380 => 131,  374 => 129,  372 => 128,  367 => 126,  361 => 123,  355 => 119,  353 => 118,  346 => 114,  342 => 113,  336 => 111,  327 => 108,  325 => 107,  322 => 106,  319 => 105,  311 => 101,  304 => 96,  298 => 94,  294 => 92,  288 => 90,  286 => 89,  283 => 88,  275 => 85,  269 => 84,  267 => 83,  262 => 81,  259 => 80,  254 => 79,  252 => 78,  248 => 77,  243 => 75,  238 => 72,  235 => 71,  230 => 69,  225 => 68,  222 => 67,  216 => 65,  213 => 64,  211 => 63,  204 => 58,  198 => 56,  195 => 55,  187 => 52,  181 => 50,  179 => 49,  174 => 47,  171 => 46,  166 => 45,  160 => 43,  157 => 42,  155 => 41,  151 => 40,  146 => 38,  134 => 31,  128 => 30,  122 => 27,  117 => 25,  113 => 23,  101 => 21,  99 => 20,  89 => 19,  79 => 18,  73 => 14,  69 => 12,  59 => 11,  56 => 10,  54 => 9,  49 => 7,  46 => 6,  43 => 5,  35 => 3,  31 => 1,  29 => 4,  27 => 2,  11 => 1,);
    }
}
