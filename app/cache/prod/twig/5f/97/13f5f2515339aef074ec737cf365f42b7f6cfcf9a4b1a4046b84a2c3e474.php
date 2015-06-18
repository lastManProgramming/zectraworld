<?php

/* @Zectranet/projectVersionsModal.html.twig */
class __TwigTemplate_5f9713f5f2515339aef074ec737cf365f42b7f6cfcf9a4b1a4046b84a2c3e474 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"project_versions\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header label-primary\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\" style=\"color: #f5f5f5;\">
                    Project Versions
                </h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-md-offset-1 col-md-10 col-xs-offset-1 col-xs-10\" cg-busy=\"versionPromise\">
                        <ul class=\"list-group\" style=\"max-height: 600px;\">
                            <li class=\"list-group-item\" ng-repeat=\"version in projectVersions\">
                                <button class=\"btn btn-default form-control\" type=\"button\" data-toggle=\"collapse\" data-target=\"#version[[ version.id ]]\">
                                    [[ version.name ]]
                                </button>
                                <div class=\"collapse\" id=\"version[[ version.id ]]\">
                                    <div class=\"well\">
                                        <table class=\"table\">
                                            <tbody ng-repeat=\"task in version.tasks\">
                                                <tr>
                                                    <td>
                                                        [[ task.id ]]
                                                    </td>
                                                    <td>
                                                        <a ng-href=\"[[task.href]]\">[[ task.name ]]</a>
                                                    </td>
                                                </tr>
                                                <tr ng-repeat=\"task in version.tasks.subtasks\">
                                                    <td>
                                                        [[ task.parentid ]].[[ task.subindex ]]
                                                    </td>
                                                    <td>
                                                        <a ng-href=\"[[task.href]]\">[[ task.name ]]</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <p></p>
                                <p style=\"margin-top: 10px;\">[[ version.description ]]</p>
                            </li>
                        </ul>

                        <div class=\"form-group\">
                            <a class=\"btn btn-default btn-primary\" data-toggle=\"modal\" data-target=\"#project_version_add\">
                                <i class=\"fa fa-plus-circle\"></i>
                                Add new version
                            </a>
                            <a class=\"btn btn-default\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 60
        $this->env->loadTemplate("@Zectranet/projectVersionAdd.html.twig")->display($context);
        // line 61
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Zectranet/projectVersionsModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 61,  80 => 60,  19 => 1,);
    }
}
