<?php

declare(strict_types=1);

namespace Dantweb\EcwServer\Framework\Service;

use Dantweb\EcwServer\Config\Defaults;

class ModelResolver extends \Dantweb\Ecommwatch\Framework\Service\ModelResolver
{
    protected static string $configPath = Defaults::ECW_APP_CONFIG_PATH;
}
