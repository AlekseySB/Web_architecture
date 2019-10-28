<?php

namespace Service\Discount;

class Discount
{
  /**
   * @var IDiscount
   */
  private $discount;

  public function setDiscount(IDiscount $discount)
  {
      $this->discount = $discount;
  }

  /**
   * Получаем скидку в процентах
   *
   * @return float
   */
  public function getDiscount()
  {
    return $this->discount->getDiscount();
  }

}