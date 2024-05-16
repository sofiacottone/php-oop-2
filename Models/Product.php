<?php
class Product
{
    public $title;
    private $price;
    public $image;
    public $categories;

    public function __construct($_title, $_price, $_image, Category $_categories)
    {
        $this->title = $_title;
        $this->price = $_price;
        $this->image = $_image;
        $this->categories = $_categories;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
