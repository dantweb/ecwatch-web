<?php
declare(strict_types=1);

namespace Dantweb\EcwServer;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    public function boot(): void
    {
        parent::boot();
        date_default_timezone_set('UTC');
    }

    /**
     * Returns the project directory.
     */
    public function getProjectDir(): string
    {
        return __DIR__ . '/..';
    }

    /**
     * Configures the container using Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator.
     */
    protected function configureContainer(ContainerConfigurator $container): void
    {
        $configDir = $this->getProjectDir() . '/config';
        $container->import($configDir . '/packages/*.yaml');
        $container->import($configDir . '/services.yaml');
        $container->import($configDir . '/services_' . $this->environment . '.yaml');
    }
}
