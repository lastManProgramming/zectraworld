<?php

/* @Zectranet/taskAddSub.html.twig */
class __TwigTemplate_d5c75d3030c53545782c4598b1ab89340f8258bed27a4548b9253e862d1d444d extends Twig_Template
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
        echo "<!-- Begin of Add SubTask Modal -->
<div class=\"modal fade\" id=\"add_new_subtask\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header label-primary\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\" style=\"color: #f5f5f5;\">
                    Add New SubTask
                </h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-10 col-md-offset-1\">
                            <form class=\"form-horizontal\" name=\"formSubTaskAdd\">
                                <div class=\"form-group\">
                                    <label for=\"add_subtask_name\" class=\"control-label\">Task Name:</label>
                                    <input type=\"text\" id=\"add_subtask_name\" class=\"form-control\" ng-model=\"subtask.name\" name=\"name\" ng-minlength=\"5\" ng-maxlength=\"100\" pattern=\"[A-Za-z0-9 ]{1,}\" required>

                                    <div ng-messages=\"formSubTaskAdd.name.\$error\" style=\"color: red;\">
                                        <span ng-message=\"required\">Please, enter name</span>
                                        <span ng-message=\"pattern\">Please match the requested format: \"A-Z,a-z,0-9, \"</span>
                                        <span ng-message=\"minlength\">Min length of name is 5 characters</span>
                                        <span ng-message=\"maxlength\">Max length of name is 100 characters</span>
                                    </div>

                                </div>
                                <div class=\"form-group\">
                                    <label for=\"add_subtask_type\" class=\"control-label\">Task Type:</label>



                                    <select ng-if=\"subtask.parentTask.sprintID == null\" id=\"add_subtask_type\" class=\"form-control\" ng-model=\"subtask.type\" name=\"type\" required>
                                        ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["task_types"]) ? $context["task_types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 35
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "\">
                                                ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "label", array()), "html", null, true);
            echo "
                                            </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                                    </select>

                                    <select ng-if=\"subtask.parentTask.sprintID != null\" id=\"add_subtask_type\" class=\"form-control\" ng-model=\"subtask.type\" name=\"type\" required>
                                        ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["task_types"]) ? $context["task_types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 43
            echo "                                            <option  ng-if=\"'";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "label", array()), "html", null, true);
            echo "' == 'bug'\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "\">
                                                ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "label", array()), "html", null, true);
            echo "
                                            </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                                    </select>

                                </div>
                                <div class=\"form-group\">
                                    <label for=\"add_subtask_priority\" class=\"control-label\">Task Priority:</label>
                                    <select id=\"add_subtask_priority\" class=\"form-control\" ng-model=\"subtask.priority\" name=\"priority\" required>
                                        ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["task_priority"]) ? $context["task_priority"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["priority"]) {
            // line 54
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["priority"], "id", array()), "html", null, true);
            echo "\">
                                                ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["priority"], "label", array()), "html", null, true);
            echo "
                                            </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priority'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"add_subtask_startdate\" class=\"control-label\">Task Start Date:</label>
                                    <input type=\"date\" id=\"add_subtask_startdate\" class=\"form-control\" ng-model=\"subtask.startdate\" name=\"startdate\" required>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"add_subtask_enddate\" class=\"control-label\">Task End Date:</label>
                                    <input type=\"date\" id=\"add_subtask_enddate\" class=\"form-control\" ng-model=\"subtask.enddate\" name=\"enddate\" required>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"add_subtask_parent\" class=\"control-label\">Parent Task ID:</label>
                                    <input type=\"text\" id=\"add_subtask_parent\" class=\"form-control\" readonly ng-model=\"subtask.parent\" name=\"parent\" required>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"add_subtask_description\" class=\"control-label\">Task Description:</label>
                                    <textarea style=\"resize: vertical;\" id=\"add_subtask_description\" class=\"form-control\" ng-model=\"subtask.description\" name=\"description\" ng-minlength=\"5\" ng-maxlength=\"5000\" required></textarea>

                                    <div ng-messages=\"formSubTaskAdd.description.\$error\" style=\"color: red;\">
                                        <span ng-message=\"required\">Please, enter description</span>
                                        <span ng-message=\"minlength\">Min length of description is 5 characters</span>
                                        <span ng-message=\"maxlength\">Max length of description is 5000 characters</span>
                                    </div>

                                </div>
                                <div class=\"form-group\">
                                    <button type=\"button\" ng-disabled=\"formSubTaskAdd.\$invalid\" ng-click=\"addSubTask(subtask)\" class=\"btn btn-primary\">Add</button>
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
<!-- End of Add SubTask Modal -->";
    }

    public function getTemplateName()
    {
        return "@Zectranet/taskAddSub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 58,  114 => 55,  109 => 54,  105 => 53,  97 => 47,  88 => 44,  81 => 43,  77 => 42,  72 => 39,  63 => 36,  58 => 35,  54 => 34,  19 => 1,);
    }
}
