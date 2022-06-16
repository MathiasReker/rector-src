<?php

declare(strict_types=1);

namespace Rector\Tests\Php71\Rector\FuncCall\RemoveExtraParametersRector\Source;

final class MethodWithFuncGetArgs
{
    public static function call($me): void
    {
        $us = func_get_args();
    }

    public static function betterCall($me): void
    {
        $us = better_func_get_args();
    }
}

function better_func_get_args()
{
    return 5;
}
