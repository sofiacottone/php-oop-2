<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, 
come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->
<?php
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';

// var_dump($products);
// var_dump($cat);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Animals E-commerce</title>
</head>

<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <div class="hstack gap-2">
                    <img width="50" height="50" src="https://img.icons8.com/ios/50/pets--v1.png" alt="pets--v1" />
                    <h2 class="mb-0">Pet food <small>& more</small></h2>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="card-group gap-3 my-5">
                <?php foreach ($products as $product) { ?>
                    <?php $className = get_class($product); ?>
                    <div class="card rounded shadow border" role="button">
                        <img src="<?php echo $product->image ?>" class="card-img-top rounded" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->title ?></h5>
                            <div class="card-text text-success"><?php echo $product->getPrice() ?> <?php echo '€' ?></div>
                            <?php if (isset($product->size)) { ?>
                                <div><?php echo $product->size; ?></div>
                            <?php } ?>
                            <?php if (isset($product->weight)) { ?>
                                <div><?php echo $product->weight; ?><?php echo 'g' ?></div>
                            <?php } ?>
                            <?php if (isset($product->ingredients)) { ?>
                                <div>Ingredients: <?php echo $product->ingredients; ?></div>
                            <?php } ?>
                            <?php if (isset($product->color)) { ?>
                                <div>Color: <?php echo $product->color; ?></div>
                            <?php } ?>
                        </div>
                        <div class="card-footer">
                            <div class="hstack justify-content-between">
                                <?php echo $className; ?>
                                <img src="<?php echo $product->categories->icon ?>" alt="<?php echo $product->categories->name ?>">

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>