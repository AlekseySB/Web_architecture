<?php

namespace Communication;

use Model\Entity\User;


class BaseDecorator implements ICommunication
{
  /**
   * @var ICommunication
   */
  protected $communication;

  public function __construct(ICommunication $communication)
  {
    $this->communication = $communication;
  }

  /**
   * Декоратор делегирует всю работу обёрнутому компоненту.
   */
  public function send(User $user, string $title, string $message): void
  {
    $this->communication->send($user, $title, $message);
  }
}
