<?php

/* @Zectranet/projectSettings.html.twig */
class __TwigTemplate_96ad70fbe2fb46d279ecb87e09f7397f72a6d0421cb7662c62928d8d9156e662 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("@Zectranet/index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Zectranet/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "name", array()), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"row\">
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_office", array("office_id" => $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "office", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "office", array()), "name", array()), "html", null, true);
        echo "</a>
            </li>

            <li>
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_project", array("project_id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "name", array()), "html", null, true);
        echo "</a>
            </li>

            <li>Settings</li>
        </ol>
    </div>

    <div class=\"page-header\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <span style=\"font-size: 30px; font-family: 'PT Sans Narrow', sans-serif; font-weight: bold;\">Settings</span>
            </div>
        </div>
    </div>

    <div ng-controller=\"ProjectSettingsController\">
        <div ng-init=\"getProjectSettingInfo();\">
            <div class=\"row\">
                <div class=\"col-md-3 \" style=\"margin-top: 15px;\">
                    <ul class=\"list-group\" style=\"box-shadow: 2px 3px 6px 0 darkkhaki; height: 250px;overflow-y: auto; margin-bottom: 0;\">
                        <li class=\"list-group-item active\" style=\"background-color: #ddedf4; color: #000000;\">
                            HO Contacts available
                        </li>
                        <li class=\"list-group-item\" style=\"cursor: pointer;\"
                            ng-repeat=\"HO_Contact in HO_Contacts\"
                            ng-class=\"{'contact-list-active':HO_Contact.checked}\"
                            ng-click=\"contactChecked(1, \$index, HO_Contacts);\" >
                            [[ HO_Contact.username ]]
                        </li>
                    </ul>
                    <a ng-init=\"testClickableButton(1,HO_Contacts);\" ng-if=\"HO_Contacts_test\"  class=\"btn btn-default btn-success\" data-toggle=\"modal\"
                       data-target=\"#send_request_by_HO_contacts\" style=\"width: 100%;\">
                        Send Request
                    </a>
                </div>

                <div class=\"col-md-3 \" style=\"margin-top: 15px;\">
                    <ul class=\"list-group\"  style=\"box-shadow: 2px 3px 6px 0 darkkhaki; height: 250px;overflow-y: auto; margin-bottom: 0;\">
                        <li class=\"list-group-item active\" style=\"background-color: #ddedf4; color: #000000;\">
                            All Contacts
                        </li>
                        <li class=\"list-group-item\" style=\"cursor: pointer;\"
                            ng-repeat=\"contact in All_Contacts\"
                            ng-class=\"{'contact-list-active':contact.checked}\"
                            ng-click=\"contactChecked(2,\$index,All_Contacts);\">
                            [[ contact.username ]]
                        </li>
                    </ul>
                    <a ng-init=\"testClickableButton(2,All_Contacts);\" ng-if=\"All_Contacts_test\" class=\"btn btn-default btn-success\" data-toggle=\"modal\"
                       data-target=\"#send_request_by_All_contacts\" style=\"width: 100%;\">
                        Send Request
                    </a>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"list-group\" style=\"margin-top: 15px;\">
                        <div class=\"list-group-item active\" style=\"background-color: #ddedf4; color: #000000;\">
                            Project Team
                        </div>
                        <div class=\"list-group-item\" style=\"height: 240px;overflow-y: auto;\">
                            <table class=\"table\">
                                <thead class=\"table-striped\">
                                <tr>
                                    <th>User Name</th>
                                    <th>Status</th>
                                    <th>Reply</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr ng-repeat=\"request in Project_Team\">
                                    <td>
                                        [[ request.user.username ]]
                                    </td>
                                    <td>
                                        <span ng-if=\"request.reSendVisibleButton == false\" class=\"label\" style=\"background-color: [[ request.status.color ]]\">[[ request.status.label ]]</span>
                                        <span ng-if=\"request.reSendVisibleButton == true\" class=\"label\" style=\"background-color: hotpink;\">Pending</span>
                                    </td>
                                    <td>

                                            <span ng-if=\"request.reSendVisibleButton == true\" class=\"label\" style=\"background-color: #337ab7;cursor: pointer;\" ng-click=\"reSendRequest(request)\">
                                            Re-Send
                                        </span>

                                    </td>
                                    <td>
                                        <i class=\"fa fa-close\" style=\"color: red;cursor: pointer;\" ng-click=\"deleteProjectRequest(request.id);\"></i>
                                    </td>
                                    <td>
                                        <input type=\"checkbox\" />
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!------------ Begin of project log ------------>
            <div class=\"row\" style=\"margin-bottom: 30px;\">
                <div class=\"col-xs-12\">
                    <div class=\"list-group\">
                        <div class=\"list-group-item active\" style=\"background-color: #ddedf4; color: #000000;\">
                            <div class=\"text-center\">
                                Project logs
                                <a class=\"btn-xs pull-right\" ng-click=\"QnALogsVisible = !QnALogsVisible\">
                                    <i ng-hide=\"QnALogsVisible\" class=\"fa fa-plus-circle fa-fw\"></i>
                                    <i ng-show=\"QnALogsVisible\" class=\"fa fa-fw fa-minus-circle\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"list-group-item\" ng-show=\"QnALogsVisible\">
                            <table class=\"table table-striped table-hover\">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Event</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody style=\"height: 200px; max-height: 400px; overflow-y: auto;\">
                                <tr ng-repeat=\"log in ProjectLogs\">
                                    <td>[[ \$index + 1 ]]</td>
                                    <td>[[ log.event ]]</td>
                                    <td>[[ log.date ]]</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!------------ End of project log -------------->

            <div class=\"row\">
                <div class=\"col-md-12\">

                    ";
        // line 151
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "users", array())) < 2)) {
            // line 152
            echo "                    <div></div>

                    ";
        } else {
            // line 155
            echo "
                    <div style=\"margin-top: 20px; font-size: 1.3em; text-align: center; background-color: #F5F5F5; padding: 8px 0; border: 1px solid #ccc; border-radius: 5px;\">
                        Project Users
                    </div>

                    <div class=\"table-responsive\" style=\"margin-top: 20px;\">
                        <table class=\"table\">

                            <thead>

                            <tr>
                                <td>Name</td>
                                <td>Enable create sprint</td>
                                <td></td>
                            </tr>

                            </thead>

                            ";
            // line 173
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "users", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 174
                echo "                                ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()) != $this->getAttribute($context["user"], "username", array()))) {
                    // line 175
                    echo "
                                    <form action=\"";
                    // line 176
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_project_permission_save", array("project_id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()), "user_id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\" method=\"post\">
                                        <tbody>

                                        <tr>
                                            <td>";
                    // line 180
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    echo "</td>
                                            <td>
                                                <input type=\"checkbox\" name=\"enableCreateSprint\"
                                                    ";
                    // line 183
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "projectPermissions", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                        // line 184
                        echo "                                                        ";
                        if ((($this->getAttribute($context["permission"], "userid", array()) == $this->getAttribute($context["user"], "id", array())) && $this->getAttribute($context["permission"], "enableCreateSprint", array()))) {
                            echo " checked ";
                        }
                        // line 185
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo ">
                                            </td>
                                            <td>
                                                <input type=\"submit\" class=\"btn btn-default\" value=\"Save\">
                                            </td>
                                        </tr>

                                        </tbody>
                                    </form>

                                ";
                }
                // line 196
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "
                            ";
        }
        // line 199
        echo "
                        </table>
                    </div>

                </div>
            </div>

            <!-- START MODAL -->
            <div class=\"modal fade\" id=\"send_request_by_HO_contacts\" tabindex=\"-1\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header \" style=\"background-color: #e7e7e7 !important;\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                            <h4 class=\"modal-title\" style=\"color: #000000;\" align=\"center\">
                                Send Request
                            </h4>
                        </div>

                        <div class=\"modal-body\">
                            <div class=\"row\">
                                <div class=\"col-xs-offset-1 col-xs-10\">
                                    <div class=\"form-group\">
                                        <label>
                                            <b>Request Message</b>
                                        </label>
                                        <textarea class=\"form-control \" rows=\"5\" style=\"width: 100%;resize: vertical;\"
                                                  ng-model=\"HO_contact_message\"
                                                  ng-init=\"HO_contact_message = '";
        // line 226
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()) . ", has invited you to join ") . $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "name", array())), "html", null, true);
        echo "'\">

                                        </textarea>
                                        <br/>
                                        <div ng-if=\"QNASettingsErrors.HO_Contact_message_Error == true\">
                                            <span  class=\"label label-danger\"> Please fill out this field </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"modal-footer\">
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-success btn-default\" ng-click=\"SendRequest(1,HO_contact_message,HO_Contacts);\">Send Request</button>
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"modal fade\" id=\"send_request_by_All_contacts\" tabindex=\"-1\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header \" style=\"background-color: #e7e7e7 !important;\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                            <h4 class=\"modal-title\" style=\"color: #000000;\" align=\"center\">
                                Send Request
                            </h4>
                        </div>

                        <div class=\"modal-body\">
                            <div class=\"row\">
                                <div class=\"col-xs-offset-1 col-xs-10\">
                                    <div class=\"form-group\">
                                        <label>
                                            <b>Request Message</b>
                                        </label>
                                        <textarea  class=\"form-control \" rows=\"5\" style=\"width: 100%;resize: vertical;\"
                                                   ng-model=\"All_contact_message\"
                                                   ng-init=\"All_contact_message = '";
        // line 268
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()) . ", has invited you to join ") . $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "name", array())), "html", null, true);
        echo "'\">

                                        </textarea>
                                        <br/>
                                        <div ng-if=\"QNASettingsErrors.All_Contact_message_Error == true\">
                                            <span  class=\"label label-danger\"> Please fill out this field </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"modal-footer\">
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-success btn-default\" ng-click=\"SendRequest(2, All_contact_message, All_Contacts);\">Send Request</button>
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END MODAL -->

        </div>
    </div>
";
    }

    // line 295
    public function block_javascripts($context, array $blocks = array())
    {
        // line 296
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/projectSettingsController.js"), "html", null, true);
        echo "\"></script>
    <script>

        JSON_URLS.urlGetProjectSettingInfo = \"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_get_project_settings_info", array("project_id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()))), "html", null, true);
        echo "\";
        JSON_URLS.urlSendProjectRequest = \"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_send_project_request", array("project_id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()))), "html", null, true);
        echo "\";
        JSON_URLS.urlDeleteProjectRequest = \"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_delete_project_request", array("project_id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()), "request_id" => "requestid")), "html", null, true);
        echo "\";
        JSON_URLS.ReSendProjectRequest = \"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_re_send_request", array("project_id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()))), "html", null, true);
        echo "\";
    </script>
";
    }

    public function getTemplateName()
    {
        return "@Zectranet/projectSettings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 303,  418 => 302,  414 => 301,  410 => 300,  404 => 297,  399 => 296,  396 => 295,  365 => 268,  320 => 226,  291 => 199,  287 => 197,  281 => 196,  263 => 185,  258 => 184,  254 => 183,  248 => 180,  241 => 176,  238 => 175,  235 => 174,  231 => 173,  211 => 155,  206 => 152,  204 => 151,  62 => 14,  53 => 10,  47 => 6,  44 => 5,  38 => 3,  11 => 1,);
    }
}
