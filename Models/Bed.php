<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Color.php';

class Bed extends Product
{
    use Color;

    public $size;

    public function __construct($_title, $_price, $_image, $_size, $_categories)
    {
        parent::__construct($_title, $_price, $_image, $_categories);
        $this->size = $_size;
    }
}
