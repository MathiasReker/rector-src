<?php

declare(strict_types=1);

namespace Rector\Tests\Privatization\Rector\Property\PrivatizeFinalClassPropertyRector\Source;

abstract class AbstractClassWithProtectedProperty
{
    /**
     * @var int
     */
    protected $value = 1000;

    public function run(): void
    {
        static::$valueStatic = 1000;
    }

    public function run2(): void
    {
        self::$valueStatic2 = 1000;
    }

    public function run3(): void
    {
        \Rector\Tests\Privatization\Rector\Property\PrivatizeFinalClassPropertyRector\Fixture\KeepParentStaticProtectedUsedByParent::$valueStatic3 = 1000;
    }
}
