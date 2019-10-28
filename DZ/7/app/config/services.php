<?php

use Command\CreateUserCommand;

$container->register('create-user', CreateUserCommand::class)
    ->setPublic(false)
    ->addTag('console.command');