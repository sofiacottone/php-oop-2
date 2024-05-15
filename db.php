<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';

// products
$bed = new Product('Bed', 29.99, 'https://www.petfoodnmore.com/wp-content/uploads/Midwest/Bed/Taupe-cuddle-bed-medium-lg-1024x1024.png', 'Beds');
$ball = new Product('Beach Balls', 2.99, 'https://www.petfoodnmore.com/wp-content/uploads/2023/08/80531____NCLCAT.jpg', 'Toys');
$harness = new Product('Harness Blue', 21.99, 'https://www.petfoodnmore.com/wp-content/uploads/2024/03/16383____BLLPXS.jpg', 'Accessories');
$tuna_dinner = new Product('Tuna Dinner', 1.99, 'https://www.petfoodnmore.com/wp-content/uploads/2021/12/snappy-tom-lites-tuna-cat-wet-food.png', 'Food');

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
