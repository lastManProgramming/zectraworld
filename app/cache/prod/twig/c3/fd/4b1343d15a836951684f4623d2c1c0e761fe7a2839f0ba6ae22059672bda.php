<?php

/* @Zectranet/layout.html.twig */
class __TwigTemplate_c3fd4b1343d15a836951684f4623d2c1c0e761fe7a2839f0ba6ae22059672bda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'AngularJS' => array($this, 'block_AngularJS'),
            'styles' => array($this, 'block_styles'),
            'head' => array($this, 'block_head'),
            'headNavigation' => array($this, 'block_headNavigation'),
            'leftSidebar' => array($this, 'block_leftSidebar'),
            'page' => array($this, 'block_page'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" ng-app=\"Zectranet\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">

\t<title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 12
        $this->displayBlock('AngularJS', $context, $blocks);
        // line 17
        echo "
\t";
        // line 18
        $this->displayBlock('styles', $context, $blocks);
        // line 36
        echo "
\t";
        // line 37
        $this->displayBlock('head', $context, $blocks);
        // line 40
        echo "</head>

<body ng-cloak ng-controller=\"NavigationController\" ng-init=\"getNotification()\">

<div id=\"wrapper\" class=\"active\">
\t<nav class=\"navbar navbar-default navbar-fixed-top\" style=\"margin-bottom: 0\">
\t\t";
        // line 46
        $this->displayBlock('headNavigation', $context, $blocks);
        // line 679
        echo "\t</nav>

    ";
        // line 681
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 682
            echo "        ";
            $this->displayBlock('leftSidebar', $context, $blocks);
            // line 685
            echo "    ";
        }
        // line 686
        echo "
\t";
        // line 687
        $this->displayBlock('page', $context, $blocks);
        // line 737
        echo "</div>

";
        // line 748
        echo "

";
        // line 750
        $this->displayBlock('javascripts', $context, $blocks);
        // line 894
        echo "

</body>
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Layout page";
    }

    // line 12
    public function block_AngularJS($context, array $blocks = array())
    {
        // line 13
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/jquery-2.1.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/underscore-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/AngularJS/angular.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
    }

    // line 18
    public function block_styles($context, array $blocks = array())
    {
        // line 19
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/css/mainv_001.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/css/footerst.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/css/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/css/bootstrap_ench_dropdowns.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/css/style_upload.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/css/clock.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/css/search.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/css/angular-busy.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/css/lightbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/css/leftSidebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/css/Semantic/popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    ";
    }

    // line 37
    public function block_head($context, array $blocks = array())
    {
        // line 38
        echo "
\t";
    }

    // line 46
    public function block_headNavigation($context, array $blocks = array())
    {
        // line 47
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 48
            echo "\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_office", array("office_id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "homeOffice", array()), "id", array()))), "html", null, true);
            echo "\">
                        Zectranet <i class=\"fa fa-bookmark\"></i>
                    </a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 60
        echo "



            ";
        // line 64
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 65
            echo "                <div class=\"col-md-3 hidden-xs hidden-sm\" style=\"margin-top: 10px;\">
                    <div id=\"quicksearch-block\" ng-controller=\"SearchController\">

                                <div class=\"input-group custom-search-form dropdown\" >
                                    <input id=\"text-search\" ng-model=\"searchInput\"
                                           class=\"form-control dropdown-toggle\"
                                           placeholder=\"Search...\"
                                           maxlength=\"50\"
                                           ng-change=\"InputChange(searchInput, false);\"
                                           data-toggle=\"dropdown\"
                                           type=\"search\" />

                                <span class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-default\"
                                            ng-class=\"{ 'disabled': searchInput.length == 0 }\"
                                            ng-click=\"searchAction(searchInput)\">
                                        <i class=\"fa fa-search\"></i>
                                    </button>
                                </span>

                                    <div class=\"dropdown-menu\">
                                        <div class=\"list-group\" style=\"margin-bottom: 0;\">
                                            <div ng-if=\"miniSearchResults.total == 0\" class=\"list-group-item\">
                                                <h5 class=\"text-info\" align=\"center\">Search for <i>[[ searchInput ]]</i>...</h5>
                                            </div>
                                            <div ng-if=\"miniSearchResults.total == -1\" class=\"list-group-item\">
                                                <h5 class=\"text-info\" align=\"center\">Didn't found any match</h5>
                                            </div>
                                            <div ng-if=\"miniSearchResults.total > 0\">
                                                <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.homeOffice\">
                                                    <a ng-href=\"[[ item.href ]]\" target=\"_self\">
                                                        [[ item.message ]]
                                                        <span class=\"clearfix\"></span>
                                                        <div class=\"pull-right\">
                                                            <i class=\"text-muted\" style=\"font-size: 10px;\">home office chat</i>
                                                        </div>
                                                        <span class=\"clearfix\"></span>
                                                    </a>
                                                </div>

                                                <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.HFForums.forums\">
                                                    <a ng-href=\"[[ item.href ]]\" target=\"_self\">
                                                        [[ item.name ]]
                                                        <span class=\"clearfix\"></span>
                                                        <div class=\"pull-right\" style=\"font-size: 10px;\">
                                                            <i class=\"text-muted\">Header forums</i>
                                                        </div>
                                                        <span class=\"clearfix\"></span>
                                                    </a>
                                                </div>

                                                <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.HFForums.threads\">
                                                    <a ng-href=\"[[ item.href ]]\" target=\"_self\" style=\"text-decoration: none;\">
                                                        <h4 class=\"text-info\">[[ item.title ]]</h4>
                                                        <p style=\"color: black; font-style: italic; font-size: 11px;\">[[ item.message ]]</p>
                                                        <span class=\"clearfix\"></span>
                                                        <div class=\"pull-right\">
                                                            <i class=\"text-muted\" style=\"font-size: 10px;\">threads</i>
                                                        </div>
                                                        <span class=\"clearfix\"></span>
                                                    </a>
                                                </div>

                                                <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.HFForums.posts\">
                                                    <a ng-href=\"[[ item.href ]]\" target=\"_self\">
                                                        [[ item.message ]]
                                                        <span class=\"clearfix\"></span>
                                                        <div class=\"pull-right\" style=\"font-size: 10px;\">
                                                            <i class=\"text-muted\">header forums posts</i>
                                                        </div>
                                                        <span class=\"clearfix\"></span>
                                                    </a>
                                                </div>

                                                <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.QnAForums.forums\">
                                                    <a ng-href=\"[[ item.href ]]\" target=\"_self\">
                                                        [[ item.name ]]
                                                        <span class=\"clearfix\"></span>
                                                        <div class=\"pull-right\" style=\"font-size: 10px;\">
                                                            <i class=\"text-muted\">QnA Forums</i>
                                                        </div>
                                                        <span class=\"clearfix\"></span>
                                                    </a>
                                                </div>

                                                <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.QnAForums.threads\">
                                                    <a ng-href=\"[[ item.href ]]\" target=\"_self\" style=\"text-decoration: none;\">
                                                        <h4 class=\"text-info\">[[ item.title ]]</h4>
                                                        <p style=\"color: black; font-style: italic; font-size: 11px;\">[[ item.message ]]</p>
                                                        <span class=\"clearfix\"></span>
                                                        <div class=\"pull-right\" style=\"font-size: 10px;\">
                                                            <i class=\"text-muted\">QnA forums threads</i>
                                                        </div>
                                                        <span class=\"clearfix\"></span>
                                                    </a>
                                                </div>

                                                <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.QnAForums.posts\">
                                                    <a ng-href=\"[[ item.href ]]\" target=\"_self\">
                                                        [[ item.message ]]
                                                        <span class=\"clearfix\"></span>
                                                        <div class=\"pull-right\" style=\"font-size: 10px;\">
                                                            <i class=\"text-muted\">QnA forums posts</i>
                                                        </div>
                                                        <span class=\"clearfix\"></span>
                                                    </a>
                                                </div>

                                                <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.Projects.tasks\">
                                                    <a ng-href=\"[[ item.href ]]\" target=\"_self\">
                                                        [[ item.name ]]
                                                        <span class=\"clearfix\"></span>
                                                        <div class=\"pull-right\" style=\"font-size: 10px;\">
                                                            <i class=\"text-muted\">tasks</i>
                                                        </div>
                                                        <span class=\"clearfix\"></span>
                                                    </a>
                                                </div>

                                                <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.Projects.taskPosts\">
                                                    <a ng-href=\"[[ item.href ]]\" target=\"_self\">
                                                        [[ item.message ]]
                                                        <span class=\"clearfix\"></span>
                                                        <div class=\"pull-right\" style=\"font-size: 10px;\">
                                                            <i class=\"text-muted\">task posts</i>
                                                        </div>
                                                        <span class=\"clearfix\"></span>
                                                    </a>
                                                </div>

                                                <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.Projects.posts\">
                                                    <a ng-href=\"[[ item.href ]]\" target=\"_self\">
                                                        [[ item.message ]]
                                                        <span class=\"clearfix\"></span>
                                                        <div class=\"pull-right\" style=\"font-size: 10px;\">
                                                            <i class=\"text-muted\">development posts</i>
                                                        </div>
                                                        <span class=\"clearfix\"></span>
                                                    </a>
                                                </div>

                                                <div class=\"list-group-item\" ng-repeat=\"item in miniSearchResults.Projects.projects\">
                                                    <a ng-href=\"[[ item.href ]]\" target=\"_self\">
                                                        [[ item.name ]]
                                                        <span class=\"clearfix\"></span>
                                                        <div class=\"pull-right\" style=\"font-size: 10px;\">
                                                            <i class=\"text-muted\">projects</i>
                                                        </div>
                                                        <span class=\"clearfix\"></span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                    </div>

                </div><!-- /.col-lg-3 -->
            ";
        }
        // line 226
        echo "


\t\t\t<ul class=\"nav navbar-top-links navbar-right\">

\t\t\t\t";
        // line 231
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 232
            echo "                    <li class=\"dropdown\" ng-cloak>
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <div class=\"fa fa-fw\"><b>O</b></div>
                            <i class=\"fa fa-caret-down\"></i>
                        </a>

                        <ul class=\"dropdown-menu dropdown-tasks noclose list-group\">
                            <li>UNDER CONSTRUCTION</li>
                        </ul>
                    </li>

                    <li class=\"dropdown\" ng-cloak>
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <div class=\"fa fa-fw\"><b>P</b></div>
                            <span ng-if=\"requests.QnARequests.length + requests.hfRequests.length + requests.projectRequests.length > 0\"
                                  style=\"position: absolute; top: 0; right: 14px; font-size: 15px; text-shadow: 0 0 15px #00c6ff;\"
                                    ng-class=\"{ 'visible-element': FirstInit }\" class=\"hidden-element\">
                                [[ requests.QnARequests.length + requests.hfRequests.length + requests.projectRequests.length ]]
                            </span>
                            <i class=\"fa fa-caret-down\"></i>
                        </a>

                        <ul class=\"dropdown-menu dropdown-tasks noclose list-group\">
                            <li ng-if=\"requests.QnARequests.length + requests.hfRequests.length + requests.projectRequests.length == 0\" class=\"list-group-item\">
                                <h5 class=\"text-info\">You haven't any project requests</h5>
                            </li>
                            <li ng-repeat=\"requestQNA in requests.QnARequests | limitTo: 2\" class=\"list-group-item\">
                                <h5 class=\"text-info\">
                                    User \"[[ requestQNA.contact.username ]]\" has invite you into \"[[ requestQNA.QnAForum.name ]]\" project
                                </h5>
                                <div class=\"divider\"></div>
                                <p>
                                    <b>Message:</b>
                                    <span style=\"white-space: normal; text-overflow: ellipsis; overflow: hidden;\">
                                        [[ requestQNA.message ]]
                                    </span>
                                </p>

                                <div class=\"divider\"></div>

                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default btn-success\" ng-click=\"acceptQnAMembershipRequest(requestQNA.id, \$index);\">
                                        Accept
                                    </button>
                                    <button class=\"btn btn-default btn-danger\" ng-click=\"declineQnAMembershipRequest(requestQNA.id, \$index);\">
                                        Decline
                                    </button>
                                    <button class=\"btn btn-default btn-info\" ng-click=\"moreInfoQnAMembershipRequest(requestQNA.id, \$index);\">
                                        More info
                                    </button>
                                </div>
                            </li>
                            <li ng-repeat=\"requesthf in requests.hfRequests | limitTo: 2\" class=\"list-group-item\">
                                <h5 class=\"text-info\">
                                    User \"[[ requesthf.contact.username ]]\" has invite you into \"[[ requesthf.hfForum.name ]]\" project
                                </h5>
                                <div class=\"divider\"></div>
                                <p>
                                    <b>Message:</b>
                                    <span style=\"white-space: normal; text-overflow: ellipsis; overflow: hidden;\">
                                        [[ requesthf.message ]]
                                    </span>
                                </p>

                                <div class=\"divider\"></div>

                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default btn-success\" ng-click=\"acceptHFMembershipRequest(requesthf.id, \$index);\">
                                        Accept
                                    </button>
                                    <button class=\"btn btn-default btn-danger\" ng-click=\"declineHFMembershipRequest(requesthf.id, \$index);\">
                                        Decline
                                    </button>
                                    <button class=\"btn btn-default btn-info\" ng-click=\"moreInfoHFMembershipRequest(requesthf.id, \$index);\">
                                        More info
                                    </button>
                                </div>
                            </li>
                            <li ng-repeat=\"requestProject in requests.projectRequests | limitTo: 2\" class=\"list-group-item\">
                                <h5 class=\"text-info\">
                                    User \"[[ requestProject.contact.username ]]\" has invite you into \"[[ requestProject.hfForum.name ]]\" project
                                </h5>
                                <div class=\"divider\"></div>
                                <p>
                                    <b>Message:</b>
                                    <span style=\"white-space: normal; text-overflow: ellipsis; overflow: hidden;\">
                                        [[ requestProject.message ]]
                                    </span>
                                </p>

                                <div class=\"divider\"></div>

                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default btn-success\" ng-click=\"acceptProjectMembershipRequest(requestProject.id, \$index);\">
                                        Accept
                                    </button>
                                    <button class=\"btn btn-default btn-danger\" ng-click=\"declineProjectMembershipRequest(requestProject.id, \$index);\">
                                        Decline
                                    </button>
                                    <button class=\"btn btn-default btn-info\" ng-click=\"moreInfoProjectMembershipRequest(requestProject.id, \$index);\">
                                        More info
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li class=\"dropdown\" ng-cloak>
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <div class=\"fa fa-fw\"><b>C</b></div>
                            <span ng-if=\"requests.contactRequests.length + contactNotifications.length > 0\"
                                  style=\"position: absolute; top: 0; right: 14px; font-size: 15px; text-shadow: 0 0 15px #00c6ff;\"
                                  ng-class=\"{ 'visible-element': FirstInit }\" class=\"hidden-element\">
                                [[ requests.contactRequests.length + contactNotifications.length ]]
                            </span>
                            <i class=\"fa fa-caret-down\"></i>
                        </a>

                        <ul class=\"notifier dropdown-menu dropdown-tasks noclose list-group\">
                            <li ng-if=\"(requests.contactRequests.length == 0) && (contactNotifications.length == 0)\" class=\"list-group-item\">
                                <h5 class=\"text-info\">You haven't any contact requests</h5>
                            </li>
                            <li ng-repeat=\"request in requests.contactRequests | limitTo: 3\" class=\"list-group-item\">
                                <h5 class=\"text-info\">
                                    User \"[[ request.contact.username ]]\" has sent you contact request
                                </h5>
                                <div class=\"divider\"></div>
                                <p>
                                    <b>Message:</b>
                                    <span style=\"white-space: normal; text-overflow: ellipsis; overflow: hidden;\">
                                        [[ request.message ]]
                                    </span>
                                </p>

                                <div class=\"divider\"></div>

                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default btn-success\" ng-click=\"acceptContactMembershipRequest(request.id, \$index);\">
                                        Accept
                                    </button>
                                    <button class=\"btn btn-default btn-danger\" ng-click=\"declineContactMembershipRequest(request.id, \$index);\">
                                        Decline
                                    </button>
                                    <button class=\"btn btn-default btn-info\" ng-click=\"moreInfoContactMembershipRequest(request.id, \$index);\">
                                        More info
                                    </button>
                                </div>
                            </li>

                            <li ng-repeat=\"contactNotification in contactNotifications| limitTo: 5\" class=\"list-group-item\" style=\"font-size: 14px;\">

                                <a href=\"[[contactNotification.href]]\" style=\"text-decoration: none; color: #000; padding: 2px 5px;\">
                                    <i class=\"fa fa-comment fa-fw\" style=\"vertical-align: top;\"></i>
                                    <div style=\"word-wrap: break-word; display: inline-block; padding-right: 10px;\" ng-bind-html=\"contactNotification.message\"></div>
                                    <div class=\"text-muted small\" style=\"text-align: right\">
                                        <i class=\"fa fa-clock-o\"></i>
                                        [[ contactNotification.activated.date.substring(0, 16) ]]
                                    </div>
                                </a>

                            </li>

                            <li ng-if=\"(contactNotifications != null) && (contactNotifications.length > 0)\" style=\"font-size: 14px; padding-top: 8px;\">
                                <a class=\"text-center\" href=\"";
            // line 395
            echo $this->env->getExtension('routing')->getPath("zectranet_all_notifications");
            echo "\">
                                    <strong>See All Notifications</strong>
                                    <i class=\"fa fa-angle-right\"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"dropdown hidden-xs\" ng-cloak>
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" style=\"padding: 13px;\">
                            <div class=\"clock hidden-xs\">
                                <ul>
                                    <li id=\"hours\"> </li>
                                    <li class=\"point\">:</li>
                                    <li id=\"min\" style=\"margin: 0;\"> </li>
                                </ul>
                            </div>
                            <i class=\"fa fa-tasks fa-fw visible-xs-inline-block\"></i>
                            <i class=\"fa fa-caret-down\" style=\"margin-left: 5px;\"></i>
                        </a>

                        <ul class=\"dropdown-menu dropdown-tasks noclose\">

                            ";
            // line 418
            $context["tasksAssigned"] = array();
            // line 419
            echo "
                            ";
            // line 420
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "assignedTasks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                if (($this->getAttribute($this->getAttribute($context["task"], "status", array()), "label", array()) == "in-progress")) {
                    // line 421
                    echo "                                ";
                    $context["tasksAssigned"] = twig_array_merge((isset($context["tasksAssigned"]) ? $context["tasksAssigned"] : null), array(0 => $context["task"]));
                    // line 422
                    echo "                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 423
            echo "
                            ";
            // line 424
            $context["tasksOwned"] = array();
            // line 425
            echo "
                            ";
            // line 426
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "OwnedTasks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                if (($this->getAttribute($this->getAttribute($context["task"], "status", array()), "label", array()) == "in-progress")) {
                    // line 427
                    echo "                                ";
                    $context["tasksOwned"] = twig_array_merge((isset($context["tasksOwned"]) ? $context["tasksOwned"] : null), array(0 => $context["task"]));
                    // line 428
                    echo "                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 429
            echo "
                            ";
            // line 430
            if (((twig_length_filter($this->env, (isset($context["tasksAssigned"]) ? $context["tasksAssigned"] : null)) > 0) || (twig_length_filter($this->env, (isset($context["tasksOwned"]) ? $context["tasksOwned"] : null)) > 0))) {
                // line 431
                echo "
                                <li class=\"text-center\" style=\"margin-top: 5px;\"><b>TASKS  <span style=\"color: violet;\">IN-PROGRESS </span></b></li>

                                ";
                // line 434
                if ((twig_length_filter($this->env, (isset($context["tasksAssigned"]) ? $context["tasksAssigned"] : null)) > 0)) {
                    // line 435
                    echo "
                                    ";
                    // line 436
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["tasksAssigned"]) ? $context["tasksAssigned"] : null), 0, 1));
                    foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                        // line 437
                        echo "                                        <li class=\"divider\"></li>

                                        <li>
                                            <a href=\"";
                        // line 440
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_task_show", array("task_id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
                        echo "\">
                                                <div>
                                                    <p>
                                                        <span style=\"display: inline-block; width: 70%; word-wrap: break-word;\"><b>";
                        // line 443
                        echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "name", array()), "html", null, true);
                        echo "</b></span>
                                                        <span class=\"pull-right text-muted\" style=\"display: inline-block; width: 28%; text-align: right;\">";
                        // line 444
                        echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "progress", array()), "html", null, true);
                        echo "% Complete</span>
                                                    </p>
                                                    <div class=\"progress progress-striped active\">
                                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
                        // line 447
                        echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "progress", array()), "html", null, true);
                        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "progress", array()), "html", null, true);
                        echo "%\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 454
                    echo "
                                ";
                } else {
                    // line 456
                    echo "                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["tasksOwned"]) ? $context["tasksOwned"] : null), 0, 3));
                    foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                        // line 457
                        echo "                                        <li class=\"divider\"></li>

                                        <li>
                                            <a href=\"";
                        // line 460
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_task_show", array("task_id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
                        echo "\">
                                                <div>
                                                    <p>
                                                        <span style=\"display: inline-block; width: 70%; word-wrap: break-word;\"><b>";
                        // line 463
                        echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "name", array()), "html", null, true);
                        echo "</b></span>
                                                        <span class=\"pull-right text-muted\" style=\"display: inline-block; width: 28%; text-align: right;\">";
                        // line 464
                        echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "progress", array()), "html", null, true);
                        echo "% Complete</span>
                                                    </p>
                                                    <div class=\"progress progress-striped active\">
                                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
                        // line 467
                        echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "progress", array()), "html", null, true);
                        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "progress", array()), "html", null, true);
                        echo "%\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 475
                    echo "                                ";
                }
                // line 476
                echo "
                            ";
            }
            // line 478
            echo "
                            <li class=\"divider\"></li>

                            <li class=\"text-center\"><b>WDE</b></li>

                            <li class=\"divider\"></li>

                            <li>
                                <form method=\"post\" action=\"";
            // line 486
            echo $this->env->getExtension('routing')->getPath("zectranet_wde");
            echo "\">
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <div class=\"col-xs-6\">
                                                    <label class=\"text-muted\" for=\"input1\" style=\"font-weight: normal\">Start office</label>
                                                    <input id=\"input1\" class=\"form-control timepicker\" type=\"time\" name=\"startOffice\"
                                                           ";
            // line 493
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array())) > 0) && (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array()), 0, array(), "array"), "date", array()), "Y-m-d") == twig_date_format_filter($this->env, "now", "Y-m-d")))) {
                // line 494
                echo "                                                                value='";
                echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array()), 0, array(), "array"), "startTime", array()))) ? ("") : (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array()), 0, array(), "array"), "startTime", array()), "H:i"))), "html", null, true);
                echo "'
                                                            ";
            }
            // line 495
            echo ">
                                                </div>
                                                <div class=\"col-xs-6\">
                                                    <label class=\"text-muted\" for=\"input2\" style=\"font-weight: normal\">Start lunch</label>
                                                    <input id=\"input2\" class=\"form-control\" type=\"time\" name=\"startLunch\"
                                                            ";
            // line 500
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array())) > 0) && (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array()), 0, array(), "array"), "date", array()), "Y-m-d") == twig_date_format_filter($this->env, "now", "Y-m-d")))) {
                // line 501
                echo "                                                                value='";
                echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array()), 0, array(), "array"), "beginLunch", array()))) ? ("") : (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array()), 0, array(), "array"), "beginLunch", array()), "H:i"))), "html", null, true);
                echo "'
                                                            ";
            }
            // line 502
            echo ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <div class=\"col-xs-6\">
                                                    <label class=\"text-muted\" for=\"input3\" style=\"font-weight: normal\">End lunch</label>
                                                    <input id=\"input3\" class=\"form-control\" type=\"time\" name=\"endLunch\"
                                                    <input id=\"input2\" class=\"form-control\" type=\"time\" name=\"startLunch\"
                                                            ";
            // line 514
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array())) > 0) && (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array()), 0, array(), "array"), "date", array()), "Y-m-d") == twig_date_format_filter($this->env, "now", "Y-m-d")))) {
                // line 515
                echo "                                                                value='";
                echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array()), 0, array(), "array"), "endLunch", array()))) ? ("") : (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array()), 0, array(), "array"), "endLunch", array()), "H:i"))), "html", null, true);
                echo "'
                                                            ";
            }
            // line 516
            echo ">
                                                </div>
                                                <div class=\"col-xs-6\">
                                                    <label class=\"text-muted\" for=\"input4\" style=\"font-weight: normal\">End office</label>
                                                    <input id=\"input4\" class=\"form-control\" type=\"time\" name=\"endOffice\"
                                                            ";
            // line 521
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array())) > 0) && (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array()), 0, array(), "array"), "date", array()), "Y-m-d") == twig_date_format_filter($this->env, "now", "Y-m-d")))) {
                // line 522
                echo "                                                                value='";
                echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array()), 0, array(), "array"), "endTime", array()))) ? ("") : (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array()), 0, array(), "array"), "endTime", array()), "H:i"))), "html", null, true);
                echo "'
                                                            ";
            }
            // line 523
            echo ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12\">
                                                <div class=\"col-sm-3\">
                                                    <label class=\"text-muted\" for=\"input5\" style=\"font-weight: normal\">Hours</label>
                                                    <input id=\"input5\" class=\"form-control text-center\" type=\"text\" name=\"hours\" pattern=\"[0-9]{1}\"
                                                            ";
            // line 534
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array())) > 0) && (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array()), 0, array(), "array"), "date", array()), "Y-m-d") == twig_date_format_filter($this->env, "now", "Y-m-d")))) {
                // line 535
                echo "                                                                value='";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array()), 0, array(), "array"), "hours", array()), "html", null, true);
                echo "'
                                                            ";
            }
            // line 536
            echo ">
                                                </div>
                                                <div class=\"col-sm-9\">
                                                    <label class=\"text-muted\" for=\"input6\" style=\"font-weight: normal\">Main task</label>
                                                    <input id=\"input6\" class=\"form-control\" type=\"text\" name=\"mainTask\"
                                                            ";
            // line 541
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array())) > 0) && (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array()), 0, array(), "array"), "date", array()), "Y-m-d") == twig_date_format_filter($this->env, "now", "Y-m-d")))) {
                // line 542
                echo "                                                                value='";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wde", array()), 0, array(), "array"), "mainTask", array()), "html", null, true);
                echo "'
                                                            ";
            }
            // line 543
            echo ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\" style=\"margin-bottom: 5px;\">
                                        <div class=\"col-xs-12\">
                                            <div style=\"padding: 0 15px;\">
                                                <input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Save\">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>

                    </li>

                    <li class=\"dropdown hidden-xs\" ng-cloak>


\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-bell fa-fw\"></i>
                            <span ng-if=\"notifications.length > 0\" ng-class=\"{ 'visible-element': FirstInit }\" class=\"hidden-element\"
                                  style=\"position: absolute; top: 0; right: 14px; font-size: 15px; text-shadow: 0 0 15px #00c6ff;\">
                                [[notifications.length]]
                            </span>
                            <i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t\t</a>

                        <!-- Sound when new notification -->
                        <audio id='notif_sound'>
                            <source src='";
            // line 575
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/sound/notify_sound.mp3"), "html", null, true);
            echo "' type='audio/mpeg'/>
                        </audio>

                        <ul ng-if=\"notifications.length > 0\" class=\"notifier dropdown-menu dropdown-alerts\">
                            <li ng-repeat=\"notification in notifications| limitTo: 5\">

                                <a ng-if=\"(notification.type == 'message_office') || (notification.type == 'message_project') || (notification.type == 'message_task') || (notification.type == 'message_epic_story')
                                    || (notification.type == 'private_message_office') || (notification.type == 'private_message_project') || (notification.type == 'private_message_task') || (notification.type == 'private_message_epic_story')
                                    || (notification.type == 'task_added') || (notification.type == 'task_deleted') || (notification.type == 'epic_story_added') || (notification.type == 'epic_story_deleted')\"
                                    href=\"[[notification.href]]\"
                                    style=\"text-decoration: none; color: #000;\">
                                    <i ng-if=\"(notification.type == 'message_office') || (notification.type == 'message_project') || (notification.type == 'message_task') || (notification.type == 'message_epic_story')
                                    || (notification.type == 'private_message_office') || (notification.type == 'private_message_project') || (notification.type == 'private_message_task') || (notification.type == 'private_message_epic_story')\"
                                       class=\"fa fa-comment fa-fw\" style=\"vertical-align: top;\"></i>
                                    <i ng-if=\"(notification.type == 'task_added')\" class=\"fa fa-tasks fa-fw\"></i>
                                    <i ng-if=\"(notification.type == 'epic_story_added')\" class=\"fa fa-briefcase fa-fw\"></i>
                                    <i ng-if=\"(notification.type == 'task_deleted') || (notification.type == 'epic_story_deleted')\" class=\"fa fa-trash-o fa-fw\"></i>
                                    <div style=\"word-wrap: break-word; display: inline-block; padding-right: 10px;\" ng-bind-html=\"notification.message\"></div>
                                    <div class=\"text-muted small\" style=\"text-align: right\">
                                        <i class=\"fa fa-clock-o\"></i>
                                        [[ notification.activated.date.substring(0, 16) ]]
                                    </div>
                                </a>

                                <div class=\"divider\"></div>
                            </li>

                            <li>
                                <a class=\"text-center\" href=\"";
            // line 603
            echo $this->env->getExtension('routing')->getPath("zectranet_all_notifications");
            echo "\">
                                    <strong>See All Notifications</strong>
                                    <i class=\"fa fa-angle-right\"></i>
                                </a>
                            </li>
                        </ul>

                        <div ng-if=\"(notifications != null) && (notifications.length == 0)\" class=\"notifier dropdown-menu dropdown-alerts\" style=\"text-align: center;\">
                            You don't have notifications!
                        </div>

\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"dropdown\">

\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"profile-image img-circle\" src=\"";
            // line 619
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
            echo "documents/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "avatar", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t style=\"width: 18px; height: 18px;\">
\t\t\t\t\t\t\t<span class=\"hidden-xs\">";
            // line 621
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "name", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "surname", array())), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-user\">

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 628
            echo $this->env->getExtension('routing')->getPath("zectranet_user_page");
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user fa-fw\"></i>
\t\t\t\t\t\t\t\t\tMy Profile
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 635
            echo $this->env->getExtension('routing')->getPath("zectranet_user_home");
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user fa-fw\"></i>
\t\t\t\t\t\t\t\t\tSummary
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

                            <li>
                                <a href=\"";
            // line 642
            echo $this->env->getExtension('routing')->getPath("zectranet_user_settings");
            echo "\">
                                    <i class=\"fa fa-gear fa-fw\"></i>
                                    Settings
                                </a>
                            </li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 649
            echo $this->env->getExtension('routing')->getPath("zectranet_upload");
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-upload fa-fw\"></i>
\t\t\t\t\t\t\t\t\tUpload Files
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"text-danger\" href=\"";
            // line 657
            echo $this->env->getExtension('routing')->getPath("zectranet_logout");
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-sign-out fa-fw\"></i>
\t\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 666
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 667
            echo $this->env->getExtension('routing')->getPath("zectranet_login");
            echo "\">
\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 672
            echo $this->env->getExtension('routing')->getPath("zectranet_signup");
            echo "\">
\t\t\t\t\t\t\tSignUp
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 677
        echo "\t\t\t</ul>
\t\t";
    }

    // line 682
    public function block_leftSidebar($context, array $blocks = array())
    {
        // line 683
        echo "
        ";
    }

    // line 687
    public function block_page($context, array $blocks = array())
    {
        // line 688
        echo "\t<div id=\"page-wrapper\" style=\"height: 100%; margin-top: 50px;\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
                    <!-- BEGIN OF SHOW REQUEST DETAILS MODAL -->
                    <div class=\"modal fade\" id=\"request_more_info\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header label-info\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                    <h4 class=\"modal-title\" style=\"color: #f5f5f5;\">
                                        [[ requestMoreInfo.type.label ]]
                                    </h4>
                                </div>
                                <div class=\"modal-body\">
                                    <div class=\"row\">
                                        <div class=\"col-md-offset-1 col-md-10 col-xs-offset-1 col-xs-10\">
                                            <b>Message:</b><br/>
                                            <p>
                                                [[ requestMoreInfo.message ]]
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-default btn-success\" ng-click=\"acceptContactMembershipRequest(requestMoreInfo.id);\">
                                            Accept
                                        </button>
                                        <button type=\"button\" class=\"btn btn-default btn-danger\" ng-click=\"declineContactMembershipRequest(requestMoreInfo.id);\">
                                            Decline
                                        </button>
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF SHOW REQUEST DETAILS MODAL -->
\t\t\t\t\t";
        // line 729
        $this->displayBlock('body', $context, $blocks);
        // line 732
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
    }

    // line 729
    public function block_body($context, array $blocks = array())
    {
        // line 730
        echo "
\t\t\t\t\t";
    }

    // line 750
    public function block_javascripts($context, array $blocks = array())
    {
        // line 751
        echo "    <!--------------------------- JAVASCRIPT LIBRARIES --------------------------->
\t<script src=\"";
        // line 752
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/Bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 753
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/Bootstrap/ui-bootstrap-tpls-0.10.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 754
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/metisMenu.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 755
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/sb-admin-2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 756
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/highlight.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!--------------------------- ANGULAR LIB MODULES --------------------------->
\t<script src=\"";
        // line 759
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/AngularJS/angular-route.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 760
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/AngularJS/angular-sanitize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 761
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/AngularJS/angular-animate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 762
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/AngularJS/angular-busy.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 763
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/draganddrop.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 764
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/AngularJS/scrollglue.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 765
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/AngularJS/angular-messages.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!------------------------------- CORE MODULE ------------------------------->
\t<script src=\"";
        // line 768
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/angular-core.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!------------------------------- DATA MODULE ------------------------------->
    <script src=\"";
        // line 771
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/Data/data.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 772
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/Data/Entities/data.tasks.table.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 773
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/Project/Controllers/project.task.controller.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 774
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/Data/Services/data.tasks.service.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 775
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/Data/Services/data.tasksSort.service.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 776
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/Data/Filters/data.tasksFilter.service.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 777
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/Data/Services/data.homeOffice.service.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 778
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/Data/Services/data.time.service.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 779
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/Data/Services/data.documents.service.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!------------------------------ PROJECT MODULE ----------------------------->
    <script src=\"";
        // line 782
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/Project/project.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 783
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/Project/Controllers/project.singleTask.controller.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 784
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/Project/Controllers/project.sprint.controller.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!---------------------------- HOME OFFICE MODULE --------------------------->
    <script src=\"";
        // line 787
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/HomeOffice/homeOffice.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 788
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/HomeOffice/Controllers/homeOffice.controller.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script src=\"";
        // line 790
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/custom/navigation.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 791
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 792
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 793
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/text-redactor.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 794
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/jquery.hotkeys.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 795
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/js/Semantic/popup.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('#editor').wysiwyg();
    </script>
\t<script type=\"text/javascript\">
\t\tvar JSON_URLS =
\t\t{
\t\t\tasset: \"";
        // line 802
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "\",
\t\t\t'documents': {
                'getDocuments': \"";
        // line 804
        echo $this->env->getExtension('routing')->getPath("zectranet_document_get");
        echo "\",
            },
\t\t\tminiSearch: \"";
        // line 806
        echo $this->env->getExtension('routing')->getPath("zectranet_quick_search");
        echo "\",
            urlMiniSearchHeaderThread: \"";
        // line 807
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_header_forum_thread", array("project_id" => 0, "subheader_id" => 1, "thread_id" => 2)), "html", null, true);
        echo "\",
\t\t\turlMiniSearchQnaThread: \"";
        // line 808
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_QnA_thread", array("project_id" => 0, "thread_id" => 1)), "html", null, true);
        echo "\",
            urlMiniSearchProject: \"";
        // line 809
        echo $this->env->getExtension('routing')->getPath("zectranet_show_project", array("project_id" => 0));
        echo "\",
            urlMiniSearchQnAForum: \"";
        // line 810
        echo $this->env->getExtension('routing')->getPath("zectranet_show_QnA_forum", array("project_id" => 0));
        echo "\",
            urlMiniSearchHeaderForum: \"";
        // line 811
        echo $this->env->getExtension('routing')->getPath("zectranet_show_header_forum", array("project_id" => 0));
        echo "\",
            urlMiniSearchTask: \"";
        // line 812
        echo $this->env->getExtension('routing')->getPath("zectranet_task_show", array("task_id" => 0));
        echo "\",
            notificationsGet: \"";
        // line 813
        echo $this->env->getExtension('routing')->getUrl("zectranet_notifications_get");
        echo "\",
            homeOfficeShow: \"";
        // line 814
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("zectranet_show_office", array("office_id" => 0, "conversation_id" => "conv_id")), "html", null, true);
        echo "\",
            officeShow: \"";
        // line 815
        echo $this->env->getExtension('routing')->getUrl("zectranet_show_office", array("office_id" => 0));
        echo "\",
\t\t\tprojectShow: \"";
        // line 816
        echo $this->env->getExtension('routing')->getUrl("zectranet_show_project", array("project_id" => 0));
        echo "\",
            acceptRequestUserOffice : \"";
        // line 817
        echo $this->env->getExtension('routing')->getUrl("zectranet_accept_request_user_office", array("office_id" => 0));
        echo "\",
            declineRequestUserOffice : \"";
        // line 818
        echo $this->env->getExtension('routing')->getUrl("zectranet_decline_request_user_office", array("office_id" => 0));
        echo "\",
            taskShow: \"";
        // line 819
        echo $this->env->getExtension('routing')->getUrl("zectranet_task_show", array("task_id" => 0));
        echo "\",
\t\t\tdocumentTemplate: \"";
        // line 820
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/zectranet/templates/document.html"), "html", null, true);
        echo "\",
\t\t\tapproveContactMembershipRequest: \"";
        // line 821
        echo $this->env->getExtension('routing')->getPath("zectranet_approve_contact_membership_request", array("request_id" => "request_id"));
        echo "\",
            approveHFMembershipRequest: \"";
        // line 822
        echo $this->env->getExtension('routing')->getPath("zectranet_approve_hf_membership_request", array("request_id" => "request_id"));
        echo "\",
            approveQnAMembershipRequest: \"";
        // line 823
        echo $this->env->getExtension('routing')->getPath("zectranet_approve_QNA_membership_request", array("request_id" => "request_id"));
        echo "\",
            approveProjectMembershipRequest: \"";
        // line 824
        echo $this->env->getExtension('routing')->getPath("zectranet_approve_project_membership_request", array("request_id" => "request_id"));
        echo "\",
\t\t};

        // Tasks URLS \\\\
        JSON_URLS.addTask = \"";
        // line 828
        echo $this->env->getExtension('routing')->getPath("zectranet_project_add_task", array("project_id" => 0));
        echo "\";
        JSON_URLS.addSubTask = \"";
        // line 829
        echo $this->env->getExtension('routing')->getPath("zectranet_project_add_subtask", array("project_id" => 0));
        echo "\";
        JSON_URLS.getTasks = \"";
        // line 830
        echo $this->env->getExtension('routing')->getPath("zectranet_project_get_tasks", array("project_id" => 0));
        echo "\";
        JSON_URLS.getSingleTask = \"";
        // line 831
        echo $this->env->getExtension('routing')->getPath("zectranent_task_get_single", array("task_id" => 0));
        echo "\";
        JSON_URLS.deleteTask = \"";
        // line 832
        echo $this->env->getExtension('routing')->getPath("zectranet_task_delete", array("task_id" => 0));
        echo "\";
        JSON_URLS.showTask = \"";
        // line 833
        echo $this->env->getExtension('routing')->getPath("zectranet_task_show", array("task_id" => 0));
        echo "\";
        JSON_URLS.saveTaskInfo = \"";
        // line 834
        echo $this->env->getExtension('routing')->getPath("zectranet_task_edit_info", array("task_id" => 0));
        echo "\";
        JSON_URLS.changeStatusTask = \"";
        // line 835
        echo $this->env->getExtension('routing')->getPath("zectranet_change_task_status", array("task_id" => 0));
        echo "\";
        JSON_URLS.showSprint = \"";
        // line 836
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zectranet_show_sprint", array("project_id" => 0, "sprint_id" => 1)), "html", null, true);
        echo "\";
        JSON_URLS.sprintAddTasks = \"";
        // line 837
        echo $this->env->getExtension('routing')->getPath("zectranet_sprint_add_tasks", array("sprint_id" => 0));
        echo "\";
        JSON_URLS.sprintDetachTask = \"";
        // line 838
        echo $this->env->getExtension('routing')->getPath("zectranet_detach_task_from_sprint", array("task_id" => 0));
        echo "\";
        JSON_URLS.getSprintTasks = \"";
        // line 839
        echo $this->env->getExtension('routing')->getPath("zectranet_sprint_get_tasks", array("sprint_id" => 0));
        echo "\";

        var TEMPPARAMS = {};
        ";
        // line 842
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 843
            echo "            var userHomeOfficeID = \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "homeOfficeID", array()), "html", null, true);
            echo "\";
            var USER_ID = ";
            // line 844
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
            echo ";
        ";
        }
        // line 846
        echo "
\t\tvar SearchText = null;
\t\t";
        // line 848
        if ((array_key_exists("searchText", $context) && ((isset($context["searchText"]) ? $context["searchText"] : null) != null))) {
            // line 849
            echo "\t\t\tSearchText = '";
            echo twig_escape_filter($this->env, (isset($context["searchText"]) ? $context["searchText"] : null), "html", null, true);
            echo "';
\t\t";
        }
        // line 851
        echo "
        var TIME_NOW = \"";
        // line 852
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"), "html", null, true);
        echo "\";

        \$(function () {
            var popovers = \$('[data-toggle=\"popover\"]');
            popovers.popover();
            popovers.bind('mouseenter', function () {
                \$(this).popover('show');
            });
            popovers.bind('mouseleave', function () {
                \$(this).popover('hide');
            });
        });
\t</script>

    <!-- script for Clock -->
    <script type=\"text/javascript\">
        // create new object for Date
        var newDate = new Date();

        // write current date
        newDate.setDate(newDate.getDate());

        setInterval( function() {
            // create new object for seconds
            var seconds = new Date().getSeconds();
            \$(\"#sec\").html(( seconds < 10 ? \"0\" : \"\" ) + seconds);
        },1000);

        setInterval( function() {
            // create new object for minutes
            var minutes = new Date().getMinutes();
            \$(\"#min\").html(( minutes < 10 ? \"0\" : \"\" ) + minutes);
        },1000);

        setInterval( function() {
            // create new object for hours
            var hours = new Date().getHours();
            \$(\"#hours\").html(( hours < 10 ? \"0\" : \"\" ) + hours);
        }, 1000);
    </script>

";
    }

    public function getTemplateName()
    {
        return "@Zectranet/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1431 => 852,  1428 => 851,  1422 => 849,  1420 => 848,  1416 => 846,  1411 => 844,  1406 => 843,  1404 => 842,  1398 => 839,  1394 => 838,  1390 => 837,  1386 => 836,  1382 => 835,  1378 => 834,  1374 => 833,  1370 => 832,  1366 => 831,  1362 => 830,  1358 => 829,  1354 => 828,  1347 => 824,  1343 => 823,  1339 => 822,  1335 => 821,  1331 => 820,  1327 => 819,  1323 => 818,  1319 => 817,  1315 => 816,  1311 => 815,  1307 => 814,  1303 => 813,  1299 => 812,  1295 => 811,  1291 => 810,  1287 => 809,  1283 => 808,  1279 => 807,  1275 => 806,  1270 => 804,  1265 => 802,  1255 => 795,  1251 => 794,  1247 => 793,  1243 => 792,  1239 => 791,  1235 => 790,  1230 => 788,  1226 => 787,  1220 => 784,  1216 => 783,  1212 => 782,  1206 => 779,  1202 => 778,  1198 => 777,  1194 => 776,  1190 => 775,  1186 => 774,  1182 => 773,  1178 => 772,  1174 => 771,  1168 => 768,  1162 => 765,  1158 => 764,  1154 => 763,  1150 => 762,  1146 => 761,  1142 => 760,  1138 => 759,  1132 => 756,  1128 => 755,  1124 => 754,  1120 => 753,  1116 => 752,  1113 => 751,  1110 => 750,  1105 => 730,  1102 => 729,  1094 => 732,  1092 => 729,  1049 => 688,  1046 => 687,  1041 => 683,  1038 => 682,  1033 => 677,  1025 => 672,  1017 => 667,  1014 => 666,  1002 => 657,  991 => 649,  981 => 642,  971 => 635,  961 => 628,  951 => 621,  944 => 619,  925 => 603,  894 => 575,  860 => 543,  854 => 542,  852 => 541,  845 => 536,  839 => 535,  837 => 534,  824 => 523,  818 => 522,  816 => 521,  809 => 516,  803 => 515,  801 => 514,  787 => 502,  781 => 501,  779 => 500,  772 => 495,  766 => 494,  764 => 493,  754 => 486,  744 => 478,  740 => 476,  737 => 475,  721 => 467,  715 => 464,  711 => 463,  705 => 460,  700 => 457,  695 => 456,  691 => 454,  676 => 447,  670 => 444,  666 => 443,  660 => 440,  655 => 437,  651 => 436,  648 => 435,  646 => 434,  641 => 431,  639 => 430,  636 => 429,  629 => 428,  626 => 427,  621 => 426,  618 => 425,  616 => 424,  613 => 423,  606 => 422,  603 => 421,  598 => 420,  595 => 419,  593 => 418,  567 => 395,  402 => 232,  400 => 231,  393 => 226,  230 => 65,  228 => 64,  222 => 60,  214 => 55,  205 => 48,  202 => 47,  199 => 46,  194 => 38,  191 => 37,  184 => 33,  180 => 32,  176 => 31,  172 => 30,  168 => 29,  164 => 28,  160 => 27,  156 => 26,  152 => 25,  148 => 24,  144 => 23,  140 => 22,  136 => 21,  132 => 20,  127 => 19,  124 => 18,  118 => 15,  114 => 14,  109 => 13,  106 => 12,  100 => 10,  93 => 894,  91 => 750,  87 => 748,  83 => 737,  81 => 687,  78 => 686,  75 => 685,  72 => 682,  70 => 681,  66 => 679,  64 => 46,  56 => 40,  54 => 37,  51 => 36,  49 => 18,  46 => 17,  44 => 12,  39 => 10,  28 => 1,);
    }
}
