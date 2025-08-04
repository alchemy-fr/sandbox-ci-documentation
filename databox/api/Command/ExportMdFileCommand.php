<?php

namespace App\Command;

use Symfony\Component\Filesystem\Path;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'app:export-md')]
class ExportMdFileCommand extends Command
{
    public function __invoke(): int
    {
        echo "Generating Markdown file\n";

        $filesystem = new Filesystem();

        $destination = Path::join(__DIR__, '../../../doc/generatedDoc');
        $filesystem->mkdir($destination);

        $filesystem->mirror(Path::join(__DIR__, '../mdFile'), $destination);

        return Command::SUCCESS;
    }

}
