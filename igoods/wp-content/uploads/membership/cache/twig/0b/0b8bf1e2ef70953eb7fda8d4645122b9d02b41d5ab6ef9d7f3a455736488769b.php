<?php

/* @groups/joined-groups.twig */
class __TwigTemplate_6ce0807441d0b447e952ac17c4edff9e9125726306bed9265767e9f2cdbfbe4d extends Twig_Template
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
        echo "<div id=\"mbs-joined-groups\" class=\"sc-membership\">
\t<div class=\"ui grid\">
\t\t<div class=\"sixteen wide column\">
\t\t\t<div class=\"groups-tab-items\">
\t\t\t\t<div class=\"item mbs-f-hidden\" data-tab=\"joined\"></div>
\t\t\t\t";
        // line 6
        if (call_user_func_array($this->env->getFunction('currentUserCan')->getCallable(), array("can-create-groups"))) {
            // line 7
            echo "\t\t\t\t\t<div class=\"right menu\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<button class=\"ui button mini primary create-group-button\">";
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create Group")), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 13
        echo "\t\t\t</div>
\t\t\t<div class=\"groups-tabs\">
\t\t\t\t<div class=\"ui tab active\" data-tab=\"joined\">
\t\t\t\t\t<div class=\"ui basic vertical segment form group-search-input\">
\t\t\t\t\t\t<select name=\"category\" class=\"mbsGroupsSearchCategory\">
\t\t\t\t\t\t\t<option value=\"0\">";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("All categories")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t";
        // line 19
        if (twig_length_filter($this->env, ($context["groupCategoryList"] ?? null))) {
            // line 20
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groupCategoryList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oneGcItem"]) {
                // line 21
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["oneGcItem"], "id", array(), "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["oneGcItem"], "name", array(), "array"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oneGcItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<div class=\"ui fluid icon input mbsGroupsSearchName\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Find group...")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<i class=\"search icon\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ui two cards stackable groups-list\">
\t\t\t\t\t\t";
        // line 31
        $this->loadTemplate("@groups/partials/groups-list.twig", "@groups/joined-groups.twig", 31)->display(array_merge($context, array("groups" => ($context["joinedGroups"] ?? null))));
        // line 32
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ui basic vertical segment\">
\t\t\t\t\t\t<div class=\"ui message no-groups\" ";
        // line 34
        if (($context["groups"] ?? null)) {
            echo "style=\"display:none\"";
        }
        echo ">
\t\t\t\t\t\t\t<p>";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No groups to show.")), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ui basic segment very padded list-loader\" style=\"display:none;\">
\t\t\t\t\t\t<div class=\"ui active loader\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 46
        $this->loadTemplate("@groups/partials/create-group-modal.twig", "@groups/joined-groups.twig", 46)->display($context);
        // line 47
        if ( !($context["userLoggedIn"] ?? null)) {
            // line 48
            echo "\t";
            $this->loadTemplate("@auth/partials/login-modal.twig", "@groups/joined-groups.twig", 48)->display($context);
        }
        // line 50
        echo "
";
    }

    public function getTemplateName()
    {
        return "@groups/joined-groups.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 50,  113 => 48,  111 => 47,  109 => 46,  95 => 35,  89 => 34,  85 => 32,  83 => 31,  75 => 26,  71 => 24,  68 => 23,  57 => 21,  52 => 20,  50 => 19,  46 => 18,  39 => 13,  32 => 9,  28 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/joined-groups.twig", "/Library/WebServer/Documents/igoods/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/views/joined-groups.twig");
    }
}
