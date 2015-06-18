<?php

/* @Zectranet/task.html.twig */
class __TwigTemplate_da41a8344031faa0427ff33f9ecb63eb39af861d16ec4dbfa74013121a5bf1af extends Twig_Template
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
        // line 3
        $context["sprint"] = (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "parentId", array())) ? ($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "parent", array()), "sprint", array())) : ($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "sprint", array())));
        // line 5
        $context["idInArray"] =  -1;
        // line 6
        if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "parent", array()) != null)) {
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "parent", array()), "subtasks", array()));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                if (($this->getAttribute($context["item"], "id", array()) == $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()))) {
                    // line 8
                    $context["idInArray"] = ($context["i"] + 1);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 12
        $context["id"] = (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "parent", array())) ? ((((("[" . $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "parent", array()), "id", array())) . ".") . (isset($context["idInArray"]) ? $context["idInArray"] : null)) . "] ")) : ((("[" . $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array())) . "] ")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : null) . $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "name", array())), "html", null, true);
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    <div ng-cloak>
        <!-- Begin of Task Info -->
        <div ng-controller=\"SingleTaskController\" ng-init=\"getSingleTask();\">
            <!-- Begin of Breadcrumbs -->
            <div class=\"row\">
                <ol class=\"breadcrumb\" style=\"margin: 0 -30px; border-radius: 0 !important; padding: 12px 50px; background-color: #fbfbfb; \">
                    <li>
                        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_office", array("office_id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "project", array()), "office", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "project", array()), "office", array()), "name", array()), "html", null, true);
        echo "</a>
                    </li>
                    <li>
                        ";
        // line 26
        $context["projectBreadcrums"] = (($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "project", array()), "parent", array())) ? ($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "project", array()), "parent", array())) : ($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "project", array())));
        // line 27
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_project", array("project_id" => $this->getAttribute((isset($context["projectBreadcrums"]) ? $context["projectBreadcrums"] : null), "id", array()))), "html", null, true);
        echo "\">
                            ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projectBreadcrums"]) ? $context["projectBreadcrums"] : null), "name", array()), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li class=\"active\">
                        ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "name", array()), "html", null, true);
        echo "
                    </li>
                </ol>
            </div>
            <!-- End of Breadcrumbs -->

            <!-- Begin of Task Info Section -->
            <div class=\"row\" style=\"margin-top: 20px;\">
                <!--Begin of Main Task Info-->
                <form name=\"formTaskEdit\" cg-busy=\"taskPromise\" class=\"col-md-6\">
                    <div cg-busy=\"mainInfoPromise\">
                        <div class=\"page-header\" style=\"margin-top: 0; border-bottom: 0;\">
                            <span style=\"font-size: 20px;  color: #337ab7;\">Task Info</span>
                        </div>

                        <!-- Begin of Task NAME Edit -->
                        <div class=\"row\" style=\"margin-bottom: 10px;\">
                            <div class=\"col-md-3\">
                                <div class=\"input-group\">
                                    <label class=\"text-muted form-control-static\" style=\"  color: #777;font-weight: 300;\">Name:</label>
                                </div>
                            </div>

                            <div class=\"col-md-9\">
                                <div class=\"input-group\" style=\"width: 100%;\">
                                    <input type=\"text\" class=\"form-control btn-group-justified\" style=\"border: none;font-weight: bold;\" name=\"name\" ng-init=\"taskInfoEdit.name = '";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "name", array()), "html", null, true);
        echo "'\" ng-model=\"taskInfoEdit.name\" ng-minlength=\"5\" ng-maxlength=\"100\" pattern=\"[A-Za-z0-9 ]{1,}\" required>

                                    <div ng-messages=\"formTaskEdit.name.\$error\" style=\"color: red;\">
                                        <span ng-message=\"required\">Please, enter name</span>
                                        <span ng-message=\"pattern\">Please match the requested format: \"A-Z,a-z,0-9, \"</span>
                                        <span ng-message=\"minlength\">Min length of name is 5 characters</span>
                                        <span ng-message=\"maxlength\">Max length of name is 100 characters</span>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- End of Task NAME Edit -->

                        <!-- Begin of Task TYPE Select -->
                        <div class=\"row\" style=\"margin-bottom: 10px;\">
                            <div class=\"col-md-3\">
                                <div class=\"input-group\">
                                    <label class=\"text-muted form-control-static\" style=\"  color: #777;font-weight: 300;\">Type:</label>
                                </div>
                            </div>

                            <div class=\"col-md-9\">
                                <div class=\"input-group\" style=\"width: 100%;\">
                                    ";
        // line 82
        if (((isset($context["sprint"]) ? $context["sprint"] : null) && ($this->getAttribute($this->getAttribute((isset($context["sprint"]) ? $context["sprint"] : null), "status", array()), "id", array()) > 1))) {
            // line 83
            echo "                                        <a style=\"font-weight: bold;\" href=\"#\" class=\"btn form-control-static text-info\">
                                            ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "type", array()), "label", array()), "html", null, true);
            echo "
                                        </a>

                                    ";
        } else {
            // line 88
            echo "                                        <select class=\"form-control\" name=\"type\" ng-model=\"taskInfoEdit.type.id\" style=\"border: none;font-weight: bold;\">

                                            ";
            // line 90
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["task_types"]) ? $context["task_types"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 91
                echo "                                                <option style=\"color: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "color", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
                echo "\"
                                                        ";
                // line 92
                if (($this->getAttribute($context["type"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "type", array()), "id", array()))) {
                    // line 93
                    echo "                                                    selected=\"selected\"
                                                        ";
                }
                // line 94
                echo ">
                                                    ";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "label", array()), "html", null, true);
                echo "
                                                </option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                                        </select>
                                    ";
        }
        // line 100
        echo "                                </div>
                            </div>
                        </div>
                        <!-- End of Task TYPE Select -->

                        <!-- Begin of Task PRIORITY Select -->
                        <div class=\"row\" style=\"margin-bottom: 10px;\">
                            <div class=\"col-md-3\">
                                <div class=\"input-group\">
                                    <label class=\"text-muted form-control-static\" style=\"  color: #777;font-weight: 300;\">Priority:</label>
                                </div>
                            </div>

                            <div class=\"col-md-9\">
                                <div class=\"input-group\" style=\"width: 100%;\">
                                    <select class=\"form-control\" name=\"priority\" ng-model=\"taskInfoEdit.priority.id\" style=\"border: none;font-weight: bold;\">
                                        ";
        // line 116
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["task_priority"]) ? $context["task_priority"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["priority"]) {
            // line 117
            echo "                                            <option style=\"color: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["priority"], "color", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["priority"], "id", array()), "html", null, true);
            echo "\"
                                                    ";
            // line 118
            if (($this->getAttribute($context["priority"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "priority", array()), "id", array()))) {
                // line 119
                echo "                                                selected=\"selected\"
                                                    ";
            }
            // line 120
            echo ">
                                                ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["priority"], "label", array()), "html", null, true);
            echo "
                                            </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priority'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End of Task PRIORITY Select -->

                        <!-- Begin of Task PROJECT/STORY Select -->
                        <div class=\"row\" style=\"margin-bottom: 10px;\">
                            <div class=\"col-md-3\">
                                <div class=\"input-group\">
                                    <label class=\"text-muted form-control-static\" style=\"  color: #777;font-weight: 300;\">Project/Epic Story:</label>
                                </div>
                            </div>

                            ";
        // line 138
        $context["project"] = (($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "project", array()), "parent", array())) ? ($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "project", array()), "parent", array())) : ($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "project", array())));
        // line 139
        echo "                            <div class=\"col-md-9\">
                                <div class=\"input-group\" style=\"width: 100%;\">
                                    <select class=\"form-control\" name=\"project\" ng-model=\"taskInfoEdit.projectid\" style=\"border: none;font-weight: bold;\">
                                        <optgroup style=\"margin: 0; padding: 0;\" label=\"Project\">
                                            <option ";
        // line 143
        if (($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "project", array()), "id", array()))) {
            echo "selected=\"selected\"";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "name", array()), "html", null, true);
        echo "</option>
                                        </optgroup>
                                        ";
        // line 145
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "epicStories", array())) > 0)) {
            // line 146
            echo "                                        <optgroup style=\"margin: 0\" label=\"Epic Stories\">
                                            ";
        }
        // line 148
        echo "                                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "epicStories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["epicStory"]) {
            // line 149
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["epicStory"], "id", array()), "html", null, true);
            echo "\"
                                                        ";
            // line 150
            if (($this->getAttribute($context["epicStory"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "project", array()), "id", array()))) {
                // line 151
                echo "                                                    selected=\"selected\"
                                                        ";
            }
            // line 152
            echo ">
                                                    ";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["epicStory"], "name", array()), "html", null, true);
            echo "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['epicStory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                                            ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "epicStories", array())) > 0)) {
            // line 157
            echo "                                        </optgroup>
                                        ";
        }
        // line 159
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End of Task PROJECT/STORY Select -->

                        <!-- Begin Of Task START DATE Select -->
                        <div class=\"row\" style=\"margin-bottom: 10px;\">
                            <div class=\"col-md-3\">
                                <div class=\"input-group\">
                                    <label class=\"text-muted form-control-static\" style=\"  color: #777;font-weight: 300;\">Start Date:</label>
                                </div>
                            </div>

                            <div class=\"col-md-9\">
                                <div class=\"input-group\" style=\"width: 100%;\">
                                    <input class=\"form-control\" style=\"border: none;font-weight: bold;\" ng-model=\"taskInfoEdit.startDate\" type=\"date\">
                                </div>
                            </div>
                        </div>
                        <!-- End Of Task START DATE Select -->

                        <!-- Begin Of Task END DATE Select -->
                        <div class=\"row\" style=\"margin-bottom: 10px;\">
                            <div class=\"col-md-3\">
                                <div class=\"input-group\">
                                    <label class=\"text-muted form-control-static\" style=\"  color: #777;font-weight: 300;\">End Date:</label>
                                </div>
                            </div>

                            <div class=\"col-md-9\">
                                <div class=\"input-group\" style=\"width: 100%;\">
                                    <input class=\"form-control\" style=\"border: none;font-weight: bold;\" ng-model=\"taskInfoEdit.endDate\" type=\"date\">
                                </div>
                            </div>
                        </div>
                        <!-- End Of Task END DATE Select -->

                        <!-- Begin Of Task Parent Details -->
                        ";
        // line 198
        $context["parent"] = $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "parent", array());
        // line 199
        echo "
                        <div class=\"row\" style=\"margin-bottom: 10px;\">
                            <div class=\"col-md-3\">
                                <div class=\"input-group\">
                                    <label class=\"text-muted form-control-static\" style=\"color: #777;font-weight: 300;\">
                                        Parent task:
                                    </label>
                                </div>
                            </div>

                            <div class=\"col-md-9\">
                                <div class=\"input-group\">
                                    ";
        // line 211
        if ((isset($context["parent"]) ? $context["parent"] : null)) {
            // line 212
            echo "                                        <a style=\"font-weight: bold;\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_task_show", array("task_id" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn form-control-static text-info\">
                                            ";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "name", array()), "html", null, true);
            echo "
                                        </a>
                                    ";
        } else {
            // line 216
            echo "                                        <a style=\"font-weight: bold;\" href=\"#\" class=\"btn form-control-static text-info\">
                                            none
                                        </a>
                                    ";
        }
        // line 220
        echo "                                </div>
                            </div>
                        </div>
                        <!-- End Of Task Parent Details -->

                    </div>
                </form>
                <!--End of Main Task Info-->

                <!--Begin of Task Details-->
                <form cg-busy=\"taskPromise\" class=\"col-md-6\">
                    <div cg-busy=\"detailsInfoPromise\">
                        <div class=\"page-header\" style=\"margin-top: 0; border: none;\">
                            <span style=\"font-size: 20px; color: #337ab7;\">Task Details</span>
                        </div>

                        <!-- Begin Of Task OWNER Details -->
                        <div class=\"row\" style=\"margin-bottom: 10px;\">
                            <div class=\"col-md-3\">
                                <div class=\"input-group\">
                                    <label class=\"text-muted form-control-static\" style=\"  color: #777;font-weight: 300;\">Owner:</label>
                                </div>
                            </div>

                            <div class=\"col-md-9\">
                                <div class=\"input-group\">
                                    <a style=\"font-weight: bold;\" href=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_user_page", array("user_id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "ownerid", array()))), "html", null, true);
        echo "\" class=\"btn form-control-static text-info\">
                                        ";
        // line 247
        echo twig_escape_filter($this->env, ((((($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "owner", array()), "name", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "owner", array()), "surname", array())) . " (") . $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "owner", array()), "username", array())) . ")"), "html", null, true);
        echo "
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Of Task OWNER Details -->

                        <!-- Begin Of Task ASSIGNED Select -->
                        <div class=\"row\" style=\"margin-bottom: 10px;\">
                            <div class=\"col-md-3\">
                                <div class=\"input-group\">
                                    <label class=\"text-muted form-control-static\" style=\"  color: #777;font-weight: 300;\">Assigned:</label>
                                </div>
                            </div>

                            <div class=\"col-md-9\">
                                <div class=\"input-group\" style=\"width: 100%;\">
                                    <select class=\"form-control\" name=\"assigned\" ng-model=\"taskInfoEdit.assigned\" style=\"border: none;font-weight: bold;\">
                                        ";
        // line 265
        $context["usersForAssign"] = array();
        // line 266
        echo "                                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "project", array()), "users", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if (!twig_in_filter($context["user"], (isset($context["usersForAssign"]) ? $context["usersForAssign"] : null))) {
                // line 267
                echo "                                            ";
                $context["usersForAssign"] = twig_array_merge((isset($context["usersForAssign"]) ? $context["usersForAssign"] : null), array(0 => $context["user"]));
                // line 268
                echo "                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "                                        ";
        $context["taskProject"] = (($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "project", array()), "parent", array())) ? ($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "project", array()), "parent", array())) : ($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "project", array())));
        // line 270
        echo "
                                        ";
        // line 271
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usersForAssign"]) ? $context["usersForAssign"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 272
            echo "                                            ";
            if (($this->getAttribute($context["user"], "id", array()) != $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "owner", array()), "id", array()))) {
                // line 273
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">
                                                    ";
                // line 274
                echo twig_escape_filter($this->env, (((($this->getAttribute($context["user"], "name", array()) . " ") . $this->getAttribute($context["user"], "surname", array())) . " ") . $this->getAttribute($context["user"], "username", array())), "html", null, true);
                echo "
                                                </option>
                                            ";
            }
            // line 277
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        echo "                                        <option value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "owner", array()), "id", array()), "html", null, true);
        echo "\">
                                            ";
        // line 279
        echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "owner", array()), "name", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "owner", array()), "surname", array())) . " ") . $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "owner", array()), "username", array())), "html", null, true);
        echo "
                                        </option>
                                        <option value=\"Not Assigned\">Not Assigned</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End Of Task ASSIGNED Select -->

                        <!-- Begin Of Task PROGRESS Selection -->
                        <div class=\"row\" style=\"margin-bottom: 10px;\">
                            <div class=\"col-md-3\">
                                <div class=\"input-group\">
                                    <label class=\"text-muted  form-control-static\" style=\"  color: #777;font-weight: 300;\">Progress:</label>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div style=\"padding: 6px 0;\">
                                    <div class=\"form-group progress progress-striped active\" style=\"position: relative;\">
                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"[[taskInfoEdit.progress]]\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: [[taskInfoEdit.progress]]%;\">
                                            <div class=\"text-muted text-center\" align=\"center\" style=\"color: black; font-weight: bold; position: absolute; left: 35%; opacity: 0.6\">[[taskInfoEdit.progress]]% Complete</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"input-group\" style=\"width: 100%;\">
                                    <select class=\"form-control\" name=\"progress\" ng-model=\"taskInfoEdit.progress\" style=\"border: none;font-weight: bold;\">
                                        <option value=\"0\">0%</option>
                                        <option value=\"10\">10%</option>
                                        <option value=\"20\">20%</option>
                                        <option value=\"30\">30%</option>
                                        <option value=\"40\">40%</option>
                                        <option value=\"50\">50%</option>
                                        <option value=\"60\">60%</option>
                                        <option value=\"70\">70%</option>
                                        <option value=\"80\">80%</option>
                                        <option value=\"90\">90%</option>
                                        <option value=\"100\">100%</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End Of Task PROGRESS Selection -->

                        <!-- Begin of Task STATUS Select -->
                        <div class=\"row\" style=\"margin-bottom: 10px;\">
                            <div class=\"col-md-3\">
                                <div class=\"input-group\">
                                    <label class=\"text-muted form-control-static\" style=\"  color: #777;font-weight: 300;\">Status:</label>
                                </div>
                            </div>

                            <div class=\"col-md-9\">
                                <div class=\"input-group\" style=\"width: 100%;\">
                                    <select class=\"form-control\" name=\"status\" ng-model=\"taskInfoEdit.status.id\" style=\"border: none;font-weight: bold;\">
                                        ";
        // line 335
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["task_statuses"]) ? $context["task_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 336
            echo "                                            <option style=\"color: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "color", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "id", array()), "html", null, true);
            echo "\"
                                                    ";
            // line 337
            if (($this->getAttribute($context["status"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "status", array()), "id", array()))) {
                // line 338
                echo "                                                selected=\"selected\"
                                                    ";
            }
            // line 339
            echo ">
                                                ";
            // line 340
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "label", array()), "html", null, true);
            echo "
                                            </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 343
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End of Task STATUS Select -->

                        <!-- Begin Of Task ESTIMATED HOURS Select -->
                        <div class=\"row\" style=\"margin-bottom: 10px;\">
                            <div class=\"col-md-3\">
                                <div class=\"input-group\">
                                    <label class=\"text-muted form-control-static\" style=\"  color: #777;font-weight: 300;\">Estimated Hours:</label>
                                </div>
                            </div>

                            ";
        // line 357
        if (((isset($context["sprint"]) ? $context["sprint"] : null) && ($this->getAttribute($this->getAttribute((isset($context["sprint"]) ? $context["sprint"] : null), "status", array()), "id", array()) > 1))) {
            // line 358
            echo "                                <div class=\"col-md-9\">
                                    <a style=\"font-weight: bold;\" href=\"#\" class=\"btn form-control-static text-info\">
                                        ";
            // line 360
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "estimatedHours", array()) . "h"), "html", null, true);
            echo "
                                    </a>
                                </div>

                            ";
        } else {
            // line 365
            echo "                                <div class=\"col-md-9\">
                                    <div class=\"input-group\" style=\"width: 100%;\">
                                        <select class=\"form-control\" name=\"estimated_hours\" ng-model=\"taskInfoEdit.estimatedHours\" style=\"border: none;font-weight: bold;\">
                                            ";
            // line 368
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 369
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "estimatedHours", array()) == $context["i"])) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " h</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 371
            echo "                                        </select>
                                    </div>
                                </div>

                            ";
        }
        // line 376
        echo "                        </div>
                        <!-- End Of Task ESTIMATED HOURS Select -->

                        <!-- Begin Of Task ESTIMATED MINUTES Select -->
                        <div class=\"row\" style=\"margin-bottom: 10px;\">
                            <div class=\"col-md-3\">
                                <div class=\"input-group\">
                                    <label class=\"text-muted form-control-static\" style=\"  color: #777;font-weight: 300;\">Estimated Minutes:</label>
                                </div>
                            </div>

                            ";
        // line 387
        if (((isset($context["sprint"]) ? $context["sprint"] : null) && ($this->getAttribute($this->getAttribute((isset($context["sprint"]) ? $context["sprint"] : null), "status", array()), "id", array()) > 1))) {
            // line 388
            echo "                                <div class=\"col-md-9\">
                                    <a style=\"font-weight: bold;\" href=\"#\" class=\"btn form-control-static text-info\">
                                        ";
            // line 390
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "estimatedMinutes", array()) . "m"), "html", null, true);
            echo "
                                    </a>
                                </div>

                            ";
        } else {
            // line 395
            echo "                                <div class=\"col-md-9\">
                                    <div class=\"input-group\" style=\"width: 100%;\">
                                        <select class=\"form-control\" name=\"estimated_minutes\" ng-model=\"taskInfoEdit.estimatedMinutes\" style=\"border: none;font-weight: bold;\">
                                            <option value=\"0\" ";
            // line 398
            if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "estimatedMinutes", array()) == 0)) {
                echo "selected=\"selected\"";
            }
            echo ">0 m</option>
                                            <option value=\"10\" ";
            // line 399
            if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "estimatedMinutes", array()) == 10)) {
                echo "selected=\"selected\"";
            }
            echo ">10 m</option>
                                            <option value=\"20\" ";
            // line 400
            if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "estimatedMinutes", array()) == 20)) {
                echo "selected=\"selected\"";
            }
            echo ">20 m</option>
                                            <option value=\"30\" ";
            // line 401
            if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "estimatedMinutes", array()) == 30)) {
                echo "selected=\"selected\"";
            }
            echo ">30 m</option>
                                            <option value=\"40\" ";
            // line 402
            if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "estimatedMinutes", array()) == 40)) {
                echo "selected=\"selected\"";
            }
            echo ">40 m</option>
                                            <option value=\"50\" ";
            // line 403
            if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "estimatedMinutes", array()) == 50)) {
                echo "selected=\"selected\"";
            }
            echo ">50 m</option>
                                        </select>
                                    </div>
                                </div>

                            ";
        }
        // line 409
        echo "                        </div>
                        <!-- End Of Task ESTIMATED MINUTES Select -->

                        <!-- Begin Of Task SPRINT Details -->

                        <div class=\"row\" style=\"margin-bottom: 10px;\">
                            <div class=\"col-md-3\">
                                <div class=\"input-group\">
                                    <label class=\"text-muted form-control-static\" style=\"color: #777;font-weight: 300;\">
                                        Sprint:
                                    </label>
                                </div>
                            </div>

                            <div class=\"col-md-9\">
                                <div class=\"input-group\">
                                    ";
        // line 425
        if ((isset($context["sprint"]) ? $context["sprint"] : null)) {
            // line 426
            echo "                                        <a style=\"font-weight: bold;\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_sprint", array("sprint_id" => $this->getAttribute((isset($context["sprint"]) ? $context["sprint"] : null), "id", array()), "project_id" => $this->getAttribute((isset($context["sprint"]) ? $context["sprint"] : null), "projectid", array()))), "html", null, true);
            echo "\" class=\"btn form-control-static text-info\">
                                            ";
            // line 427
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sprint"]) ? $context["sprint"] : null), "name", array()), "html", null, true);
            echo "
                                        </a>
                                    ";
        } else {
            // line 430
            echo "                                        <a style=\"font-weight: bold;\" href=\"#\" class=\"btn form-control-static text-info\">
                                            none
                                        </a>
                                    ";
        }
        // line 434
        echo "                                </div>
                            </div>
                        </div>
                        <!-- End Of Task SPRINT Details -->

                        <!-- Begin Of Task Version Select -->
                        ";
        // line 440
        $context["versions"] = (($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "project", array()), "parent", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "project", array()), "parent", array()), "versions", array())) : ($this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "project", array()), "versions", array())));
        // line 441
        echo "                        ";
        if ((twig_length_filter($this->env, (isset($context["versions"]) ? $context["versions"] : null)) > 0)) {
            // line 442
            echo "                        <div class=\"row\" style=\"margin-bottom: 10px;\">
                            <div class=\"col-md-3\">
                                <div class=\"input-group\">
                                    <label class=\"text-muted form-control-static\" style=\"  color: #777;font-weight: 300;\">Project Version:</label>
                                </div>
                            </div>

                            <div class=\"col-md-9\">
                                <div class=\"input-group\" style=\"width: 100%;\">
                                    <select class=\"form-control\" name=\"version\" ng-model=\"taskInfoEdit.versionid\" style=\"border: none;font-weight: bold;\">
                                        ";
            // line 452
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["versions"]) ? $context["versions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 453
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["version"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["version"], "name", array()), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 455
            echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End Of Task Version Select -->
                        ";
        }
        // line 461
        echo "
                    </div>
                </form>
                <!--End of Task Details-->
            </div>
            <!-- End of Task Info Section ---->

            <hr/>

            <!-- SAVE BUTTON -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group\">
                        <button type=\"button\" ng-disabled=\"formTaskEdit.\$invalid\" ng-click=\"saveSingleTaskInfo(taskInfoEdit);\" class=\"btn btn-default btn-primary\">
                            Save
                        </button>
                    </div>
                </div>
            </div>
            <!-- SAVE BUTTON -->

            <!-- Begin of Desciption Section -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"page-header\" style=\"border: 0;\">
                        <h4 style=\"  color: #337ab7;\">Description</h4>
                    </div>

                    <div class=\"row\">
                        <form name=\"formDescriptionEdit\" class=\"col-md-12\" action=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_task_edit_descritpion", array("task_id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" style=\"border: none; height: 170px; resize: vertical; font-weight: bold;\" name=\"description\" ng-init=\"description = '";
        // line 492
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "description", array()), "html", null, true);
        echo "'\" ng-model=\"description\" ng-minlength=\"5\" ng-maxlength=\"5000\" required></textarea>

                                <div ng-messages=\"formDescriptionEdit.description.\$error\" style=\"color: red;\">
                                    <span ng-message=\"required\">Please, enter description</span>
                                    <span ng-message=\"minlength\">Min length of description is 5 characters</span>
                                    <span ng-message=\"maxlength\">Max length of description is 5000 characters</span>
                                </div>

                            </div>
                            <div class=\"form-group\">
                                <button ng-disabled=\"formDescriptionEdit.\$invalid\" type=\"submit\" class=\"btn btn-default btn-primary\">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End of Desciption Section -->

            <!-- Begin of Sub-Task Section -->
            ";
        // line 511
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "subtasks", array())) > 0)) {
            // line 512
            echo "                <div class=\"row\" style=\"  margin-bottom: 50px;\">
                    <div class=\"col-md-12\">
                        <div class=\"page-header\" style=\"border: 0;\">
                            <h4 style=\"color: #337ab7; margin-bottom: 0;\"> Sub-Tasks </h4>
                        </div>
                        <table>
                            <tbody>
                            ";
            // line 519
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "subtasks", array()));
            foreach ($context['_seq'] as $context["i"] => $context["subtask"]) {
                // line 520
                echo "                                <tr>
                                    <td style=\"margin-bottom: 10px;\">
                                        ";
                // line 522
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo ".
                                    </td>

                                    <td class=\"col-xs-6\">
                                        <a style=\"word-wrap: break-word;\" href=\"";
                // line 526
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_task_show", array("task_id" => $this->getAttribute($context["subtask"], "id", array()))), "html", null, true);
                echo "\"  >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subtask"], "name", array()), "html", null, true);
                echo "</a>
                                    </td>

                                    <td class=\"col-xs-2\">
                                        ";
                // line 530
                if (($this->getAttribute($this->getAttribute($context["subtask"], "status", array()), "label", array()) == "story")) {
                    // line 531
                    echo "                                            <span style=\"color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtask"], "status", array()), "color", array()), "html", null, true);
                    echo " \">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtask"], "status", array()), "label", array()), "html", null, true);
                    echo "</span>
                                        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 532
$context["subtask"], "status", array()), "label", array()) == "todo")) {
                    // line 533
                    echo "                                            <span style=\"color:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtask"], "status", array()), "color", array()), "html", null, true);
                    echo " \">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtask"], "status", array()), "label", array()), "html", null, true);
                    echo "</span>
                                        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 534
$context["subtask"], "status", array()), "label", array()) == "in-progress")) {
                    // line 535
                    echo "                                            <span style=\"color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtask"], "status", array()), "color", array()), "html", null, true);
                    echo " \">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtask"], "status", array()), "label", array()), "html", null, true);
                    echo "</span>
                                        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 536
$context["subtask"], "status", array()), "label", array()) == "done")) {
                    // line 537
                    echo "                                            <span style=\"color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtask"], "status", array()), "color", array()), "html", null, true);
                    echo " \">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtask"], "status", array()), "label", array()), "html", null, true);
                    echo "</span>
                                        ";
                }
                // line 539
                echo "                                    </td>

                                    <td class=\"col-xs-4\" style=\"  font-weight: bold;\">
                                        ";
                // line 542
                if (($this->getAttribute($context["subtask"], "assigned", array()) == null)) {
                    // line 543
                    echo "                                            Not Assigned
                                        ";
                } else {
                    // line 545
                    echo "                                            ";
                    echo twig_escape_filter($this->env, ((((($this->getAttribute($this->getAttribute($context["subtask"], "assigned", array()), "name", array()) . " ") . $this->getAttribute($this->getAttribute($context["subtask"], "assigned", array()), "surname", array())) . " (") . $this->getAttribute($this->getAttribute($context["subtask"], "assigned", array()), "username", array())) . ")"), "html", null, true);
                    echo "
                                        ";
                }
                // line 547
                echo "                                    </td>
                                </tr>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['subtask'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 551
            echo "                            </tbody>
                        </table>
                    </div>
                </div>
            ";
        }
        // line 556
        echo "            <!-- End of Sub-Task Section -->
        </div>
        <!-- End of Task Info ---->

        <!-- Begin of Task Nav Tabs -->
        <div ng-controller=\"DocumentsController\">
            <div ng-controller=\"ChatController\">
                <ul id=\"myTab\" class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"active\" data-placement=\"top\" title=\"Comments\">
                        <a id=\"coments-tab\" data-toggle=\"tab\" href=\"#coments\">Comments</a>
                    </li>
                    <li data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logs\" class=\"\">
                        <a data-toggle=\"tab\" id=\"task-logs-tab\" class=\"btn\" href=\"#task-logs\" aria-controls=\"task-logs\" role=\"tab\" aria-expanded=\"true\">
                            Logs
                        </a>
                    </li>
                </ul>
                <!-- End of Task Nav Tabs -->

                <div id=\"tasks-tab-content\" class=\"tab-content\">
                    <div id=\"task-logs\" class=\"tab-pane fade\" style=\"max-height: 500px; min-height: 100px; overflow-y: auto;\" scroll-glue>
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th class=\"col-md-1\">#</th>
                                <th class=\"col-md-2\">User</th>
                                <th class=\"col-md-1\">Type</th>
                                <th class=\"col-md-3\">Value Before</th>
                                <th class=\"col-md-3\">Value After</th>
                                <th class=\"col-md-2\">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 589
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "logs", array()));
        foreach ($context['_seq'] as $context["i"] => $context["log"]) {
            // line 590
            echo "                                <tr>
                                    <td>";
            // line 591
            echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
            echo "</td>
                                    <td>";
            // line 592
            echo twig_escape_filter($this->env, ((((($this->getAttribute($this->getAttribute($context["log"], "user", array()), "name", array()) . " ") . $this->getAttribute($this->getAttribute($context["log"], "user", array()), "surname", array())) . " (") . $this->getAttribute($this->getAttribute($context["log"], "user", array()), "username", array())) . ")"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 593
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "type", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 594
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "valueBefore", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 595
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "valueAfter", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 597
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "date", array()), "Y-m-d"), "html", null, true);
            echo "<br>
                                        ";
            // line 598
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "date", array()), "H:i"), "html", null, true);
            echo "
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 602
        echo "                            </tbody>
                        </table>
                    </div>

                    <div id=\"coments\"  class=\"tab-pane fade in active\" ng-init=\"getPosts(0, 100)\">
                        <div ng-style=\"{'height': (posts.length > 0) ? '500px' : '100px'}\" style=\"overflow-y: auto;height: 500px; \" id=\"posts-panel\" >
                            <div class=\"coments\" ng-repeat=\"post in posts\"  >
                                <p style=\"margin-top: 25px;\" ng-init=\"avatar = generateAsset(urlAsset, 'documents/' + post.user.avatar)\">
                                    <a ng-init=\"Href = userHref(post.user.id)\" ng-href=\"[[Href]]\" style=\"display: inline-block; text-decoration: none;\">
                                        <img style=\"width: 50px;height: 50px; object-fit: cover;\" ng-src=\"[[avatar]]\" alt=\"User Avatar\" class=\"img-circle\"/>
                                    </a>
                                    <span style=\"vertical-align: top;font-weight: 300;  color: #A9A9A9;\" ng-if=\"post.edited == null\">
                                        <strong style=\"vertical-align: top; color: #337ab7;\">
                                            [[post.user.name]]
                                        </strong>
                                        added a comment - [[ post.posted ]]
                                    </span>
                                    <span style=\"vertical-align: top;font-weight: 300;  color: #A9A9A9;\" ng-if=\"post.edited != null\">
                                        <strong style=\"vertical-align: top; color: #337ab7;\">
                                            [[post.user.name]]
                                        </strong>
                                        edited a comment - [[ post.edited ]]
                                    </span>
                                </p>
                                <p style=\"margin: -10px 0 0 83px; white-space: pre-wrap;\" ng-bind-html=\"post.message\"></p>
                                <hr>
                            </div>
                        </div>

                        <div class=\"list-group-item\">
                            <form class=\"input-group input-group-lg\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-default\" type=\"button\" style=\"height: 65px;\" data-placement=\"top\" id=\"add_dialog_btn\"  data-toggle=\"modal\" data-target=\"#add_dialog\">
                                        <i class=\"fa fa-file\"></i>
                                    </button>
                                </span>
                                <textarea id=\"textarea-post\" name=\"message\" class=\"form-control\" rows=\"3\" style=\"resize: vertical;font-size: 11px; height: 65px;\"  ng-keyup=\"pressEnter(\$event);\" ng-model=\"message\"></textarea>
                                    <span class=\"input-group-btn\" ng-if=\"editPostButtonVisible == false\">
                                        <button class=\"btn btn-primary\" name=\"subscribe\" type=\"button\" style=\"height: 65px; font-size:15px;\" ng-click=\"SendPost(message)\">
                                            <span>Post</span>
                                        </button>
                                    </span>
                                    <span class=\"input-group-btn\" ng-if=\"editPostButtonVisible == true\">
                                        <button  class=\"btn btn-primary\" name=\"subscribe\" type=\"button\" style=\"height: 65px; font-size:15px;\" ng-click=\"EditPost(message)\">
                                            <span>Edit</span>
                                        </button>
                                    </span>
                            </form>
                            <div id=\"slide-down-menu-screenshots\" cg-busy=\"documentPromise\" style=\"display: none;\">
                                <div id=\"div-screenshot\" style=\"display: none; width: auto;height: auto;\">
                                    <ng-include src=\"";
        // line 652
        echo twig_escape_filter($this->env, (("'" . $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/templates/attachments.html")) . "'"), "html", null, true);
        echo "\"></ng-include>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 657
        $this->env->loadTemplate("@Zectranet/dialogAdd.html.twig")->display($context);
        // line 658
        echo "                </div>
            </div>
        </div>
        <!-- End of Task Nav Tabs ---->
    </div>
";
    }

    // line 665
    public function block_javascripts($context, array $blocks = array())
    {
        // line 666
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var getDocuments_;
        JSON_URLS.documentsGet = \"";
        // line 669
        echo $this->env->getExtension('routing')->getPath("zectranet_document_get");
        echo "\";
        JSON_URLS.addPost = \"";
        // line 670
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_task_add_post", array("task_id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()))), "html", null, true);
        echo "\";
        JSON_URLS.getPosts = \"";
        // line 671
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_task_get_post", array("task_id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()))), "html", null, true);
        echo "\";
        JSON_URLS.InsertScreenshotsInPHP = \"";
        // line 672
        echo $this->env->getExtension('routing')->getPath("zectranet_InsertScreenshotsInPHP");
        echo "\";
        JSON_URLS.userPage = \"";
        // line 673
        echo $this->env->getExtension('routing')->getPath("zectranet_user_page", array("user_id" => 0));
        echo "\";
        TEMPPARAMS.TASK_ID = ";
        // line 674
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()), "html", null, true);
        echo ";
        JSON_URLS.editPost = \"";
        // line 675
        echo $this->env->getExtension('routing')->getPath("zectranet_task_post_edit", array("post_id" => 0));
        echo "\";
    </script>
    <script src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/taskController.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/chatController.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/documentsController.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 680
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/upload/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 681
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/upload/jquery.ui.widget.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/upload/jquery.iframe-transport.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 683
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/upload/jquery.fileupload.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/upload/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>


";
    }

    public function getTemplateName()
    {
        return "@Zectranet/task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1195 => 684,  1191 => 683,  1187 => 682,  1183 => 681,  1179 => 680,  1175 => 679,  1171 => 678,  1167 => 677,  1162 => 675,  1158 => 674,  1154 => 673,  1150 => 672,  1146 => 671,  1142 => 670,  1138 => 669,  1131 => 666,  1128 => 665,  1119 => 658,  1117 => 657,  1109 => 652,  1057 => 602,  1047 => 598,  1043 => 597,  1038 => 595,  1034 => 594,  1030 => 593,  1026 => 592,  1022 => 591,  1019 => 590,  1015 => 589,  980 => 556,  973 => 551,  964 => 547,  958 => 545,  954 => 543,  952 => 542,  947 => 539,  939 => 537,  937 => 536,  930 => 535,  928 => 534,  921 => 533,  919 => 532,  912 => 531,  910 => 530,  901 => 526,  894 => 522,  890 => 520,  886 => 519,  877 => 512,  875 => 511,  853 => 492,  848 => 490,  817 => 461,  809 => 455,  798 => 453,  794 => 452,  782 => 442,  779 => 441,  777 => 440,  769 => 434,  763 => 430,  757 => 427,  752 => 426,  750 => 425,  732 => 409,  721 => 403,  715 => 402,  709 => 401,  703 => 400,  697 => 399,  691 => 398,  686 => 395,  678 => 390,  674 => 388,  672 => 387,  659 => 376,  652 => 371,  637 => 369,  633 => 368,  628 => 365,  620 => 360,  616 => 358,  614 => 357,  598 => 343,  589 => 340,  586 => 339,  582 => 338,  580 => 337,  573 => 336,  569 => 335,  510 => 279,  505 => 278,  499 => 277,  493 => 274,  488 => 273,  485 => 272,  481 => 271,  478 => 270,  475 => 269,  468 => 268,  465 => 267,  459 => 266,  457 => 265,  436 => 247,  432 => 246,  404 => 220,  398 => 216,  392 => 213,  387 => 212,  385 => 211,  371 => 199,  369 => 198,  328 => 159,  324 => 157,  321 => 156,  312 => 153,  309 => 152,  305 => 151,  303 => 150,  298 => 149,  293 => 148,  289 => 146,  287 => 145,  276 => 143,  270 => 139,  268 => 138,  252 => 124,  243 => 121,  240 => 120,  236 => 119,  234 => 118,  227 => 117,  223 => 116,  205 => 100,  201 => 98,  192 => 95,  189 => 94,  185 => 93,  183 => 92,  176 => 91,  172 => 90,  168 => 88,  161 => 84,  158 => 83,  156 => 82,  128 => 57,  100 => 32,  93 => 28,  88 => 27,  86 => 26,  78 => 23,  69 => 16,  66 => 15,  60 => 13,  56 => 1,  54 => 12,  46 => 8,  41 => 7,  39 => 6,  37 => 5,  35 => 3,  11 => 1,);
    }
}
