<?php

/* @auth/registration.twig */
class __TwigTemplate_18c58abdca97c59a0bb003e2c484dd48adf919f06288dad7879519949680dc0d extends Twig_Template
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
\t<div class=\"ui centered grid\">
\t\t<div class=\"column left aligned\">
\t\t\t<div class=\"ui message success\" style=\"display: none\"></div>
\t\t\t<form method=\"post\" data-validation-rules=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["validationRules"] ?? null)), "html", null, true);
        echo "\" class=\"ui large form left membership-registration-form\">
\t\t\t\t
\t\t\t\t";
        // line 7
        $context["sections"] = array();
        // line 8
        echo "
\t\t\t\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "auth.view.registrationFormBefore"), "method"), "html", null, true);
        echo "
\t\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "registrationFormBefore"), "method"), "html", null, true);
        echo "
\t\t\t\t
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 13
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["field"], "enabled", array()) && $this->getAttribute($context["field"], "registration", array()))) {
                // line 14
                echo "\t\t\t\t\t\t";
                if (!twig_in_filter($this->getAttribute($context["field"], "section", array()), ($context["sections"] ?? null))) {
                    // line 15
                    echo "\t\t\t\t\t\t\t<h3>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "section", array()), "html", null, true);
                    echo "</h3>
\t\t\t\t\t\t\t";
                    // line 16
                    $context["sections"] = twig_array_merge(($context["sections"] ?? null), array(0 => $this->getAttribute($context["field"], "section", array())));
                    // line 17
                    echo "\t\t\t\t\t\t";
                }
                // line 18
                echo "
\t\t\t\t\t\t";
                // line 19
                $context["ipStr"] = "";
                // line 20
                echo "\t\t\t\t\t\t";
                if ((($this->getAttribute($context["field"], "name", array()) == "country") && ($this->getAttribute($context["field"], "ipSelection", array()) == "1"))) {
                    // line 21
                    echo "\t\t\t\t\t\t\t";
                    $context["ipStr"] = "data-ip-selection=1";
                    // line 22
                    echo "\t\t\t\t\t\t";
                }
                // line 23
                echo "
                        ";
                // line 24
                $context["addNoneStr"] = "";
                // line 25
                echo "\t\t\t\t\t\t";
                if ((($this->getAttribute($context["field"], "name", array()) == "country") && ($this->getAttribute($context["field"], "addNone", array()) == "1"))) {
                    // line 26
                    echo "\t\t\t\t\t\t\t";
                    $context["addNoneStr"] = "data-add-none=1";
                    // line 27
                    echo "\t\t\t\t\t\t";
                }
                // line 28
                echo "
\t\t\t\t\t\t\t<div class=\"field\" data-name=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, ($context["ipStr"] ?? null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["addNoneStr"] ?? null), "html", null, true);
                echo ">
\t\t\t\t\t\t\t<glabel>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "label", array()), "html", null, true);
                echo " ";
                if ((($this->getAttribute($context["field"], "required", array()) && $this->getAttribute($context["field"], "asterisk", array(), "any", true, true)) && ($this->getAttribute($context["field"], "asterisk", array()) == true))) {
                    echo "<span class=\"gg-required-field\" style=\"color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "design", array(), "array"), "general", array(), "array"), "asterisk-color", array(), "array"), "html", null, true);
                    echo ";\">*</span>";
                }
                echo " </glabel>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 32
                if (($this->getAttribute($context["field"], "type", array()) == "text")) {
                    // line 33
                    echo "\t\t\t\t\t\t\t\t<input type=\"text\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 34
$context["field"], "type", array()) == "email")) {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t<input type=\"email\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 36
$context["field"], "type", array()) == "password")) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t<input type=\"password\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 38
$context["field"], "type", array()) == "numeric")) {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t<input type=\"number\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 40
$context["field"], "type", array()) == "date")) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\tclass=\"date-field\"
\t\t\t\t\t\t\t\t\t\tdata-format=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "format", array(), "array"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\tdata-field-name=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<input name=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                    echo "\" type=\"hidden\">
\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 48
$context["field"], "type", array()) == "scroll")) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t<select multiple class=\"ui fluid multiple search selection dropdown\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                    echo "[]\">
\t\t\t\t\t\t\t\t\t";
                    // line 50
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "options", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 51
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context["checked"] = false;
                        // line 52
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["field"], "data", array()) &&  !twig_test_empty($this->getAttribute($context["field"], "data", array())))) {
                            // line 53
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_in_filter($this->getAttribute($context["option"], "id", array()), $this->getAttribute($context["field"], "data", array()))) {
                                // line 54
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["checked"] = true;
                                // line 55
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 56
                            echo "\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 57
                            echo "\t\t\t\t\t\t\t\t\t\t\tno data
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 58
                            if ($this->getAttribute($context["option"], "checked", array())) {
                                // line 59
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["checked"] = true;
                                // line 60
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 61
                            echo "\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 62
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true);
                        echo "\" ";
                        if (($context["checked"] ?? null)) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 65
$context["field"], "type", array()) == "drop")) {
                    // line 66
                    echo "\t\t\t\t\t\t\t\t<select class=\"ui fluid search single dropdown\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 67
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "options", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 68
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context["checked"] = false;
                        // line 69
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["field"], "data", array()) &&  !twig_test_empty($this->getAttribute($context["field"], "data", array())))) {
                            // line 70
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($context["option"], "id", array()) == $this->getAttribute($context["field"], "data", array()))) {
                                // line 71
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["checked"] = true;
                                // line 72
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 73
                            echo "\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 74
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["option"], "checked", array())) {
                                // line 75
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["checked"] = true;
                                // line 76
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 77
                            echo "\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 78
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true);
                        echo "\" ";
                        if (($context["checked"] ?? null)) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 80
                    echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 81
$context["field"], "type", array()) == "radio")) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t<div class=\"inline fields\">
\t\t\t\t\t\t\t\t\t";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "options", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 84
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ui radio checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 86
                        $context["checked"] = false;
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["field"], "data", array()) &&  !twig_test_empty($this->getAttribute($context["field"], "data", array())))) {
                            // line 88
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_in_filter($this->getAttribute($context["option"], "id", array()), $this->getAttribute($context["field"], "data", array()))) {
                                // line 89
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["checked"] = true;
                                // line 90
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 91
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 92
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["option"], "checked", array())) {
                                // line 93
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["checked"] = true;
                                // line 94
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 95
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 96
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true);
                        echo "\" ";
                        if (($context["checked"] ?? null)) {
                            echo "checked";
                        }
                        echo " class=\"hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"";
                        // line 97
                        echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 101
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 102
$context["field"], "type", array()) == "checkbox")) {
                    // line 103
                    echo "\t\t\t\t\t\t\t\t<div class=\"inline fields\">
\t\t\t\t\t\t\t\t\t";
                    // line 104
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "options", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 105
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ui checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 107
                        $context["checked"] = false;
                        // line 108
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["field"], "data", array()) &&  !twig_test_empty($this->getAttribute($context["field"], "data", array())))) {
                            // line 109
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_in_filter($this->getAttribute($context["option"], "id", array()), $this->getAttribute($context["field"], "data", array()))) {
                                // line 110
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["checked"] = true;
                                // line 111
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 112
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 113
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["option"], "checked", array())) {
                                // line 114
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["checked"] = true;
                                // line 115
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 116
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 117
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                        echo "[]\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true);
                        echo "\" ";
                        if (($context["checked"] ?? null)) {
                            echo "checked";
                        }
                        echo " class=\"hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"";
                        // line 118
                        echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 122
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 123
$context["field"], "type", array()) == "g-recaptcha-response")) {
                    // line 124
                    echo "\t\t\t\t\t\t\t\t<div class=\"g-recaptcha\"
\t\t\t\t\t\t\t\t     data-sitekey=\"";
                    // line 125
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "google-re-captcha-site-key", array(), "array"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t     data-theme=\"";
                    // line 126
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "google-re-captcha-theme", array(), "array"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t     data-type=\"";
                    // line 127
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "google-re-captcha-type", array(), "array"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t     data-size=\"";
                    // line 128
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "google-re-captcha-size", array(), "array"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t     data-callback=\"MembershipRecaptchaResponseCallback\"
\t\t\t\t\t\t\t\t></div>
\t\t\t\t\t\t\t";
                }
                // line 132
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 133
                if ($this->getAttribute($context["field"], "description", array())) {
                    // line 134
                    echo "\t\t\t\t\t\t\t\t<p><small><em>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "description", array()), "html", null, true);
                    echo "</em></small></p>
\t\t\t\t\t\t\t";
                }
                // line 136
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 140
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "
\t\t\t\t";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "auth.view.registrationFormAfter"), "method"), "html", null, true);
        echo "
\t\t\t\t";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "registrationFormAfter"), "method"), "html", null, true);
        echo "
\t\t\t\t
\t\t\t\t<div class=\"ui error message\" style=\"display: none\">
\t\t\t\t\t<i class=\"close icon\"></i>
\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t";
        // line 148
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("There were some errors with your data")), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"list\"></ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"mp-action-buttons\">
\t\t\t\t\t<button class=\"registration-submit ui button mini primary\" type=\"submit\" value=\"\">";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "design", array()), "auth", array()), "registration-primary-button-text", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t</div>

\t\t\t\t<input type=\"hidden\" id=\"_wpnonce\" name=\"_wpnonce\" value=\"";
        // line 157
        echo twig_escape_filter($this->env, ($context["nonce"] ?? null), "html", null, true);
        echo "\" />
\t\t\t</form>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "@auth/registration.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 157,  501 => 154,  492 => 148,  484 => 143,  480 => 142,  477 => 141,  471 => 140,  465 => 136,  459 => 134,  457 => 133,  454 => 132,  447 => 128,  443 => 127,  439 => 126,  435 => 125,  432 => 124,  430 => 123,  427 => 122,  413 => 118,  398 => 117,  395 => 116,  392 => 115,  389 => 114,  386 => 113,  383 => 112,  380 => 111,  377 => 110,  374 => 109,  371 => 108,  369 => 107,  365 => 105,  361 => 104,  358 => 103,  356 => 102,  353 => 101,  339 => 97,  324 => 96,  321 => 95,  318 => 94,  315 => 93,  312 => 92,  309 => 91,  306 => 90,  303 => 89,  300 => 88,  297 => 87,  295 => 86,  291 => 84,  287 => 83,  284 => 82,  282 => 81,  279 => 80,  264 => 78,  261 => 77,  258 => 76,  255 => 75,  252 => 74,  249 => 73,  246 => 72,  243 => 71,  240 => 70,  237 => 69,  234 => 68,  230 => 67,  225 => 66,  223 => 65,  220 => 64,  205 => 62,  202 => 61,  199 => 60,  196 => 59,  194 => 58,  191 => 57,  188 => 56,  185 => 55,  182 => 54,  179 => 53,  176 => 52,  173 => 51,  169 => 50,  164 => 49,  162 => 48,  158 => 47,  152 => 44,  148 => 43,  144 => 41,  142 => 40,  137 => 39,  135 => 38,  130 => 37,  128 => 36,  123 => 35,  121 => 34,  116 => 33,  114 => 32,  103 => 30,  95 => 29,  92 => 28,  89 => 27,  86 => 26,  83 => 25,  81 => 24,  78 => 23,  75 => 22,  72 => 21,  69 => 20,  67 => 19,  64 => 18,  61 => 17,  59 => 16,  54 => 15,  51 => 14,  48 => 13,  44 => 12,  39 => 10,  35 => 9,  32 => 8,  30 => 7,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@auth/registration.twig", "/Library/WebServer/Documents/igoods/wp-content/plugins/membership-by-supsystic/src/Membership/Auth/views/registration.twig");
    }
}
