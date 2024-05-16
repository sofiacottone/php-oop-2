<?php
require_once __DIR__ . '/Product.php';

class Bed extends Product
{
    public $size;

    public function __construct($_title, $_price, $_image, $_size, $_categories)
    {
        parent::__construct($_title, $_price, $_image, $_categories);
        $this->size = $_size;
    }
}
