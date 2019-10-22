<?php

declare (strict_types = 1);

namespace Service\Order;

use Service\Billing\IBilling;
use Service\Communication\ICommunication;
use Service\Discount\IDiscount;
use Service\User\ISecurity;
use Model\Entity\Product;

class Checkout
{
  /**
   * @var Product
   */
  private $products;

  /**
   * @var IBilling
   */
  private $billing;

  /**
   * @var IDiscount
   */
  private $discount;

  /**
   * @var ICommunication
   */
  private $communication;

  /**
   * @var ISecurity
   */
  private $security;

  public function __construct(BasketBuilder $builder)
  {
    $this->products = $builder->getProducts();
    $this->billing = $builder->getBilling();
    $this->discount = $builder->getDiscount();
    $this->communication = $builder->getCommunication();
    $this->security = $builder->getSecurity();
  }

  /**
   * Проведение всех этапов заказа
   *
   * @return void
   */
  public function checkoutProcess(): void
  {
    $totalPrice = 0;

    foreach ($this->products as $product) {
      $totalPrice += $product->getPrice();
    }

    $discount = $this->discount->getDiscount();
    $totalPrice = $totalPrice - $totalPrice / 100 * $discount;

    $this->billing->pay($totalPrice);

    $user = $this->security->getUser();
    $this->communication->process($user, 'checkout_template');
  }
}