<?php

/* @Zectranet/projectSprints.html.twig */
class __TwigTemplate_ea8641b52002e81e8f08fa82b80d017fd0f3ea1d2498b6ea76794bf9476e1dd3 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"project_sprints\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" style=\"margin-bottom: 10px;\">&times;</button>
                <div class=\"list-group\">
                    <div class=\"clearfix\"></div>
                    <div class=\"list-group-item\">
                        <i class=\"fa fa-repeat\"></i>
                        <strong> Project Sprints</strong>
                    </div>
                    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "sprints", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["sprint"]) {
            // line 13
            echo "                        <a class=\"list-group-item\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_sprint", array("sprint_id" => $this->getAttribute($context["sprint"], "id", array()), "project_id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-repeat\"></i>
                            <span>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["sprint"], "name", array()), "html", null, true);
            echo "</span>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sprint'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "sprints", array())) == 0)) {
            // line 19
            echo "                        <div class=\"list-group-item\">
                            <h4 class=\"text-info text-center\">Sprints will be displayed here</h4>
                        </div>
                    ";
        }
        // line 23
        echo "
                    <div ng-init=\"showAddSprint = false\" style=\"float: right; margin: 10px 0;\">
                        <a ng-click=\"showAddSprint = !showAddSprint\" style=\"color:#606060 !important;\" class=\"addnew-btn-hover\" href=\"#\">
                            Add New Sprint
                        </a>
                    </div>
                    <div class=\"clearfix\"></div>

                    <div ng-show=\"showAddSprint\" class=\"list-group-item\" style=\"padding: 5px 20px;\">
                        <form action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_sprint_add", array("project_id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                            <div class=\"form-group\">
                                <label for=\"add_sprint_name\">Sprint Name:</label>
                                <input type=\"text\" id=\"add_sprint_name\" pattern=\"[0-9A-Za-z -_()]{1,30}\" class=\"form-control\" name=\"name\" required>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"add_sprint_description\">Sprint Description:</label>
                                <input type=\"text\" id=\"add_sprint_description\" class=\"form-control\" name=\"description\" pattern=\"[0-9A-Za-z -_()]{1,50}\" required>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-primary\">Add</button>
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
        return "@Zectranet/projectSprints.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 32,  60 => 23,  54 => 19,  51 => 18,  42 => 15,  36 => 13,  32 => 12,  19 => 1,);
    }
}
