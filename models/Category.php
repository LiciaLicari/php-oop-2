<?php

class Category
{
    public $category;

    public function __construct($category)
    {
        $this->category = $category;
    }



    /**
     * Get the icon of the animals
     */
    public function getCategoryIcon()
    {
        if ($this->category === 'Cani' or $this->category === 'cani') {
            return 'Cani' . '<img style="width: 30px;" src="./icns/dog.png" alt="">';
        } elseif ($this->category === 'Gatti' or $this->category === 'gatti') {
            return 'Gatti' . '<img style="width: 30px;" src="./icns/cat.png" alt="">';
        }
    }
}
