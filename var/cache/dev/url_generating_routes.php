<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin.formation.index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminFormationController::index'], [], [['text', '/admin']], [], []],
    'admin.formation.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminFormationController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/formation']], [], []],
    'admin.formation.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminFormationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/formation']], [], []],
    'categorie.route' => [[], ['_controller' => 'App\\Controller\\CategorieController::index'], [], [['text', '/categories']], [], []],
    'categorie.show' => [['slug', 'id'], ['_controller' => 'App\\Controller\\CategorieController::show'], ['slug' => '[a-z0-9\\-]*'], [['variable', '-', '[^/]++', 'id', true], ['variable', '/', '[a-z0-9\\-]*', 'slug', true], ['text', '/categorie']], [], []],
    'formation.route' => [[], ['_controller' => 'App\\Controller\\FormationController::index'], [], [['text', '/formations']], [], []],
    'formation.show' => [['slug', 'id'], ['_controller' => 'App\\Controller\\FormationController::show'], ['slug' => '[a-z0-9\\-]*'], [['variable', '-', '[^/]++', 'id', true], ['variable', '/', '[a-z0-9\\-]*', 'slug', true], ['text', '/formations']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'informations' => [[], ['_controller' => 'App\\Controller\\InformationsController::index'], [], [['text', '/informations']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], [], [], [['text', '/logout']], [], []],
];
