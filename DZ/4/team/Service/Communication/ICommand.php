<?php

namespace Service\Communication;

interface ICommand
{
  public function execute(): void;
  public function redo(): void;
}
