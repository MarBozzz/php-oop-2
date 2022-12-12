<?php

class Food extends Product
{
  public $weight;
  public $ingredients;
  public $taste;

  public function __construct(Category $_category, $_name, $_brand, $_model, $_id, $_price, $_isAvailable, $_image, $_weight, $_ingredients, $_taste)
  {
    parent::__construct($_category, $_name, $_brand, $_model, $_id, $_price, $_isAvailable, $_image);

    $this->weight = $_weight;
    $this->ingredients = $_ingredients;
    $this->taste = $_taste;
  }
}