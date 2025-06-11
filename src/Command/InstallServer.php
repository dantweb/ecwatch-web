<?php

namespace Dantweb\EcwServer\Command;

use Symfony\Component\Console\Command\Command;

class InstallServer extends Command
{
    protected function configure(): void
    {
        $this->setName('ecw:install');
    }
}