<?php

declare(strict_types=1);

namespace Dantweb\EcwServer\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class InstallServer extends Command
{
    protected function configure(): void
    {
        $this->setName('ecw:install');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Installation command placeholder');
        return Command::SUCCESS;
    }
}
