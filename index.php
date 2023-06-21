<?php 

require './models/products.php';
require './models/animal.php';
require './models/filter.php';

$test = new Product();

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
            <p><?= $test->name ?></p>
            <p><?= $test->description ?></p>
            <p><?= $test->price ?></p>
            <p><?= $test->image ?></p>
        </main>
    </div>

</body>
</html>