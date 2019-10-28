<?php

use Service\Discount\Discount;
use Service\Discount\PromoCode;

$discount = new Discount();

try{
    $discount->setDiscount(new PromoCode('0000'));
    $discountPercent = $discount->getDiscount();
}
catch (Exception $e){
    // do smth on exception
}

/*
Установку скидок я переделал на "стратегию", т. к. скидки всегда будут разными
и необходимо будет выбирать тип скидки в зависимости от ситуации.
*/