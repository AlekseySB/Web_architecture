<?php

namespace Communication;

use Model\Entity\User;

/**
 * Конкретный Компонент является основным элементом декорирования.
 * Отправляет Email
 */
class Notifier implements ICommunication
{
    public function send(User $user, string $title, string $message): void
    {
        // Вызываем метод по формированию тела письма и последующего его отправления
    }
}