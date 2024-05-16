<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $weight;
    public $ingredients;

    public function __construct($_title, $_price, $_image, $_weight, $_ingredients)
    {
        parent::__construct($_title, $_price, $_image,);
        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
    }
}
