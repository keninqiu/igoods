<?php

/* @users/messages.twig */
class __TwigTemplate_dfcb4de1d1ab1875c01ab6b49890e9a832171954a2fc151517fe549c72d40f66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@users/profile.twig", "@users/messages.twig", 1);
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
        echo "\t";
        $this->loadTemplate("@messages/messages.twig", "@users/messages.twig", 4)->display(array_merge($context, array("type" => "profile", "conversations" => ($context["conversations"] ?? null))));
    }

    public function getTemplateName()
    {
        return "@users/messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@users/messages.twig", "/Library/WebServer/Documents/igoods/wp-content/plugins/membership-by-supsystic/src/Membership/Users/views/messages.twig");
    }
}
