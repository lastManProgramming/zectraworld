<?php

/* @Zectranet/dialogAdd.html.twig */
class __TwigTemplate_2d5bd966a7d892b8b6a2f18574ac19e02754f578b36ef5060ee68451179ae0e5 extends Twig_Template
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
<div class=\"modal fade\" id=\"add_dialog\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header label-primary\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\" style=\"color: #f5f5f5;\">
                    Add Files In Chat
                </h4>
            </div>

            <div class=\"modal-body\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-10 \" style=\"width : 100%;\">
                            <div class=\"panel panel-cascade\"  style=\"margin: 0;\">
                                <div class=\"panel-body\" style=\"margin: 0;border: 0;\">
                                    <form id=\"upload\" method=\"post\" action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("zectranet_document_upload");
        echo "\" enctype=\"multipart/form-data\">
                                        <div id=\"drop_upload\">
                                            <p> Drop Here</p>
                                            <p>
                                                <a>Browse</a>
                                                <input type=\"file\" name=\"upl\" multiple />
                                            </p>
                                        </div>
                                        <ul></ul>
                                    </form>
                                    <ul class=\"list-group list-todo\" style=\"overflow-y: auto;height: 230px;\">
                                        <li class=\"list-group-item\" style=\"padding: 10px 5px 10px 5px;height: 55px;\" ng-repeat=\"document in documents\">
                                            <input type=\"checkbox\" class=\"checkbox checkbox-inline\" ng-init=\"document.checked = false\" ng-click=\"document.checked = !document.checked\">
                                            <span>&nbsp;[[ document.name ]]</span>
                                            <span class=\"pull-right \">
                                                <img ng-src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/../[[ document.url ]]\" width=\"32\" height=\"32\" alt=\"[[ document.name ]]\">
                                            </span>
                                        </li>
                                    </ul>
                                    <div class=\"form-group\">
                                        <button type=\"button\" class=\"btn btn-primary\" ng-click=\"addDocInChat()\">Add</button>
                                        <a class=\"btn btn-default\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</a>
                                    </div>
                                </div>
                               <!-- <div class=\"modal fade\" id=\"rename-modal-dialog\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                                <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <form action=\"#\">
                                                    <div class=\"input-group input-group-sm\">
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"input new name\" aria-describedby=\"sizing-addon3\" ng-model=\"newName\"/>
                                                    </div>

                                                </form>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"submit\" ng-click=\"rename(curr_doc_id);\" class=\"btn btn-primary\" data-dismiss=\"modal\">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
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
        return "@Zectranet/dialogAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 33,  38 => 18,  19 => 1,);
    }
}
