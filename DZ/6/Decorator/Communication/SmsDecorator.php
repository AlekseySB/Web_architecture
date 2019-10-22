<?php

namespace Communication;

use Model\Entity\User;

/**
 * Этот Конкретный Декоратор отправляет SMS
 */
class SmsDecorator extends BaseDecorator
{
    public function send(User $user, string $title, string $message): void
    {
        parent::send($user, $title, $message);
        // Вызываем метод по формированию смс текста и последующего его отправления
    }
}
