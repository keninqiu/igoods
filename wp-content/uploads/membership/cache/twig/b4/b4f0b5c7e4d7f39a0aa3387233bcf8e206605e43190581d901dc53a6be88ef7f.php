<?php

/* @activity/index.twig */
class __TwigTemplate_15e93361947bfef875d980975f23ba8e5f4f276ef3c92cc6914b4bc2a411de41 extends Twig_Template
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
        echo "<div id=\"supsystic-membership\" class=\"sc-membership\">
\t";
        // line 2
        if (($context["activityFilterEnabled"] ?? null)) {
            // line 3
            echo "\t<div>
\t\t<div class=\"ui floating labeled icon top left pointing dropdown small button activity-filter\">
\t\t\t<input name=\"activity-filter\" type=\"hidden\" value=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["activityFilter"] ?? null), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_join_filter(($context["activityTypes"] ?? null), ","), "html", null, true);
            echo "\">
\t\t\t<span class=\"text\">
\t\t\t\t";
            // line 7
            if ((($context["activityFilter"] ?? null) == "subscriptions")) {
                // line 8
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Subscriptions")), "html", null, true);
                echo "
\t\t\t\t\t";
            } elseif ((            // line 9
($context["activityFilter"] ?? null) == "popular")) {
                // line 10
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popular")), "html", null, true);
                echo "
\t\t\t\t\t";
            } elseif ((            // line 11
($context["activityFilter"] ?? null) == "site-wide")) {
                // line 12
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Site wide")), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 14
            echo "\t\t\t</span>
\t\t\t<i class=\"filter icon\"></i>
\t\t\t<div class=\"menu\">
\t\t\t\t<div class=\"header\">
\t\t\t\t\t<i class=\"filter icon\"></i>
\t\t\t\t\t";
            // line 19
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity filter")), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"scrolling menu activity-filter-menu\">
\t\t\t\t\t";
            // line 22
            if (($context["userLoggedIn"] ?? null)) {
                // line 23
                echo "\t\t\t\t\t\t<div class=\"item activity-filter-item ";
                echo (((($context["activityFilter"] ?? null) == "subscriptions")) ? ("active") : (""));
                echo "\" data-text=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Subscriptions")), "html", null, true);
                echo "\" data-value=\"subscriptions\">
\t\t\t\t\t\t\t";
                // line 24
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Subscriptions")), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t\t<div class=\"item activity-filter-item ";
            echo (((($context["activityFilter"] ?? null) == "popular")) ? ("active") : (""));
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popular")), "html", null, true);
            echo "\" data-value=\"popular\">
\t\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popular")), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item activity-filter-item ";
            // line 30
            echo (((($context["activityFilter"] ?? null) == "site-wide")) ? ("active") : (""));
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Site wide")), "html", null, true);
            echo "\" data-value=\"site-wide\">
\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Site wide")), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"header\">
\t\t\t\t\t<i class=\"tags icon\"></i>
\t\t\t\t\t";
            // line 36
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity type")), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"scrolling menu\">
\t\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["activityAllTypes"] ?? null));
            foreach ($context['_seq'] as $context["type"] => $context["title"]) {
                // line 40
                echo "\t\t\t\t\t\t";
                $context["isActive"] = false;
                // line 41
                echo "\t\t\t\t\t\t";
                if (twig_in_filter($context["type"], ($context["activityTypes"] ?? null))) {
                    // line 42
                    echo "\t\t\t\t\t\t\t";
                    $context["isActive"] = true;
                    // line 43
                    echo "\t\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"item activity-type-item ";
                // line 45
                echo ((($context["isActive"] ?? null)) ? ("active") : (""));
                echo "\" data-value=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<div class=\"ui ";
                // line 46
                echo ((($context["isActive"] ?? null)) ? ("green") : ("red"));
                echo " empty circular label\"></div>
\t\t\t\t\t\t\t";
                // line 47
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 55
        echo "\t";
        $this->loadTemplate("@activity/partials/activities-container.twig", "@activity/index.twig", 55)->display(array_merge($context, array("activities" => ($context["activities"] ?? null), "context" => "activity", "smilesList" => ($context["smilesList"] ?? null), "settings" => ($context["settings"] ?? null))));
        // line 56
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@activity/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 56,  162 => 55,  155 => 50,  146 => 47,  142 => 46,  136 => 45,  133 => 44,  130 => 43,  127 => 42,  124 => 41,  121 => 40,  117 => 39,  111 => 36,  103 => 31,  97 => 30,  92 => 28,  85 => 27,  79 => 24,  72 => 23,  70 => 22,  64 => 19,  57 => 14,  51 => 12,  49 => 11,  44 => 10,  42 => 9,  37 => 8,  35 => 7,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@activity/index.twig", "/Library/WebServer/Documents/igoods/wp-content/plugins/membership-by-supsystic/src/Membership/Activity/views/index.twig");
    }
}
