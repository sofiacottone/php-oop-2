<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Color.php';

class Accessory extends Product
{
    use Color;
}
