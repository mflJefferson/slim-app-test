<?php

use SlimSession\Helper;

return [

    'view' => DI\factory(function () {
        $v = \Slim\Views\Twig::create(__DIR__ . '/../app/View/', [
            'cache' => false,
            'globals' => [
                'ab' => 'UA1',
            ]
        ]);
        $v->getEnvironment()->addGlobal('session', new Helper());
        return $v;
    }),

];
