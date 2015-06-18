<?php

/* @Zectranet/projectVersionAdd.html.twig */
class __TwigTemplate_f0d01267b64588aea024131e15768a97550ce9046961281f28b3f0b892687dd4 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"project_version_add\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header label-success\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\" style=\"color: #f5f5f5;\">
                    Add new version
                </h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-md-offset-1 col-md-10 col-xs-offset-1 col-xs-10\">
                        <form class=\"form-horizontal\">
                            <div class=\"form-group\">
                                <label for=\"add_version_name\" class=\"control-label\">Version Name:</label>
                                <input type=\"text\" id=\"add_version_name\" class=\"form-control\" name=\"name\" ng-model=\"version.name\" required>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"add_version_description\" class=\"control-label\">Version Description:</label>
                                <input type=\"text\" id=\"add_version_description\" class=\"form-control\" name=\"description\" ng-model=\"version.description\" required>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"button\" class=\"btn btn-success\" ng-click=\"addNewVersion(version);\">Add</button>
                                <a class=\"btn btn-default\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Zectranet/projectVersionAdd.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
