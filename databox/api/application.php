<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use App\Command\DocumentationDumperCommand;
use Symfony\Component\Console\Application;

$application = new Application();

// ... register commands

$application->add(new DocumentationDumperCommand());

$application->run();
