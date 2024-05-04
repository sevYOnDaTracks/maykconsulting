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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/administration' => [[['_route' => 'app_administration', '_controller' => 'App\\Controller\\AdministrationController::index'], null, null, null, true, false, null]],
        '/administration/user_profil' => [[['_route' => 'app_user_profil', '_controller' => 'App\\Controller\\AdministrationController::userProfil'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/administration/user_list' => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\AdministrationController::find_all_user'], null, ['GET' => 0], null, false, false, null]],
        '/administration/delete_avatar' => [[['_route' => 'app_delete_avatar', '_controller' => 'App\\Controller\\AdministrationController::deleteAvatar'], null, ['POST' => 0], null, false, false, null]],
        '/administration/delete_cni' => [[['_route' => 'app_delete_cni', '_controller' => 'App\\Controller\\AdministrationController::deleteCNI'], null, ['POST' => 0], null, false, false, null]],
        '/administration/delete_passport' => [[['_route' => 'app_delete_passport', '_controller' => 'App\\Controller\\AdministrationController::deletePassport'], null, ['POST' => 0], null, false, false, null]],
        '/administration/publicMessage' => [[['_route' => 'public_message_list', '_controller' => 'App\\Controller\\AdministrationController::find_all_messagePublic'], null, ['GET' => 0], null, false, false, null]],
        '/administration/publicMessage/envoyezMessage' => [[['_route' => 'app_public_message_envoyez_mail', '_controller' => 'App\\Controller\\AdministrationController::envoyezMailPublicMessage'], null, ['POST' => 0], null, false, false, null]],
        '/administration/user/update_document' => [[['_route' => 'user_update_document', '_controller' => 'App\\Controller\\AdministrationController::updateDocuementUser'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admission' => [[['_route' => 'app_admission', '_controller' => 'App\\Controller\\AdmissionController::index'], null, null, null, false, false, null]],
        '/dossier/all' => [[['_route' => 'app_dossier_index', '_controller' => 'App\\Controller\\DossierController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dossier/new' => [[['_route' => 'app_dossier_new', '_controller' => 'App\\Controller\\DossierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/export' => [[['_route' => 'export_data', '_controller' => 'App\\Controller\\ExportController::exportData'], null, null, null, false, false, null]],
        '/export/hebergement' => [[['_route' => 'export_data_hebergement', '_controller' => 'App\\Controller\\ExportController::exportDataHebergement'], null, null, null, false, false, null]],
        '/facture/garant' => [[['_route' => 'app_facture_test', '_controller' => 'App\\Controller\\FactureController::generatePdf'], null, null, null, false, false, null]],
        '/facture/hebergement' => [[['_route' => 'app_facture_hebergement', '_controller' => 'App\\Controller\\FactureController::generatePdfHebergement'], null, null, null, false, false, null]],
        '/garant' => [[['_route' => 'app_garant', '_controller' => 'App\\Controller\\GarantController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/garant/justificatif-Paiement' => [[['_route' => 'app_garant_justificatif_paiement', '_controller' => 'App\\Controller\\GarantController::recupererJustificatifPaiement'], null, ['POST' => 0], null, false, false, null]],
        '/garant/new' => [[['_route' => 'app_garant_new', '_controller' => 'App\\Controller\\GarantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/garant/all' => [[['_route' => 'app_garant_management', '_controller' => 'App\\Controller\\GarantController::allGarant'], null, ['GET' => 0], null, false, false, null]],
        '/garant/envoyezMessage' => [[['_route' => 'app_garant_envoyez_mail', '_controller' => 'App\\Controller\\GarantController::envoyezMail'], null, ['POST' => 0], null, false, false, null]],
        '/hebergement' => [[['_route' => 'app_hebergement', '_controller' => 'App\\Controller\\HebergementController::index'], null, null, null, true, false, null]],
        '/hebergement/new' => [[['_route' => 'app_hebergement_new', '_controller' => 'App\\Controller\\HebergementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/hebergement/justificatif-Paiement' => [[['_route' => 'app_hebergement_justificatif_paiement', '_controller' => 'App\\Controller\\HebergementController::recupererJustificatifPaiement'], null, ['POST' => 0], null, false, false, null]],
        '/hebergement/all' => [[['_route' => 'app_hebergement_management', '_controller' => 'App\\Controller\\HebergementController::allGarant'], null, ['GET' => 0], null, false, false, null]],
        '/hebergement/envoyezMessageHebergement' => [[['_route' => 'app_hebergement_envoyez_mail', '_controller' => 'App\\Controller\\HebergementController::envoyezMail'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/administration/parcours' => [[['_route' => 'app_parcours', '_controller' => 'App\\Controller\\ParcoursController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'welcome', '_controller' => 'App\\Controller\\WelcomeController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/404' => [[['_route' => 'notFound', '_controller' => 'App\\Controller\\WelcomeController::notFound'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
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
                .'|/administration/(?'
                    .'|delete(?'
                        .'|_user/([^/]++)(*:211)'
                        .'|Message/([^/]++)(*:235)'
                    .')'
                    .'|user/update/([^/]++)(*:264)'
                .')'
                .'|/dossier/([^/]++)(?'
                    .'|(*:293)'
                    .'|/edit(*:306)'
                    .'|(*:314)'
                .')'
                .'|/garant/(?'
                    .'|update/([^/]++)(*:349)'
                    .'|delete/([^/]++)(*:372)'
                .')'
                .'|/hebergement/(?'
                    .'|delete/([^/]++)(*:412)'
                    .'|update/([^/]++)(*:435)'
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
        211 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\AdministrationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        235 => [[['_route' => 'app_message_delete', '_controller' => 'App\\Controller\\AdministrationController::deleteMessage'], ['id'], ['POST' => 0], null, false, true, null]],
        264 => [[['_route' => 'user_update', '_controller' => 'App\\Controller\\AdministrationController::updateUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        293 => [[['_route' => 'app_dossier_show', '_controller' => 'App\\Controller\\DossierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        306 => [[['_route' => 'app_dossier_edit', '_controller' => 'App\\Controller\\DossierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        314 => [[['_route' => 'app_dossier_delete', '_controller' => 'App\\Controller\\DossierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        349 => [[['_route' => 'app_garant_update', '_controller' => 'App\\Controller\\GarantController::updateGarantDossier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        372 => [[['_route' => 'app_garant_delete', '_controller' => 'App\\Controller\\GarantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        412 => [[['_route' => 'app_hebergement_delete', '_controller' => 'App\\Controller\\HebergementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        435 => [
            [['_route' => 'app_hebergement_update', '_controller' => 'App\\Controller\\HebergementController::updateHebergement'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
