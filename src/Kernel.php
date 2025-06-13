<?php

declare(strict_types=1);

namespace Dantweb\EcwServer;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    public function boot(): void
    {
        parent::boot();
        date_default_timezone_set('UTC');
    }

    protected function configureContainer(ContainerBuilder $container, LoaderInterface $loader): void
    {
        $configDir = $this->getConfigDir();
        $loader->load($configDir . '/packages/*.yaml', 'glob');
        $loader->load($configDir . '/services.yaml', 'yaml');
        $loader->load($configDir . '/services_' . $this->environment . '.yaml', 'yaml');
    }
}
