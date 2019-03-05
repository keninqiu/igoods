<?php

/* @users/posts.twig */
class __TwigTemplate_8195f83e322d6740472e8c322ee5bce9a34f7cf6cf26034d8da0c6ea5007efc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@users/profile.twig", "@users/posts.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@users/profile.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div id=\"mp-posts\" class=\"ui basic vertical segment\">
\t\t";
        // line 5
        if (((($this->env->getExtension('Membership_Users_Twig')->isCurrentUser(($context["requestedUser"] ?? null)) && (($context["createNewPostUrl"] ?? null) != null)) && ($context["canUserCreatePost"] ?? null)) && ($this->getAttribute($this->getAttribute(($context["requestedUser"] ?? null), "permissions", array(), "array"), "can-access-wp-admin", array(), "array") == "true"))) {
            // line 6
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, ($context["createNewPostUrl"] ?? null), "html", null, true);
            echo "\" class=\"ui primary button\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add new post")), "html", null, true);
            echo "</a>
\t\t";
        }
        // line 8
        echo "\t\t";
        if (($context["posts"] ?? null)) {
            // line 9
            echo "\t\t\t<div class=\"ui divided items\">
\t\t\t\t";
            // line 10
            $this->loadTemplate("@users/partials/posts.twig", "@users/posts.twig", 10)->display(array_merge($context, array("posts" => ($context["posts"] ?? null))));
            // line 11
            echo "\t\t\t</div>
\t\t\t<div class=\"ui basic vertical segment posts-loader\" style=\"display: none\">
\t\t\t\t<div class=\"ui active centered inline loader\"></div>
\t\t\t</div>
\t\t";
        } else {
            // line 16
            echo "\t\t\t<div class=\"ui message\">
\t\t\t\t<p>";
            // line 17
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No posts to show.")), "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t";
        }
        // line 20
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "@users/posts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  62 => 17,  59 => 16,  52 => 11,  50 => 10,  47 => 9,  44 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@users/posts.twig", "/Library/WebServer/Documents/igoods/wp-content/plugins/membership-by-supsystic/src/Membership/Users/views/posts.twig");
    }
}
