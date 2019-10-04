<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\User\VariablesController::class,
    'router'     => [
        'as'     => 'variable.',
        'prefix' => '/variables',
    ],
];
