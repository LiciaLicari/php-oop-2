<?php
class Kennel extends Product
{

    public $width;
    public $height;
    public $depth;
    public $color;

    public function __construct($product_name, $product_price, $product_discount, $product_description, $product_icon, $product_img, $product_brand, $product_review, $width, $height, $depth, $color)
    {
        parent::__construct($product_name, $product_price, $product_discount, $product_description, $product_icon, $product_img, $product_brand, $product_review);
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
        $this->color = $color;
    }

    /*    public function setdimension($dimension)
    {
        $this->dimension = $dimension;
    }

    */
    public function getDetails()
    {
        return $this->width . 'cm x ' . $this->height . 'cm x ' . $this->depth . ' cm';
    }
}