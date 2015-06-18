<?php

/* @Zectranet/sprint.html.twig */
class __TwigTemplate_d3ed4a93a2a0f6cea11b54d3a648885cde579e983648df784049f77594720bcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("@Zectranet/index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Zectranet/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sprint"]) ? $context["sprint"] : null), "name", array()), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div ng-controller=\"SprintController\" ng-init=\"getTasks();\">
        <div class=\"row\">
            <ol class=\"breadcrumb\" style=\"margin: 0 -15px;\">
                <li>
                    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_office", array("office_id" => $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "office", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "office", array()), "name", array()), "html", null, true);
        echo "</a>
                </li>
                <li>
                    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_project", array("project_id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()))), "html", null, true);
        echo "\">
                        ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "name", array()), "html", null, true);
        echo "
                    </a>
                </li>
                <li class=\"active\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sprint"]) ? $context["sprint"] : null), "name", array()), "html", null, true);
        echo "
                </li>
            </ol>
        </div>

        <div class=\"row\">
            <div class=\"page-header\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <i class=\"fa fa-repeat fa-2x\"></i>
                        <span style=\"font-size: 25px;\">
                            ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sprint"]) ? $context["sprint"] : null), "name", array()), "html", null, true);
        echo "
                            <span style=\"color: ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sprint"]) ? $context["sprint"] : null), "status", array()), "color", array()), "html", null, true);
        echo "\">
                                ";
        // line 31
        echo twig_escape_filter($this->env, ((" (" . $this->getAttribute($this->getAttribute((isset($context["sprint"]) ? $context["sprint"] : null), "status", array()), "label", array())) . ")"), "html", null, true);
        echo "
                            </span>
                        </span>
                    </div>

                    <div class=\"col-md-6\">
                        <!-- Begin of Office controll buttons -->
                            <div class=\"pull-right\">
                                ";
        // line 39
        if ((($this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "owner", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 40
            echo "                                    <div class=\"pull-right clearfix\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete This Sprint\">
                                        <a style=\"cursor: pointer; text-decoration: none;\" data-toggle=\"modal\" data-target=\"#delete_sprint\">
                                            <i class=\"fa text-danger fa-fw fa-trash fa-2x\"></i>
                                        </a>
                                    </div>

                                    <div class=\"pull-right clearfix\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Sprint Settings\">
                                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_sprint_settings", array("project_id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()), "sprint_id" => $this->getAttribute((isset($context["sprint"]) ? $context["sprint"] : null), "id", array()))), "html", null, true);
            echo "\" style=\"cursor: pointer; text-decoration: none;\">
                                            <i class=\"fa text-primary fa-fw fa-gear fa-2x\"></i>
                                        </a>
                                    </div>
                                ";
        }
        // line 52
        echo "
                                ";
        // line 53
        $context["enableSS"] = false;
        // line 54
        echo "
                                ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["sprint"]) ? $context["sprint"] : null), "Permissions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 56
            echo "                                    ";
            if ((($this->getAttribute($context["permission"], "userid", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())) && $this->getAttribute($context["permission"], "enableStartSprint", array()))) {
                // line 57
                echo "                                        ";
                $context["enableSS"] = true;
                // line 58
                echo "
                                    ";
            }
            // line 60
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
                                ";
        // line 62
        if (((($this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "owner", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["enableSS"]) ? $context["enableSS"] : null) == true))) {
            // line 63
            echo "                                    ";
            if (($this->getAttribute($this->getAttribute((isset($context["sprint"]) ? $context["sprint"] : null), "status", array()), "label", array()) == "Open")) {
                // line 64
                echo "                                        <div class=\"pull-right clearfix\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Start Sprint\">
                                            <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_sprint_change_state", array("sprint_id" => $this->getAttribute((isset($context["sprint"]) ? $context["sprint"] : null), "id", array()), "state" => 2)), "html", null, true);
                echo "\" style=\"text-decoration: none;\">
                                                <i class=\"fa fa-fw fa-play-circle fa-2x\" style=\"color: ";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sprint_status"]) ? $context["sprint_status"] : null), 1, array(), "array"), "color", array()), "html", null, true);
                echo "\"></i>
                                            </a>
                                        </div>
                                    ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 69
(isset($context["sprint"]) ? $context["sprint"] : null), "status", array()), "label", array()) == "In-Progress")) {
                // line 70
                echo "                                        <div class=\"pull-right clearfix\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Stop Sprint\">
                                            <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_sprint_change_state", array("sprint_id" => $this->getAttribute((isset($context["sprint"]) ? $context["sprint"] : null), "id", array()), "state" => 3)), "html", null, true);
                echo "\" style=\"text-decoration: none;\">
                                                <i class=\"fa fa-fw fa-pause fa-2x\" style=\"color: ";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sprint_status"]) ? $context["sprint_status"] : null), 2, array(), "array"), "color", array()), "html", null, true);
                echo "\"></i>
                                            </a>
                                        </div>
                                    ";
            }
            // line 76
            echo "                                ";
        }
        // line 77
        echo "                            </div>
                        <!-- End of Office controll buttons -->
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 84
        $this->env->loadTemplate("@Zectranet/sprintDelete.html.twig")->display($context);
        // line 85
        echo "
        <div class=\"row\" ng-cloak>
            <div class=\"col-xs-12\" style=\"margin-bottom: 15px;\">
                <h4 class=\"pull-right text-muted\" style=\"margin-left: 20px;\">
                    Total bugs: [[ totalEstimation.bh + 'h ' + totalEstimation.bm + 'm' ]]
                </h4>
                <h4 class=\"pull-right text-muted\" style=\"margin-left: 20px;\">
                    Total estimation: [[ totalEstimation.h + 'h ' + totalEstimation.m + 'm' ]]
                </h4>
                <h4 class=\"pull-right text-muted\">
                    Total Progress: [[ totalProgress + '%' ]]
                </h4>
                <div class=\"clearfix\"></div>
            </div>
        </div>

        <div class=\"row\">
            <!-- Begin of Tasks -->
            <div class=\"panel panel-default list-group\">
                <div class=\"list-group-item active\">
                    <i class=\"fa fa-tasks\"></i>
                    <span>Tasks</span>
                </div>
                <div cg-busy=\"promise\" class=\"panel-body\">

                    <!-- Begin of Task Nav Tabs -->
                    <ul id=\"task-view-tabs\" class=\"nav nav-tabs\" role=\"tablist\">
                        <li data-toggle=\"tooltip\" data-placement=\"top\" title=\"Table view\" role=\"presentation\" class=\"active\">
                            <a data-toggle=\"tab\" id=\"task-view-table\" class=\"btn\" href=\"#table-view\" aria-controls=\"table-view\" role=\"tab\" aria-expanded=\"true\">
                                <i class=\"fa fa-table fa-2x\"></i>
                            </a>
                        </li>

                        <li data-toggle=\"tooltip\" data-placement=\"top\" title=\"Agile view\" role=\"presentation\">
                            <a data-toggle=\"tab\" id=\"task-view-agile\"  class=\"btn\" href=\"#agile-view\" aria-controls=\"agile-view\" role=\"tab\" aria-expanded=\"false\">
                                <i class=\"fa fa-th fa-2x\"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- End of Task Nav Tabs -->

                    <div id=\"tasks-tab-content\" class=\"tab-content\">

                        <!-- Begin of Task Table View -->
                        <div id=\"table-view\" class=\"tab-pane fade in active\" aria-labelledby=\"task-view-table\" role=\"tabpanel\">
                            <ng-include src=\"";
        // line 130
        echo twig_escape_filter($this->env, (("'" . $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/templates/task-table-sprint.html")) . "'"), "html", null, true);
        echo "\"></ng-include>
                        </div>
                        <!-- End of Task Table View -->

                        <!-- Begin of Task Agile View -->
                        <div id=\"agile-view\" class=\"tab-pane fade\" aria-labelledby=\"task-view-agile\" role=\"tabpanel\">
                            <ng-include src=\"";
        // line 136
        echo twig_escape_filter($this->env, (("'" . $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/templates/task-agile.html")) . "'"), "html", null, true);
        echo "\"></ng-include>
                        </div>
                        <!-- End of Task Agile View -->
                    </div>
                </div>
            </div>
            <!-- End of Tasks -->
        </div>
    </div>
";
    }

    // line 147
    public function block_javascripts($context, array $blocks = array())
    {
        // line 148
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        TEMPPARAMS.sprintID = ";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sprint"]) ? $context["sprint"] : null), "id", array()), "html", null, true);
        echo ";
    </script>
    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        });

        \$('#task-view-tabs a').click(function (e) {
            if (\$(this).id != \$('a#add_new_task_btn').id) {
                \$(this).tab('show');
            }
            e.preventDefault();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@Zectranet/sprint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 150,  278 => 148,  275 => 147,  261 => 136,  252 => 130,  205 => 85,  203 => 84,  194 => 77,  191 => 76,  184 => 72,  180 => 71,  177 => 70,  175 => 69,  169 => 66,  165 => 65,  162 => 64,  159 => 63,  157 => 62,  154 => 61,  148 => 60,  144 => 58,  141 => 57,  138 => 56,  134 => 55,  131 => 54,  129 => 53,  126 => 52,  118 => 47,  109 => 40,  107 => 39,  96 => 31,  92 => 30,  88 => 29,  74 => 18,  67 => 14,  63 => 13,  55 => 10,  49 => 6,  46 => 5,  38 => 3,  11 => 1,);
    }
}
