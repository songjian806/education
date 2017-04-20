<?php

/* TopxiaWebBundle:EsBar:ListContent/Notification/notify.html.twig */
class __TwigTemplate_56678fb2720ab18cd699f5087b4036cfe37ea1a5d41876ac2ba4cfd86f01be2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/notification.html.twig", "TopxiaWebBundle:EsBar:ListContent/Notification/notify.html.twig", 1);
        $this->blocks = array(
            'myMessage' => array($this, 'block_myMessage'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:EsBar:ListContent/notification.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_myMessage($context, array $blocks = array())
    {
        // line 4
        echo "
  ";
        // line 5
        if ((isset($context["notifications"]) ? $context["notifications"] : null)) {
            // line 6
            echo "    ";
            $context["notificationsCount"] = 15;
            // line 7
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 8
                echo "      ";
                $context["notificationsCount"] = $this->getAttribute($context["loop"], "length", array());
                // line 9
                echo "      ";
                $context["notification"] = $this->env->getExtension('topxia_web_twig')->renderNotification($context["notification"]);
                // line 10
                echo "      ";
                echo $this->getAttribute($context["notification"], "message", array());
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
            if (((isset($context["notificationsCount"]) ? $context["notificationsCount"] : null) >= 15)) {
                // line 13
                echo "      <li class=\"text-center\"><a class=\"link-light\" href=\"";
                echo $this->env->getExtension('routing')->getPath("notification");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多"), "html", null, true);
                echo "<i class=\"es-icon es-icon-angledoubleright\"></i></a></li>
    ";
            }
            // line 15
            echo "  ";
        } else {
            // line 16
            echo "    <li class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无通知"), "html", null, true);
            echo "</li>
  ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/Notification/notify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 16,  91 => 15,  83 => 13,  80 => 12,  63 => 10,  60 => 9,  57 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
