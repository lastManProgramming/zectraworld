<?php

/* @Zectranet/homeOffice.html.twig */
class __TwigTemplate_9ebb3fd67d36c488590594771e1344e947237912ff36f5cdce234f0ba188a4f1 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["office"]) ? $context["office"] : null), "name", array()), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div ng-controller=\"HomeOfficeController\">
    <div class=\"row\">
        <ol class=\"breadcrumb\" style=\"margin: 0 -30px; border-radius:0 !important; padding: 12px 50px; background-color: #fbfbfb; \">
            <li class=\"active\">
              Home Office
            </li>
        </ol>
    </div>

    <div class=\"page-header\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <span style=\"font-size: 30px; font-family: 'PT Sans Narrow', sans-serif; font-weight: bold;\">
                    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_get_office_profile", array("office_id" => $this->getAttribute((isset($context["office"]) ? $context["office"] : null), "id", array()))), "html", null, true);
        echo "\" style=\"text-decoration: none;\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["office"]) ? $context["office"] : null), "name", array()), "html", null, true);
        echo "</a>
                </span>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <ul class=\"list-group\" style=\"box-shadow: 2px 3px 6px 0 darkkhaki;\">
                <li class=\"list-group-item active\" style=\"background:#ddedf4; color:#606060;\">
                    <b>Create Project</b>
                </li>
                <li class=\"list-group-item\" ng-cloak>
                    <form name=\"createProjectForm\" action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_add_project", array("office_id" => $this->getAttribute((isset($context["office"]) ? $context["office"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">

                        <div class=\"row\">
                            <label class=\"col-xs-12\">
                                Project name:
                            </label>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-edit\"></i>
                                    </span>
                                    <input class=\"form-control\" name=\"name\" pattern=\"[A-Za-z0-9 _-]{1,}\" ng-maxlength=\"100\" ng-minlength=\"1\" ng-model=\"projectName\" type=\"text\" required />
                                    <span class=\"input-group-addon\" style=\"color: red;\">
                                        <span ng-if=\"createProjectForm.name.\$valid\">
                                            <i style=\"color: lightseagreen;\" class=\"fa fa-check\"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class=\"col-xs-12\" ng-cloak ng-messages=\"createProjectForm.name.\$error\" style=\"color: red; margin-bottom: 10px;\">
                                <span ng-message=\"pattern\">Alloved only A-Z, a-z, 0-9, underscore, hyphens and space characters</span>
                                <span ng-message=\"maxlength\">Max length of this field is 100 characters</span>
                            </div>
                        </div>

                        <p>
                            <label style=\"width: 100%;\">
                                Project template:
                                <select class=\"form-control\" name=\"type\">
                                    <option value=\"1\" selected>QnA Forum</option>
                                    <option value=\"2\">Header forum</option>
                                    <option value=\"3\">Trading office(not working yet)</option>
                                    <option value=\"4\">Development</option>
                                </select>
                            </label>
                        </p>
                        <p align=\"right\" ng-if=\"createProjectForm.\$valid\">
                            <button class=\"btn btn-default\" >Create</button>
                        </p>
                    </form>
                </li>
            </ul>
        </div>

        <div class=\"col-md-4 col-md-offset-4\">
            <ul class=\"list-group\"  style=\"box-shadow: 2px 3px 6px 0 darkkhaki;\">
                <li class=\"list-group-item active\" style=\"background:#ddedf4; color:#606060;\">
                    <b>Other</b>
                </li>
                <li class=\"list-group-item\">
                    <a class=\"btn btn-default\" href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("zectranet_public_market_all_contacts");
        echo "\">Market Place</a>
                </li>
                <li class=\"list-group-item\">
                    <a class=\"btn btn-default\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_office_archive", array("office_id" => $this->getAttribute((isset($context["office"]) ? $context["office"] : null), "id", array()))), "html", null, true);
        echo "\">
                        Home Office Archive
                    </a>
                </li>
            </ul>
        </div>
    </div>

    ";
        // line 96
        if (array_key_exists("conversation_id", $context)) {
            // line 97
            echo "        <div ng-init=\"conv_id = ";
            echo twig_escape_filter($this->env, (isset($context["conversation_id"]) ? $context["conversation_id"] : null), "html", null, true);
            echo "\"></div>
    ";
        }
        // line 99
        echo "
    <div class=\"row\" ng-init=\"getContactList(conv_id);\">
        <div class=\"col-xs-4\">
            <ul class=\"list-group\" style=\"box-shadow: 2px 3px 6px 0 darkkhaki; height: 410px; overflow-y: auto;\" cg-busy=\"contactListPromise\">
                <li class=\"list-group-item active\"  style=\"background:#ddedf4; color:#606060;\">
                    <b>Contact list</b>
                </li>
                <li class=\"list-group-item\" ng-repeat=\"contact in contacts\" ng-class=\"{'contact-list-active':contact.checked}\" ng-click=\"getConversation(contact.id);\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <img class=\"img-responsive img-circle\" ng-src=\"[[asset + 'documents/' + contact.avatar]]\" alt=\"avatar\"/>
                        </div>
                        <div class=\"col-xs-9\">
                            <p>
                                [[ contact.username ]]
                                <label ng-if=\"contact.notificationsLength != 0\"
                                        class=\"label label-default pull-right\">
                                    +[[contact.notificationsLength]]
                                </label>
                            </p>
                        </div>
                    </div>
                </li>

            </ul>
        </div>

        <div class=\"col-xs-8\">
            <div>
                <div class=\"list-group\" style=\"box-shadow: 2px 3px 6px 0 darkkhaki;\">
                    <div class=\"list-group-item active\" style=\"background:#ddedf4; color:#606060;\">
                        <i class=\"fa fa-comments fa-fw\"></i>
                        <strong>Chat with: </strong>
                    </div>
                    <div id=\"posts-panel\" class=\"list-group-item panel-body\" cg-busy=\"conversationChatPromise\">
                        <h4 ng-if=\"(conversation) && (conversation.messages.length == 0)\" class=\"text-info text-center vertical-center\">
                            Posts will be displayed here
                        </h4>
                        <ul id=\"conversation-chat\" class=\"chat\" scroll-glue style=\"height: 250px; overflow-x: hidden; overflow-y: scroll;\">
                            <li ng-repeat=\"mesage in conversation.messages\" style=\"border-bottom: none;\" class=\"clearfix\" ng-class=\"{'right': ";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
        echo " == post.user.id, 'left': ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
        echo " != post.user.id }\">
                                <span class=\"chat-img\" ng-class=\"{ 'pull-right': ";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
        echo " == mesage.user.id, 'pull-left': ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
        echo " != mesage.user.id }\" ng-init=\"avatar = asset + 'documents/' + mesage.user.avatar;\">
                                    <img ng-src=\"[[ avatar ]]\" alt=\"Avatar\" class=\"img-circle img-responsive\" style=\"width: 50px; height: 50px;\"/>
                                </span>
                                <div class=\"chat-body clearfix\">
                                    <div class=\"header\" style=\"height: 28px;\">
                                        <strong class=\"primary-font\"
                                                ng-class=\"{'pull-right': ";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
        echo " == mesage.user.id, 'pull-left': ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
        echo " != mesage.user.id }\">
                                            [[ mesage.user.name + ' ' + mesage.user.surname + ' (' + mesage.user.username + ')' ]]
                                        </strong>

                                        <small class=\"text-muted\" ng-class=\"{'pull-left': ";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
        echo " == mesage.user.id, 'pull-right': ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
        echo " != mesage.user.id }\">
                                            <i class=\"fa fa-clock-o fa-fw\"></i>
                                            <span ng-if=\"mesage.edited == null\" style=\"color: #000000; font-style: italic\">[[mesage.posted]]</span>
                                            <span ng-if=\"mesage.edited != null\" style=\"color: #000000; font-style: italic\">[[mesage.edited]] <i  class=\"fa fa-edit\"></i></span>
                                        </small>
                                    </div>
                                    <pre style=\"white-space: pre-line;\">
                                        <span ng-bind-html=\"mesage.message\"></span>
                                    </pre>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class=\"list-group-item\">
                        <form class=\"input-group input-group-lg\">
                            <textarea id=\"textarea-post\"  name=\"message\" class=\"form-control\" rows=\"3\" ng-keyup=\"pressEnter(\$event, message, conversation.id)\" style=\"resize: vertical; font-size: 11px; height: 65px;\" ng-model=\"message\"></textarea>

                            <span class=\"input-group-btn\">
                                <button  ng-if=\"editPostButtonVisible == false\" class=\"btn btn-primary\" name=\"subscribe\" type=\"button\" style=\"height: 65px; font-size:15px;\" ng-click=\"SendConversationMessage(message, conversation.id)\">
                                    <span>Post</span>
                                </button>
                                <button  ng-if=\"editPostButtonVisible == true\" class=\"btn btn-primary\" name=\"subscribe\" type=\"button\" style=\"height: 65px; font-size:15px;\" ng-click=\"SendConversationMessage(message, editedPost.id, true)\">
                                    <span>Edit</span>
                                </button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 183
    public function block_modals($context, array $blocks = array())
    {
        // line 184
        echo "    ";
        $this->displayParentBlock("modals", $context, $blocks);
        echo "
";
    }

    // line 187
    public function block_javascripts($context, array $blocks = array())
    {
        // line 188
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var getDocuments_;
        var USER_ID = ";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
        echo "
        JSON_URLS.documentsGet = \"";
        // line 192
        echo $this->env->getExtension('routing')->getPath("zectranet_document_get");
        echo "\";
        JSON_URLS.addPost = \"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_office_add_post", array("office_id" => $this->getAttribute((isset($context["office"]) ? $context["office"] : null), "id", array()))), "html", null, true);
        echo "\";
        JSON_URLS.getPosts = \"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_office_get_post", array("office_id" => $this->getAttribute((isset($context["office"]) ? $context["office"] : null), "id", array()))), "html", null, true);
        echo "\";
        JSON_URLS.InsertScreenshotsInPHP = \"";
        // line 195
        echo $this->env->getExtension('routing')->getPath("zectranet_InsertScreenshotsInPHP");
        echo "\";
        JSON_URLS.getContactList = \"";
        // line 196
        echo $this->env->getExtension('routing')->getPath("zectranet_get_contact_list");
        echo "\";
        JSON_URLS.getConversation = \"";
        // line 197
        echo $this->env->getExtension('routing')->getPath("zectranet_get_conversation", array("contact_id" => 0));
        echo "\";
        JSON_URLS.urlSendConversationMessage = \"";
        // line 198
        echo $this->env->getExtension('routing')->getPath("zectranet_send_conversation_message", array("conversation_id" => 0));
        echo "\";
        JSON_URLS.urlEditPost = \"";
        // line 199
        echo $this->env->getExtension('routing')->getPath("zectranet_edit_conversation_message", array("message_id" => 0));
        echo "\";
    </script>
";
    }

    public function getTemplateName()
    {
        return "@Zectranet/homeOffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 199,  316 => 198,  312 => 197,  308 => 196,  304 => 195,  300 => 194,  296 => 193,  292 => 192,  288 => 191,  281 => 188,  278 => 187,  271 => 184,  268 => 183,  229 => 149,  220 => 145,  209 => 139,  203 => 138,  162 => 99,  156 => 97,  154 => 96,  143 => 88,  137 => 85,  81 => 32,  63 => 19,  48 => 6,  45 => 5,  39 => 3,  11 => 1,);
    }
}
