<?php

namespace Service\Communication;

class RemoteControl
{
  public function submit(ICommand $command)
  {
    $command->execute();
  }
}
