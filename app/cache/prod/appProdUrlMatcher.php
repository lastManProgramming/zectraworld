<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // zectranet_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'zectranet_homepage');
            }

            return array (  '_controller' => 'ZectranetBundle\\Controller\\IndexController::indexAction',  '_route' => 'zectranet_homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // zectranet_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'ZectranetBundle\\Controller\\IndexController::loginAction',  '_route' => 'zectranet_login',);
                }

                // zectranet_login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'ZectranetBundle\\Controller\\IndexController::loginCheckAction',  '_route' => 'zectranet_login_check',);
                }

            }

            // zectranet_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'zectranet_logout');
            }

        }

        // zectranet_user_home
        if ($pathinfo === '/user/home') {
            return array (  '_controller' => 'ZectranetBundle\\Controller\\UserController::homeAction',  '_route' => 'zectranet_user_home',);
        }

        if (0 === strpos($pathinfo, '/dev/error_logs')) {
            // zectranet_get_error_logs
            if ($pathinfo === '/dev/error_logs') {
                return array (  '_controller' => 'ZectranetBundle\\Controller\\ErrorLogController::indexAction',  '_route' => 'zectranet_get_error_logs',);
            }

            // zectranet_get_error_logs_errors
            if ($pathinfo === '/dev/error_logs/getErrors') {
                return array (  '_controller' => 'ZectranetBundle\\Controller\\ErrorLogController::getErrorsAction',  '_route' => 'zectranet_get_error_logs_errors',);
            }

        }

        if (0 === strpos($pathinfo, '/signup')) {
            // zectranet_signup
            if (preg_match('#^/signup(?:/(?P<errorValid>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_signup')), array (  '_controller' => 'ZectranetBundle\\Controller\\IndexController::signupAction',  'errorValid' => NULL,));
            }

            // zectranet_signup_action
            if ($pathinfo === '/signup_action') {
                return array (  '_controller' => 'ZectranetBundle\\Controller\\IndexController::signupActAction',  '_route' => 'zectranet_signup_action',);
            }

        }

        // zectranet_forgot_password
        if ($pathinfo === '/forgot_password') {
            return array (  '_controller' => 'ZectranetBundle\\Controller\\IndexController::forgotPasswordAction',  '_route' => 'zectranet_forgot_password',);
        }

        if (0 === strpos($pathinfo, '/reset_password')) {
            // zectranet_reset_password
            if (preg_match('#^/reset_password/(?P<keyForAccess>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_reset_password')), array (  '_controller' => 'ZectranetBundle\\Controller\\IndexController::resetPasswordAction',));
            }

            // zectranet_reset_password_save
            if (0 === strpos($pathinfo, '/reset_password_save') && preg_match('#^/reset_password_save/(?P<userid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_reset_password_save')), array (  '_controller' => 'ZectranetBundle\\Controller\\IndexController::resetPasswordSaveAction',));
            }

        }

        // zectranet_wde
        if ($pathinfo === '/wde') {
            return array (  '_controller' => 'ZectranetBundle\\Controller\\UserController::wdeAction',  '_route' => 'zectranet_wde',);
        }

        if (0 === strpos($pathinfo, '/public_market')) {
            // zectranet_public_market
            if ($pathinfo === '/public_market') {
                return array (  '_controller' => 'ZectranetBundle\\Controller\\PublicMarketController::indexAction',  '_route' => 'zectranet_public_market',);
            }

            // zectranet_public_market_all_contacts
            if ($pathinfo === '/public_market/all_contacts') {
                return array (  '_controller' => 'ZectranetBundle\\Controller\\PublicMarketController::getAllContactsAction',  '_route' => 'zectranet_public_market_all_contacts',);
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/userProfile')) {
                if (0 === strpos($pathinfo, '/userProfile/edit')) {
                    // zectranet_edit_user_page
                    if ($pathinfo === '/userProfile/edit') {
                        return array (  '_controller' => 'ZectranetBundle\\Controller\\UserController::editProfilePageAction',  '_route' => 'zectranet_edit_user_page',);
                    }

                    // zectranet_edit_user_page_action
                    if (preg_match('#^/userProfile/edit/(?P<user_id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_edit_user_page_action')), array (  '_controller' => 'ZectranetBundle\\Controller\\UserController::editProfileAction',));
                    }

                }

                // zectranet_user_page
                if (preg_match('#^/userProfile(?:/(?P<user_id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_user_page')), array (  '_controller' => 'ZectranetBundle\\Controller\\UserController::indexAction',  'user_id' => NULL,));
                }

            }

            if (0 === strpos($pathinfo, '/user/settings')) {
                // zectranet_user_settings
                if ($pathinfo === '/user/settings') {
                    return array (  '_controller' => 'ZectranetBundle\\Controller\\UserController::settingsAction',  '_route' => 'zectranet_user_settings',);
                }

                // zectranet_user_settings_general
                if ($pathinfo === '/user/settings/general') {
                    return array (  '_controller' => 'ZectranetBundle\\Controller\\UserController::generalAction',  '_route' => 'zectranet_user_settings_general',);
                }

                // zectranet_user_settings_email
                if ($pathinfo === '/user/settings/email') {
                    return array (  '_controller' => 'ZectranetBundle\\Controller\\UserController::emailAction',  '_route' => 'zectranet_user_settings_email',);
                }

                // zectranet_user_settings_site
                if ($pathinfo === '/user/settings/site') {
                    return array (  '_controller' => 'ZectranetBundle\\Controller\\UserController::siteAction',  '_route' => 'zectranet_user_settings_site',);
                }

                // zectranet_user_settings_changePassword
                if ($pathinfo === '/user/settings/change_password') {
                    return array (  '_controller' => 'ZectranetBundle\\Controller\\UserController::changePasswordAction',  '_route' => 'zectranet_user_settings_changePassword',);
                }

            }

            // zectranet_generate_avatar
            if ($pathinfo === '/user/generate_avatar') {
                return array (  '_controller' => 'ZectranetBundle\\Controller\\UserController::generateAvatarAction',  '_route' => 'zectranet_generate_avatar',);
            }

        }

        if (0 === strpos($pathinfo, '/notifications')) {
            // zectranet_notifications_clear
            if ($pathinfo === '/notifications/clear') {
                return array (  '_controller' => 'ZectranetBundle\\Controller\\NotificationController::clearNotificationsAction',  '_route' => 'zectranet_notifications_clear',);
            }

            // zectranet_notifications_show
            if ($pathinfo === '/notifications') {
                return array (  '_controller' => 'ZectranetBundle\\Controller\\NotificationController::showNotificationsAction',  '_route' => 'zectranet_notifications_show',);
            }

            // zectranet_notifications_get
            if ($pathinfo === '/notifications/get') {
                return array (  '_controller' => 'ZectranetBundle\\Controller\\NotificationController::getNotificationsAction',  '_route' => 'zectranet_notifications_get',);
            }

        }

        if (0 === strpos($pathinfo, '/user/notifications')) {
            // zectranet_all_notifications
            if ($pathinfo === '/user/notifications/all') {
                return array (  '_controller' => 'ZectranetBundle\\Controller\\NotificationController::allAction',  '_route' => 'zectranet_all_notifications',);
            }

            // zectranet_delete_all_notifications
            if ($pathinfo === '/user/notifications/delete_all') {
                return array (  '_controller' => 'ZectranetBundle\\Controller\\NotificationController::deleteAllAction',  '_route' => 'zectranet_delete_all_notifications',);
            }

        }

        if (0 === strpos($pathinfo, '/office')) {
            // zectranet_show_office_archive
            if (preg_match('#^/office/(?P<office_id>\\d+)/showArchive$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_show_office_archive')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficeArchiveController::indexAction',));
            }

            // zectranet_get_office_archive
            if (preg_match('#^/office/(?P<office_id>\\d+)/getArchive$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_get_office_archive')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficeArchiveController::getArchiveAction',));
            }

            // zectranet_add_project_to_archive
            if (preg_match('#^/office/(?P<office_id>\\d+)/addToArchive/(?P<project_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_add_project_to_archive')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficeArchiveController::addToArchiveAction',));
            }

            // zectranet_restore_project_from_archive
            if (preg_match('#^/office/(?P<office_id>[^/]++)/archive/restore/(?P<project_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_restore_project_from_archive')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficeArchiveController::restoreFromArchiveAction',));
            }

            // zectranet_delete_project_from_archive
            if (preg_match('#^/office/(?P<office_id>[^/]++)/archive/delete/(?P<project_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_delete_project_from_archive')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficeArchiveController::deleteFromArchiveAction',));
            }

            // zectranet_show_office
            if (preg_match('#^/office/(?P<office_id>\\d+)(?:/(?P<conversation_id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_show_office')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficeController::indexAction',  'conversation_id' => 0,));
            }

            // zectranet_add_office
            if ($pathinfo === '/office/add') {
                return array (  '_controller' => 'ZectranetBundle\\Controller\\OfficeController::addOfficeAction',  '_route' => 'zectranet_add_office',);
            }

            // zectranet_delete_office
            if (preg_match('#^/office/(?P<office_id>\\d+)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_delete_office')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficeController::deleteAction',));
            }

            // zectranet_settings_office
            if (preg_match('#^/office/(?P<office_id>\\d+)/settings$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_settings_office')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficeController::settingsAction',));
            }

            // zectranet_office_get_WDE
            if (preg_match('#^/office/(?P<office_id>\\d+)/getWDE$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_office_get_WDE')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficeController::getWDEAction',));
            }

            // zectranet_office_show_WDE
            if (preg_match('#^/office/(?P<office_id>\\d+)/showWDE$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_office_show_WDE')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficeController::showWDEAction',));
            }

            // zectranet_get_office_members
            if (preg_match('#^/office/(?P<office_id>\\d+)/getMembers$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_get_office_members')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficeController::getMembersAction',));
            }

            // zectranet_save_office_members
            if (preg_match('#^/office/(?P<office_id>\\d+)/saveMembersState$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_save_office_members')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficeController::saveMembersAction',));
            }

            // zectranet_office_change_visible_state
            if (preg_match('#^/office/(?P<office_id>\\d+)/settings/visibleStateChange$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_office_change_visible_state')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficeController::visibleStateChangeAction',));
            }

            // zectranet_office_add_post
            if (preg_match('#^/office/(?P<office_id>\\d+)/addNewPost$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_office_add_post')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficePostController::addPostAction',));
            }

            // zectranet_office_get_post
            if (preg_match('#^/office/(?P<office_id>\\d+)/getPosts$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_office_get_post')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficePostController::getPostsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/project')) {
            // zectranet_show_project
            if (preg_match('#^/project/(?P<project_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_show_project')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::indexAction',));
            }

            // zectranet_project_profile_page
            if (0 === strpos($pathinfo, '/project/profile') && preg_match('#^/project/profile/(?P<project_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_project_profile_page')), array (  '_controller' => 'ZectranetBundle\\Controller\\QnAForumController::showProfileAction',));
            }

            // zectranet_settings_project
            if (preg_match('#^/project/(?P<project_id>\\d+)/settings$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_settings_project')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::settingsAction',));
            }

            // zectranet_project_change_visible_state
            if (preg_match('#^/project/(?P<project_id>\\d+)/settings/visibleStateChange$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_project_change_visible_state')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::visibleStateChangeAction',));
            }

            // zectranet_get_project_members
            if (preg_match('#^/project/(?P<project_id>\\d+)/getMembers$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_get_project_members')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::getMembersAction',));
            }

            // zectranet_get_project_versions
            if (preg_match('#^/project/(?P<project_id>\\d+)/getVersions$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_get_project_versions')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::getProjectVersionsAction',));
            }

            // zectranet_add_project_version
            if (preg_match('#^/project/(?P<project_id>\\d+)/addNewVersion$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_add_project_version')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::addNewProjectVersionAction',));
            }

        }

        if (0 === strpos($pathinfo, '/headerForum')) {
            // zectranet_show_header_forum
            if (preg_match('#^/headerForum/(?P<project_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_show_header_forum')), array (  '_controller' => 'ZectranetBundle\\Controller\\HeaderForumController::indexAction',));
            }

            // zectranet_header_forum_edit_name
            if (0 === strpos($pathinfo, '/headerForumEdit') && preg_match('#^/headerForumEdit/(?P<project_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_header_forum_edit_name')), array (  '_controller' => 'ZectranetBundle\\Controller\\HeaderForumController::editNameAction',));
            }

            // zectranet_show_header_forum_subheader
            if (preg_match('#^/headerForum/(?P<project_id>[^/]++)/subheader/(?P<subheader_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_show_header_forum_subheader')), array (  '_controller' => 'ZectranetBundle\\Controller\\HeaderForumController::forumAction',));
            }

            // zectranet_subheader_edit_name
            if (preg_match('#^/headerForum/(?P<project_id>\\d+)/(?P<subheader_id>\\d+)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_subheader_edit_name')), array (  '_controller' => 'ZectranetBundle\\Controller\\HeaderForumController::editNameSubheaderAction',));
            }

            // zectranet_show_header_forum_settings
            if (preg_match('#^/headerForum/(?P<project_id>\\d+)/settings$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_show_header_forum_settings')), array (  '_controller' => 'ZectranetBundle\\Controller\\HeaderForumController::settingsAction',));
            }

            // zectranet_add_header_action
            if (preg_match('#^/headerForum/(?P<project_id>\\d+)/addHeader$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_add_header_action')), array (  '_controller' => 'ZectranetBundle\\Controller\\HeaderForumController::addNewHeaderAction',));
            }

            // zectranet_add_subheader_action
            if (0 === strpos($pathinfo, '/headerForum/addSubHeader') && preg_match('#^/headerForum/addSubHeader/(?P<header_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_add_subheader_action')), array (  '_controller' => 'ZectranetBundle\\Controller\\HeaderForumController::addNewSubHeaderAction',));
            }

            // zectranet_delete_header_action
            if (0 === strpos($pathinfo, '/headerForum/deleteHeader') && preg_match('#^/headerForum/deleteHeader/(?P<header_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_delete_header_action')), array (  '_controller' => 'ZectranetBundle\\Controller\\HeaderForumController::deleteHeaderAction',));
            }

            // zectranet_get_header_forum_headers
            if (preg_match('#^/headerForum/(?P<project_id>\\d+)/getHeaders$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_get_header_forum_headers')), array (  '_controller' => 'ZectranetBundle\\Controller\\HeaderForumController::getHeadersAction',));
            }

            // zectranet_show_header_forum_thread
            if (preg_match('#^/headerForum/(?P<project_id>\\d+)/(?P<subheader_id>\\d+)/(?P<thread_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_show_header_forum_thread')), array (  '_controller' => 'ZectranetBundle\\Controller\\HeaderForumController::showThreadAction',));
            }

            // zectranet_start_header_forum_thread
            if (preg_match('#^/headerForum/(?P<subheader_id>\\d+)/start_new_thread$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_start_header_forum_thread')), array (  '_controller' => 'ZectranetBundle\\Controller\\HeaderForumController::startNewThreadAction',));
            }

            // zectranet_add_post_header_forum_thread
            if (0 === strpos($pathinfo, '/headerForum/thread') && preg_match('#^/headerForum/thread/(?P<thread_id>\\d+)/addPost$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_add_post_header_forum_thread')), array (  '_controller' => 'ZectranetBundle\\Controller\\HeaderForumController::addNewPostAction',));
            }

        }

        if (0 === strpos($pathinfo, '/QnAForum')) {
            // zectranet_show_QnA_forum
            if (preg_match('#^/QnAForum/(?P<project_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_show_QnA_forum')), array (  '_controller' => 'ZectranetBundle\\Controller\\QnAForumController::showForumAction',));
            }

            // zectranet_QnA_forum_edit_name
            if (preg_match('#^/QnAForum/(?P<project_id>\\d+)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_QnA_forum_edit_name')), array (  '_controller' => 'ZectranetBundle\\Controller\\QnAForumController::editNameAction',));
            }

            // zectranet_QnA_settings
            if (preg_match('#^/QnAForum/(?P<project_id>\\d+)/settings$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_QnA_settings')), array (  '_controller' => 'ZectranetBundle\\Controller\\QnAForumController::settingsAction',));
            }

            // zectranet_delete_QnA_forum
            if (0 === strpos($pathinfo, '/QnAForum/delete') && preg_match('#^/QnAForum/delete/(?P<project_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_delete_QnA_forum')), array (  '_controller' => 'ZectranetBundle\\Controller\\QnAForumController::deleteForumAction',));
            }

            // zectranet_QnA_create_new_question
            if (0 === strpos($pathinfo, '/QnAForum/create_question') && preg_match('#^/QnAForum/create_question/(?P<project_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_QnA_create_new_question')), array (  '_controller' => 'ZectranetBundle\\Controller\\QnAForumController::createQuestionAction',));
            }

            // zectranet_show_QnA_thread
            if (preg_match('#^/QnAForum/(?P<project_id>\\d+)/thread/(?P<thread_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_show_QnA_thread')), array (  '_controller' => 'ZectranetBundle\\Controller\\QnAForumController::showThreadAction',));
            }

            // zectranet_QnA_thread_edit_name
            if (preg_match('#^/QnAForum/(?P<project_id>\\d+)/thread/(?P<thread_id>\\d+)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_QnA_thread_edit_name')), array (  '_controller' => 'ZectranetBundle\\Controller\\QnAForumController::editNameThreadAction',));
            }

            // zectranet_QnA_thread_edit_message
            if (preg_match('#^/QnAForum/(?P<project_id>\\d+)/thread/(?P<thread_id>\\d+)/editMessage$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_QnA_thread_edit_message')), array (  '_controller' => 'ZectranetBundle\\Controller\\QnAForumController::editMessageThreadAction',));
            }

            // zectranet_QnA_add_post
            if (0 === strpos($pathinfo, '/QnAForum/thread/add_post') && preg_match('#^/QnAForum/thread/add_post/(?P<thread_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_QnA_add_post')), array (  '_controller' => 'ZectranetBundle\\Controller\\QnAForumController::addPostAction',));
            }

            // zectranet_QnA_post_edit
            if (0 === strpos($pathinfo, '/QnAForum/editPost') && preg_match('#^/QnAForum/editPost/(?P<post_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_QnA_post_edit')), array (  '_controller' => 'ZectranetBundle\\Controller\\QnAForumController::editPostAction',));
            }

        }

        if (0 === strpos($pathinfo, '/office')) {
            // zectranet_accept_request_user_office
            if (preg_match('#^/office/(?P<office_id>\\d+)/acceptRequestUserOffice$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_accept_request_user_office')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficeController::acceptRequestUserOfficeAction',));
            }

            // zectranet_decline_request_user_office
            if (preg_match('#^/office/(?P<office_id>\\d+)/declineRequestUserOffice$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_decline_request_user_office')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficeController::declineRequestUserOfficeAction',));
            }

            // zectranet_add_project
            if (preg_match('#^/office/(?P<office_id>[^/]++)/project/add$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_add_project')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::addProjectAction',));
            }

        }

        // zectranet_project_post_edit
        if (0 === strpos($pathinfo, '/project/edit/post') && preg_match('#^/project/edit/post/(?P<post_id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_project_post_edit')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectPostController::editPostAction',));
        }

        // zectranet_task_post_edit
        if (0 === strpos($pathinfo, '/task/edit/post') && preg_match('#^/task/edit/post/(?P<post_id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_task_post_edit')), array (  '_controller' => 'ZectranetBundle\\Controller\\TaskController::editPostAction',));
        }

        if (0 === strpos($pathinfo, '/project')) {
            // zectranet_delete_project
            if (preg_match('#^/project/(?P<project_id>\\d+)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_delete_project')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::deleteAction',));
            }

            // zectranet_project_add_post
            if (preg_match('#^/project/(?P<project_id>\\d+)/addNewPost$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_project_add_post')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectPostController::addPostAction',));
            }

            // zectranet_project_get_post
            if (preg_match('#^/project/(?P<project_id>\\d+)/getPosts$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_project_get_post')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectPostController::getPostsAction',));
            }

            // zectranet_project_add_task
            if (preg_match('#^/project/(?P<project_id>\\d+)/addNewTask$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_project_add_task')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::addTaskAction',));
            }

            // zectranet_project_add_subtask
            if (preg_match('#^/project/(?P<project_id>\\d+)/addNewSubTask$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_project_add_subtask')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::addSubTaskAction',));
            }

            // zectranet_project_get_tasks
            if (preg_match('#^/project/(?P<project_id>\\d+)/getTasks$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_project_get_tasks')), array (  '_controller' => 'ZectranetBundle\\Controller\\TaskController::getTasksAction',));
            }

        }

        // zectranet_change_task_status
        if (0 === strpos($pathinfo, '/task') && preg_match('#^/task/(?P<task_id>\\d+)/changeStatus$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_change_task_status')), array (  '_controller' => 'ZectranetBundle\\Controller\\TaskController::changeTaskStatusAction',));
        }

        if (0 === strpos($pathinfo, '/project')) {
            // zectranet_project_get_epic_stories
            if (preg_match('#^/project/(?P<project_id>\\d+)/getEpicStories$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_project_get_epic_stories')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::getEpicStoriesAction',));
            }

            // zectranet_project_add_epic_story
            if (preg_match('#^/project/(?P<project_id>\\d+)/addNewEpicStory$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_project_add_epic_story')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::addNewEpicStoryAction',));
            }

            // zectranet_project_delete_epic_stories
            if (preg_match('#^/project/(?P<project_id>\\d+)/deleteEpicStories$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_project_delete_epic_stories')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::deleteEpicStoriesAction',));
            }

        }

        if (0 === strpos($pathinfo, '/task')) {
            // zectranet_task_show
            if (preg_match('#^/task/(?P<task_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_task_show')), array (  '_controller' => 'ZectranetBundle\\Controller\\TaskController::showTaskAction',));
            }

            // zectranent_task_get_single
            if (0 === strpos($pathinfo, '/task/get') && preg_match('#^/task/get/(?P<task_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranent_task_get_single')), array (  '_controller' => 'ZectranetBundle\\Controller\\TaskController::getSingleTaskAction',));
            }

            // zectranet_task_edit_info
            if (preg_match('#^/task/(?P<task_id>\\d+)/edit_info$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_task_edit_info')), array (  '_controller' => 'ZectranetBundle\\Controller\\TaskController::editInfoAction',));
            }

            // zectranet_task_edit_descritpion
            if (preg_match('#^/task/(?P<task_id>\\d+)/edit_description$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_task_edit_descritpion')), array (  '_controller' => 'ZectranetBundle\\Controller\\TaskController::editDescriptionAction',));
            }

            // zectranet_task_delete
            if (preg_match('#^/task/(?P<task_id>\\d+)/deleteTask$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_task_delete')), array (  '_controller' => 'ZectranetBundle\\Controller\\TaskController::deleteTaskAction',));
            }

        }

        if (0 === strpos($pathinfo, '/upload')) {
            // zectranet_upload
            if (rtrim($pathinfo, '/') === '/upload') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'zectranet_upload');
                }

                return array (  '_controller' => 'ZectranetBundle\\Controller\\UploadController::indexAction',  '_route' => 'zectranet_upload',);
            }

            if (0 === strpos($pathinfo, '/upload/documents')) {
                // zectranet_document_upload
                if (rtrim($pathinfo, '/') === '/upload/documents') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'zectranet_document_upload');
                    }

                    return array (  '_controller' => 'ZectranetBundle\\Controller\\UploadController::uploadAction',  '_route' => 'zectranet_document_upload',);
                }

                // zectranet_document_get
                if (rtrim($pathinfo, '/') === '/upload/documents/get') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'zectranet_document_get');
                    }

                    return array (  '_controller' => 'ZectranetBundle\\Controller\\UploadController::getDocumentsAction',  '_route' => 'zectranet_document_get',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/documents')) {
            // zectranet_document_rename
            if (preg_match('#^/documents/(?P<fileid>\\d+)/rename$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_document_rename')), array (  '_controller' => 'ZectranetBundle\\Controller\\UploadController::renameDocAction',));
            }

            // zectranet_document_delete
            if (preg_match('#^/documents/(?P<fileid>\\d+)/delete/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'zectranet_document_delete');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_document_delete')), array (  '_controller' => 'ZectranetBundle\\Controller\\UploadController::removeDocAction',));
            }

        }

        if (0 === strpos($pathinfo, '/project')) {
            // zectranet_show_sprint
            if (preg_match('#^/project/(?P<project_id>\\d+)/sprint/(?P<sprint_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_show_sprint')), array (  '_controller' => 'ZectranetBundle\\Controller\\SprintController::indexAction',));
            }

            // zectranet_show_sprint_settings
            if (preg_match('#^/project/(?P<project_id>\\d+)/sprint/(?P<sprint_id>\\d+)/settings$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_show_sprint_settings')), array (  '_controller' => 'ZectranetBundle\\Controller\\SprintController::showSprintSettingsAction',));
            }

        }

        // zectranet_sprint_add
        if (0 === strpos($pathinfo, '/sprint') && preg_match('#^/sprint/(?P<project_id>\\d+)/addSprint$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_sprint_add')), array (  '_controller' => 'ZectranetBundle\\Controller\\SprintController::addSprintAction',));
        }

        // zectranet_sprint_delete
        if (0 === strpos($pathinfo, '/project') && preg_match('#^/project/(?P<project_id>\\d+)/sprint/(?P<sprint_id>\\d+)/deleteSprint$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_sprint_delete')), array (  '_controller' => 'ZectranetBundle\\Controller\\SprintController::deleteSprintAction',));
        }

        if (0 === strpos($pathinfo, '/sprint')) {
            // zectranet_sprint_add_tasks
            if (preg_match('#^/sprint/(?P<sprint_id>\\d+)/addTasksToSprint$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_sprint_add_tasks')), array (  '_controller' => 'ZectranetBundle\\Controller\\SprintController::addTasksToSprintAction',));
            }

            // zectranet_sprint_permission_save
            if (preg_match('#^/sprint/(?P<sprint_id>\\d+)/user/(?P<user_id>\\d+)/save$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_sprint_permission_save')), array (  '_controller' => 'ZectranetBundle\\Controller\\SprintController::savePermissionsAction',));
            }

        }

        // zectranet_project_permission_save
        if (0 === strpos($pathinfo, '/project') && preg_match('#^/project/(?P<project_id>[^/]++)/user/(?P<user_id>[^/]++)/save$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_project_permission_save')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::savePermissionsAction',));
        }

        // zectranet_detach_task_from_sprint
        if (0 === strpos($pathinfo, '/task/detach_from_sprint') && preg_match('#^/task/detach_from_sprint/(?P<task_id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_detach_task_from_sprint')), array (  '_controller' => 'ZectranetBundle\\Controller\\TaskController::detachFromSprintAction',));
        }

        if (0 === strpos($pathinfo, '/sprint')) {
            // zectranet_sprint_get_tasks
            if (preg_match('#^/sprint/(?P<sprint_id>\\d+)/getTasks$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_sprint_get_tasks')), array (  '_controller' => 'ZectranetBundle\\Controller\\SprintController::getTasksAction',));
            }

            // zectranet_sprint_change_state
            if (preg_match('#^/sprint/(?P<sprint_id>\\d+)/changeState/(?P<state>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_sprint_change_state')), array (  '_controller' => 'ZectranetBundle\\Controller\\SprintController::changeSprintStateAction',));
            }

        }

        // zectranet_InsertScreenshotsInPHP
        if ($pathinfo === '/upload/insertscreenshots') {
            return array (  '_controller' => 'ZectranetBundle\\Controller\\UploadController::Insert_Screenshots_InPHPAction',  '_route' => 'zectranet_InsertScreenshotsInPHP',);
        }

        if (0 === strpos($pathinfo, '/task')) {
            // zectranet_task_get_post
            if (preg_match('#^/task/(?P<task_id>[^/]++)/getPosts$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_task_get_post')), array (  '_controller' => 'ZectranetBundle\\Controller\\TaskController::getPostsAction',));
            }

            // zectranet_task_add_post
            if (preg_match('#^/task/(?P<task_id>[^/]++)/addPosts$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_task_add_post')), array (  '_controller' => 'ZectranetBundle\\Controller\\TaskController::addPostAction',));
            }

        }

        // zectranet_show_project_versions
        if (0 === strpos($pathinfo, '/project') && preg_match('#^/project/(?P<project_id>\\d+)/showVersions$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_show_project_versions')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::showProjectVersionAction',));
        }

        if (0 === strpos($pathinfo, '/request')) {
            // zectranet_send_user_membership_request
            if ($pathinfo === '/request/send') {
                return array (  '_controller' => 'ZectranetBundle\\Controller\\UserController::sendContactMembershipRequestAction',  '_route' => 'zectranet_send_user_membership_request',);
            }

            // zectranet_approve_contact_membership_request
            if (0 === strpos($pathinfo, '/request/approve') && preg_match('#^/request/approve/(?P<request_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_approve_contact_membership_request')), array (  '_controller' => 'ZectranetBundle\\Controller\\UserController::approveContactMembershipRequestAction',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/user/get/con')) {
                // zectranet_get_contact_list
                if ($pathinfo === '/user/get/contact_list') {
                    return array (  '_controller' => 'ZectranetBundle\\Controller\\UserController::getContactListAction',  '_route' => 'zectranet_get_contact_list',);
                }

                // zectranet_get_conversation
                if (0 === strpos($pathinfo, '/user/get/conversation') && preg_match('#^/user/get/conversation/(?P<contact_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_get_conversation')), array (  '_controller' => 'ZectranetBundle\\Controller\\ConversationController::getConversationAction',));
                }

            }

            // zectranet_send_conversation_message
            if (0 === strpos($pathinfo, '/user/send/conversation/message') && preg_match('#^/user/send/conversation/message/(?P<conversation_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_send_conversation_message')), array (  '_controller' => 'ZectranetBundle\\Controller\\ConversationController::sendMessageAction',));
            }

            // zectranet_edit_conversation_message
            if (0 === strpos($pathinfo, '/user/edit/conversation/message') && preg_match('#^/user/edit/conversation/message/(?P<message_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_edit_conversation_message')), array (  '_controller' => 'ZectranetBundle\\Controller\\ConversationController::editMessageAction',));
            }

        }

        if (0 === strpos($pathinfo, '/hf')) {
            // zectranet_get_hf_settings_info
            if (0 === strpos($pathinfo, '/hf/get/settings/info') && preg_match('#^/hf/get/settings/info/(?P<project_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_get_hf_settings_info')), array (  '_controller' => 'ZectranetBundle\\Controller\\HeaderForumController::getProjectSettingsInfoAction',));
            }

            // zectranet_send_hf_request
            if (0 === strpos($pathinfo, '/hf/send_request') && preg_match('#^/hf/send_request/(?P<project_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_send_hf_request')), array (  '_controller' => 'ZectranetBundle\\Controller\\HeaderForumController::sendRequestAction',));
            }

            if (0 === strpos($pathinfo, '/hf/re')) {
                // zectranet_re_send_hf_request
                if (0 === strpos($pathinfo, '/hf/re/send_request') && preg_match('#^/hf/re/send_request/(?P<project_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_re_send_hf_request')), array (  '_controller' => 'ZectranetBundle\\Controller\\HeaderForumController::reSendRequestAction',));
                }

                if (0 === strpos($pathinfo, '/hf/request')) {
                    // zectranet_approve_hf_membership_request
                    if (0 === strpos($pathinfo, '/hf/request/approve') && preg_match('#^/hf/request/approve/(?P<request_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_approve_hf_membership_request')), array (  '_controller' => 'ZectranetBundle\\Controller\\UserController::approveHFForumMembershipRequestAction',));
                    }

                    // zectranet_delete_hf_request
                    if (preg_match('#^/hf/request/(?P<project_id>[^/]++)/delete/(?P<request_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_delete_hf_request')), array (  '_controller' => 'ZectranetBundle\\Controller\\HeaderForumController::deleteRequestAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/project/QnA')) {
            // zectranet_get_QNA_project_settings_info
            if (0 === strpos($pathinfo, '/project/QnA/get/settings/info') && preg_match('#^/project/QnA/get/settings/info/(?P<project_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_get_QNA_project_settings_info')), array (  '_controller' => 'ZectranetBundle\\Controller\\QnAForumController::getProjectSettingsInfoAction',));
            }

            // zectranet_send_QNA_project_request
            if (0 === strpos($pathinfo, '/project/QnA/send_request') && preg_match('#^/project/QnA/send_request/(?P<project_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_send_QNA_project_request')), array (  '_controller' => 'ZectranetBundle\\Controller\\QnAForumController::sendRequestAction',));
            }

        }

        // zectranet_re_send_QNA_request
        if (0 === strpos($pathinfo, '/QNA/re/send_request') && preg_match('#^/QNA/re/send_request/(?P<project_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_re_send_QNA_request')), array (  '_controller' => 'ZectranetBundle\\Controller\\QnAForumController::reSendRequestAction',));
        }

        // zectranet_delete_QNA_project_request
        if (0 === strpos($pathinfo, '/request/QnA') && preg_match('#^/request/QnA/(?P<project_id>[^/]++)/delete/(?P<request_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_delete_QNA_project_request')), array (  '_controller' => 'ZectranetBundle\\Controller\\QnAForumController::deleteRequestAction',));
        }

        // zectranet_approve_QNA_membership_request
        if (0 === strpos($pathinfo, '/QnA/request/approve') && preg_match('#^/QnA/request/approve/(?P<request_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_approve_QNA_membership_request')), array (  '_controller' => 'ZectranetBundle\\Controller\\UserController::approveQnAForumMembershipRequestAction',));
        }

        // zectranet_approve_project_membership_request
        if (0 === strpos($pathinfo, '/Project/request/approve') && preg_match('#^/Project/request/approve/(?P<request_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_approve_project_membership_request')), array (  '_controller' => 'ZectranetBundle\\Controller\\UserController::approveProjectMembershipRequestAction',));
        }

        if (0 === strpos($pathinfo, '/project')) {
            // zectranet_get_project_settings_info
            if (0 === strpos($pathinfo, '/project/get/settings/info') && preg_match('#^/project/get/settings/info/(?P<project_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_get_project_settings_info')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::getProjectSettingsInfoAction',));
            }

            // zectranet_send_project_request
            if (0 === strpos($pathinfo, '/project/send_request') && preg_match('#^/project/send_request/(?P<project_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_send_project_request')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::sendRequestAction',));
            }

        }

        // zectranet_delete_project_request
        if (0 === strpos($pathinfo, '/request') && preg_match('#^/request/(?P<project_id>[^/]++)/delete/(?P<request_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_delete_project_request')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::deleteRequestAction',));
        }

        // zectranet_re_send_request
        if (0 === strpos($pathinfo, '/project/re/Send_request') && preg_match('#^/project/re/Send_request/(?P<project_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_re_send_request')), array (  '_controller' => 'ZectranetBundle\\Controller\\ProjectController::reSendRequestAction',));
        }

        if (0 === strpos($pathinfo, '/office')) {
            // zectranet_get_office_profile
            if (preg_match('#^/office/(?P<office_id>[^/]++)/profile$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_get_office_profile')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficeProfileController::indexAction',));
            }

            // zectranet_get_edit_office_profile
            if (preg_match('#^/office/(?P<office_id>[^/]++)/profile/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_get_edit_office_profile')), array (  '_controller' => 'ZectranetBundle\\Controller\\OfficeProfileController::indexEditAction',));
            }

        }

        // zectranet_quick_search
        if ($pathinfo === '/quick_search') {
            return array (  '_controller' => 'ZectranetBundle\\Controller\\SearchController::MiniSearchAction',  '_route' => 'zectranet_quick_search',);
        }

        // zectranet_search_page
        if (0 === strpos($pathinfo, '/search') && preg_match('#^/search(?:/(?P<slug>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zectranet_search_page')), array (  '_controller' => 'ZectranetBundle\\Controller\\SearchController::SearchAction',  'slug' => NULL,));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
