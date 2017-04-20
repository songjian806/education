<?php

/* TopxiaAdminBundle:Block:list-tr.html.twig */
class __TwigTemplate_829a1552423135b09e846d86c08065b9eeb3ab619454215b8f707ff922efcf3f extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Block:list-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"blockitem";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : null), "id", array()), "html", null, true);
        echo "\">
    <td>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : null), "title", array()), "html", null, true);
        echo "
        <br>
        <span class=\"text-muted text-sm\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编码："), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : null), "code", array()), "html", null, true);
        echo "</span>
    </td>
    <td>
        ";
        // line 9
        if ((($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array()), null)) : (null))) {
            // line 10
            echo "        ";
            echo $context["admin_macro"]->getuser_link(((array_key_exists("latestUpdateUser", $context)) ? (_twig_default_filter((isset($context["latestUpdateUser"]) ? $context["latestUpdateUser"] : null), null)) : (null)));
            echo "
        ";
        } else {
            // line 12
            echo "        <span class=\"text-muted\">未编辑</span>
        ";
        }
        // line 14
        echo "        <br>
        ";
        // line 15
        if ((($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "createdTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "createdTime", array()), null)) : (null))) {
            // line 16
            echo "        <span class=\"text-muted text-sm\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</span>
        ";
        }
        // line 18
        echo "    </td>
    <td>
        ";
        // line 20
        if (($this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : null), "mode", array()) == "html")) {
            // line 21
            echo "            <button class=\"btn btn-sm btn-primary update-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_update", array("blockTemplateId" => $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : null), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑html"), "html", null, true);
            echo "</button>
        ";
        }
        // line 23
        echo "
        ";
        // line 24
        if (($this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : null), "mode", array()) == "template")) {
            // line 25
            echo "            <a class=\"btn btn-sm btn-primary update-btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_visual_edit", array("blockTemplateId" => $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑内容"), "html", null, true);
            echo "</a>
        ";
        }
        // line 27
        echo "
        ";
        // line 28
        if ($this->env->getExtension('topxia_web_twig')->getSetting("developer.debug")) {
            // line 29
            echo "        
        <button class=\"btn btn-sm btn-default edit-btn hidden\" data-url=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_edit", array("blockTemplateId" => $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : null), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置"), "html", null, true);
            echo "</button>
        <button class=\"btn btn-sm btn-default delete-btn\" data-url=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_delete", array("id" => $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : null), "id", array()))), "html", null, true);
            echo "\" data-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : null), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
            echo "</button>
        ";
        }
        // line 33
        echo "    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:list-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  103 => 31,  97 => 30,  94 => 29,  92 => 28,  89 => 27,  81 => 25,  79 => 24,  76 => 23,  68 => 21,  66 => 20,  62 => 18,  56 => 16,  54 => 15,  51 => 14,  47 => 12,  41 => 10,  39 => 9,  32 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }
}
