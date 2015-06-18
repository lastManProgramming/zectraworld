<?php

/* @Zectranet/login.html.twig */
class __TwigTemplate_a34ef0aadb9dbafc8feffa47156b85fc0884c5ed7f2e35c763bc01d1631e906e extends Twig_Template
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
        echo "Login Area";
    }

    // line 5
    public function block_styles($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->displayParentBlock("styles", $context, $blocks);
        echo "
  \t<!-- Loading Stylesheets -->    
  \t";
    }

    // line 11
    public function block_page($context, array $blocks = array())
    {
        // line 12
        echo "\t<div class=\"container\" style=\"height: 100%; margin-top: 50px;\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 col-xs-12\">
\t\t\t\t<section id=\"login\">
\t\t\t\t\t<div class=\"row animated fadeInLeftBig\">
\t\t\t\t\t\t<div class=\"login-holder\">
\t\t\t\t\t\t\t";
        // line 18
        if (array_key_exists("messageError", $context)) {
            // line 19
            echo "                                <div class=\"alert alert-warning alert-dismissible fade in\" role=\"alert\">
                                    <button class=\"close\" aria-label=\"Close\" data-dismiss=\"alert\" type=\"button\">
                                        <span aria-hidden=\"true\">×</span>
                                    </button>
                                    ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["messageError"]) ? $context["messageError"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 26
        echo "
\t\t\t\t\t\t\t";
        // line 27
        if (array_key_exists("messageSuccess", $context)) {
            // line 28
            echo "                                <div class=\"alert alert-warning alert-dismissible fade in\" role=\"alert\">
                                    <button class=\"close\" aria-label=\"Close\" data-dismiss=\"alert\" type=\"button\">
                                        <span aria-hidden=\"true\">×</span>
                                    </button>
                                    ";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["messageSuccess"]) ? $context["messageSuccess"] : null), "html", null, true);
            echo "
                                </div>
\t\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t\t\t<h2 class=\"page-header text-center text-primary\" style=\"font-size: 30px\"> Welcome to Zectranet </h2>
\t\t\t\t\t\t\t<form role=\"form\" action=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("zectranet_login_check");
        echo "\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter username/email\" name=\"_username\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\" name=\"_password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 43
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 44
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 48
        echo "
\t\t\t\t\t\t\t\t<!-- Forgot password -->
\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">
\t\t\t\t\t\t\t\t\tForgot your password?
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<div class=\"form-footer\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_target_path\" value=\"/\" />
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-info pull-right btn-submit\">Login</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Modal window-->
\t<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\" style=\"color: #495b79 \">
\t\t\t\t\t\tReset your password
\t\t\t\t\t</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form method=\"post\" action=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("zectranet_forgot_password");
        echo "\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Enter your Email\" name=\"userEmail\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Continue\" style=\"margin-top: 10px; margin-bottom: -20px;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@Zectranet/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 76,  124 => 48,  118 => 45,  115 => 44,  113 => 43,  105 => 38,  100 => 36,  97 => 35,  91 => 32,  85 => 28,  83 => 27,  80 => 26,  74 => 23,  68 => 19,  66 => 18,  58 => 12,  55 => 11,  47 => 6,  44 => 5,  38 => 3,  11 => 1,);
    }
}
