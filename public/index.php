<?php

require  '../vendor/autoload.php';
use App\Router;

//INITIALISATION DE WHOOPS
$whoops = new \Whoops\Run;
$whoops ->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops ->register();


//DEFINITION DU LIEN VERS LE REPERTOIRE PRINCIPALE
define('view',dirname(__DIR__).'/views');


//INSTANCIATION DE LA CLASSE Router
$router = new Router(view);


//ROUTES
$router ->get('/','/index','acceuil')
        ->get('/realisations','/realisations','realisation')
        ->get('/contact','/contact','contact')
        ->run()


;
