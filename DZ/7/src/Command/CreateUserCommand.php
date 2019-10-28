<?php

namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateUserCommand extends Command
{
    protected function configure()
    {
        $this
            // имя команды (часть после "bin/console")
            ->setName('create-user')

            // краткое описание, отображающееся при запуске "php bin/console list"
            ->setDescription('Creates a new user.')

            // полное описание команды, отображающееся при запуске команды
            // с опцией "--help"
            ->setHelp('This command allows you to create a user...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // здесь должна быть логика создания пользователя
        $output->writeln('Пользователь создан успешно!');
    }
}