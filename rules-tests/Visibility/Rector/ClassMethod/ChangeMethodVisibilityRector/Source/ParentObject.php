<?php

declare(strict_types=1);

namespace Rector\Tests\Visibility\Rector\ClassMethod\ChangeMethodVisibilityRector\Source;

class ParentObject
{
    private function toBePublicMethod(): void {

    }

    static function toBePublicStaticMethod(): void {

    }

    protected function toBeProtectedMethod(): void {

    }
    private function toBePrivateMethod(): void {

    }
}
