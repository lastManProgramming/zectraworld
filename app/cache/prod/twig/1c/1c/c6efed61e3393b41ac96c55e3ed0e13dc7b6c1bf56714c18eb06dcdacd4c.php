<?php

/* @Zectranet/homepage.html.twig */
class __TwigTemplate_1c1cc6efed61e3393b41ac96c55e3ed0e13dc7b6c1bf56714c18eb06dcdacd4c extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">

\t<title>Welcome</title>

\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/css/index.css"), "html", null, true);
        echo "\">
\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/index.js"), "html", null, true);
        echo "\"></script>

</head>

<body>

<div class=\"l-container\">
\t<div class=\"l-main\">
\t\t<div class=\"b-page__first\" style=\"height: auto;\">
\t\t\t<div class=\"b-page-inner\">
\t\t\t\t<div class=\"b-bg-icons__left__back\" ></div>
\t\t\t\t<div class=\"b-bg-icons__left__front\"></div>
\t\t\t\t<div class=\"b-bg-icons__right__back\"></div>
\t\t\t\t<div class=\"b-bg-icons__right__front\"></div>
\t\t\t\t<header class=\"b-header\">
\t\t\t\t\t<div class=\"b-header-slogan\">
\t\t\t\t\t\t<div class=\"b-wave__left\"></div>
\t\t\t\t\t\t<div class=\"b-wave__right\"></div>
\t\t\t\t\t\t<img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/img/logo.png"), "html", null, true);
        echo "\" style=\"width: 150px;\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\tHello guest
\t\t\t\t\t\t<br>
\t\t\t\t\t\tWelcome to our service
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"b-header-dots\"></div>
\t\t\t\t\t<div class=\"b-header-desc\">Our service will help you and your team to quickly locate contact with each other , take time. Create projects to find them. Please become today</div>
\t\t\t\t\t<br>
\t\t\t\t\t<br>
\t\t\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("zectranet_login");
        echo "\">Login</a>
\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("zectranet_signup");
        echo "\">Signup</a>
\t\t\t\t\t<img style=\"left: 609px; position: absolute; top: 203px;\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/img/girl2.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<img style=\"left: -79px; position: absolute; top: 203px;\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/img/girl.png"), "html", null, true);
        echo "\">
\t\t\t\t</header>

\t\t\t\t<div class=\"b-screenshot__front\">
\t\t\t\t\t<div class=\"b-screenshot-shadow__middle\"></div>
\t\t\t\t\t<div class=\"b-screenshot-img\"></div>
\t\t\t\t\t<a class=\"b-screenshot-button\" href=\"#\"></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/jquery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/libs.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/Bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "@Zectranet/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 61,  110 => 60,  106 => 59,  90 => 46,  86 => 45,  82 => 44,  78 => 43,  65 => 33,  44 => 15,  40 => 14,  36 => 13,  32 => 12,  19 => 1,);
    }
}
