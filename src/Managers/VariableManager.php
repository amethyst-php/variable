<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

class VariableManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.variable.data.variable';
}
