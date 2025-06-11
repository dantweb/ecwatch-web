<?php

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


    protected function configureContainer(ContainerBuilder $c, LoaderInterface $loader): void
    {
        $conf = $this->getConfigDir();
        // load your packages (if any)
        $loader->load($conf . '/packages/*.yaml', 'glob');
        // load main services
        $loader->load($conf . '/services.yaml', 'yaml');
        // load environment‑specific overrides (for `test` loads services_test.yaml)
        $loader->load($conf . '/services_' . $this->environment . '.yaml', 'yaml');
    }
}
