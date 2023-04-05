<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/micro-post/add' => [[['_route' => 'app_micro_post_add', '_controller' => 'App\\Controller\\MicroPostController::add'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/statistical' => [[['_route' => 'app_statistical_manage', '_controller' => 'App\\Controller\\AdminController::statistical'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\HelloController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/micro-post' => [[['_route' => 'app_micro_post', '_controller' => 'App\\Controller\\MicroPostController::index'], null, null, null, false, false, null]],
        '/micro-post/top-liked' => [[['_route' => 'app_micro_post_topliked', '_controller' => 'App\\Controller\\MicroPostController::topLiked'], null, null, null, false, false, null]],
        '/micro-post/follows' => [[['_route' => 'app_micro_post_follows', '_controller' => 'App\\Controller\\MicroPostController::follows'], null, null, null, false, false, null]],
        '/admin/post_manage' => [[['_route' => 'app_post_manage', '_controller' => 'App\\Controller\\PostManageController::postManage'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/settings/profile' => [[['_route' => 'app_settings_profile', '_controller' => 'App\\Controller\\SettingsProfileController::profile'], null, null, null, false, false, null]],
        '/settings/profile-image' => [[['_route' => 'app_settings_profile_image', '_controller' => 'App\\Controller\\SettingsProfileController::profileImage'], null, null, null, false, false, null]],
        '/settings/theme' => [[['_route' => 'app_settings_theme', '_controller' => 'App\\Controller\\SettingsProfileController::theme'], null, null, null, false, false, null]],
        '/admin/user_manage' => [[['_route' => 'app_user_manage', '_controller' => 'App\\Controller\\UserManageController::userMange'], null, null, null, false, false, null]],
        '/admin/user_admin_manage' => [[['_route' => 'app_user_admin_manage', '_controller' => 'App\\Controller\\UserManageController::userAdminManage'], null, null, null, false, false, null]],
        '/admin/user_profile_manage' => [[['_route' => 'app_user_profile_manage', '_controller' => 'App\\Controller\\UserManageController::userProfileManage'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/follow/([^/]++)(*:185)'
                .'|/un(?'
                    .'|follow/([^/]++)(*:214)'
                    .'|like/([^/]++)(*:235)'
                .')'
                .'|/like/([^/]++)(*:258)'
                .'|/micro\\-post/([^/]++)(?'
                    .'|(*:290)'
                    .'|/(?'
                        .'|delete(*:308)'
                        .'|edit(*:320)'
                        .'|comment(*:335)'
                    .')'
                .')'
                .'|/profile/([^/]++)(?'
                    .'|(*:365)'
                    .'|/follow(?'
                        .'|s(*:384)'
                        .'|ers(*:395)'
                    .')'
                .')'
                .'|/admin/user_(?'
                    .'|unlock/([^/]++)(*:435)'
                    .'|lock/([^/]++)(*:456)'
                    .'|admin_manage/set_role/([^/]++)(*:494)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        185 => [[['_route' => 'app_follow', '_controller' => 'App\\Controller\\FollowerController::follow'], ['id'], null, null, false, true, null]],
        214 => [[['_route' => 'app_unfollow', '_controller' => 'App\\Controller\\FollowerController::unfollow'], ['id'], null, null, false, true, null]],
        235 => [[['_route' => 'app_unlike', '_controller' => 'App\\Controller\\LikeController::unlike'], ['id'], null, null, false, true, null]],
        258 => [[['_route' => 'app_like', '_controller' => 'App\\Controller\\LikeController::like'], ['id'], null, null, false, true, null]],
        290 => [[['_route' => 'app_micro_post_show', '_controller' => 'App\\Controller\\MicroPostController::showOne'], ['post'], null, null, false, true, null]],
        308 => [[['_route' => 'app_micro_post_delete', '_controller' => 'App\\Controller\\MicroPostController::delete'], ['post'], null, null, false, false, null]],
        320 => [[['_route' => 'app_micro_post_edit', '_controller' => 'App\\Controller\\MicroPostController::edit'], ['post'], null, null, false, false, null]],
        335 => [[['_route' => 'app_micro_post_comment', '_controller' => 'App\\Controller\\MicroPostController::addComment'], ['post'], null, null, false, false, null]],
        365 => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::show'], ['id'], null, null, false, true, null]],
        384 => [[['_route' => 'app_profile_follows', '_controller' => 'App\\Controller\\ProfileController::follows'], ['id'], null, null, false, false, null]],
        395 => [[['_route' => 'app_profile_followers', '_controller' => 'App\\Controller\\ProfileController::followers'], ['id'], null, null, false, false, null]],
        435 => [[['_route' => 'app_user_unlock', '_controller' => 'App\\Controller\\UserManageController::unlockAccount'], ['id'], null, null, false, true, null]],
        456 => [[['_route' => 'app_user_lock', '_controller' => 'App\\Controller\\UserManageController::lockAccount'], ['id'], null, null, false, true, null]],
        494 => [
            [['_route' => 'app_set_role_admin', '_controller' => 'App\\Controller\\UserManageController::setAdminRole'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
