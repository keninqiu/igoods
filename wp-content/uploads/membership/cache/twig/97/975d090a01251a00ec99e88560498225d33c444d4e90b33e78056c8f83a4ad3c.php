<?php

/* @groups/partials/create-group-modal.twig */
class __TwigTemplate_2aa2049ce4d7b6893bf00ab2301aabc13fd280e5151b4a1f06cfe1cd9fb24285 extends Twig_Template
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
        echo "<div class=\"ui small modal\" id=\"create-group-modal\">
\t<i class=\"close icon\"></i>
\t<div class=\"header\">";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create new group")), "html", null, true);
        echo "</div>
\t<div class=\"content\">
\t\t<div class=\"ui form\">
\t\t\t
\t\t\t<div class=\"ui message respone-message\" style=\"display: none\"></div>
\t\t\t<div class=\"field\">
\t\t\t\t<label>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Name")), "html", null, true);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"name\">
\t\t\t</div>
\t\t\t<div class=\"field\">
\t\t\t\t<label>";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Description")), "html", null, true);
        echo "</label>
\t\t\t\t<textarea max=\"2000\" rows=\"2\" name=\"description\"></textarea>
\t\t\t</div>

\t\t\t<div class=\"field\">
\t\t\t\t<label>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Category")), "html", null, true);
        echo "</label>
\t\t\t\t<select name=\"category\">
\t\t\t\t\t<option value=\"0\">";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("None")), "html", null, true);
        echo "</option>
\t\t\t\t\t";
        // line 21
        if (twig_length_filter($this->env, ($context["groupCategoryList"] ?? null))) {
            // line 22
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groupCategoryList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oneGcItem"]) {
                // line 23
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["oneGcItem"], "id", array(), "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["oneGcItem"], "name", array(), "array"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oneGcItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"field\">
\t\t\t\t<label>";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Community type")), "html", null, true);
        echo "</label>
\t\t\t\t<select name=\"type\">
\t\t\t\t\t<option value=\"open\">Open</option>
\t\t\t\t\t<option value=\"closed\">Closed</option>
\t\t\t\t\t<option value=\"private\">Private</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"field\">
\t\t\t\t<label>";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Invite users")), "html", null, true);
        echo "</label>
\t\t\t\t<div class=\"ui fluid multiple search selection dropdown\">
\t\t\t\t\t<input type=\"hidden\" name=\"users\">
\t\t\t\t\t<i class=\"dropdown icon\"></i>
\t\t\t\t\t<div class=\"default text\">";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter name")), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"ui active small inline loader\" style=\"display: none; margin: 0.2em 0;\"></div>
\t\t\t\t\t<div class=\"menu ui relaxed list\">
\t\t\t\t\t\t";
        // line 45
        $this->loadTemplate("@base/partials/search-dropdown-user.twig", "@groups/partials/create-group-modal.twig", 45)->display(array_merge($context, array("users" => ($context["friends"] ?? null))));
        // line 46
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mbsInputUnderLabel\">";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("to start searching, enter more than 2 characters")), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"actions\">
\t\t<button class=\"ui button secondary mini cancel\">";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cancel")), "html", null, true);
        echo "</button>
\t\t<button class=\"ui button mini primary approve\">";
        // line 54
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create")), "html", null, true);
        echo "</button>
\t</div>

\t<input type=\"hidden\" id=\"mbsMsgErrorOcured\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Error ocured!")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"mbsMsgGroupCreated-1\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Your group successfully created. Redirecting to you new group...")), "html", null, true);
        echo "\"/>
</div>
";
    }

    public function getTemplateName()
    {
        return "@groups/partials/create-group-modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 58,  131 => 57,  125 => 54,  121 => 53,  113 => 48,  109 => 46,  107 => 45,  101 => 42,  94 => 38,  83 => 30,  77 => 26,  74 => 25,  63 => 23,  58 => 22,  56 => 21,  52 => 20,  47 => 18,  39 => 13,  32 => 9,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/partials/create-group-modal.twig", "/Library/WebServer/Documents/igoods/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/views/partials/create-group-modal.twig");
    }
}
