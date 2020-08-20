<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin.formation.index', '_controller' => 'App\\Controller\\Admin\\AdminFormationController::index'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'categorie.route', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/formations' => [[['_route' => 'formation.route', '_controller' => 'App\\Controller\\FormationController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/informations' => [[['_route' => 'informations', '_controller' => 'App\\Controller\\InformationsController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/formation/([^/]++)(?'
                    .'|(*:35)'
                .')'
                .'|/categorie/([a-z0-9\\-]*)\\-([^/]++)(*:77)'
                .'|/formations/([a-z0-9\\-]*)\\-([^/]++)(*:119)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => 'admin.formation.edit', '_controller' => 'App\\Controller\\Admin\\AdminFormationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'admin.formation.delete', '_controller' => 'App\\Controller\\Admin\\AdminFormationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        77 => [[['_route' => 'categorie.show', '_controller' => 'App\\Controller\\CategorieController::show'], ['slug', 'id'], null, null, false, true, null]],
        119 => [
            [['_route' => 'formation.show', '_controller' => 'App\\Controller\\FormationController::show'], ['slug', 'id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
