<?php

/* TopxiaAdminBundle:Notification:index.html.twig */
class __TwigTemplate_da884e76f544a1f82d986c065e7f83a786e0c935ae7bf30da8587323ea2debda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Notification:index.html.twig", 1);
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
        $context["menu"] = "admin_batch_notification";
        // line 5
        $context["script_controller"] = "batchnotification/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<table id=\"batchnotification-table\" class=\"table table-striped\">
    <thead>
        <tr>
            <th width=\"40%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("站内信通知标题"), "html", null, true);
        echo "</th>
            <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布时间"), "html", null, true);
        echo "</th>
            <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建时间"), "html", null, true);
        echo "</th>
            <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布人"), "html", null, true);
        echo "</th>
            <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("状态"), "html", null, true);
        echo "</th>
            <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 20
        if ((isset($context["batchnotifications"]) ? $context["batchnotifications"] : null)) {
            // line 21
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["batchnotifications"]) ? $context["batchnotifications"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["batchnotification"]) {
                // line 22
                echo "                <tr>
                    <td><a href=\"javascript:;\" data-url=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("batch_notification_show", array("id" => $this->getAttribute($context["batchnotification"], "id", array()))), "html", null, true);
                echo "\"data-toggle=\"modal\" data-target=\"#modal\">";
                echo $this->getAttribute($context["batchnotification"], "title", array());
                echo "</a></td>
                    ";
                // line 24
                if (($this->getAttribute($context["batchnotification"], "sendedTime", array()) == 0)) {
                    // line 25
                    echo "                    <td>--</td>
                    ";
                } else {
                    // line 27
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["batchnotification"], "sendedTime", array()), "Y-m-d H:i"), "html", null, true);
                    echo "</td>
                    ";
                }
                // line 29
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["batchnotification"], "createdTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
                    <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["batchnotification"], "fromId", array()), array(), "array"), "nickname", array()), "html", null, true);
                echo "</td>
                    ";
                // line 31
                if ($this->getAttribute($context["batchnotification"], "published", array())) {
                    echo "<td class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已发布"), "html", null, true);
                    echo "</td>";
                } else {
                    echo "<td>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未发布"), "html", null, true);
                    echo "</td>";
                }
                // line 32
                echo "                    <td>
                        <div class=\"btn-group\">
                            ";
                // line 34
                if ($this->getAttribute($context["batchnotification"], "published", array())) {
                    // line 35
                    echo "                                <a  href=\"javascript:\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_batch_notification_delete", array("id" => $this->getAttribute($context["batchnotification"], "id", array()))), "html", null, true);
                    echo "\" data-role=\"delete-item\" class=\"btn btn-default btn-sm\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
                    echo "</a>
                            ";
                } else {
                    // line 37
                    echo "                                <a  href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_batch_notification_edit", array("id" => $this->getAttribute($context["batchnotification"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default btn-sm\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
                    echo "</a>
                                <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"javascript:\" data-role=\"publish-item\" data-url=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_batch_notification_send", array("id" => $this->getAttribute($context["batchnotification"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布"), "html", null, true);
                    echo "</a></li>
                                    <li><a href=\"javascript:\" data-role=\"delete-item\" data-url=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_batch_notification_delete", array("id" => $this->getAttribute($context["batchnotification"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
                    echo "</a></li>
                                </ul>
                            ";
                }
                // line 46
                echo "                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['batchnotification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        ";
        }
        // line 51
        echo "    </tbody>
</table>
  ";
        // line 53
        if ( !(isset($context["batchnotifications"]) ? $context["batchnotifications"] : null)) {
            // line 54
            echo "  <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无站内信"), "html", null, true);
            echo "</div>
  ";
        }
        // line 56
        echo "
  ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Notification:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 57,  178 => 56,  172 => 54,  170 => 53,  166 => 51,  163 => 50,  154 => 46,  146 => 43,  140 => 42,  129 => 37,  121 => 35,  119 => 34,  115 => 32,  105 => 31,  101 => 30,  96 => 29,  90 => 27,  86 => 25,  84 => 24,  78 => 23,  75 => 22,  70 => 21,  68 => 20,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
