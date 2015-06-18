<?php

/* @Zectranet/project.html.twig */
class __TwigTemplate_b07429efd6602fe71cca55f7eaf6d2a6d5acb5cf410d5eff8b816fe71670dc94 extends Twig_Template
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
            'modals' => array($this, 'block_modals'),
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
        echo "    <div ng-controller=\"ProjectController\" ng-init=\"getEpicStories(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()), "html", null, true);
        echo ")\">
        <div class=\"row\">
            <ol class=\"breadcrumb\" style=\"margin: 0 -30px; border-radius: 0 !important; padding: 12px 50px; background-color: #fbfbfb; \">
                <li>
                    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_office", array("office_id" => $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "office", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "office", array()), "name", array()), "html", null, true);
        echo "</a>
                </li>
                <li class=\"active\">
                    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "name", array()), "html", null, true);
        echo "
                </li>
            </ol>
        </div>

        <div class=\"page-header\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <span style=\"font-size: 30px; font-family: 'PT Sans Narrow', sans-serif; font-weight: bold;\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "name", array()), "html", null, true);
        echo "</span>
                </div>
                <div class=\"col-md-6\">
                    <!-- Begin of Project controll buttons -->
                    <div class=\"pull-right\">
                        ";
        // line 26
        if ((($this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "owner", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 27
            echo "                            <div class=\"pull-right\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete This Project\">
                                <a style=\"cursor: pointer; text-decoration: none;\" data-toggle=\"modal\" data-target=\"#delete_private_project\">
                                    <i class=\"fa text-danger fa-fw fa-trash  fa-2x\"></i>
                                </a>
                            </div>

                            <div class=\"pull-right\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Project Settings\">
                                <a style=\"cursor: pointer; text-decoration: none;\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_settings_project", array("project_id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa text-primary fa-fw fa-gear fa-2x\"></i>
                                </a>
                            </div>
                        ";
        }
        // line 39
        echo "                            ";
        // line 44
        echo "
                        ";
        // line 45
        $context["enableCS"] = false;
        // line 46
        echo "
                        ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "projectPermissions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 48
            echo "                            ";
            if ((($this->getAttribute($context["permission"], "userid", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())) && $this->getAttribute($context["permission"], "enableCreateSprint", array()))) {
                // line 49
                echo "                                ";
                $context["enableCS"] = true;
                // line 50
                echo "
                            ";
            }
            // line 52
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
                        ";
        // line 54
        if (((($this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "owner", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["enableCS"]) ? $context["enableCS"] : null) == true))) {
            // line 55
            echo "                            <div class=\"pull-right\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Project Sprints\">
                                <a style=\"cursor: pointer; text-decoration: none;\" data-toggle=\"modal\" data-target=\"#project_sprints\">
                                    <i class=\"fa text-warning fa-fw fa-repeat  fa-2x\"></i>
                                </a>
                            </div>
                        ";
        }
        // line 61
        echo "
                    </div>
                    <!-- End of Project controll buttons -->
                </div>
            </div>
        </div>

        ";
        // line 68
        $this->env->loadTemplate("@Zectranet/projectVersionsModal.html.twig")->display($context);
        // line 69
        echo "
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"row\">
                    <!-- BEGIN OF PROJECT USERS PANEL -->
                    <div class=\"col-xs-12\">
                        <ul class=\"list-group\" style=\"box-shadow: 2px 3px 6px 0 darkkhaki; height: 300px; overflow-y: auto;\">
                            <li class=\"list-group-item active\"  style=\"background:#ddedf4; color:#606060;\">
                                <b>Project Users</b>
                            </li>
                            ";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "users", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 80
            echo "                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-2\">
                                            <img class=\"img-responsive img-circle\" src=\"";
            // line 83
            echo twig_escape_filter($this->env, (($this->env->getExtension('assets')->getAssetUrl("") . "documents/") . $this->getAttribute($context["user"], "avatar", array())), "html", null, true);
            echo "\" alt=\"avatar\" />
                                        </div>
                                        <div class=\"col-xs-10\">
                                            <p>
                                                <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_user_page", array("user_id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
                                                    ";
            // line 88
            echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "name", array()) . " ") . $this->getAttribute($context["user"], "surname", array())), "html", null, true);
            echo "
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                        </ul>
                    </div>

                    <!-- END OF PROJECT USERS PANEL -->

                    <div class=\"col-xs-12\">
                        <div class=\"panel panel-default\" style=\"box-shadow: 2px 3px 6px 0 darkkhaki;\">
                            <div class=\"panel-body\" style=\"background:#ddedf4; color:#606060;\">
                                <strong>Navigation</strong>
                                ";
        // line 104
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "owner", array()), "id", array()))) {
            // line 105
            echo "                                    <div style=\"float: right;\">
                                        <a style=\"color:#606060 !important;\" class=\"addnew-btn-hover\" data-toggle=\"modal\" data-target=\"#add_epic_story\" href=\"#\">
                                            <i class=\"fa fa-plus-circle\"></i> New Epic Story
                                        </a>
                                    </div>
                                ";
        }
        // line 111
        echo "                            </div>
                            <div cg-busy=\"promiseProject\">
                                <div style=\"max-height: 220px; overflow-y: auto; min-height: 220px;\">
                                    <a class=\"list-group-item\" style=\"cursor: pointer;\"
                                       ng-click=\"changeCurrentPage(";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()), "html", null, true);
        echo "); removeHighlightFromEpicStories();\">
                                        <i class=\"fa fa-briefcase\"></i>
                                        ";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "name", array()), "html", null, true);
        echo "
                                    </a>
                                    <a class=\"list-group-item\" ng-repeat=\"story in epicStories\" style=\"cursor: pointer;\"
                                       ng-init=\"story.selected = false;\" ng-class=\"{'list-group-item-success': story.selected }\"
                                       ng-click=\"changeCurrentPage(story.id); highlightCurrentEpicStory(story.id);\">
                                        <i class=\"fa fa-briefcase\"></i>
                                        [[ story.name ]]
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-md-12\">
                        <div ng-controller=\"DocumentsController\">
                            <!-- BEGIN OF CHAT PANEL -->
                            <div ng-controller=\"ChatController\" style=\"margin-bottom: 20px;\">
                                <div class=\"list-group-item\" style=\"background:#ddedf4; color:#606060;\">
                                    <i class=\"fa fa-comments fa-fw\"></i>
                                    <strong> Project Chat</strong>
                                </div>
                                <div id=\"posts-panel\" class=\"list-group-item panel-body\" cg-busy=\"promise\" style=\"overflow-x: hidden; min-height: 450px;\">
                                    <div ng-if=\"(posts == null) || (posts.length == 0)\" class=\"center-block vertical-center\">
                                        <h3 class=\"text-info text-center\">Post will be displayed here</h3>
                                    </div>

                                    <ng-include src=\"";
        // line 146
        echo twig_escape_filter($this->env, (("'" . $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/templates/chat.html")) . "'"), "html", null, true);
        echo "\"></ng-include>

                                </div>
                                <div class=\"list-group-item\">
                                    <form class=\"input-group input-group-lg\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-default\" type=\"button\" style=\"height: 65px;\" data-placement=\"top\" id=\"add_dialog_btn\" data-toggle=\"modal\" data-target=\"#add_dialog\">
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
                                    <div id=\"slide-down-menu-screenshots\" style=\"display: none;\" cg-busy=\"documentPromise\">
                                        <div id=\"div-screenshot\" style=\"display: none; width: auto;height: auto;\">
                                            <ng-include src=\"";
        // line 170
        echo twig_escape_filter($this->env, (("'" . $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/templates/attachments.html")) . "'"), "html", null, true);
        echo "\"></ng-include>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF CHAT PANEL -->
                            ";
        // line 176
        $this->env->loadTemplate("@Zectranet/dialogAdd.html.twig")->display($context);
        // line 177
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BEGIN OF EPIC STORY ADD MODAL -->
        ";
        // line 184
        $this->env->loadTemplate("@Zectranet/projectAddEpicStory.html.twig")->display($context);
        // line 185
        echo "        <!-- END OF EPIC STORY ADD MODAL -->

        <!-- Begin of Tasks -->
        <div class=\"row\" ng-controller=\"TaskController\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-default list-group\">
                    <div class=\"list-group-item\" style=\"background:#ddedf4; color:#606060;\">
                        <i class=\"fa fa-tasks\"></i>
                        <strong>
                            Tasks
                            <span class=\"btn btn-default pull-right\" ng-click=\"getTasks();\" style=\"margin: 0;\">
                                <i class=\"fa fa-repeat\"></i>
                            </span>
                            <span class=\"clearfix\"></span>
                        </strong>
                    </div>

                    <div cg-busy=\"promise\" class=\"panel-body\">
                        <!-- Begin of Task Nav Tabs -->
                        <div class=\"row\">
                            <ul id=\"task-view-tabs\" class=\"nav nav-tabs\" role=\"tablist\">
                                <li data-toggle=\"tooltip\" data-placement=\"top\" title=\"Table view\" role=\"presentation\" class=\"active\">
                                    <a data-toggle=\"tab\" id=\"task-view-table\" class=\"btn\" href=\"#table-view\" aria-controls=\"table-view\" role=\"tab\" aria-expanded=\"true\">
                                        <i class=\"fa fa-table fa-2x\"></i>
                                    </a>
                                </li>
                                ";
        // line 218
        echo "                                <li data-toggle=\"tooltip\" data-placement=\"top\" title=\"Agile view\" role=\"presentation\">
                                    <a data-toggle=\"tab\" id=\"task-view-agile\"  class=\"btn\" href=\"#agile-view\" aria-controls=\"agile-view\" role=\"tab\" aria-expanded=\"false\">
                                        <i class=\"fa fa-th fa-2x\"></i>
                                    </a>
                                </li>
                                <li data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add new task\" role=\"presentation\">
                                    <a id=\"add_new_task_btn\" style=\"cursor: pointer\" data-toggle=\"modal\" data-target=\"#add_new_task\">
                                        <i class=\"fa fa-plus fa-2x\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- End of Task Nav Tabs -->

                        <div id=\"tasks-tab-content\" class=\"tab-content\">

                            <!-- Begin of Task Table View -->
                            <div id=\"table-view\" style=\"min-height: 300px;\" class=\"tab-pane fade in active\" aria-labelledby=\"task-view-table\" role=\"tabpanel\">
                                <ng-include src=\"";
        // line 237
        echo twig_escape_filter($this->env, (("'" . $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/templates/task-table.html")) . "'"), "html", null, true);
        echo "\"></ng-include>
                            </div>
                            <!-- End of Task Table View -->

                            <!-- Begin of Task Agile View -->
                            <div id=\"agile-view\" class=\"tab-pane fade\" aria-labelledby=\"task-view-agile\" role=\"tabpanel\">
                                <ng-include src=\"";
        // line 243
        echo twig_escape_filter($this->env, (("'" . $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/templates/task-agile.html")) . "'"), "html", null, true);
        echo "\"></ng-include>
                            </div>
                            <!-- End of Task Agile View -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Begin of Task operations modals -->
            ";
        // line 252
        $this->env->loadTemplate("@Zectranet/taskAdd.html.twig")->display($context);
        // line 253
        echo "
            ";
        // line 254
        $this->env->loadTemplate("@Zectranet/taskAddSub.html.twig")->display($context);
        // line 255
        echo "
            ";
        // line 256
        $this->env->loadTemplate("@Zectranet/taskDelete.html.twig")->display($context);
        // line 257
        echo "
            ";
        // line 258
        $this->env->loadTemplate("@Zectranet/projectAddTaskToSprint.html.twig")->display($context);
        // line 259
        echo "            <!-- End of Task operations modals -->

        </div>
        <!-- End of Tasks -->

        <div ng-init=\"changeCurrentPage('";
        // line 264
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()), "html", null, true);
        echo "')\"></div>
    </div>

    ";
        // line 267
        $this->env->loadTemplate("@Zectranet/projectSprints.html.twig")->display($context);
        // line 268
        echo "    ";
        if ((($this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "owner", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 269
            echo "        <!-- Begin of Delete Private Project Modal -->
        ";
            // line 270
            $this->env->loadTemplate("@Zectranet/projectDelete.html.twig")->display($context);
            // line 271
            echo "        <!-- End of Delete Private Project Modal -->
    ";
        }
        // line 273
        echo "
";
    }

    // line 276
    public function block_modals($context, array $blocks = array())
    {
        // line 277
        echo "    ";
        $this->displayParentBlock("modals", $context, $blocks);
        echo "
";
    }

    // line 280
    public function block_javascripts($context, array $blocks = array())
    {
        // line 281
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>

        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        });

        \$('#task-view-tabs a').click(function (e) {
            if (\$(this).id != \$('a#add_new_task_btn').id) {
                \$(this).tab('show');
            }
            e.preventDefault();
        });

        JSON_URLS.addPost = \"";
        // line 296
        echo $this->env->getExtension('routing')->getPath("zectranet_project_add_post", array("project_id" => 0));
        echo "\";
        JSON_URLS.getPosts = \"";
        // line 297
        echo $this->env->getExtension('routing')->getPath("zectranet_project_get_post", array("project_id" => 0));
        echo "\";
        JSON_URLS.editPost = \"";
        // line 298
        echo $this->env->getExtension('routing')->getPath("zectranet_project_post_edit", array("post_id" => 0));
        echo "\";

        JSON_URLS.getEpicStories = \"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_project_get_epic_stories", array("project_id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()))), "html", null, true);
        echo "\";
        JSON_URLS.addEpicStory = \"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_project_add_epic_story", array("project_id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()))), "html", null, true);
        echo "\";

        JSON_URLS.getProjectVersions = \"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_get_project_versions", array("project_id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()))), "html", null, true);
        echo "\";
        JSON_URLS.addNewProjectVersion = \"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_add_project_version", array("project_id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()))), "html", null, true);
        echo "\";
    </script>

    <script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/notify.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/chatController.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/projectController.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/documentsController.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/upload/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/upload/jquery.ui.widget.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/upload/jquery.iframe-transport.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/upload/jquery.fileupload.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/upload/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script>
        var getDocuments_;
        JSON_URLS.documentsGet = \"";
        // line 321
        echo $this->env->getExtension('routing')->getPath("zectranet_document_get");
        echo "\";
        JSON_URLS.deleteFile  = \"";
        // line 322
        echo $this->env->getExtension('routing')->getPath("zectranet_document_delete", array("fileid" => 0));
        echo "\";
        JSON_URLS.renameFile  = \"";
        // line 323
        echo $this->env->getExtension('routing')->getPath("zectranet_document_rename", array("fileid" => 0));
        echo "\";
        JSON_URLS.InsertScreenshotsInPHP = \"";
        // line 324
        echo $this->env->getExtension('routing')->getPath("zectranet_InsertScreenshotsInPHP");
        echo "\";
        TEMPPARAMS.NOW = '";
        // line 325
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "';
        JSON_URLS.saveTaskInfo = \"";
        // line 326
        echo $this->env->getExtension('routing')->getPath("zectranet_task_edit_info", array("task_id" => 0));
        echo "\";
    </script>
";
    }

    public function getTemplateName()
    {
        return "@Zectranet/project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  558 => 326,  554 => 325,  550 => 324,  546 => 323,  542 => 322,  538 => 321,  531 => 317,  527 => 316,  523 => 315,  519 => 314,  515 => 313,  510 => 311,  506 => 310,  502 => 309,  497 => 307,  491 => 304,  487 => 303,  482 => 301,  478 => 300,  473 => 298,  469 => 297,  465 => 296,  446 => 281,  443 => 280,  436 => 277,  433 => 276,  428 => 273,  424 => 271,  422 => 270,  419 => 269,  416 => 268,  414 => 267,  408 => 264,  401 => 259,  399 => 258,  396 => 257,  394 => 256,  391 => 255,  389 => 254,  386 => 253,  384 => 252,  372 => 243,  363 => 237,  342 => 218,  314 => 185,  312 => 184,  303 => 177,  301 => 176,  292 => 170,  265 => 146,  233 => 117,  228 => 115,  222 => 111,  214 => 105,  212 => 104,  201 => 95,  188 => 88,  184 => 87,  177 => 83,  172 => 80,  168 => 79,  156 => 69,  154 => 68,  145 => 61,  137 => 55,  135 => 54,  132 => 53,  126 => 52,  122 => 50,  119 => 49,  116 => 48,  112 => 47,  109 => 46,  107 => 45,  104 => 44,  102 => 39,  94 => 34,  85 => 27,  83 => 26,  75 => 21,  64 => 13,  56 => 10,  48 => 6,  45 => 5,  39 => 3,  11 => 1,);
    }
}
