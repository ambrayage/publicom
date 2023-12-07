<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->get('/', 'Home::index', ['as' => 'page.connexion',]);
$routes->post('/connexion', 'LoginController::signIn', ['as' => 'connexion']);
$routes->get('/deconnexion', 'LoginController::signOut', ['as' => 'deconnexion']);

$routes->get('/visumessagepass','VisuMessageController::get_msg');

$routes->get('/ajout-utilisateur', 'UtilisateurController::view', ['as' => 'ajout.utilisateur'] );
$routes->post('/ajouter-utilisateur', 'UtilisateurController::ajouterUtilisateur', ['as' => 'ajouter.utilisateur']);

$routes->get('/visu', 'VisuMessageController::view', ['filter' => 'authGuard', 'as' => 'visualisation.message']);

$routes->get('/liste', 'MessageController::liste', ['filter' => 'authGuard','as' => 'liste.message']);
$routes->post('/supprimer-message', 'MessageController::supprimerMessage', ['as' => 'supprimer.message']);

$routes->get('/modifier-message', 'MessageController::modifierMessage', ['filter' => 'authGuard', 'as' => 'page.modifier']);
$routes->post('/modifier', 'MessageController::modifier', ['as' => 'modifier.message']);

$routes->get('/creation-message', 'MessageController::creationMessage', ['filter' => 'authGuard', 'as' => 'page.creation']);
$routes->post('/creation', 'MessageController::creation', ['as' => 'creation.message']);

$routes->get('/historique', 'MessageController::historique', ['filter' => 'authGuard', 'as' => 'historique.message']);