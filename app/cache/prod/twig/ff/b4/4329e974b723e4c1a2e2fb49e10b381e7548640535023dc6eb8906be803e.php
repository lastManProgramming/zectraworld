<?php

/* @Zectranet/index.html.twig */
class __TwigTemplate_ffb44329e974b723e4c1a2e2fb49e10b381e7548640535023dc6eb8906be803e extends Twig_Template
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
            'leftSidebar' => array($this, 'block_leftSidebar'),
            'modals' => array($this, 'block_modals'),
            'body' => array($this, 'block_body'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'pageheader' => array($this, 'block_pageheader'),
            'content' => array($this, 'block_content'),
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
        echo "Index page";
    }

    // line 5
    public function block_styles($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->displayParentBlock("styles", $context, $blocks);
        echo "

";
    }

    // line 10
    public function block_leftSidebar($context, array $blocks = array())
    {
        // line 11
        echo "\t<div class=\"navbar-default sidebar\" style=\"margin-top: 0;\">
\t\t<div class=\"sidebar-nav navbar-collapse\">


\t\t\t\t<!-- BEGIN OF SITE TREE -->
\t\t\t\t<ul class=\"nav\" id=\"side-menu\">

\t\t\t\t\t <li class=\"visible-xs\" style=\"margin-top: 59px;\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\tZectranet
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li style=\"padding: 2px;\">
\t\t\t\t\t\t<a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("zectranet_public_market");
        echo "\">
\t\t\t\t\t\t\t<i class='fa fa-credit-card'></i>
\t\t\t\t\t\t\tPublic Market
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li ";
        // line 30
        if (array_key_exists("office", $context)) {
            // line 31
            echo "                            class=\"active\"
                        ";
        } elseif ((        // line 32
array_key_exists("project", $context) && twig_in_filter((isset($context["project"]) ? $context["project"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "projects", array())))) {
            // line 33
            echo "                            class=\"active\"
                        ";
        } elseif ((        // line 34
array_key_exists("forum", $context) && twig_in_filter((isset($context["forum"]) ? $context["forum"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "connectedHFForums", array())))) {
            // line 35
            echo "                            class=\"active\"
                        ";
        } elseif ((        // line 36
array_key_exists("forum", $context) && twig_in_filter((isset($context["forum"]) ? $context["forum"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "connectedQnAForums", array())))) {
            // line 37
            echo "                            class=\"active\"
                        ";
        }
        // line 38
        echo ">
                        ";
        // line 39
        $context["homeOffice"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "homeOffice", array());
        // line 40
        echo "
                        ";
        // line 41
        $context["HOProjectsCount"] = 0;
        // line 42
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "projects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if ( !$this->getAttribute($context["project"], "archived", array())) {
                // line 43
                echo "                            ";
                $context["HOProjectsCount"] = ((isset($context["HOProjectsCount"]) ? $context["HOProjectsCount"] : null) + 1);
                // line 44
                echo "                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "connectedHFForums", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if ( !$this->getAttribute($context["project"], "archived", array())) {
                // line 46
                echo "                            ";
                $context["HOProjectsCount"] = ((isset($context["HOProjectsCount"]) ? $context["HOProjectsCount"] : null) + 1);
                // line 47
                echo "                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "connectedQnAForums", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if ( !$this->getAttribute($context["project"], "archived", array())) {
                // line 49
                echo "                            ";
                $context["HOProjectsCount"] = ((isset($context["HOProjectsCount"]) ? $context["HOProjectsCount"] : null) + 1);
                // line 50
                echo "                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_office", array("office_id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "homeOffice", array()), "id", array()))), "html", null, true);
        echo "\"
                           class=\"
                                ";
        // line 53
        if (((isset($context["HOProjectsCount"]) ? $context["HOProjectsCount"] : null) > 0)) {
            // line 54
            echo "                                    ";
            echo "non-collapsible-href";
            echo "
                                ";
        } else {
            // line 56
            echo "                                    ";
            echo "non-collapsible-href-full";
            echo "
                                ";
        }
        // line 57
        echo "\">
\t\t\t\t\t\t\t<i class='fa fa-home'></i>
\t\t\t\t\t\t\t<span>Home Office</span>
\t\t\t\t\t\t</a>
                        ";
        // line 61
        if (((isset($context["HOProjectsCount"]) ? $context["HOProjectsCount"] : null) > 0)) {
            // line 62
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_office", array("office_id" => $this->getAttribute((isset($context["homeOffice"]) ? $context["homeOffice"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"collapsible-href\">
                                ";
            // line 63
            if (array_key_exists("office", $context)) {
                // line 64
                echo "                                    <i class=\"fa fa-arrow-up fa-fw\"></i>
                                ";
            } elseif ((            // line 65
array_key_exists("project", $context) && twig_in_filter((isset($context["project"]) ? $context["project"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "projects", array())))) {
                // line 66
                echo "                                    <i class=\"fa fa-arrow-up fa-fw\"></i>
                                ";
            } elseif ((            // line 67
array_key_exists("forum", $context) && twig_in_filter((isset($context["forum"]) ? $context["forum"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "connectedHFForums", array())))) {
                // line 68
                echo "                                    <i class=\"fa fa-arrow-up fa-fw\"></i>
                                ";
            } elseif ((            // line 69
array_key_exists("forum", $context) && twig_in_filter((isset($context["forum"]) ? $context["forum"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "connectedQnAForums", array())))) {
                // line 70
                echo "                                    <i class=\"fa fa-arrow-up fa-fw\"></i>
                                ";
            } else {
                // line 72
                echo "                                    <i class=\"fa fa-arrow-down fa-fw\"></i>
                                ";
            }
            // line 74
            echo "                            </a>
                        ";
        }
        // line 76
        echo "                        <div class=\"clearfix\"></div>
\t\t\t\t\t\t<ul class=\"nav nav-second-level\">
                            ";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "projects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (((twig_length_filter($this->env, $this->getAttribute($context["project"], "users", array())) == 1) &&  !$this->getAttribute($context["project"], "archived", array()))) {
                // line 79
                echo "                                <li data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo "\">
                                    <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_project", array("project_id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
                echo "\" style=\"white-space: nowrap; overflow: hidden; text-overflow: ellipsis;\">
                                        <i class=\"fa fa-briefcase fa-fw\"></i>
                                       <span style=\"overflow: hidden; text-overflow: ellipsis;\">";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo "</span>
                                    </a>
                                </li>
                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
                            ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "connectedHFForums", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (((twig_length_filter($this->env, $this->getAttribute($context["project"], "users", array())) == 1) &&  !$this->getAttribute($context["project"], "archived", array()))) {
                // line 88
                echo "                                <li data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo "\">
                                    <a href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_header_forum", array("project_id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
                echo "\" style=\"white-space: nowrap; overflow: hidden; text-overflow: ellipsis;\">
                                        <i class=\"fa fa-briefcase fa-fw\"></i>
                                       <span style=\"overflow: hidden; text-overflow: ellipsis;\">";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo "</span>
                                    </a>
                                </li>
                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
                            ";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "connectedQnAForums", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (((twig_length_filter($this->env, $this->getAttribute($context["project"], "users", array())) == 1) &&  !$this->getAttribute($context["project"], "archived", array()))) {
                // line 97
                echo "                                <li data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo "\">
                                    <a href=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_QnA_forum", array("project_id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
                echo "\" style=\"white-space: nowrap; overflow: hidden; text-overflow: ellipsis;\">
                                        <i class=\"fa fa-briefcase fa-fw\"></i>
                                       <span style=\"overflow: hidden; text-overflow: ellipsis;\">";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo "</span>
                                    </a>
                                </li>
                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
                            <li>
                                ";
        // line 106
        $context["connectedProjectsCount"] = 0;
        // line 107
        echo "                                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "projects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (((twig_length_filter($this->env, $this->getAttribute($context["project"], "users", array())) > 1) &&  !$this->getAttribute($context["project"], "archived", array()))) {
                // line 108
                echo "                                    ";
                $context["connectedProjectsCount"] = ((isset($context["connectedProjectsCount"]) ? $context["connectedProjectsCount"] : null) + 1);
                // line 109
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "connectedHFForums", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (((twig_length_filter($this->env, $this->getAttribute($context["project"], "users", array())) > 1) &&  !$this->getAttribute($context["project"], "archived", array()))) {
                // line 111
                echo "                                    ";
                $context["connectedProjectsCount"] = ((isset($context["connectedProjectsCount"]) ? $context["connectedProjectsCount"] : null) + 1);
                // line 112
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "connectedQnAForums", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (((twig_length_filter($this->env, $this->getAttribute($context["project"], "users", array())) > 1) &&  !$this->getAttribute($context["project"], "archived", array()))) {
                // line 114
                echo "                                    ";
                $context["connectedProjectsCount"] = ((isset($context["connectedProjectsCount"]) ? $context["connectedProjectsCount"] : null) + 1);
                // line 115
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "
                                <a href=\"#\">
                                    <i class='fa fa-briefcase'></i>
                                    <span>Connected Projects</span>
                                    ";
        // line 120
        if (((isset($context["connectedProjectsCount"]) ? $context["connectedProjectsCount"] : null) > 0)) {
            // line 121
            echo "                                        <span class=\"text-right pull-right\">
                                            ";
            // line 122
            if ((((array_key_exists("project", $context) && twig_in_filter((isset($context["project"]) ? $context["project"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "projects", array()))) && (twig_length_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "users", array())) > 1)) &&  !$this->getAttribute((isset($context["project"]) ? $context["project"] : null), "archived", array()))) {
                // line 123
                echo "                                                <i class=\"fa fa-arrow-up fa-fw\"></i>
                                            ";
            } elseif (((            // line 124
array_key_exists("forum", $context) && twig_in_filter((isset($context["forum"]) ? $context["forum"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "connectedHFForums", array()))) && (twig_length_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "users", array())) > 1))) {
                // line 125
                echo "                                                <i class=\"fa fa-arrow-up fa-fw\"></i>
                                            ";
            } elseif (((            // line 126
array_key_exists("forum", $context) && twig_in_filter((isset($context["forum"]) ? $context["forum"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "connectedQnAForums", array()))) && (twig_length_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "users", array())) > 1))) {
                // line 127
                echo "                                                <i class=\"fa fa-arrow-up fa-fw\"></i>
                                            ";
            } else {
                // line 129
                echo "                                                <i class=\"fa fa-arrow-down fa-fw\"></i>
                                            ";
            }
            // line 131
            echo "                                        </span>
                                    ";
        }
        // line 133
        echo "                                </a>
                                <ul class=\"nav nav-third-level\">
                                    ";
        // line 135
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "projects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (((twig_length_filter($this->env, $this->getAttribute($context["project"], "users", array())) > 1) &&  !$this->getAttribute($context["project"], "archived", array()))) {
                // line 136
                echo "                                        <li data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo "\">
                                            <a href=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_project", array("project_id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
                echo "\" style=\"white-space: nowrap; overflow: hidden; text-overflow: ellipsis;\">
                                                <i class=\"fa fa-briefcase fa-fw\"></i>
                                                <span style=\"overflow: hidden; text-overflow: ellipsis;\">";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo "</span>
                                            </a>
                                        </li>
                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "
                                    ";
        // line 144
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "connectedHFForums", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (((twig_length_filter($this->env, $this->getAttribute($context["project"], "users", array())) > 1) &&  !$this->getAttribute($context["project"], "archived", array()))) {
                // line 145
                echo "                                        <li data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo "\">
                                            <a href=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_header_forum", array("project_id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
                echo "\" style=\"white-space: nowrap; overflow: hidden; text-overflow: ellipsis;\">
                                                <i class=\"fa fa-briefcase fa-fw\"></i>
                                               <span style=\"overflow: hidden; text-overflow: ellipsis;\">";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo "</span>
                                            </a>
                                        </li>
                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "
                                    ";
        // line 153
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "connectedQnAForums", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (((twig_length_filter($this->env, $this->getAttribute($context["project"], "users", array())) > 1) &&  !$this->getAttribute($context["project"], "archived", array()))) {
                // line 154
                echo "                                        <li data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo "\">
                                            <a href=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_QnA_forum", array("project_id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
                echo "\" style=\"white-space: nowrap; overflow: hidden; text-overflow: ellipsis;\">
                                                <i class=\"fa fa-briefcase fa-fw\"></i>
                                               <span style=\"overflow: hidden; text-overflow: ellipsis;\">";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo "</span>
                                            </a>
                                        </li>
                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                                </ul>
                            </li>
                        </ul>
\t\t\t\t\t</li>

                    ";
        // line 166
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "ownedOffices", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["office"]) {
            if (($this->getAttribute($context["office"], "id", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "homeOffice", array()), "id", array()))) {
                // line 167
                echo "                        <li data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["office"], "name", array()), "html", null, true);
                echo "\">
                            <a href=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_office", array("office_id" => $this->getAttribute($context["office"], "id", array()))), "html", null, true);
                echo "\"
                               class=\"
                                    ";
                // line 170
                if ((twig_length_filter($this->env, $this->getAttribute($context["office"], "projects", array())) > 0)) {
                    // line 171
                    echo "                                        ";
                    echo "non-collapsible-href";
                    echo "
                                    ";
                } else {
                    // line 173
                    echo "                                        ";
                    echo "non-collapsible-href-full";
                    echo "
                                    ";
                }
                // line 174
                echo "\">
                                <i class='fa fa-home'></i>
                                <span>";
                // line 176
                echo twig_escape_filter($this->env, $this->getAttribute($context["office"], "name", array()), "html", null, true);
                echo "</span>
                            </a>
                            ";
                // line 178
                if ((twig_length_filter($this->env, $this->getAttribute($context["office"], "projects", array())) > 0)) {
                    // line 179
                    echo "                                <a href=\"#\" class=\"collapsible-href\">
                                    <i class=\"fa fa-arrow-down fa-fw\"></i>
                                </a>
                            ";
                }
                // line 183
                echo "                            <div class=\"clearfix\"></div>
                            <ul class=\"nav nav-second-level\">
                                ";
                // line 185
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["office"], "projects", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                    // line 186
                    echo "                                <li>
                                    <a href=\"";
                    // line 187
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_project", array("project_id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
                    echo "\" style=\"white-space: nowrap; overflow: hidden; text-overflow: ellipsis;\">
                                       <span style=\"overflow: hidden; text-overflow: ellipsis;\">";
                    // line 188
                    echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                    echo "</span>
                                    </a>
                                </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 192
                echo "                            </ul>
                        </li>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['office'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "
                    ";
        // line 196
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "assignedOffices", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["office"]) {
            if (($this->getAttribute($context["office"], "id", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "homeOffice", array()), "id", array()))) {
                // line 197
                echo "                        <li data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["office"], "name", array()), "html", null, true);
                echo "\">
                            <a href=\"";
                // line 198
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_office", array("office_id" => $this->getAttribute($context["office"], "id", array()))), "html", null, true);
                echo "\"
                               class=\"
                                    ";
                // line 200
                if ((twig_length_filter($this->env, $this->getAttribute($context["office"], "projects", array())) > 0)) {
                    // line 201
                    echo "                                        ";
                    echo "non-collapsible-href";
                    echo "
                                    ";
                } else {
                    // line 203
                    echo "                                        ";
                    echo "non-collapsible-href-full";
                    echo "
                                    ";
                }
                // line 204
                echo "\">
                                <i class='fa fa-home'></i>
                                <span>";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($context["office"], "name", array()), "html", null, true);
                echo "</span>
                            </a>
                            ";
                // line 208
                if ((twig_length_filter($this->env, $this->getAttribute($context["office"], "projects", array())) > 0)) {
                    // line 209
                    echo "                                <a href=\"#\" class=\"collapsible-href\">
                                    <i class=\"fa fa-arrow-down fa-fw\"></i>
                                </a>
                            ";
                }
                // line 213
                echo "                            <div class=\"clearfix\"></div>
                            <ul class=\"nav nav-second-level\">
                                ";
                // line 215
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["office"], "projects", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                    // line 216
                    echo "                                    <li>
                                        <a href=\"";
                    // line 217
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_project", array("project_id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
                    echo "\" style=\"white-space: nowrap; overflow: hidden; text-overflow: ellipsis;\">
                                           <span style=\"overflow: hidden; text-overflow: ellipsis;\">";
                    // line 218
                    echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                    echo "</span>
                                        </a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 222
                echo "                            </ul>
                        </li>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['office'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "
                    ";
        // line 226
        if ($this->env->getExtension('security')->isGranted("ROLE_WEB_DEVELOPER")) {
            // line 227
            echo "                    <li>
                        <a href=\"";
            // line 228
            echo $this->env->getExtension('routing')->getPath("zectranet_get_error_logs");
            echo "\">
                            <i class='fa fa-close'></i>
                            Error Logs
                        </a>
                    </li>
                    ";
        }
        // line 234
        echo "
\t\t\t\t</ul>







            <div id=\"quicksearch-block\" class=\"visible-xs visible-sm\" ng-controller=\"SearchController\">
                <ul class=\"nav\">
                    <li class=\"sidebar-search\">
                        <div class=\"input-group custom-search-form dropdown\" >
                            <input id=\"text-search\" ng-model=\"searchInput\"
                                   class=\"form-control dropdown-toggle\"
                                   placeholder=\"Search...\"
                                   maxlength=\"50\"
                                   ng-change=\"InputChange(searchInput, false);\"
                                   data-toggle=\"dropdown\"
                                   type=\"search\" />

                            <span class=\"input-group-btn\">
                                <button type=\"button\" class=\"btn btn-default\"
                                        ng-class=\"{ 'disabled': searchInput.length == 0 }\"
                                        ng-click=\"searchAction(searchInput)\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </span>

                            <div class=\"dropdown-menu\">
                                <div class=\"list-group\" style=\"margin-bottom: 0;\">
                                    <div ng-if=\"miniSearchResults.total == 0\" class=\"list-group-item\">
                                        <h5 class=\"text-info\" align=\"center\">Search for <i>[[ searchInput ]]</i>...</h5>
                                    </div>
                                    <div ng-if=\"miniSearchResults.total == -1\" class=\"list-group-item\">
                                        <h5 class=\"text-info\" align=\"center\">Didn't found any match</h5>
                                    </div>
                                    <div ng-if=\"miniSearchResults.total > 0\">
                                        <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.homeOffice\">
                                            <a ng-href=\"[[ item.href ]]\" target=\"_self\">
                                                [[ item.message ]]
                                                <span class=\"clearfix\"></span>
                                                <div class=\"pull-right\">
                                                    <i class=\"text-muted\" style=\"font-size: 10px;\">home office chat</i>
                                                </div>
                                                <span class=\"clearfix\"></span>
                                            </a>
                                        </div>

                                        <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.HFForums.forums\">
                                            <a ng-href=\"[[ item.href ]]\" target=\"_self\">
                                                [[ item.name ]]
                                                <span class=\"clearfix\"></span>
                                                <div class=\"pull-right\" style=\"font-size: 10px;\">
                                                    <i class=\"text-muted\">Header forums</i>
                                                </div>
                                                <span class=\"clearfix\"></span>
                                            </a>
                                        </div>

                                        <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.HFForums.threads\">
                                            <a ng-href=\"[[ item.href ]]\" target=\"_self\" style=\"text-decoration: none;\">
                                                <h4 class=\"text-info\">[[ item.title ]]</h4>
                                                <p style=\"color: black; font-style: italic; font-size: 11px;\">[[ item.message ]]</p>
                                                <span class=\"clearfix\"></span>
                                                <div class=\"pull-right\">
                                                    <i class=\"text-muted\" style=\"font-size: 10px;\">threads</i>
                                                </div>
                                                <span class=\"clearfix\"></span>
                                            </a>
                                        </div>

                                        <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.HFForums.posts\">
                                            <a ng-href=\"[[ item.href ]]\" target=\"_self\">
                                                [[ item.message ]]
                                                <span class=\"clearfix\"></span>
                                                <div class=\"pull-right\" style=\"font-size: 10px;\">
                                                    <i class=\"text-muted\">header forums posts</i>
                                                </div>
                                                <span class=\"clearfix\"></span>
                                            </a>
                                        </div>

                                        <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.QnAForums.forums\">
                                            <a ng-href=\"[[ item.href ]]\" target=\"_self\">
                                                [[ item.name ]]
                                                <span class=\"clearfix\"></span>
                                                <div class=\"pull-right\" style=\"font-size: 10px;\">
                                                    <i class=\"text-muted\">QnA Forums</i>
                                                </div>
                                                <span class=\"clearfix\"></span>
                                            </a>
                                        </div>

                                        <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.QnAForums.threads\">
                                            <a ng-href=\"[[ item.href ]]\" target=\"_self\" style=\"text-decoration: none;\">
                                                <h4 class=\"text-info\">[[ item.title ]]</h4>
                                                <p style=\"color: black; font-style: italic; font-size: 11px;\">[[ item.message ]]</p>
                                                <span class=\"clearfix\"></span>
                                                <div class=\"pull-right\" style=\"font-size: 10px;\">
                                                    <i class=\"text-muted\">QnA forums threads</i>
                                                </div>
                                                <span class=\"clearfix\"></span>
                                            </a>
                                        </div>

                                        <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.QnAForums.posts\">
                                            <a ng-href=\"[[ item.href ]]\" target=\"_self\">
                                                [[ item.message ]]
                                                <span class=\"clearfix\"></span>
                                                <div class=\"pull-right\" style=\"font-size: 10px;\">
                                                    <i class=\"text-muted\">QnA forums posts</i>
                                                </div>
                                                <span class=\"clearfix\"></span>
                                            </a>
                                        </div>

                                        <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.Projects.tasks\">
                                            <a ng-href=\"[[ item.href ]]\" target=\"_self\">
                                                [[ item.name ]]
                                                <span class=\"clearfix\"></span>
                                                <div class=\"pull-right\" style=\"font-size: 10px;\">
                                                    <i class=\"text-muted\">tasks</i>
                                                </div>
                                                <span class=\"clearfix\"></span>
                                            </a>
                                        </div>

                                        <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.Projects.taskPosts\">
                                            <a ng-href=\"[[ item.href ]]\" target=\"_self\">
                                                [[ item.message ]]
                                                <span class=\"clearfix\"></span>
                                                <div class=\"pull-right\" style=\"font-size: 10px;\">
                                                    <i class=\"text-muted\">task posts</i>
                                                </div>
                                                <span class=\"clearfix\"></span>
                                            </a>
                                        </div>

                                        <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.Projects.posts\">
                                            <a ng-href=\"[[ item.href ]]\" target=\"_self\">
                                                [[ item.message ]]
                                                <span class=\"clearfix\"></span>
                                                <div class=\"pull-right\" style=\"font-size: 10px;\">
                                                    <i class=\"text-muted\">development posts</i>
                                                </div>
                                                <span class=\"clearfix\"></span>
                                            </a>
                                        </div>

                                        <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.Projects.projects\">
                                            <a ng-href=\"[[ item.href ]]\" target=\"_self\">
                                                [[ item.name ]]
                                                <span class=\"clearfix\"></span>
                                                <div class=\"pull-right\" style=\"font-size: 10px;\">
                                                    <i class=\"text-muted\">projects</i>
                                                </div>
                                                <span class=\"clearfix\"></span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                </div>




\t\t\t\t<!-- END OF SITE TREE -->

\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 412
        $this->displayBlock('modals', $context, $blocks);
    }

    public function block_modals($context, array $blocks = array())
    {
        // line 413
        echo "
\t";
    }

    // line 418
    public function block_body($context, array $blocks = array())
    {
        // line 419
        echo "
\t";
        // line 420
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 423
        echo "
\t";
        // line 424
        $this->displayBlock('pageheader', $context, $blocks);
        // line 427
        echo "
\t";
        // line 428
        $this->displayBlock('content', $context, $blocks);
        // line 431
        echo "
";
    }

    // line 420
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 421
        echo "
\t";
    }

    // line 424
    public function block_pageheader($context, array $blocks = array())
    {
        // line 425
        echo "
\t";
    }

    // line 428
    public function block_content($context, array $blocks = array())
    {
        // line 429
        echo "
\t";
    }

    // line 434
    public function block_javascripts($context, array $blocks = array())
    {
        // line 435
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/searchController.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t<script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/highlight.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script>
\t\t// Variable for AngularJS
\t\tTEMPPARAMS.USER_ID = ";
        // line 440
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
        echo ";
\t\tJSON_URLS.deleteScrenshots  = \"";
        // line 441
        echo $this->env->getExtension('routing')->getPath("zectranet_document_delete", array("fileid" => 0));
        echo "\";
\t\tJSON_URLS.urlGetContactList  = \"";
        // line 442
        echo $this->env->getExtension('routing')->getPath("zectranet_get_contact_list");
        echo "\";
\t\tJSON_URLS.urlSendRequest  = \"";
        // line 443
        echo $this->env->getExtension('routing')->getPath("zectranet_send_user_membership_request");
        echo "\";
        JSON_URLS.searchPage = \"";
        // line 444
        echo $this->env->getExtension('routing')->getPath("zectranet_search_page", array("slug" => "slug"));
        echo "\";

        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        });
\t</script>
";
    }

    public function getTemplateName()
    {
        return "@Zectranet/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  953 => 444,  949 => 443,  945 => 442,  941 => 441,  937 => 440,  931 => 437,  927 => 436,  922 => 435,  919 => 434,  914 => 429,  911 => 428,  906 => 425,  903 => 424,  898 => 421,  895 => 420,  890 => 431,  888 => 428,  885 => 427,  883 => 424,  880 => 423,  878 => 420,  875 => 419,  872 => 418,  867 => 413,  861 => 412,  681 => 234,  672 => 228,  669 => 227,  667 => 226,  664 => 225,  655 => 222,  645 => 218,  641 => 217,  638 => 216,  634 => 215,  630 => 213,  624 => 209,  622 => 208,  617 => 206,  613 => 204,  607 => 203,  601 => 201,  599 => 200,  594 => 198,  589 => 197,  584 => 196,  581 => 195,  572 => 192,  562 => 188,  558 => 187,  555 => 186,  551 => 185,  547 => 183,  541 => 179,  539 => 178,  534 => 176,  530 => 174,  524 => 173,  518 => 171,  516 => 170,  511 => 168,  506 => 167,  501 => 166,  494 => 161,  483 => 157,  478 => 155,  473 => 154,  468 => 153,  465 => 152,  454 => 148,  449 => 146,  444 => 145,  439 => 144,  436 => 143,  425 => 139,  420 => 137,  415 => 136,  410 => 135,  406 => 133,  402 => 131,  398 => 129,  394 => 127,  392 => 126,  389 => 125,  387 => 124,  384 => 123,  382 => 122,  379 => 121,  377 => 120,  371 => 116,  364 => 115,  361 => 114,  355 => 113,  348 => 112,  345 => 111,  339 => 110,  332 => 109,  329 => 108,  323 => 107,  321 => 106,  317 => 104,  306 => 100,  301 => 98,  296 => 97,  291 => 96,  288 => 95,  277 => 91,  272 => 89,  267 => 88,  262 => 87,  259 => 86,  248 => 82,  243 => 80,  238 => 79,  233 => 78,  229 => 76,  225 => 74,  221 => 72,  217 => 70,  215 => 69,  212 => 68,  210 => 67,  207 => 66,  205 => 65,  202 => 64,  200 => 63,  195 => 62,  193 => 61,  187 => 57,  181 => 56,  175 => 54,  173 => 53,  167 => 51,  160 => 50,  157 => 49,  151 => 48,  144 => 47,  141 => 46,  135 => 45,  128 => 44,  125 => 43,  119 => 42,  117 => 41,  114 => 40,  112 => 39,  109 => 38,  105 => 37,  103 => 36,  100 => 35,  98 => 34,  95 => 33,  93 => 32,  90 => 31,  88 => 30,  79 => 24,  64 => 11,  61 => 10,  53 => 6,  50 => 5,  44 => 3,  11 => 1,);
    }
}
