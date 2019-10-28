<?php

namespace Communication;

use Model\Entity\User;

/**
 * Этот Конкретный Декоратор отправляет сообщение в телеграмм
 */
class TelegramDecorator extends BaseDecorator
{
    public function send(User $user, string $title, string $message): void
    {
      parent::send($user, $title, $message);
      
      // Вызываем метод по формированию сообщения для телеграма и последующего его отправления
    }
}
