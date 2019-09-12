<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\VariableFaker;
use Amethyst\Managers\VariableManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class VariableTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = VariableManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = VariableFaker::class;
}
