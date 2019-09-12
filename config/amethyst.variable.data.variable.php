<?php

return [
    'table'      => 'amethyst_variables',
    'comment'    => 'Variable',
    'model'      => Amethyst\Models\Variable::class,
    'schema'     => Amethyst\Schemas\VariableSchema::class,
    'repository' => Amethyst\Repositories\VariableRepository::class,
    'serializer' => Amethyst\Serializers\VariableSerializer::class,
    'validator'  => Amethyst\Validators\VariableValidator::class,
    'authorizer' => Amethyst\Authorizers\VariableAuthorizer::class,
    'faker'      => Amethyst\Fakers\VariableFaker::class,
    'manager'    => Amethyst\Managers\VariableManager::class,
];
