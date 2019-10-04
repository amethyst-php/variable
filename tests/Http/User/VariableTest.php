<?php

namespace Amethyst\Tests\Http\User;

use Amethyst\Api\Support\Testing\TestableBaseTrait;
use Amethyst\Fakers\VariableFaker;
use Amethyst\Tests\BaseTest;

class VariableTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = VariableFaker::class;

    /**
     * Router group resource.
     *
     * @var string
     */
    protected $group = 'user';

    /**
     * Route name.
     *
     * @var string
     */
    protected $route = 'user.variable';
}
