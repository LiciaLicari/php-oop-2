<?php
class Food extends Product
{

    public $weight;
    public $kgPrice;

    public function __construct($product_name, $product_price, $product_discount, $product_description, $product_icon, $product_img, $product_brand, $product_review, $weight, $kgPrice)
    {
        parent::__construct($product_name, $product_price, $product_discount, $product_description, $product_icon, $product_img, $product_brand, $product_review);
        $this->weight = $weight;
        $this->kgPrice = $kgPrice;
    }


    public function getDetails()
    {
        return $this->weight . 'gr';
        return $this->kgPrice . ' /Kg';
    }
}
