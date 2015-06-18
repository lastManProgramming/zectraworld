<?php

/* @Zectranet/projectAddEpicStory.html.twig */
class __TwigTemplate_c920b55c27e2528b524b4f01be7ea2442eb918aaad7b54b893d7f79d4a396a2b extends Twig_Template
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
        echo "<!-- BEGIN OF EPIC STORY ADD MODAL -->
<div class=\"modal fade\" id=\"add_epic_story\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header label-primary\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\" style=\"color: #f5f5f5;\">
                    Add New Epic Story
                </h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-md-offset-1 col-md-10 col-xs-offset-1 col-xs-10\">
                        <form class=\"form-horizontal\" name=\"formAddEpicStory\">
                            <div class=\"form-group\">
                                <label for=\"add_epic_story_name\">Epic Story Name:</label>
                                <input type=\"text\" class=\"form-control\" id=\"add_epic_story_name\" name=\"name\" ng-model=\"story.name\" pattern=\"[A-Za-z0-9 _]{1,}\" ng-minlength=\"2\" ng-maxlength=\"100\" required>
                            </div>

                            <div class=\"form-group\" ng-messages=\"formAddEpicStory.name.\$error\" style=\"color: red;\">
                                <span ng-message=\"required\">Please, enter name</span>
                                <span ng-message=\"pattern\">Alloved only A-Z, a-z, 0-9, underscore and space characters</span>
                                <span ng-message=\"minlength\">Mix length of this field is 2 characters</span>
                                <span ng-message=\"maxlength\">Max length of this field is 100 characters</span>
                            </div>

                            <div class=\"form-group\">
                                <a ng-disabled=\"formAddEpicStory.\$invalid\" class=\"btn btn-primary\" ng-click=\"addNewEpicStory(story)\">Add</a>
                                <a class=\"btn btn-default\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- END OF EPIC STORY ADD MODAL -->";
    }

    public function getTemplateName()
    {
        return "@Zectranet/projectAddEpicStory.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
