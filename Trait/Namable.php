<?php

trait Namable
{


    public function getName(): string
    {
        return $this->product_name;
    }

    public function getPrice(): string
    {
        return $this->product_price;
    }
}
