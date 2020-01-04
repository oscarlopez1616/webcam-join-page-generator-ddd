<?php

declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Infrastructure\Symfony\DependencyInjection;

use Exception;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Config\Loader\DelegatingLoader;
use Symfony\Component\Config\Loader\LoaderResolver;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\GlobFileLoader;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class CamLandingGeneratorExtension extends Extension
{
    /**
     * @param array $configs
     * @param ContainerBuilder $container
     * @throws Exception
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $locator = new FileLocator(__DIR__.DIRECTORY_SEPARATOR.'Resources');
        $resolver = new LoaderResolver(
            [
                new YamlFileLoader($container, $locator),
                new GlobFileLoader($container, $locator),
            ]
        );

        $loader = new DelegatingLoader($resolver);
        $this->loadServiceConfigurations($loader, $container->getParameter('kernel.environment'));
    }

    /**
     * @param DelegatingLoader $loader
     * @param string $environment
     *
     * @throws Exception
     */
    private function loadServiceConfigurations(DelegatingLoader $loader, string $environment): void
    {
        $loader->load('{cams_landing_generator_extension}.yaml', 'glob');
        $loader->load('{cams_landing_generator_extension}_'.$environment.'.yaml', 'glob');
    }
}
