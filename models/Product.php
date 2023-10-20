<?php

class Product
{

    public $product_name;

    public $product_price;

    public $product_discount;

    public $product_description;

    public $product_icon;

    public $product_img;

    public $product_brand;
    
    public $product_review;

   








    public function __construct($product_name, $product_price, $product_discount, $product_description, $product_icon, $product_img, $product_brand, $product_review)
    {
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->product_discount = $product_discount;
        $this->product_discount = $product_description;
        $this->product_discount = $product_icon;
        $this->product_discount = $product_img;
        $this->product_discount = $product_brand;
        $this->product_discount = $product_review;
        

    }

   
}