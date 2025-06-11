<?php

declare(strict_types=1);

namespace Dantweb\EcwServer\Framework\Application;


use Dantweb\EcwServer\Config\Defaults;

class PluginManager extends \Dantweb\Ecommwatch\Framework\Application\PluginManager
{
    public function __construct()
    {
        parent::__construct(Defaults::ECW_APP_CONFIG_PATH);
    }
}