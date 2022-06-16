<?php

declare(strict_types=1);

namespace Rector\Tests\Php74\Rector\Property\TypedPropertyRector\Source;

use stdClass;

trait FillerTrait
{
    public function process(stdClass $stdClass): void
    {
        $this->property = $stdClass;
    }

    public function process2(stdClass $stdClass): void
    {
        self::$someStaticProperty = $stdClass;
    }
}
