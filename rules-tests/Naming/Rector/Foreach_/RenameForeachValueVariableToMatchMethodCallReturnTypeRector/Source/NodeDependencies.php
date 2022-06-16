<?php

declare(strict_types=1);

namespace Rector\Tests\Naming\Rector\Foreach_\RenameForeachValueVariableToMatchMethodCallReturnTypeRector\Source;

use IteratorAggregate;

/**
 * @implements \IteratorAggregate<int, ReflectionWithFilename>
 */
class NodeDependencies implements IteratorAggregate
{

    public function getIterator(): void
    {
        // TODO: Implement getIterator() method.
    }
}
