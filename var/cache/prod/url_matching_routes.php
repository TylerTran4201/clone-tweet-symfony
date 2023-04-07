<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/micro-post/add' => [[['_route' => 'app_micro_post_add', '_controller' => 'App\\Controller\\MicroPostController::add'], null, null, null, false, false, null]],
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
                .'|/follow/([^/]++)(*:23)'
                .'|/un(?'
                    .'|follow/([^/]++)(*:51)'
                    .'|like/([^/]++)(*:71)'
                .')'
                .'|/like/([^/]++)(*:93)'
                .'|/micro\\-post/([^/]++)(?'
                    .'|(*:124)'
                    .'|/(?'
                        .'|delete(*:142)'
                        .'|edit(*:154)'
                        .'|comment(*:169)'
                    .')'
                .')'
                .'|/profile/([^/]++)(?'
                    .'|(*:199)'
                    .'|/follow(?'
                        .'|s(*:218)'
                        .'|ers(*:229)'
                    .')'
                .')'
                .'|/admin/user_(?'
                    .'|unlock/([^/]++)(*:269)'
                    .'|lock/([^/]++)(*:290)'
                    .'|admin_manage/set_role/([^/]++)(*:328)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'app_follow', '_controller' => 'App\\Controller\\FollowerController::follow'], ['id'], null, null, false, true, null]],
        51 => [[['_route' => 'app_unfollow', '_controller' => 'App\\Controller\\FollowerController::unfollow'], ['id'], null, null, false, true, null]],
        71 => [[['_route' => 'app_unlike', '_controller' => 'App\\Controller\\LikeController::unlike'], ['id'], null, null, false, true, null]],
        93 => [[['_route' => 'app_like', '_controller' => 'App\\Controller\\LikeController::like'], ['id'], null, null, false, true, null]],
        124 => [[['_route' => 'app_micro_post_show', '_controller' => 'App\\Controller\\MicroPostController::showOne'], ['post'], null, null, false, true, null]],
        142 => [[['_route' => 'app_micro_post_delete', '_controller' => 'App\\Controller\\MicroPostController::delete'], ['post'], null, null, false, false, null]],
        154 => [[['_route' => 'app_micro_post_edit', '_controller' => 'App\\Controller\\MicroPostController::edit'], ['post'], null, null, false, false, null]],
        169 => [[['_route' => 'app_micro_post_comment', '_controller' => 'App\\Controller\\MicroPostController::addComment'], ['post'], null, null, false, false, null]],
        199 => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::show'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'app_profile_follows', '_controller' => 'App\\Controller\\ProfileController::follows'], ['id'], null, null, false, false, null]],
        229 => [[['_route' => 'app_profile_followers', '_controller' => 'App\\Controller\\ProfileController::followers'], ['id'], null, null, false, false, null]],
        269 => [[['_route' => 'app_user_unlock', '_controller' => 'App\\Controller\\UserManageController::unlockAccount'], ['id'], null, null, false, true, null]],
        290 => [[['_route' => 'app_user_lock', '_controller' => 'App\\Controller\\UserManageController::lockAccount'], ['id'], null, null, false, true, null]],
        328 => [
            [['_route' => 'app_set_role_admin', '_controller' => 'App\\Controller\\UserManageController::setAdminRole'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
