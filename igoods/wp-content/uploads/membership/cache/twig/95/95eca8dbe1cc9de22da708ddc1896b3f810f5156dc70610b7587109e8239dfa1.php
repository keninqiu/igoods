<?php

/* @groups/groups.twig */
class __TwigTemplate_1272831142dd3d93d56f88cabf84d01ba8b63e1693b6a07219ce950c0cf0d273 extends Twig_Template
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
        $context["groupsSectionTitles"] = array("joined" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Joined Groups")), "managed" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Managed Groups")), "invited" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Invites")));
        // line 6
        echo "
<div id=\"mp-groups\" class=\"sc-membership\">
\t<div class=\"ui grid\">
\t\t<div class=\"sixteen wide column\">
\t\t\t<div class=\"ui pointing secondary menu groups-tab-items\">
\t\t\t\t<a class=\"item active\" data-tab=\"all\">";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("All groups")), "html", null, true);
        echo "</a>
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["counts"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["count"]) {
            // line 13
            echo "\t\t\t\t\t";
            if (($context["count"] > 0)) {
                // line 14
                echo "\t\t\t\t\t\t<a class=\"item\" data-tab=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["groupsSectionTitles"] ?? null), $context["type"], array(), "array"), "html", null, true);
                echo " <div class=\"ui mini label\">";
                echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                echo "</div></a>
\t\t\t\t\t";
            }
            // line 16
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
\t\t\t\t";
        // line 18
        if (call_user_func_array($this->env->getFunction('currentUserCan')->getCallable(), array("can-create-groups"))) {
            // line 19
            echo "\t\t\t\t\t<div class=\"right menu\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<button class=\"ui button mini primary create-group-button\">";
            // line 21
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create Group")), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 25
        echo "\t\t\t</div>
\t\t\t
\t\t\t<div class=\"groups-tabs\">
\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_merge(array(0 => "all"), twig_get_array_keys_filter(($context["counts"] ?? null))));
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
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 29
            echo "\t\t\t\t\t<div class=\"ui tab ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo "active";
            }
            echo "\" data-tab=\"";
            echo twig_escape_filter($this->env, $context["section"], "html", null, true);
            echo "\">
\t\t\t\t\t\t<div class=\"ui basic vertical segment form group-search-input\">
\t\t\t\t\t\t\t<select name=\"category\" class=\"mbsGroupsSearchCategory\">
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 32
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("All categories")), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
            // line 33
            if (twig_length_filter($this->env, ($context["groupCategoryList"] ?? null))) {
                // line 34
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groupCategoryList"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["oneGcItem"]) {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["oneGcItem"], "id", array(), "array"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["oneGcItem"], "name", array(), "array"), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oneGcItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"ui fluid icon input mbsGroupsSearchName\">
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"";
            // line 40
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Find group...")), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"search icon\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ui two cards stackable groups-list\">
\t\t\t\t\t\t\t";
            // line 45
            if (($context["section"] == "invited")) {
                // line 46
                echo "\t\t\t\t\t\t\t   \t";
                $this->loadTemplate("@groups/groups.twig", "@groups/groups.twig", 46, "575488984")->display(array_merge($context, array("groups" => $this->getAttribute(($context["groups"] ?? null), $context["section"], array(), "array"))));
                // line 58
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 59
                echo "\t\t\t\t\t\t\t\t ";
                $this->loadTemplate("@groups/partials/groups-list.twig", "@groups/groups.twig", 59)->display(array_merge($context, array("groups" => $this->getAttribute(($context["groups"] ?? null), $context["section"], array(), "array"))));
                // line 60
                echo "\t\t\t\t\t\t\t";
            }
            // line 61
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ui basic vertical segment\">
\t\t\t\t\t\t\t<div class=\"ui message no-groups\" ";
            // line 64
            if (($context["groups"] ?? null)) {
                echo "style=\"display:none\"";
            }
            echo ">
\t\t\t\t\t\t\t\t<p>";
            // line 65
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No groups to show.")), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ui basic segment very padded list-loader\" style=\"display:none;\">
\t\t\t\t\t\t\t<div class=\"ui active loader\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 78
        $this->loadTemplate("@groups/partials/create-group-modal.twig", "@groups/groups.twig", 78)->display($context);
        // line 79
        if ( !($context["userLoggedIn"] ?? null)) {
            // line 80
            echo "\t";
            $this->loadTemplate("@auth/partials/login-modal.twig", "@groups/groups.twig", 80)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@groups/groups.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 80,  197 => 79,  195 => 78,  188 => 73,  166 => 65,  160 => 64,  155 => 61,  152 => 60,  149 => 59,  146 => 58,  143 => 46,  141 => 45,  133 => 40,  129 => 38,  126 => 37,  115 => 35,  110 => 34,  108 => 33,  104 => 32,  93 => 29,  76 => 28,  71 => 25,  64 => 21,  60 => 19,  58 => 18,  55 => 17,  49 => 16,  39 => 14,  36 => 13,  32 => 12,  28 => 11,  21 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/groups.twig", "/Library/WebServer/Documents/igoods/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/views/groups.twig");
    }
}


/* @groups/groups.twig */
class __TwigTemplate_1272831142dd3d93d56f88cabf84d01ba8b63e1693b6a07219ce950c0cf0d273_575488984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 46
        $this->parent = $this->loadTemplate("@groups/partials/groups-list.twig", "@groups/groups.twig", 46);
        $this->blocks = array(
            'actionButtons' => array($this, 'block_actionButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@groups/partials/groups-list.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 47
    public function block_actionButtons($context, array $blocks = array())
    {
        // line 48
        echo "\t\t\t\t\t\t\t\t\t\t";
        if ( !$this->env->getExtension('Membership_Groups_Twig')->isMemberOfGroup(($context["group"] ?? null))) {
            // line 49
            echo "\t\t\t\t\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"accept-invitation\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Accept")), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"decline-invitation\">";
            // line 50
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Decline")), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ($this->env->getExtension('Membership_Groups_Twig')->canLeaveGroup(($context["group"] ?? null))) {
                // line 53
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"decline-invitation\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Leave group")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "@groups/groups.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 56,  284 => 55,  278 => 53,  275 => 52,  270 => 50,  265 => 49,  262 => 48,  259 => 47,  242 => 46,  199 => 80,  197 => 79,  195 => 78,  188 => 73,  166 => 65,  160 => 64,  155 => 61,  152 => 60,  149 => 59,  146 => 58,  143 => 46,  141 => 45,  133 => 40,  129 => 38,  126 => 37,  115 => 35,  110 => 34,  108 => 33,  104 => 32,  93 => 29,  76 => 28,  71 => 25,  64 => 21,  60 => 19,  58 => 18,  55 => 17,  49 => 16,  39 => 14,  36 => 13,  32 => 12,  28 => 11,  21 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/groups.twig", "/Library/WebServer/Documents/igoods/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/views/groups.twig");
    }
}
