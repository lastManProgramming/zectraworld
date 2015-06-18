<?php

/* @Zectranet/projectDelete.html.twig */
class __TwigTemplate_0dbad31bfa751a8192d60380e1801cfed8e508d9fbf8bf3811f593bfd5327478 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"delete_private_project\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header label-danger\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\" style=\"color: #f5f5f5;\">
                    Delete Project
                </h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    <div class=\"header\">
                        <h3 class=\"text-center\">Are you really want to delete this project?</h3><br>
                    </div>
                </div>
                <div class=\"form-group\">
                    <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_add_project_to_archive", array("office_id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "officeID", array()), "project_id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"project_type\" value=\"4\"/>
                        <div class=\"btn-group\">
                            <button type=\"submit\" class=\"btn btn-danger\">
                                Delete
                            </button>
                            <a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Zectranet/projectDelete.html.twig";
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
