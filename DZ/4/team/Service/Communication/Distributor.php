<?php

namespace Service\Communication;

class Distributor implements ICommand
{
  private $sender;

  public function __construct(ICommunication $sender)
  {
    $this->sender = $sender;
  }

  public function execute(): void
  {
    $this->sender->send();
  }

  public function redo(): void
  {
    $this->execute();
  }
}