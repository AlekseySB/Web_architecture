<?php

use Model\Entity\User;
use Communication\Notifier;
use Communication\ICommunication;
use Communication\TelegramDecorator;
use Communication\SmsDecorator;
use Model\Entity\Role;


function sendNotifications(ICommunication $communication, User $user, string $title, string $message)
{
    // ..

    $communication->send($user, $title, $message);

    // ..
}


// Декоратор позволяет складывать несколько входных форматов для получения точного контроля над отображаемым содержимым.

$role = new Role(1, 'title', 'type');
$user = new User(1, 'Name', 'Login', 'Pass', $role);
$title = 'Welcome';
$message = <<<HERE
# Welcome.
Good afternoon.
It's a pleasure to meet you.
HERE;


// Сборка
$communication = new Notifier;
$communication = new TelegramDecorator($communication);
$communication = new SmsDecorator($communication);

// Отправка Email + Telegram + SMS
sendNotifications($communication, $user, $title, $message);
