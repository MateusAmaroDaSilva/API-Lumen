<?php

require_once __DIR__.'/../vendor/autoload.php';

(new Laravel\Lumen\Bootstrap\LoadEnvironmentVariables(
    dirname(__DIR__)
))->bootstrap();

date_default_timezone_set(env('APP_TIMEZONE', 'UTC'));

$app = new Laravel\Lumen\Application(
    dirname(__DIR__)
);

$app->withFacades();
$app->withEloquent();

// Carregar arquivos de configuração
$app->configure('app');
$app->configure('database');
$app->configure('queue');

// Registrar o exception handler e o kernel de console
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);
$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

// Middleware global (roda em todas as requisições)
$app->middleware([
    App\Http\Middleware\CorsMiddleware::class,
    App\Http\Middleware\JsonBodyMiddleware::class,
]);

// Registrar service providers
$app->register(App\Providers\RepositoryServiceProvider::class);
$app->register(Illuminate\Queue\QueueServiceProvider::class);
$app->register(Illuminate\Mail\MailServiceProvider::class);

$app->configure('mail');

// Registrar as rotas
$app->router->group([
    'namespace' => 'App\Http\Controllers',
], function ($router) {
    require __DIR__.'/../routes/web.php';
});

return $app;
