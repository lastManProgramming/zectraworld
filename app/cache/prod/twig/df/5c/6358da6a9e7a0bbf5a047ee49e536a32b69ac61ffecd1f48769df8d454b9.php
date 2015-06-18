<?php

/* @Zectranet/taskDelete.html.twig */
class __TwigTemplate_df5c6358da6a9e7a0bbf5a047ee49e536a32b69ac61ffecd1f48769df8d454b9 extends Twig_Template
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
        echo "<!-- Begin of Delete Task Modal -->
<div class=\"modal fade\" id=\"delete_task\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header label-danger\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\" style=\"color: #f5f5f5;\">
                    Delete Task
                </h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-10 col-md-offset-1\">
                            <form class=\"form-horizontal\">
                                <div class=\"form-group\">
                                    <h4>Do you really want to delete this task?</h4>
                                </div>
                                <div class=\"form-group\">
                                    <a ng-click=\"deleteTask(taskModel.id)\" class=\"btn btn-danger\">Delete</a>
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
<!-- End of Delete Task Modal -->";
    }

    public function getTemplateName()
    {
        return "@Zectranet/taskDelete.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
