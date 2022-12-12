<?php

class Toy extends Product
{
  public $feature;
  public $size;

  public function __construct(Category $_category, $_name, $_brand, $_model, $_id, $_price, $_isAvailable, $_image, $_feature, $_size)
  {
    parent::__construct($_category, $_name, $_brand, $_model, $_id, $_price, $_isAvailable, $_image);

    $this->feature = $_feature;
    $this->size = $_size;
  }
}