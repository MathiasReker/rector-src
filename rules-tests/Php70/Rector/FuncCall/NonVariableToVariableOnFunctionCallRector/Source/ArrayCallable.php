<?php

declare(strict_types=1);

namespace Rector\Tests\Php70\Rector\FuncCall\NonVariableToVariableOnFunctionCallRector\Source;

final class ArrayCallable
{
    public static function someStaticMethod(&$bar): void
    {
    }

    public function someMethod(&$bar): void
    {
    }
}
