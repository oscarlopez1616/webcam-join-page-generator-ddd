<?php

declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Infrastructure\Symfony\Bundle;

use AuditorFramework\Module\CamLandingGenerator\Infrastructure\Symfony\DependencyInjection\CamLandingGeneratorExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class CamLandingGeneratorBundle extends Bundle
{
    protected function getContainerExtensionClass()
    {
        return CamLandingGeneratorExtension::class;
    }
}
