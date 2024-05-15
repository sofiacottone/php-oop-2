<?php
// cat or dog
class Category
{
    public $name;
    public $icon;

    public function __construct($_name, $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }
}
