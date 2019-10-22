<?php

declare (strict_types = 1);

namespace Model\Entity;

class Product
{
  /**
   * @var int
   */
  private $id;

  /**
   * @var string
   */
  private $name;

  /**
   * @var float
   */
  private $price;

  public function __construct(/*int $id, string $name, float $price*/)
  {
    // $this->id = $id;
    // $this->name = $name;
    // $this->price = $price;
  }

  /**
   * @return int
   */
  public function getId(): int
  {
    return $this->id;
  }

  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @return float
   */
  public function getPrice(): float
  {
    return $this->price;
  }

/**
   * @return Product
   */
  public function setId($id): Product
  {
    $this->id = $id;
    return $this;
  }

  /**
   * @return Product
   */
  public function setName($name): Product
  {
    $this->name = $name;
    return $this;
  }

  /**
   * @return Product
   */
  public function setPrice($price): Product
  {
    $this->price = $price;
    return $this;
  }

  /**
   * @return array
   */
  public function toArray(): array
  {
    return [
      'id' => $this->id,
      'name' => $this->name,
      'price' => $this->price,
    ];
  }
}
