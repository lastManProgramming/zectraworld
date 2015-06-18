<?php

/* @Zectranet/sprintDelete.html.twig */
class __TwigTemplate_fd0f931dcc4921e36c48ddeb255e3dd1348894381fc0d5b110018c6db8235d0e extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"delete_sprint\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header label-danger\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\" style=\"color: #f5f5f5;\">
                    Delete Sprint
                </h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    <div class=\"header\">
                        <h3 class=\"text-center\">Are you really want to delete this sprint?</h3><br>
                    </div>
                </div>
                <div class=\"form-group\">
                    <a class=\"btn btn-danger\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_sprint_delete", array("project_id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()), "sprint_id" => $this->getAttribute((isset($context["sprint"]) ? $context["sprint"] : null), "id", array()))), "html", null, true);
        echo "\">Delete</a>
                    <a class=\"btn btn-default\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</a>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Zectranet/sprintDelete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 17,  19 => 1,);
    }
}
