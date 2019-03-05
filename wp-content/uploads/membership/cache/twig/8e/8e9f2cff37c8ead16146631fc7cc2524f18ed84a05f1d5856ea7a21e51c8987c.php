<?php

/* @groups/partials/groups-list.twig */
class __TwigTemplate_b3cc1e3de7c0f7ff651bd8476542d13fcdc6d12608726f89e88b91eaf449406e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'actionButtons' => array($this, 'block_actionButtons'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 2
            echo "\t<div class=\"ui card mp-group-card\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\">
\t\t<div class=\"image\">
\t\t\t<a href=\"";
            // line 4
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('groupUrl')->getCallable(), array($context["group"])), "html", null, true);
            echo "\" class=\"header\">
\t\t\t\t<img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Groups_Twig')->groupsCover($context["group"], "medium"), "html", null, true);
            echo "\" alt=\"\">
                ";
            // line 6
            if (($this->getAttribute($context["group"], "currentUserIsFollowing", array()) == true)) {
                // line 7
                echo "                    ";
                $context["count"] = call_user_func_array($this->env->getFunction('notReadPost')->getCallable(), array($this->getAttribute($context["group"], "id", array())));
                // line 8
                echo "                    ";
                if ((($context["count"] ?? null) >= 1)) {
                    // line 9
                    echo "                        <div class=\"mp-new-posts\">
                            <span>";
                    // line 10
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('notReadPost')->getCallable(), array($this->getAttribute($context["group"], "id", array()))), "html", null, true);
                    echo "</span>
                        </div>
                    ";
                }
                // line 13
                echo "                ";
            }
            // line 14
            echo "\t\t\t</a>
\t\t</div>

\t\t<div class=\"content\">
\t\t\t<div class=\"mp-group-logo-container\">
\t\t\t\t<div class=\"mp-group-logo\">
\t\t\t\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('groupUrl')->getCallable(), array($context["group"])), "html", null, true);
            echo "\" class=\"header\">
\t\t\t\t\t\t<img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Groups_Twig')->groupsLogo($context["group"], "large"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('groupUrl')->getCallable(), array($context["group"])), "html", null, true);
            echo "\" class=\"header\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
            echo "</a>
\t\t\t<div class=\"meta mbs-group-g-type\">
\t\t\t\t<small>
\t\t\t\t\t";
            // line 28
            if (($this->getAttribute($this->getAttribute($context["group"], "settings", array()), "type", array()) == "closed")) {
                // line 29
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Closed group")), "html", null, true);
                echo "
\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute(            // line 30
$context["group"], "settings", array()), "type", array()) == "open")) {
                // line 31
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open group")), "html", null, true);
                echo "
\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute(            // line 32
$context["group"], "settings", array()), "type", array()) == "private")) {
                // line 33
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Private group")), "html", null, true);
                echo "
\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t</small>
\t\t\t</div>
\t\t\t<div class=\"meta mbs-group-followers\">
\t\t\t\t<small>";
            // line 38
            echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("%s followers")), $this->getAttribute($context["group"], "totalUsers", array())), "html", null, true);
            echo "</small>
\t\t\t</div>
            ";
            // line 40
            if (($this->getAttribute($context["group"], "invitation_type", array()) == "administrator")) {
                // line 41
                echo "\t\t\t\t<div class=\"\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Join as administrator")), "html", null, true);
                echo "</div>
            ";
            }
            // line 43
            echo "\t\t</div>
\t\t<div class=\"extra content\" ";
            // line 44
            if (($context["hideButtons"] ?? null)) {
                echo "style=\"display: none\"";
            }
            echo ">
\t\t\t<div class=\"group-action-buttons\">
\t\t\t\t";
            // line 46
            $this->displayBlock('actionButtons', $context, $blocks);
            // line 74
            echo "\t\t\t</div>
\t\t</div>
\t</div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 46
    public function block_actionButtons($context, array $blocks = array())
    {
        // line 47
        echo "\t\t\t\t\t";
        if (($context["userLoggedIn"] ?? null)) {
            // line 48
            echo "\t\t\t\t\t\t";
            if ($this->env->getExtension('Membership_Groups_Twig')->canSendJoinRequest(($context["group"] ?? null))) {
                // line 49
                echo "\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"send-request\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send a request")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t\t";
            if ($this->env->getExtension('Membership_Groups_Twig')->canCancelJoinRequest(($context["group"] ?? null))) {
                // line 52
                echo "\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"cancel-request\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cancel request")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t\t\t";
            if ($this->env->getExtension('Membership_Groups_Twig')->canJoinGroup(($context["group"] ?? null))) {
                // line 55
                echo "\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"join-group\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Join group")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t\t\t";
            if ($this->env->getExtension('Membership_Groups_Twig')->canLeaveGroup(($context["group"] ?? null))) {
                // line 58
                echo "\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"leave-group\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Leave group")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t";
            }
            // line 60
            echo "\t\t\t\t\t\t";
            if ($this->env->getExtension('Membership_Groups_Twig')->canFollowGroup(($context["group"] ?? null))) {
                // line 61
                echo "\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"follow\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Follow")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t\t\t";
            if ($this->env->getExtension('Membership_Groups_Twig')->canUnfollowGroup(($context["group"] ?? null))) {
                // line 64
                echo "\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"unfollow\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Unfollow")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t";
        } else {
            // line 67
            echo "\t\t\t\t\t\t<div class=\"not-logged-in\">
\t\t\t\t\t\t\t";
            // line 68
            echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Please <a href=\"%s\">sign up</a> or <a href=\"%s\">sign in</a> to join or leave groups.")), call_user_func_array($this->env->getFunction('getRouteUrl')->getCallable(), array("registration")), call_user_func_array($this->env->getFunction('getRouteUrl')->getCallable(), array("login")));
            // line 70
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "@groups/partials/groups-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 73,  237 => 70,  235 => 68,  232 => 67,  229 => 66,  223 => 64,  220 => 63,  214 => 61,  211 => 60,  205 => 58,  202 => 57,  196 => 55,  193 => 54,  187 => 52,  184 => 51,  178 => 49,  175 => 48,  172 => 47,  169 => 46,  150 => 74,  148 => 46,  141 => 44,  138 => 43,  132 => 41,  130 => 40,  125 => 38,  120 => 35,  114 => 33,  112 => 32,  107 => 31,  105 => 30,  100 => 29,  98 => 28,  90 => 25,  83 => 21,  79 => 20,  71 => 14,  68 => 13,  62 => 10,  59 => 9,  56 => 8,  53 => 7,  51 => 6,  47 => 5,  43 => 4,  37 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/partials/groups-list.twig", "/Library/WebServer/Documents/igoods/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/views/partials/groups-list.twig");
    }
}
