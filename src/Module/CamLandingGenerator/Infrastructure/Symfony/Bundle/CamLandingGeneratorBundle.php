<?php

declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Infrastructure\Symfony\Bundle;

use WebCamScrapper\Module\CamLandingGenerator\Infrastructure\Symfony\DependencyInjection\CamLandingGeneratorExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class CamLandingGeneratorBundle extends Bundle
{
    protected function getContainerExtensionClass()
    {
        return CamLandingGeneratorExtension::class;
    }
}
