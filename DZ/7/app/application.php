<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Command\CreateUserCommand;

$application = new Application();

// регистрация команд

$application->run();

$application->add(new CreateUserCommand());