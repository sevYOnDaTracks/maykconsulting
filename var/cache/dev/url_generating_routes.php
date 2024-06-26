<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_administration' => [[], ['_controller' => 'App\\Controller\\AdministrationController::index'], [], [['text', '/administration/']], [], [], []],
    'app_user_profil' => [[], ['_controller' => 'App\\Controller\\AdministrationController::userProfil'], [], [['text', '/administration/user_profil']], [], [], []],
    'user_list' => [[], ['_controller' => 'App\\Controller\\AdministrationController::find_all_user'], [], [['text', '/administration/user_list']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\AdministrationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/administration/delete_user']], [], [], []],
    'app_delete_avatar' => [[], ['_controller' => 'App\\Controller\\AdministrationController::deleteAvatar'], [], [['text', '/administration/delete_avatar']], [], [], []],
    'app_delete_cni' => [[], ['_controller' => 'App\\Controller\\AdministrationController::deleteCNI'], [], [['text', '/administration/delete_cni']], [], [], []],
    'app_delete_passport' => [[], ['_controller' => 'App\\Controller\\AdministrationController::deletePassport'], [], [['text', '/administration/delete_passport']], [], [], []],
    'public_message_list' => [[], ['_controller' => 'App\\Controller\\AdministrationController::find_all_messagePublic'], [], [['text', '/administration/publicMessage']], [], [], []],
    'app_public_message_envoyez_mail' => [[], ['_controller' => 'App\\Controller\\AdministrationController::envoyezMailPublicMessage'], [], [['text', '/administration/publicMessage/envoyezMessage']], [], [], []],
    'app_message_delete' => [['id'], ['_controller' => 'App\\Controller\\AdministrationController::deleteMessage'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/administration/deleteMessage']], [], [], []],
    'user_update' => [['id'], ['_controller' => 'App\\Controller\\AdministrationController::updateUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/administration/user/update']], [], [], []],
    'user_update_document' => [[], ['_controller' => 'App\\Controller\\AdministrationController::updateDocuementUser'], [], [['text', '/administration/user/update_document']], [], [], []],
    'app_admission' => [[], ['_controller' => 'App\\Controller\\AdmissionController::index'], [], [['text', '/admission']], [], [], []],
    'app_dossier_index' => [[], ['_controller' => 'App\\Controller\\DossierController::index'], [], [['text', '/dossier/all']], [], [], []],
    'app_dossier_new' => [[], ['_controller' => 'App\\Controller\\DossierController::new'], [], [['text', '/dossier/new']], [], [], []],
    'app_dossier_show' => [['id'], ['_controller' => 'App\\Controller\\DossierController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dossier']], [], [], []],
    'app_dossier_edit' => [['id'], ['_controller' => 'App\\Controller\\DossierController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dossier']], [], [], []],
    'app_dossier_delete' => [['id'], ['_controller' => 'App\\Controller\\DossierController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dossier']], [], [], []],
    'export_data' => [[], ['_controller' => 'App\\Controller\\ExportController::exportData'], [], [['text', '/export']], [], [], []],
    'export_data_hebergement' => [[], ['_controller' => 'App\\Controller\\ExportController::exportDataHebergement'], [], [['text', '/export/hebergement']], [], [], []],
    'app_facture_test' => [[], ['_controller' => 'App\\Controller\\FactureController::generatePdf'], [], [['text', '/facture/garant']], [], [], []],
    'app_facture_hebergement' => [[], ['_controller' => 'App\\Controller\\FactureController::generatePdfHebergement'], [], [['text', '/facture/hebergement']], [], [], []],
    'app_garant' => [[], ['_controller' => 'App\\Controller\\GarantController::index'], [], [['text', '/garant/']], [], [], []],
    'app_garant_update' => [['id'], ['_controller' => 'App\\Controller\\GarantController::updateGarantDossier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/garant/update']], [], [], []],
    'app_garant_justificatif_paiement' => [[], ['_controller' => 'App\\Controller\\GarantController::recupererJustificatifPaiement'], [], [['text', '/garant/justificatif-Paiement']], [], [], []],
    'app_garant_new' => [[], ['_controller' => 'App\\Controller\\GarantController::new'], [], [['text', '/garant/new']], [], [], []],
    'app_garant_management' => [[], ['_controller' => 'App\\Controller\\GarantController::allGarant'], [], [['text', '/garant/all']], [], [], []],
    'app_garant_delete' => [['id'], ['_controller' => 'App\\Controller\\GarantController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/garant/delete']], [], [], []],
    'app_garant_envoyez_mail' => [[], ['_controller' => 'App\\Controller\\GarantController::envoyezMail'], [], [['text', '/garant/envoyezMessage']], [], [], []],
    'app_hebergement' => [[], ['_controller' => 'App\\Controller\\HebergementController::index'], [], [['text', '/hebergement/']], [], [], []],
    'app_hebergement_new' => [[], ['_controller' => 'App\\Controller\\HebergementController::new'], [], [['text', '/hebergement/new']], [], [], []],
    'app_hebergement_justificatif_paiement' => [[], ['_controller' => 'App\\Controller\\HebergementController::recupererJustificatifPaiement'], [], [['text', '/hebergement/justificatif-Paiement']], [], [], []],
    'app_hebergement_delete' => [['id'], ['_controller' => 'App\\Controller\\HebergementController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/hebergement/delete']], [], [], []],
    'app_hebergement_management' => [[], ['_controller' => 'App\\Controller\\HebergementController::allGarant'], [], [['text', '/hebergement/all']], [], [], []],
    'app_hebergement_envoyez_mail' => [[], ['_controller' => 'App\\Controller\\HebergementController::envoyezMail'], [], [['text', '/hebergement/envoyezMessageHebergement']], [], [], []],
    'app_hebergement_update' => [['id'], ['_controller' => 'App\\Controller\\HebergementController::updateHebergement'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/hebergement/update']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'app_parcours' => [[], ['_controller' => 'App\\Controller\\ParcoursController::index'], [], [['text', '/administration/parcours']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'welcome' => [[], ['_controller' => 'App\\Controller\\WelcomeController::index'], [], [['text', '/']], [], [], []],
    'notFound' => [[], ['_controller' => 'App\\Controller\\WelcomeController::notFound'], [], [['text', '/404']], [], [], []],
    'logout' => [[], [], [], [['text', '/logout']], [], [], []],
];
