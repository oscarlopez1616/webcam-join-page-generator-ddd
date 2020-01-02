<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/authorize' => [[['_route' => 'oauth2_authorize', '_controller' => 'Trikoder\\Bundle\\OAuth2Bundle\\Controller\\AuthorizationController::indexAction'], null, ['GET' => 0], null, false, false, null]],
        '/token' => [[['_route' => 'oauth2_token', '_controller' => 'Trikoder\\Bundle\\OAuth2Bundle\\Controller\\TokenController::indexAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/cam_landing_creator/cam_unit' => [[['_route' => 'post_cam_unit', '_controller' => 'AuditorFramework\\Module\\CamLandingGenerator\\Infrastructure\\Ui\\Http\\Rest\\Controller\\CamUnitController::postCamUnit'], null, ['POST' => 0], null, true, false, null]],
        '/api/cam_landing_creator/affiliate' => [[['_route' => 'post_affiliate', '_controller' => 'AuditorFramework\\Module\\CamLandingGenerator\\Infrastructure\\Ui\\Http\\Rest\\Controller\\AffiliateController::postAffiliate'], null, ['POST' => 0], null, true, false, null]],
        '/api/security_and_acl/user/acl/profile' => [[['_route' => 'user_profile', '_controller' => 'TheCodeFighters\\Bundle\\AuditorFramework\\Common\\Module\\SecurityAndAcl\\Infrastructure\\Ui\\Http\\Rest\\Controller\\UserController::getAclUser'], null, ['GET' => 0], null, false, false, null]],
        '/api/security_and_acl/user' => [
            [['_route' => 'post_create_user_action', '_controller' => 'TheCodeFighters\\Bundle\\AuditorFramework\\Common\\Module\\SecurityAndAcl\\Infrastructure\\Ui\\Http\\Rest\\Controller\\UserController::postUserAction'], null, ['POST' => 0], null, true, false, null],
            [['_route' => 'patch', '_controller' => 'TheCodeFighters\\Bundle\\AuditorFramework\\Common\\Module\\SecurityAndAcl\\Infrastructure\\Ui\\Http\\Rest\\Controller\\UserController::patchAction'], null, ['PATCH' => 0], null, true, false, null],
        ],
        '/api/common/csv' => [[['_route' => 'post_csv_key_value', '_controller' => 'TheCodeFighters\\Bundle\\AuditorFramework\\Common\\Types\\Infrastructure\\Ui\\Http\\Rest\\Controller\\CsvController::postCsvKeyValue'], null, ['POST' => 0], null, true, false, null]],
        '/api/healthcheck/ping' => [[['_route' => 'get_ping', '_controller' => 'TheCodeFighters\\Bundle\\AuditorFramework\\Common\\Types\\Infrastructure\\Ui\\Http\\Rest\\Controller\\HealthCheckController::getPing'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/api/(?'
                    .'|cam_landing_creator/join_page/([^/]++)(*:215)'
                    .'|security_and_acl/user/(?'
                        .'|password/([^/]++)/([^/]++)(*:274)'
                        .'|user_name/([^/]++)(*:300)'
                        .'|([^/]++)(*:316)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        215 => [[['_route' => 'get_join_page', '_controller' => 'AuditorFramework\\Module\\CamLandingGenerator\\Infrastructure\\Ui\\Http\\Rest\\Controller\\JoinPageController::getJoinPage'], ['id'], ['GET' => 0], null, true, true, null]],
        274 => [[['_route' => 'get_forgot_password', '_controller' => 'TheCodeFighters\\Bundle\\AuditorFramework\\Common\\Module\\SecurityAndAcl\\Infrastructure\\Ui\\Http\\Rest\\Controller\\UserController::getPasswordRecoveryAction'], ['passwordRecoveryId', 'userName'], ['GET' => 0], null, false, true, null]],
        300 => [[['_route' => 'user_id_by_username', '_controller' => 'TheCodeFighters\\Bundle\\AuditorFramework\\Common\\Module\\SecurityAndAcl\\Infrastructure\\Ui\\Http\\Rest\\Controller\\UserController::getUserByUserName'], ['username'], ['GET' => 0], null, true, true, null]],
        316 => [
            [['_route' => 'user_by_user_id', '_controller' => 'TheCodeFighters\\Bundle\\AuditorFramework\\Common\\Module\\SecurityAndAcl\\Infrastructure\\Ui\\Http\\Rest\\Controller\\UserController::getUserByUserId'], ['userId'], ['GET' => 0], null, true, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
