<?php

declare(strict_types=1);

namespace Rector\Tests\NodeTypeResolver\Source;

class AnotherClass
{
    public function getParameters(): void
    {
    }

    /**
     * @return static
     */
    public function callAndReturnSelf()
    {
    }
}
