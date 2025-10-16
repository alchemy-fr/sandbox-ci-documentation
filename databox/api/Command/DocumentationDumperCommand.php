<?php
declare(strict_types=1);

namespace App\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Path;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'app:documentation:dump')]
class DocumentationDumperCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln("Generating databox-api/doc dynamic files");

        $filesystem = new Filesystem();

        $source = Path::join(__DIR__, '../_preGeneratedDoc');
        $destination = Path::join(__DIR__, '../doc');
        $filesystem->mirror("$source/", "$destination/");
        $output->writeln("databox-api/doc dynamic files generated");

        return Command::SUCCESS;
    }
}
