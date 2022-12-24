<?php

class ProductModel extends ProductContr
{
    private $sku;
    private $name;
    private $price;
    private $type;
    private $typeValue;

    public function __construct($sku, $name, $price, $type, $typeValue)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->typeValue = $typeValue;
    }


    public function productAdd()
    {
        $this->setProducts($this->sku, $this->name, $this->price, $this->type, $this->typeValue);
    }
}
