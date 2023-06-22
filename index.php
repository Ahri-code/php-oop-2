<?php 

require './models/products.php';
require './models/animal.php';

$catFood = new Filter("Iams", "Dry food for cat", "15.00 €", "./img/catFood.jpg", "cat", "food");

$dogToy = new Filter("Petface Honking Duck", "Toy for dog", "16,00 €", "./img/dogToy.jpg", "dog", "toy");

$catToy = new Filter("Sound-Mouse Cat Toy", "Toy for cat", "2.50 €", "./img/catToy.jpg", "cat", "toy");

$products = [$catFood, $dogToy, $catToy];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>
                Shop
            </h1>
        </header>
    
        <main>
            <div class="card">
            <?php foreach($products as $element){ ?>
                <div>
                    <img src="<?= $element->image; ?>" class="image">
                    <h3><?= $element->name; ?></h3>
                    <p><?= $element->description; ?></p>
                    <p><?= $element->price; ?></p>
                </div>  
            <?php } ?>
            </div>
        </main>
    </div>

</body>
</html>