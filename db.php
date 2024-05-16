<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Bed.php';

// products
$bed = new Bed('Bed', 29.99, 'https://www.petfoodnmore.com/wp-content/uploads/Midwest/Bed/Taupe-cuddle-bed-medium-lg-1024x1024.png', $dog, 'XL');
$ball = new Game('Beach Balls', 2.99, 'https://www.petfoodnmore.com/wp-content/uploads/2023/08/80531____NCLCAT.jpg', $cat);
$harness = new Accessory('Harness Blue', 21.99, 'https://www.petfoodnmore.com/wp-content/uploads/2024/03/16383____BLLPXS.jpg', $cats_dogs);
$tuna_dinner = new Food('Tuna Dinner', 1.99, 'https://www.petfoodnmore.com/wp-content/uploads/2021/12/snappy-tom-lites-tuna-cat-wet-food.png', $cat, 85, 'Tuna');

$products = [
    $bed,
    $ball,
    $harness,
    $tuna_dinner,
];

// categories
$cat = new Category('Cat', 'https://img.icons8.com/fluency/48/cat.png');
$dog = new Category('Dog', 'https://img.icons8.com/fluency/48/dog.png');
$cats_dogs = new Category('Cats and Dogs', 'https://img.icons8.com/ios/50/pets--v1.png');
