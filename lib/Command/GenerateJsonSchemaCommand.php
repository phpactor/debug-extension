<?php

namespace Phpactor\Extension\Debug\Command;

use Phpactor\Extension\Debug\Model\ExtensionDocumentor;
use Phpactor\Extension\Debug\Model\JsonSchemaBuilder;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateJsonSchemaCommand extends Command
{
    /**
     * @var JsonSchemaBuilder
     */
    private $builder;

    public function __construct(JsonSchemaBuilder $builder)
    {
        parent::__construct();
        $this->builder = $builder;
    }

    protected function configure(): void
    {
        $this->setDescription('Generate configuration reference as an RST document');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        fwrite(STDOUT, $this->builder->dump());
        return 0;
    }
}

