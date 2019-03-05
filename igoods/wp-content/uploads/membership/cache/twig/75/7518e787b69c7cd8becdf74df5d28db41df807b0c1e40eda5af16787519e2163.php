<?php

/* @activity/search.twig */
class __TwigTemplate_3f3090769c01d07b71e70c1a53c9aef25f50cf28ae6003124ce448fea19e9a78 extends Twig_Template
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
        echo "<div class=\"sc-membership\">
\t<div class=\"ui segment vertical basic mp-activity-container\" data-activity-context=\"activity\">
\t\t
\t\t<div class=\"ui vertical segment basic search-activities\">
\t\t\t<div class=\"ui fluid icon input mbsFrontendSearchWr\">
\t\t\t\t<input type=\"text\">
\t\t\t\t<i class=\"search icon\"></i>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"mp-activity-list\">
\t\t\t";
        // line 12
        $this->loadTemplate("@activity/partials/activities.twig", "@activity/search.twig", 12)->display(array_merge($context, array("activities" => ($context["activities"] ?? null))));
        // line 13
        echo "\t\t</div>
\t\t
\t\t<div class=\"ui message no-activities\" ";
        // line 15
        if (($context["activities"] ?? null)) {
            echo "style=\"display: none\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Nothing is found.")), "html", null, true);
        echo "</div>
\t\t
\t\t<div class=\"ui basic segment activity-loader\" style=\"display: none\">
\t\t\t<div class=\"ui active loader\"></div>
\t\t</div>
\t
\t</div>
\t
\t";
        // line 23
        $this->loadTemplate("@activity/partials/activity-gallery-modal.twig", "@activity/search.twig", 23)->display($context);
        // line 24
        echo "\t";
        $this->loadTemplate("@activity/partials/activity-report-modal.twig", "@activity/search.twig", 24)->display($context);
        // line 25
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@activity/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 25,  55 => 24,  53 => 23,  38 => 15,  34 => 13,  32 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@activity/search.twig", "/Library/WebServer/Documents/igoods/wp-content/plugins/membership-by-supsystic/src/Membership/Activity/views/search.twig");
    }
}
