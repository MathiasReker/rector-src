<?php

declare(strict_types=1);

namespace Rector\Tests\Php74\Rector\Property\TypedPropertyRector\Source;

abstract class FillerAbstract
{
    final public function process(AnotherClass $anotherClass)
    {
        $this->property = $anotherClass;
    }
}
