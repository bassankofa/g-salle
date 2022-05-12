<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/printer-data.html' => [[['_route' => 'imprimer-data', '_controller' => 'App\\Controller\\PrinterCalendarController::getData'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/printer-calendrier.html' => [[['_route' => 'imprimer-calendrier', '_controller' => 'App\\Controller\\PrinterCalendarController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/liste-des-salles.html' => [[['_route' => 'room_index', '_controller' => 'App\\Controller\\RoomController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/nouvelle-salle.html' => [[['_route' => 'room_new', '_controller' => 'App\\Controller\\RoomController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/admin/historique.html' => [[['_route' => 'unavailability_index', '_controller' => 'App\\Controller\\UnavailabilityController::index'], null, ['GET' => 0], null, false, false, null]],
        '/nouvelle-reservation.html' => [[['_route' => 'unavailability_new', '_controller' => 'App\\Controller\\UnavailabilityController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/calendrier.html' => [[['_route' => 'unavailability_calendar', '_controller' => 'App\\Controller\\UnavailabilityController::calendar'], null, null, null, false, false, null]],
        '/nouvelle-type-reservation.html' => [[['_route' => 'type_reservation_new', '_controller' => 'App\\Controller\\UnavailabilityController::newTypeReservation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/utilisateurs.html' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/nouvel-utilisateur.html' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mot-de-passe.html' => [[['_route' => 'password_change', '_controller' => 'App\\Controller\\UserController::changePassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tableau-de-bord.html' => [[['_route' => 'user_dashboard', '_controller' => 'App\\Controller\\UserController::dashboard'], null, null, null, false, false, null]],
        '/fc-load-events' => [[['_route' => 'fullcalendar_load_events', '_controller' => 'Toiba\\FullCalendarBundle\\Controller\\CalendarController::loadAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/pagers/unavailabilitiesas(?'
                    .'|organiser/([^/]++)(*:54)'
                    .'|guest/([^/]++)(*:75)'
                .')'
                .'|/s(?'
                    .'|alle\\-([^/\\.]++)\\.html(*:110)'
                    .'|upprimer/reservation\\-([^/\\.]++)\\.html(*:156)'
                .')'
                .'|/admin/(?'
                    .'|modifier/(?'
                        .'|salle\\-([^/\\.]++)\\.html(*:210)'
                        .'|utilisateur\\-([^/\\.]++)\\.html(*:247)'
                    .')'
                    .'|supprimer/(?'
                        .'|salle\\-([^/\\.]++)\\.html(*:292)'
                        .'|utilisateur\\-([^/\\.]++)\\.html(*:329)'
                    .')'
                .')'
                .'|/reservation\\-([^/\\.]++)\\.html(*:369)'
                .'|/modifier/reservation\\-([^/\\.]++)\\.html(*:416)'
                .'|/utilisateur\\-([^/\\.]++)\\.html(*:454)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:493)'
                    .'|wdt/([^/]++)(*:513)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:559)'
                            .'|router(*:573)'
                            .'|exception(?'
                                .'|(*:593)'
                                .'|\\.css(*:606)'
                            .')'
                        .')'
                        .'|(*:616)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        54 => [[['_route' => 'unavailability_as_organiser', '_controller' => 'App\\Controller\\DashboardController::showUnavailabilitiesAsOrganiser'], ['page'], null, null, false, true, null]],
        75 => [[['_route' => 'unavailability_as_guest', '_controller' => 'App\\Controller\\DashboardController::showUnavailabilitiesAsGuest'], ['page'], null, null, false, true, null]],
        110 => [[['_route' => 'room_show', '_controller' => 'App\\Controller\\RoomController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        156 => [[['_route' => 'unavailability_delete', '_controller' => 'App\\Controller\\UnavailabilityController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        210 => [[['_route' => 'room_edit', '_controller' => 'App\\Controller\\RoomController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        247 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        292 => [[['_route' => 'room_delete', '_controller' => 'App\\Controller\\RoomController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        329 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        369 => [[['_route' => 'unavailability_show', '_controller' => 'App\\Controller\\UnavailabilityController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        416 => [[['_route' => 'unavailability_edit', '_controller' => 'App\\Controller\\UnavailabilityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        454 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        493 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        513 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        559 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        573 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        593 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        606 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        616 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
