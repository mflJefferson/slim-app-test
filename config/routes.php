<?php
declare(strict_types=1);

use App\Controller\Base\IndexController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->group('/', function (Group $group) {
        $group->get('', IndexController::class . ':index');
        $group->get('twig', IndexController::class . ':index2');
    });
};
