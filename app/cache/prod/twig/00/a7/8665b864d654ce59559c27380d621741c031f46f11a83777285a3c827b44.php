<?php

/* @Zectranet/register.html.twig */
class __TwigTemplate_00a78665b864d654ce59559c27380d621741c031f46f11a83777285a3c827b44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("@Zectranet/layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'styles' => array($this, 'block_styles'),
            'page' => array($this, 'block_page'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Zectranet/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Register Area";
    }

    // line 5
    public function block_styles($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("styles", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_page($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"container\" style=\"height: 100%; margin-top: 50px;\">
        <div class=\"row text-center pad-top \">
            <div class=\"col-md-12\">
                <h2 style=\"color:gray;\">Registration</h2>
            </div>
        </div>
        <div class=\"row pad-top\">

            <div class=\"col-md-12\">

                <form role=\"form\" name=\"formRegistration\" id=\"signup_form\" action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("zectranet_signup_action");
        echo "\" method=\"post\">
                    <br/>
                    ";
        // line 22
        if (((isset($context["errorValid"]) ? $context["errorValid"] : null) != null)) {
            // line 23
            echo "                        <!-- Error message -->
                        <div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
                            <button class=\"close\" aria-label=\"Close\" data-dismiss=\"alert\" type=\"button\">
                                <span aria-hidden=\"true\">×</span>
                            </button>
                            ";
            // line 28
            if (((isset($context["errorValid"]) ? $context["errorValid"] : null) == "errorEmail")) {
                // line 29
                echo "                                Email is already in use

                            ";
            } elseif ((            // line 31
(isset($context["errorValid"]) ? $context["errorValid"] : null) == "errorUsername")) {
                // line 32
                echo "                                Username is already in use
                            ";
            }
            // line 34
            echo "                        </div>
                        <!-- -->
                    ";
        }
        // line 37
        echo "                    <br/>

                    <div class=\"form-group input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                        <input type=\"text\" class=\"form-control name\" placeholder=\"Name\" name=\"name\" ng-model=\"name\" ng-minlength=\"2\" ng-maxlength=\"20\" pattern=\"[A-Za-z-]{1,}\" required/>
                        <span ng-if=\"formRegistration.name.\$error.required\" class=\"input-group-addon\" style=\"color: red; font-size: 0.8em;\">
                            <i class=\"fa fa-asterisk\"></i>
                        </span>
                        <span ng-if=\"formRegistration.name.\$valid\" class=\"input-group-addon\">
                            <i style=\"color: greenyellow;\" class=\"fa fa-check\"></i>
                        </span>
                    </div>

                    <div ng-messages=\"formRegistration.name.\$error\" style=\"color: red;\">
                        <span ng-message=\"pattern\">Please match the requested format: \"A-Z,a-z, -\"</span>
                        <span ng-message=\"minlength\">Min length of this field is 2 characters</span>
                        <span ng-message=\"maxlength\">Max length of this field is 20 characters</span>
                    </div>

                    <div class=\"form-group input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                        <input type=\"text\" class=\"form-control surname\" placeholder=\"Surname\" name=\"surname\" ng-model=\"surname\" ng-minlength=\"2\" ng-maxlength=\"20\" pattern=\"[A-Za-z]{1,}\" required/>
                        <span ng-if=\"formRegistration.surname.\$error.required\" class=\"input-group-addon\" style=\"color: red; font-size: 0.8em;\">
                            <i class=\"fa fa-asterisk\"></i>
                        </span>
                        <span ng-if=\"formRegistration.surname.\$valid\" class=\"input-group-addon\">
                            <i style=\"color: greenyellow;\" class=\"fa fa-check\"></i>
                        </span>
                    </div>

                    <div ng-messages=\"formRegistration.surname.\$error\" style=\"color: red;\">
                        <span ng-message=\"pattern\">Please match the requested format: \"A-Z,a-z\"</span>
                        <span ng-message=\"minlength\">Min length of this field is 2 characters</span>
                        <span ng-message=\"maxlength\">Max length of this field is 20 characters</span>
                    </div>

                    <div class=\"form-group input-group\">
                        <span style=\"font-size: 10px; font-weight: bold;\" class=\"input-group-addon\">@</span>
                        <input type=\"email\" class=\"form-control email\" placeholder=\"Email\" name=\"email\" ng-model=\"email\" required/>
                        <span ng-if=\"formRegistration.email.\$error.required\" class=\"input-group-addon\" style=\"color: red; font-size: 0.8em;\">
                            <i class=\"fa fa-asterisk\"></i>
                        </span>
                        <span ng-if=\"formRegistration.email.\$valid\" class=\"input-group-addon\">
                            <i style=\"color: greenyellow;\" class=\"fa fa-check\"></i>
                        </span>
                    </div>

                    <div ng-messages=\"formRegistration.email.\$error\" style=\"color: red;\">
                        <span ng-message=\"email\">Invalid email</span>
                    </div>

                    <div class=\"form-group input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                        <input type=\"text\" class=\"form-control username\" placeholder=\"Username\" name=\"username\" ng-model=\"username\" ng-minlength=\"3\" ng-maxlength=\"16\" pattern=\"[A-Za-z0-9_]{1,}\" required/>
                        <span ng-if=\"formRegistration.username.\$error.required\" class=\"input-group-addon\" style=\"color: red; font-size: 0.8em;\">
                            <i class=\"fa fa-asterisk\"></i>
                        </span>
                        <span ng-if=\"formRegistration.username.\$valid\" class=\"input-group-addon\">
                            <i style=\"color: greenyellow;\" class=\"fa fa-check\"></i>
                        </span>
                    </div>

                    <div ng-messages=\"formRegistration.username.\$error\" style=\"color: red;\">
                        <span ng-message=\"pattern\">Please match the requested format: \"A-Z,a-z,0-9,_\"</span>
                        <span ng-message=\"minlength\">Min length of this field is 3 characters</span>
                        <span ng-message=\"maxlength\">Max length of this field is 16 characters</span>
                    </div>

                    <div class=\"form-group input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span>
                        <input type=\"password\" class=\"form-control password\" id=\"pass\" placeholder=\"Password\" name=\"password\" ng-model=\"password\" ng-minlength=\"5\" ng-maxlength=\"30\" pattern=\"[A-Za-z0-9]{1,}\" required/>
                        <span ng-if=\"formRegistration.password.\$error.required\" class=\"input-group-addon\" style=\"color: red; font-size: 0.8em;\">
                            <i class=\"fa fa-asterisk\"></i>
                        </span>
                        <span ng-if=\"formRegistration.password.\$valid\" class=\"input-group-addon\">
                            <i style=\"color: greenyellow;\" class=\"fa fa-check\"></i>
                        </span>
                    </div>

                    <div ng-messages=\"formRegistration.password.\$error\" style=\"color: red;\">
                        <span ng-message=\"pattern\">Please match the requested format: \"A-Z,a-z,0-9\"</span>
                        <span ng-message=\"minlength\">Min length of password is 5 characters</span>
                        <span ng-message=\"maxlength\">Max length of password is 30 characters</span>
                    </div>

                    <div class=\"form-group input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span>
                        <input type=\"password\" class=\"form-control password\" id=\"repeatpass\" placeholder=\"Repeat password\" name=\"repeatPassword\" ng-model=\"repeatPassword\" ng-minlength=\"5\" ng-maxlength=\"30\" pattern=\"[A-Za-z0-9]{1,}\" required/>
                        <span ng-if=\"formRegistration.repeatPassword.\$error.required\" class=\"input-group-addon\" style=\"color: red; font-size: 0.8em;\">
                            <i class=\"fa fa-asterisk\"></i>
                        </span>
                        <span ng-if=\"formRegistration.repeatPassword.\$valid\" class=\"input-group-addon\">
                            <i style=\"color: greenyellow;\" class=\"fa fa-check\"></i>
                        </span>
                    </div>

                    <div ng-messages=\"formRegistration.repeatPassword.\$error\" style=\"color: red;\">
                        <div ng-if=\"formRegistration.password.\$viewValue != formRegistration.repeatPassword.\$viewValue\" style=\"color:maroon\">
                            Password and Repeated Password did not match<br/>
                        </div>
                    </div>

                    <button class=\"btn btn-success\" type=\"submit\" ng-disabled=\"(formRegistration.\$invalid) || (formRegistration.password.\$viewValue != formRegistration.repeatPassword.\$viewValue)\">Signup</button>
                </form>
            </div>
        </div>
    </div>
";
    }

    // line 146
    public function block_javascripts($context, array $blocks = array())
    {
        // line 147
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/notify.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$('#signup_form').bind('submit', function (event) {
            var pass = \$('#pass');
            var repeatPass = \$('#repeatpass');
            if (pass.val() !== repeatPass.val()) {
                repeatPass.notify(
                        \"Passwords do not match\",
                        { position:\"right\" }
                );
                return false;
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@Zectranet/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 148,  215 => 147,  212 => 146,  101 => 37,  96 => 34,  92 => 32,  90 => 31,  86 => 29,  84 => 28,  77 => 23,  75 => 22,  70 => 20,  58 => 10,  55 => 9,  48 => 6,  45 => 5,  39 => 3,  11 => 1,);
    }
}
