<?php

declare(strict_types = 1);

namespace Communication;

use Model\Entity\User;

/**
 * Интерфейс Компонента объявляет метод отправки оповещений, который должен быть
 * реализован всеми конкретными компонентами и декораторами.
 */
interface ICommunication
{
    /**
     * Точка входа по формированию и отправке сообщения пользователю
     */
    public function send(User $user, string $title, string $message): void;
}
