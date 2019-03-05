<?php

/* @auth/partials/login-form.twig */
class __TwigTemplate_45d106526faa4894247ecb98edb101d763134451f878b5946870f17358be3123 extends Twig_Template
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
        echo "<form class=\"ui form left membership-login-form\"
      method=\"post\"
      data-validation-rules=\"";
        // line 3
        echo twig_escape_filter($this->env, sprintf(twig_jsonencode_filter(array("username" => array("presence" => array("message" => "%s")), "password" => array("presence" => array("message" => "%s")))), call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Username or E-mail is required")), call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Password is required"))), "html", null, true);
        // line 9
        echo "\"
      class=\"membership-login-form\"
>
\t
\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "auth.view.loginFormBefore"), "method"), "html", null, true);
        echo "
\t";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "loginFormBefore"), "method"), "html", null, true);
        echo "
\t
\t<div class=\"field ui left\" data-name=\"username\">
\t\t<label>";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Username or E-mail")), "html", null, true);
        echo "</label>
\t\t<input type=\"text\" name=\"username\">
\t</div>
\t<div class=\"field\" data-name=\"password\">
\t\t<label>";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Password")), "html", null, true);
        echo "</label>
\t\t<input type=\"password\" name=\"password\">
\t</div>
\t<div class=\"ui equal width grid\">
\t\t<div class=\"field left aligned column\">
\t\t\t";
        // line 26
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "design", array()), "auth", array()), "login-show-remember-me", array(), "array")) {
            // line 27
            echo "\t\t\t\t<div class=\"ui checkbox\">
\t\t\t\t\t<input type=\"checkbox\" id=\"remember-user-checkbox\" value=\"true\" name=\"remember\" class=\"hidden\">
\t\t\t\t\t<label for=\"remember-user-checkbox\"><small>";
            // line 29
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remember me")), "html", null, true);
            echo "</small></label>
\t\t\t\t</div>
\t\t\t";
        }
        // line 32
        echo "\t\t</div>
\t\t<div class=\"field right aligned column\">
\t\t\t<a href=\"";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getRouteUrl')->getCallable(), array("login", array("action" => "reset-password"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Forgot your password?")), "html", null, true);
        echo "</a>
\t\t</div>
\t</div>
\t
\t";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "auth.view.loginFormAfter"), "method"), "html", null, true);
        echo "
\t
\t<div class=\"mp-login-form-action-buttons ui basic vertical clearing segment\">
\t\t<a class=\"submit ui left floated button primary mini\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "design", array()), "auth", array()), "login-primary-button-text", array(), "array"), "html", null, true);
        echo "</a>

\t\t";
        // line 43
        $context["registrationButtonUrl"] = call_user_func_array($this->env->getFunction('getRouteUrl')->getCallable(), array("registration"));
        // line 44
        echo "\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "design", array()), "auth", array()), "login-secondary-button-url", array(), "array")) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "design", array()), "auth", array()), "login-secondary-button-url", array(), "array") != "/registration"))) {
            // line 45
            echo "\t\t\t";
            $context["registrationButtonUrl"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "design", array()), "auth", array()), "login-secondary-button-url", array(), "array");
            // line 46
            echo "\t\t";
        }
        // line 47
        echo "
\t\t<a class=\"mp-login-secondary-button ui right floated button secondary mini\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["registrationButtonUrl"] ?? null), "html", null, true);
        echo "\">
\t\t\t";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "design", array()), "auth", array()), "login-secondary-button-text", array(), "array"), "html", null, true);
        echo "
\t\t</a>
\t</div>
\t
\t<input type=\"submit\" style=\"display: none;\">
</form>";
    }

    public function getTemplateName()
    {
        return "@auth/partials/login-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 49,  106 => 48,  103 => 47,  100 => 46,  97 => 45,  94 => 44,  92 => 43,  87 => 41,  81 => 38,  72 => 34,  68 => 32,  62 => 29,  58 => 27,  56 => 26,  48 => 21,  41 => 17,  35 => 14,  31 => 13,  25 => 9,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@auth/partials/login-form.twig", "/Library/WebServer/Documents/igoods/wp-content/plugins/membership-by-supsystic/src/Membership/Auth/views/partials/login-form.twig");
    }
}
