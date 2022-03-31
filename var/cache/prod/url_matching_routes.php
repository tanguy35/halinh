<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/list' => [[['_route' => 'admin_list', '_controller' => 'App\\Controller\\AdminController::listAll'], null, null, null, false, false, null]],
        '/admin/new' => [[['_route' => 'admin_new', '_controller' => 'App\\Controller\\AdminController::addArticle'], null, null, null, false, false, null]],
        '/admin/categorie/new' => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\CategoriesController::addCategorie'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main_home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/mentions' => [[['_route' => 'mentions', '_controller' => 'App\\Controller\\MainController::mentions'], null, null, null, false, false, null]],
        '/ginlo' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/register030578' => [[['_route' => 'user_register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|update/([^/]++)(*:32)'
                    .'|delete/([^/]++)(*:54)'
                .')'
                .'|/detail/([^/]++)(*:78)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'admin_update', '_controller' => 'App\\Controller\\AdminController::updateArticle'], ['id'], null, null, false, true, null]],
        54 => [[['_route' => 'admin_delete', '_controller' => 'App\\Controller\\AdminController::deleteArticles'], ['id'], null, null, false, true, null]],
        78 => [
            [['_route' => 'detail', '_controller' => 'App\\Controller\\MainController::detail'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
