<?php

class Product
{
  public $category;
  public $name;
  public $brand;
  public $model;
  public $id;
  public $price;
  public $isAvailable = true;
  public $image;

  public function __construct(Category $_category, $_name, $_brand, $_model, $_id, $_price, $_isAvailable, $_image)
  {
    $this->category = $_category;
    $this->name = $_name;
    $this->brand = $_brand;
    $this->model = $_model;
    $this->id = $_id;
    $this->price = $_price;
    $this->isAvailable = $_isAvailable;
    $this->image = $_image;
  }
}