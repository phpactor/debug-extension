<?php

namespace Phpactor\Extension\Debug\Command;

use Phpactor\Extension\Debug\Model\ConfigInitializer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class InitConfigCommand extends Command
{
    /**
     * @var ConfigInitializer
     */
    private $initializer;

    public function __construct(ConfigInitializer $initializer)
    {
        parent::__construct();
        $this->initializer = $initializer;
    }

    protected function configure(): void
    {
        $this->setDescription('Iniitalize Phpactor configuration file or update the location of hte JSON schema');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->initializer->initialize();
        return 0;
    }
}
