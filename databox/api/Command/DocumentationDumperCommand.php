<?php
declare(strict_types=1);

namespace App\Command;

use Symfony\Component\Filesystem\Path;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'app:documentation:dump')]
class DocumentationDumperCommand extends Command
{
    public function __invoke(): int
    {
        echo "Generating Markdown files\n";

        $filesystem = new Filesystem();

        $source = Path::join(__DIR__, '../_preGeneratedDoc');
        $destination = Path::join(__DIR__, '../doc');


        $filesystem->copy("$source/Databox-api_dynamic.md", "$destination/Databox-api_dynamic.md", true);
        $filesystem->mirror("$source/Databox/Api/", "$destination/Databox/Api/");
        $filesystem->mirror("$source/Databox/Attributes/", "$destination/Databox/Attributes/");
        $filesystem->mirror("$source/Databox/Renditions/", "$destination/Databox/Renditions/");

        file_put_contents(Path::join($destination, 'STAMP.md'), date(DATE_ATOM));

        return Command::SUCCESS;
    }

}
