<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class VariableAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'variable.create',
        Tokens::PERMISSION_UPDATE => 'variable.update',
        Tokens::PERMISSION_SHOW   => 'variable.show',
        Tokens::PERMISSION_REMOVE => 'variable.remove',
    ];
}
