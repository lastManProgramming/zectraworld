<?php

/* @Zectranet/taskAdd.html.twig */
class __TwigTemplate_36f09bf33517533cf202263c177a9273987ddaeb1ea7156107a6d218841f027a extends Twig_Template
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
        echo "<!-- Begin of Add Task Modal -->
<div class=\"modal fade\" id=\"add_new_task\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header label-primary\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\" style=\"color: #f5f5f5;\">
                    Add New Task
                </h4>
            </div>

            <div class=\"modal-body\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-10 col-md-offset-1\">
                            <form class=\"form-horizontal\" name=\"formTaskAdd\">
                                <div class=\"form-group\">
                                    <label for=\"add_task_name\" class=\"control-label\">Task Name:</label>
                                    <input type=\"text\" id=\"add_task_name\" class=\"form-control\" name=\"name\" ng-model=\"taskModel.name\" ng-minlength=\"5\" ng-maxlength=\"100\" pattern=\"[A-Za-z0-9 ]{1,}\" required>

                                    <div ng-messages=\"formTaskAdd.name.\$error\" style=\"color: red;\">
                                        <span ng-message=\"required\">Please, enter name</span>
                                        <span ng-message=\"pattern\">Please match the requested format: \"A-Z,a-z,0-9, \"</span>
                                        <span ng-message=\"minlength\">Min length of name is 5 characters</span>
                                        <span ng-message=\"maxlength\">Max length of name is 100 characters</span>
                                    </div>

                                </div>

                                <div class=\"form-group\">
                                    <label for=\"add_task_type\" class=\"control-label\">Task Type:</label>
                                    <select id=\"add_task_type\" class=\"form-control\" name=\"type\" ng-model=\"taskModel.type\" required>
                                        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["task_types"]) ? $context["task_types"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["type"]) {
            // line 34
            echo "                                            <option selected value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "\">
                                                ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "label", array()), "html", null, true);
            echo "
                                            </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"add_task_priority\" class=\"control-label\">Task Priority:</label>
                                    <select id=\"add_task_priority\" class=\"form-control\" name=\"priority\" ng-model=\"taskModel.priority\" required>
                                        ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["task_priority"]) ? $context["task_priority"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["priority"]) {
            // line 44
            echo "                                            <option selected value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["priority"], "id", array()), "html", null, true);
            echo "\">
                                                ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["priority"], "label", array()), "html", null, true);
            echo "
                                            </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['priority'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                                    </select>
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"add_task_startdate\" class=\"control-label\">Task Start Date:</label>
                                    <input type=\"date\" id=\"add_task_startdate\" class=\"form-control\" name=\"startdate\" ng-model=\"taskModel.startdate\" required>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"add_task_enddate\" class=\"control-label\">Task End Date:</label>
                                    <input type=\"date\" id=\"add_task_enddate\" class=\"form-control\" name=\"enddate\" ng-model=\"taskModel.enddate\" required>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"add_task_description\" class=\"control-label\">Task Description:</label>
                                    <textarea style=\"resize: vertical; height: 100px;\" id=\"add_task_description\" class=\"form-control\" name=\"description\" ng-model=\"taskModel.description\" ng-minlength=\"5\" ng-maxlength=\"5000\" required></textarea>

                                    <div ng-messages=\"formTaskAdd.description.\$error\" style=\"color: red;\">
                                        <span ng-message=\"required\">Please, enter description</span>
                                        <span ng-message=\"minlength\">Min length of description is 5 characters</span>
                                        <span ng-message=\"maxlength\">Max length of description is 5000 characters</span>
                                    </div>

                                </div>
                                <div class=\"form-group\">
                                    <button type=\"button\" class=\"btn btn-primary\" ng-disabled=\"formTaskAdd.\$invalid\" ng-click=\"addTask(taskModel)\">Add</button>
                                    <a class=\"btn btn-default\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End of Add Task Modal -->";
    }

    public function getTemplateName()
    {
        return "@Zectranet/taskAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 48,  87 => 45,  82 => 44,  78 => 43,  71 => 38,  62 => 35,  57 => 34,  53 => 33,  19 => 1,);
    }
}
