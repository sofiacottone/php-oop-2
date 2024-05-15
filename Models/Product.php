<?php
class Product
{
    public $title;
    private $price;
    public $image;
    public $categories;
    public $type;

    public function __construct($_title, $_price, $_image, $_type)
    {
        $this->title = $_title;
        $this->price = $_price;
        $this->image = $_image;
        $this->type = $_type;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
