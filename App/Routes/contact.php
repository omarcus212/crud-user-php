<?php

use App\Controller\ControllerUser;
use function src\settings;


$app = new \Slim\App(settings());


$app->group('/api/crud/contacts', function () use ($app) {

    $app->get('/users', ControllerUser::class . ':getUser');
    $app->get('/users/{id}', ControllerUser::class . ':getUserId');
    $app->post('/users', ControllerUser::class . ':createUser');
    $app->put('/users/{id}', ControllerUser::class . ':updateUser');
    $app->delete('/users/{id}', ControllerUser::class . ':deleteUser');

});


//testes

$app->run();



?>