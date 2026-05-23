<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return response()->json(['app' => 'Sistema de Ingressos', 'version' => $router->app->version()]);
});

$router->group(['prefix' => 'v1'], function () use ($router) {

    // Contexto: Eventos
    $router->group(['prefix' => 'events'], function () use ($router) {
        $router->get('/',      ['uses' => 'Api\V1\EventController@index']);
        $router->post('/',     ['uses' => 'Api\V1\EventController@store']);
        $router->get('/{id}', ['uses' => 'Api\V1\EventController@show']);
    });

    // Contexto: Vendas
    $router->group(['prefix' => 'tickets'], function () use ($router) {
        $router->post('/buy', ['uses' => 'Api\V1\TicketController@buy']);
        $router->get('/',     ['uses' => 'Api\V1\TicketController@index']);
    });
});
