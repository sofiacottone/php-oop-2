<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $weight;
    public $ingredients;

    public function __construct($_title, $_price, $_image, $_categories, $_weight, $_ingredients)
    {
        parent::__construct($_title, $_price, $_image, $_categories);
        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
    }
}
