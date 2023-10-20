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
        if ($this->category === 'Cane' or $this->category === 'cane') {
            return 'Cane' . '<img style="width: 30px;" src="./icns/dog.png" alt="">';
        } elseif ($this->category === 'Gatto' or $this->category === 'gatto') {
            return 'Gatto' . '<img style="width: 30px;" src="./icns/cat.png" alt="">';
        }
    }
}
