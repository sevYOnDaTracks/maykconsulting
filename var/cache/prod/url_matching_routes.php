<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/administration' => [[['_route' => 'app_administration', '_controller' => 'App\\Controller\\AdministrationController::index'], null, null, null, true, false, null]],
        '/administration/user_profil' => [[['_route' => 'app_user_profil', '_controller' => 'App\\Controller\\AdministrationController::userProfil'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/administration/user_list' => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\AdministrationController::find_all_user'], null, ['GET' => 0], null, false, false, null]],
        '/administration/delete_avatar' => [[['_route' => 'app_delete_avatar', '_controller' => 'App\\Controller\\AdministrationController::deleteAvatar'], null, ['POST' => 0], null, false, false, null]],
        '/administration/publicMessage' => [[['_route' => 'public_message_list', '_controller' => 'App\\Controller\\AdministrationController::find_all_messagePublic'], null, ['GET' => 0], null, false, false, null]],
        '/admission' => [[['_route' => 'app_admission', '_controller' => 'App\\Controller\\AdmissionController::index'], null, null, null, false, false, null]],
        '/dossier/all' => [[['_route' => 'app_dossier_index', '_controller' => 'App\\Controller\\DossierController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dossier/new' => [[['_route' => 'app_dossier_new', '_controller' => 'App\\Controller\\DossierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/export' => [[['_route' => 'export_data', '_controller' => 'App\\Controller\\ExportController::exportData'], null, null, null, false, false, null]],
        '/facture/garant' => [[['_route' => 'app_facture_test', '_controller' => 'App\\Controller\\FactureController::generatePdf'], null, null, null, false, false, null]],
        '/administration/garant' => [[['_route' => 'app_garant', '_controller' => 'App\\Controller\\GarantController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/administration/new' => [[['_route' => 'app_garant_new', '_controller' => 'App\\Controller\\GarantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/administration/garant/all' => [[['_route' => 'app_garant_management', '_controller' => 'App\\Controller\\GarantController::allGarant'], null, ['GET' => 0], null, false, false, null]],
        '/administration/garant/envoyezMessage' => [[['_route' => 'app_garant_envoyez_mail', '_controller' => 'App\\Controller\\GarantController::envoyezMail'], null, ['POST' => 0], null, false, false, null]],
        '/hebergement' => [[['_route' => 'app_hebergement', '_controller' => 'App\\Controller\\HebergementController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'welcome', '_controller' => 'App\\Controller\\WelcomeController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/404' => [[['_route' => 'notFound', '_controller' => 'App\\Controller\\WelcomeController::notFound'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/administration/(?'
                    .'|delete(?'
                        .'|_user/([^/]++)(*:49)'
                        .'|Message/([^/]++)(*:72)'
                    .')'
                    .'|user/update/([^/]++)(*:100)'
                    .'|garant/(?'
                        .'|update/([^/]++)(*:133)'
                        .'|delete/([^/]++)(*:156)'
                    .')'
                .')'
                .'|/dossier/([^/]++)(?'
                    .'|(*:186)'
                    .'|/edit(*:199)'
                    .'|(*:207)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        49 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\AdministrationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        72 => [[['_route' => 'app_message_delete', '_controller' => 'App\\Controller\\AdministrationController::deleteMessage'], ['id'], ['POST' => 0], null, false, true, null]],
        100 => [[['_route' => 'user_update', '_controller' => 'App\\Controller\\AdministrationController::updateUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        133 => [[['_route' => 'app_garant_update', '_controller' => 'App\\Controller\\GarantController::updateGarantDossier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        156 => [[['_route' => 'app_garant_delete', '_controller' => 'App\\Controller\\GarantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        186 => [[['_route' => 'app_dossier_show', '_controller' => 'App\\Controller\\DossierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        199 => [[['_route' => 'app_dossier_edit', '_controller' => 'App\\Controller\\DossierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        207 => [
            [['_route' => 'app_dossier_delete', '_controller' => 'App\\Controller\\DossierController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
