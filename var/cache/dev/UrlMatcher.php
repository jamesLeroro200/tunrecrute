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
        '/admin' => [[['_route' => 'admin_dash', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/signals' => [[['_route' => 'admin_signals', '_controller' => 'App\\Controller\\AdminController::AdminSignals'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::ShowUsers'], null, ['GET' => 0], null, false, false, null]],
        '/admin/edit' => [[['_route' => 'admin_edit', '_controller' => 'App\\Controller\\AdminController::editAdmin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/annonce' => [[['_route' => 'annonce_index', '_controller' => 'App\\Controller\\AnnonceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/annonce/mes_annonces' => [[['_route' => 'mes_annonces', '_controller' => 'App\\Controller\\AnnonceController::mesAnnonces'], null, null, null, false, false, null]],
        '/annonce/new' => [[['_route' => 'annonce_new', '_controller' => 'App\\Controller\\AnnonceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/annonce/search' => [[['_route' => 'search_annonce', '_controller' => 'App\\Controller\\AnnonceController::findAnnonce'], null, null, null, false, false, null]],
        '/candidature/applications' => [[['_route' => 'candidature_index', '_controller' => 'App\\Controller\\CandidatureController::index'], null, ['GET' => 0], null, false, false, null]],
        '/candidature/managed/applications' => [[['_route' => 'managed_applications', '_controller' => 'App\\Controller\\CandidatureController::managedApplications'], null, ['GET' => 0], null, false, false, null]],
        '/education/new' => [[['_route' => 'education_new', '_controller' => 'App\\Controller\\EducationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\LandingController::index'], null, ['GET' => 0], null, false, false, null]],
        '/language/prof/new' => [[['_route' => 'language_prof_new', '_controller' => 'App\\Controller\\LanguageProfController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/prof/skill/new' => [[['_route' => 'prof_skill_new', '_controller' => 'App\\Controller\\ProfSkillController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile/edit' => [[['_route' => 'edit_profile', '_controller' => 'App\\Controller\\ProfileController::editProfile'], null, null, null, false, false, null]],
        '/profile/resume/edit' => [[['_route' => 'resume_edit', '_controller' => 'App\\Controller\\ProfileController::resumeEdit'], null, null, null, false, false, null]],
        '/profile/applied' => [[['_route' => 'applied_jobs', '_controller' => 'App\\Controller\\ProfileController::applied'], null, null, null, false, false, null]],
        '/user/about' => [[['_route' => 'about_user', '_controller' => 'App\\Controller\\ProfileController::about_user'], null, null, null, false, false, null]],
        '/user/details' => [[['_route' => 'details', '_controller' => 'App\\Controller\\ProfileController::user_details'], null, null, null, false, false, null]],
        '/downloadcv' => [[['_route' => 'downloadCV', '_controller' => 'App\\Controller\\ProfileController::downCV'], null, null, null, false, false, null]],
        '/downloadcl' => [[['_route' => 'downloadCL', '_controller' => 'App\\Controller\\ProfileController::downCL'], null, null, null, false, false, null]],
        '/registerCand' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/registerEmp' => [[['_route' => 'employer_reg', '_controller' => 'App\\Controller\\RegistrationController::registerEmployer'], null, null, null, false, false, null]],
        '/registeradmin' => [[['_route' => 'admin_register', '_controller' => 'App\\Controller\\RegistrationController::registerAdmin'], null, null, null, false, false, null]],
        '/chooseRole' => [[['_route' => 'Choose_Role', '_controller' => 'App\\Controller\\RegistrationController::choose'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/reactivate' => [[['_route' => 'reactivate', '_controller' => 'App\\Controller\\SecurityController::reactivate'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/social/media/new' => [[['_route' => 'social_media_new', '_controller' => 'App\\Controller\\SocialMediaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/work/exp/new' => [[['_route' => 'work_exp_new', '_controller' => 'App\\Controller\\WorkExpController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|signal(?'
                            .'|s/([^/]++)(*:201)'
                            .'|/delete/([^/]++)(*:225)'
                        .')'
                        .'|deactivate/([^/]++)(*:253)'
                        .'|activate/([^/]++)(*:278)'
                    .')'
                    .'|nnonce/(?'
                        .'|show/(\\d+)(*:307)'
                        .'|([^/]++)/edit(*:328)'
                        .'|delete/([^/]++)(*:351)'
                        .'|report/([^/]++)(*:374)'
                    .')'
                .')'
                .'|/candidature(?'
                    .'|/(?'
                        .'|([^/]++)/([^/]++)(*:420)'
                        .'|new/([^/]++)/([^/]++)(*:449)'
                        .'|([^/]++)(?'
                            .'|(*:468)'
                            .'|/edit(*:481)'
                        .')'
                        .'|status/([^/]++)/([^/]++)(?:/([^/]++))?(*:528)'
                    .')'
                    .'|delete/([^/]++)/([^/]++)(*:561)'
                .')'
                .'|/education/(?'
                    .'|edit/([^/]++)(*:597)'
                    .'|([^/]++)(*:613)'
                .')'
                .'|/language/prof/([^/]++)(?'
                    .'|/edit(*:653)'
                    .'|(*:661)'
                .')'
                .'|/prof(?'
                    .'|/skill/([^/]++)(?'
                        .'|/edit(*:701)'
                        .'|(*:709)'
                    .')'
                    .'|ile/resume(?:/([^/]++))?(*:742)'
                .')'
                .'|/deactivate/([^/]++)(*:771)'
                .'|/social/media/(?'
                    .'|edit/([^/]++)(*:809)'
                    .'|([^/]++)(*:825)'
                .')'
                .'|/work/exp/([^/]++)(?'
                    .'|/edit(*:860)'
                    .'|(*:868)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        201 => [[['_route' => 'annonce_signals', '_controller' => 'App\\Controller\\AdminController::AnnonceSignals'], ['annonce_id'], ['GET' => 0], null, false, true, null]],
        225 => [[['_route' => 'signal_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], null, null, false, true, null]],
        253 => [[['_route' => 'deactivate_user', '_controller' => 'App\\Controller\\AdminController::DeactivateUser'], ['id'], null, null, false, true, null]],
        278 => [[['_route' => 'activate_user', '_controller' => 'App\\Controller\\AdminController::ActivateUser'], ['id'], null, null, false, true, null]],
        307 => [[['_route' => 'annonce_show', '_controller' => 'App\\Controller\\AnnonceController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        328 => [[['_route' => 'annonce_edit', '_controller' => 'App\\Controller\\AnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        351 => [[['_route' => 'annonce_delete', '_controller' => 'App\\Controller\\AnnonceController::delete'], ['id'], null, null, false, true, null]],
        374 => [[['_route' => 'annonce_report', '_controller' => 'App\\Controller\\AnnonceController::Report'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        420 => [[['_route' => 'candidature_par_annonce', '_controller' => 'App\\Controller\\CandidatureController::CandiatureParAnnonce'], ['annonce_id', 'user_id'], ['GET' => 0], null, false, true, null]],
        449 => [[['_route' => 'candidature_new', '_controller' => 'App\\Controller\\CandidatureController::new'], ['annonceId', 'UserId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        468 => [[['_route' => 'candidature_show', '_controller' => 'App\\Controller\\CandidatureController::show'], ['User'], ['GET' => 0], null, false, true, null]],
        481 => [[['_route' => 'candidature_edit', '_controller' => 'App\\Controller\\CandidatureController::edit'], ['User'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        528 => [[['_route' => 'status', 's' => null, '_controller' => 'App\\Controller\\CandidatureController::status'], ['AnnonceId', 'UserId', 's'], null, null, false, true, null]],
        561 => [[['_route' => 'candidature_delete', '_controller' => 'App\\Controller\\CandidatureController::delete'], ['UserId', 'AnnonceId'], null, null, false, true, null]],
        597 => [[['_route' => 'education_edit', '_controller' => 'App\\Controller\\EducationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        613 => [[['_route' => 'education_delete', '_controller' => 'App\\Controller\\EducationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        653 => [[['_route' => 'language_prof_edit', '_controller' => 'App\\Controller\\LanguageProfController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        661 => [[['_route' => 'language_prof_delete', '_controller' => 'App\\Controller\\LanguageProfController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        701 => [[['_route' => 'prof_skill_edit', '_controller' => 'App\\Controller\\ProfSkillController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        709 => [[['_route' => 'prof_skill_delete', '_controller' => 'App\\Controller\\ProfSkillController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        742 => [[['_route' => 'resume', 'id' => null, '_controller' => 'App\\Controller\\ProfileController::resume'], ['id'], null, null, false, true, null]],
        771 => [[['_route' => 'deactivate', '_controller' => 'App\\Controller\\ProfileController::deactivate'], ['id'], null, null, false, true, null]],
        809 => [[['_route' => 'social_media_edit', '_controller' => 'App\\Controller\\SocialMediaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        825 => [[['_route' => 'social_media_delete', '_controller' => 'App\\Controller\\SocialMediaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        860 => [[['_route' => 'work_exp_edit', '_controller' => 'App\\Controller\\WorkExpController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        868 => [
            [['_route' => 'work_exp_delete', '_controller' => 'App\\Controller\\WorkExpController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
