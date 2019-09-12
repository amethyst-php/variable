<?php

namespace Amethyst\Schemas;

use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class VariableSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('key')
                ->setRequired(true),
            Attributes\TextAttribute::make('value')
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
