<?php

namespace Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class VariableFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('key', $faker->name);
        $bag->set('value', $faker->name);
        $bag->set('target_type', 'foo');
        $bag->set('target', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
