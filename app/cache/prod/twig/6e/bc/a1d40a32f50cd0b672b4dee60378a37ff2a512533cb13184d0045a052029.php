<?php

/* @Zectranet/projectAddTaskToSprint.html.twig */
class __TwigTemplate_6ebca1d40a32f50cd0b672b4dee60378a37ff2a512533cb13184d0045a052029 extends Twig_Template
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
        echo "<!-- BEGIN OF ADD TASK TO SPRINT MODAL -->
<div class=\"modal fade\" id=\"add_task_to_sprint\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header label-primary\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\" style=\"color: #f5f5f5;\">
                    Add Task To Sprint
                </h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-md-offset-1 col-md-10 col-xs-offset-1 col-xs-10\">
                        <form class=\"form-horizontal\">
                            <div class=\"form-group\">
                                <label for=\"sprint_to_add_task\" class=\"form-control-static\">Choose Sprint:</label>
                                <select id=\"sprint_to_add_task\" class=\"form-control\" ng-model=\"sprint_id\">
                                    ";
        // line 18
        $context["enableAT"] = 0;
        // line 19
        echo "
                                    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "sprints", array()));
        foreach ($context['_seq'] as $context["i"] => $context["sprint"]) {
            if (($this->getAttribute($this->getAttribute($context["sprint"], "status", array()), "label", array()) == "Open")) {
                // line 21
                echo "
                                        ";
                // line 22
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sprint"], "Permissions", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 23
                    echo "                                            ";
                    $context["enableAT"] = 0;
                    // line 24
                    echo "                                            ";
                    if ((($this->getAttribute($context["permission"], "userid", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())) && $this->getAttribute($context["permission"], "enableAddTaskToSprint", array()))) {
                        // line 25
                        echo "                                                ";
                        $context["enableAT"] = 1;
                        // line 26
                        echo "
                                            ";
                    }
                    // line 28
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "
                                        ";
                // line 30
                if ((($this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "owner", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())) || ((isset($context["enableAT"]) ? $context["enableAT"] : null) == 1))) {
                    // line 31
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sprint"], "id", array()), "html", null, true);
                    echo "\" ";
                    if (($context["i"] == 0)) {
                        echo " selected ";
                    }
                    echo ">
                                                ";
                    // line 32
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["sprint"], "name", array()) . " "), "html", null, true);
                    echo "
                                            </option>
                                        ";
                }
                // line 35
                echo "                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['sprint'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <a class=\"btn btn-primary\" ng-click=\"addTaskToSprint(taskModel, sprint_id)\">Add</a>
                                <a class=\"btn btn-default\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OF ADD TASK TO SPRINT MODAL -->";
    }

    public function getTemplateName()
    {
        return "@Zectranet/projectAddTaskToSprint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  94 => 35,  88 => 32,  79 => 31,  77 => 30,  74 => 29,  68 => 28,  64 => 26,  61 => 25,  58 => 24,  55 => 23,  51 => 22,  48 => 21,  43 => 20,  40 => 19,  38 => 18,  19 => 1,);
    }
}
