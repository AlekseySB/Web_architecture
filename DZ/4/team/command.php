<?php
use Service\Communication\Sms;
use Service\Communication\Distributor;
use Service\Communication\Email;
use Service\Communication\RemoteControl;

function test()
{
  $smsSender = new Sms();
  $smsDistributor = new Distributor($smsSender);

  $emailSender = new Email();
  $emailDistributor = new Distributor($emailSender);

  $remote = new RemoteControl();
  $remote->submit($smsDistributor);
  $remote->submit($emailDistributor);
}

/*
Отправку Email и Sms я переделал на "команду", т. к. так удобнее следить
за статусами отправленных сообщений.
*/