<?php

declare(strict_types=1);

namespace Rector\Tests\TypeDeclaration\Rector\ClassMethod\AddArrayReturnDocTypeRector\Source\Bundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;

final class SecondBundle implements BundleInterface
{

    public function boot(): void
    {

    }

    public function shutdown(): void
    {

    }

    public function build(ContainerBuilder $container): void
    {

    }

    public function getContainerExtension(): void
    {

    }

    public function getName(): void
    {

    }

    public function getNamespace(): void
    {

    }

    public function getPath(): void
    {

    }

    public function setContainer(ContainerInterface $container = null): void
    {

    }
}
