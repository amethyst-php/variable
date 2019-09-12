<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\VariablesController::class,
    'router'     => [
        'as'     => 'variable.',
        'prefix' => '/variables',
    ],
];
