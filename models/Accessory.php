<?php

class Accessory extends Product
{
  public $material;
  public $size;

  public function __construct(Category $_category, $_name, $_brand, $_model, $_id, $_price, $_isAvailable, $_image, $_material, $_size)
  {
    parent::__construct($_category, $_name, $_brand, $_model, $_id, $_price, $_isAvailable, $_image);

    $this->material = $_material;
    $this->size = $_size;
  }
}
