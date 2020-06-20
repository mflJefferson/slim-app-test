<?php
declare(strict_types=1);

use App\Skeleton\Application\Middleware\SessionMiddleware;
use Slim\App;

return function (App $app) {
    $app->add(SessionMiddleware::class);
};
