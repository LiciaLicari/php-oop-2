<?php
class Toy extends Product
{

    public $material;

    public function __construct($product_name, $product_price, $product_discount, $product_description, $product_icon, $product_img, $material, $product_brand, $product_review)
    {
        parent::__construct($product_name, $product_price, $product_discount, $product_description, $product_icon, $product_img, $product_brand, $product_review);
        $this->material = $material;
    }

    public function getDetails()
    {
        return 'Materiale: ' . $this->material;
    }
}
