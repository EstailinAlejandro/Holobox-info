<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::Home'], null, null, null, false, false, null]],
        '/addvideo' => [[['_route' => 'add-video', '_controller' => 'App\\Controller\\HomeController::showInsert'], null, null, null, false, false, null]],
        '/videos3' => [[['_route' => 'showVideos3', '_controller' => 'App\\Controller\\HomeController::showVideos3'], null, null, null, false, false, null]],
        '/videos2' => [[['_route' => 'showVideos2', '_controller' => 'App\\Controller\\HomeController::showVideos2'], null, null, null, false, false, null]],
        '/videos' => [[['_route' => 'showVideos', '_controller' => 'App\\Controller\\HomeController::showVideos'], null, null, null, false, false, null]],
        '/branches' => [[['_route' => 'branches', '_controller' => 'App\\Controller\\HomeController::branches'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/delete/([^/]++)(*:23)'
                .'|/Show1video/([^/]++)(*:50)'
                .'|/courses/([^/]++)(*:74)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:112)'
                    .'|wdt/([^/]++)(*:132)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:178)'
                            .'|router(*:192)'
                            .'|exception(?'
                                .'|(*:212)'
                                .'|\\.css(*:225)'
                            .')'
                        .')'
                        .'|(*:235)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\HomeController::delete'], ['id'], null, null, false, true, null]],
        50 => [[['_route' => 'OnlyVideo', '_controller' => 'App\\Controller\\HomeController::OnlyVideo'], ['id'], null, null, false, true, null]],
        74 => [[['_route' => 'courses', '_controller' => 'App\\Controller\\HomeController::courses'], ['id'], null, null, false, true, null]],
        112 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        132 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        178 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        192 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        212 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        225 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        235 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
